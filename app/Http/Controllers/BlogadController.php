<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;

use App\Summernote;
use App\Projet;

use App\Http\Requests\CommentRequest;
use App\Comment;


class BlogadController extends Controller
{

   public function show(){ $summernote = new Summernote;
    return view('admin.blog',compact('summernote'));
   }

   


    public function store(BlogRequest $request)
    { 
        
        $detail=$request->input('contenu');
 
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
            $path = public_path() .'/articles_ecriture_blog'.'/'. $image_name;
          
            file_put_contents($path, $data);
      
           //$img->removeattribute('src');
           // $img->setattribute('src', $image_name);
        }
 
        $detail = $dom->savehtml();
        $summernote = new Summernote;
        $summernote->content = $detail;
        $summernote->titre=$request->input('titre');
        $summernote->save();
        return view('admin.blog',compact('summernote'))->with('successMsg','Vous avez ajouté un nouvel article');
    }
    public function read($id)
    {
        $articles=Summernote::where('id',$id)->first();
        return view('admin.articlesshow',compact('articles'));
    }
    
    public function edit($id)
    {
        $articles=Summernote::where('id',$id)->first();
        return view('admin.display',compact('articles'));
    }
    public function delete($id) 
    {
        $articles=Summernote::where('id',$id)->delete();
        return back();
    }

    public function update(Request $request)
    {
        $articles=Summernote::where('id',$request['id'])->update(
            [
                'titre'=>$request['titre'],
                'content'=>$request['contenu']
            ]
        );
      
        return redirect()->back()->with('successMsg','modification effective!');
    }
    public function article(){
        $articles=Summernote::paginate(20);
        return view('admin.articles',compact('articles'));
         }

   public function search(Request $request){
       $search=$request->get('search');
       $articles=Summernote::where('titre','like','%'.$search.'%')->paginate(10);
       return view('admin.articles',compact('articles'));
   }

   public function fiche(){
    $articles=Summernote::paginate(10);
    return view('blog-1',compact('articles'));
     } 

     public function lire($id)
     {     $projets =Projet::orderBy('id', 'desc')->take(1)->get();
         $articles=Summernote::where('id',$id)->first();
         return view('blog-details',compact('articles','projets'));
     }

     public function lastarticles()
     {
      
        $derniers =Summernote::orderBy('id', 'desc')->take(5)->get();
         return view('blog-details',compact('derniers'));
     }

     public function comment(CommentRequest $request,Summernote $post){
       
        $commentaires= new Comment;
    
        $commentaires->summernote_id=$request->post;
        $commentaires->email=$request->email;
        $commentaires->commentaire=$request->adresse;
        $commentaires->save();
        Toastring::success('commentaire publié');
        return redirect()->back();
        }
}
