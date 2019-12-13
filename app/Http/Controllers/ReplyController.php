<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use App\Reply;
use App\Comment; 
 
class ReplyController extends Controller
{
    public function reply(ReplyRequest $request,Comment $comments){
       
    
        $reponses= new Reply;
    
        $reponses->comment_id=$comments->id;
        $reponses->nom=$request->nom;
        $reponses->email=$request->email;
        $reponses->reply=$request->reply;
        $reponses->save();
    
        return redirect()->back();
    }
}
