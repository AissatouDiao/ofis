<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyprojetRequest;
use App\Userprojet;

class MyprojetController extends Controller

{

    function afficher () {
        return view('myprojet');
    }

    public function enregistrerprojet(MyprojetRequest $request){

        $detail=$request->input('description');
 
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getelementsbytagname('img');
 
        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getattribute('src');
 
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
 
            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/projetsu_ecritures'.'/'. $image_name;
          
            file_put_contents($path, $data);
        }
 
        $detail = $dom->savehtml();
      
    
        $projets= new Userprojet;
        $projets->titre=$request->titre;
        $projets->description= $detail;
        $image=$request->file('image');
       
        if($image->isValid()){
            $repertoire=public_path() .'/imageu_couv_proj';
            $extension =$image->getClientOriginalExtension();
            do {
				$nom = time() . '.' . $extension;
            } while(file_exists( $repertoire . '/' . $nom));

            $image->move( $repertoire, $nom);
        }
        $path_image='imageu_couv_proj' . '/' . $nom;
        $projets->image= $path_image;
        $projets->montant_goal=$request->montant_goal;
        $projets->save();
        
        return view('myprojet',compact('projets'))->with('successMsg','Vous avez ajouté un nouveau projet');
    }




    public function gestionprojets(){
        $projets=Userprojet::paginate(20);
        return view('admin.projetsben',compact('projets'));
         }

   public function search(Request $request){
       $search=$request->get('search');
       $projets=Userprojet::where('titre','like','%'.$search.'%')->paginate(10);
       return view('admin.projetsben',compact('projets'));
   }



   

   public function read($id)
   {
       $projets=Userprojet::where('id',$id)->first();
       return view('admin.projetsbenshow',compact('projets'));
   }
   
   public function edit($id)
   {
       $projets=Userprojet::where('id',$id)->first();
       return view('admin.projetsbenedit',compact('projets'));
   }
   public function delete($id) 
   {
       $projets=Userprojet::where('id',$id)->delete();
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
   

       $projet=Userprojet::where('id',$request['id'])->update(
           [
               'titre'=>$request['titre'],
               'description'=>$request['description'],
               'image'=>$path_image,
               'montant_goal'=>$request['montant_goal']
           ]
       );
       return redirect()->back()->with('successMsg','Vous avez modifié le projet');
   }

   
 
   
}




