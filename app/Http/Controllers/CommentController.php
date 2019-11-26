<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Summernote;
use App\Comment;

class CommentController extends Controller
{
    public function comment(CommentRequest $request,Summernote $articles){
       
    
        $commentaires= new Comment;
    
        $commentaires->summernote_id=$articles->id;
        $commentaires->nom=$request->nom;
        $commentaires->email=$request->email;
        $commentaires->commentaire=$request->commentaire;
        $commentaires->save();
    
        return redirect()->back();
    }

    public function delete($id)
    {  
      
        

        $articles=Comment::where('id',$id)->delete();
        return back();
    }
}
 