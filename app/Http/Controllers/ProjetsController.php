<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjetRequest;
use App\Projet;
use App\DonsProjet;

class ProjetsController extends Controller


{ 

    public function show(){

        return view('admin.projet');
    }


    public function enregistrerprojet(ProjetRequest $request){

        $detail=$request->input('description');
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD |  LIBXML_NOERROR |  LIBXML_NOWARNING );
        $images = $dom->getelementsbytagname('img');
 
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/projets_ecritures'.'/'. $image_name;
          
            file_put_contents($path, $data);
        }
 
        $detail = $dom->savehtml();
      
    
        $projets= new Projet;
        $projets->titre=$request->titre;
        $projets->description= $detail;
        $image=$request->file('image');
       
        if($image->isValid()){
            $repertoire=public_path() .'/image_couv_proj';
            $extension =$image->getClientOriginalExtension();
            do {
				$nom = time() . '.' . $extension;
            } while(file_exists( $repertoire . '/' . $nom));

            $image->move( $repertoire, $nom);
        }
        $path_image='image_couv_proj' . '/' . $nom;
        $projets->image= $path_image;
        $projets->montant_goal=$request->montant_goal;
        $projets->save();
        
        return view('admin.projet',compact('projets'))->with('successMsg','Vous avez ajouté un nouveau projet');
    }

    public function read($id)
    {
        $projets=Projet::where('id',$id)->first();
        return view('admin.projetshow',compact('projets'));
    }
    
    public function edit($id)
    {
        $projets=Projet::where('id',$id)->first();
        return view('admin.projetedit',compact('projets'));
    }
    public function delete($id) 
    {
        $projets=Projet::where('id',$id)->delete();
        return back();
    }

    public function update(Request $request)
    {
        
        if($request['image']->isValid()){
            $repertoire=public_path() .'/image_couv_proj';
            $extension =$request['image']->getClientOriginalExtension();
            do {
				$nom = time() . '.' . $extension;
            } while(file_exists( $repertoire . '/' . $nom));

            $request['image']->move( $repertoire, $nom);
        }
        $path_image='image_couv_proj' . '/' . $nom;
    

        $projet=Projet::where('id',$request['id'])->update(
            [
                'titre'=>$request['titre'],
                'description'=>$request['description'],
                'image'=>$path_image,
                'montant_goal'=>$request['montant_goal']
            ]
        );
        return redirect()->back()->with('successMsg','Vous avez ajouté un nouveau projet');
    }


    public function gestionprojets(){
        $projets=Projet::paginate(20);
        return view('admin.gestionprojets',compact('projets'));
         }

   public function search(Request $request){
       $search=$request->get('search');
       $projets=Projet::where('titre','like','%'.$search.'%')->paginate(10);
       return view('admin.gestionprojets',compact('projets'));
   }

   public function showdons(){
    $derniers =Projet::orderBy('id', 'desc')->take()->get();
    return view('index',compact('derniers'));
   }

   public function lesprojets(){
    $projets=Projet::paginate(10);
    return view('causes-1',compact('projets'));
    }
   

    public function donation($id){
        $projets=Projet::where('id',$id)->first();
        return view('admin.donsprojets',compact('projets'))->with('id',$id);
    }

}
