<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyprojetRequest;
use App\reply2;
use App\Commentprojet; 

class ReplyprojetController extends Controller
{
    public function reply(ReplyprojetRequest $request,Commentprojet $comments){
       
    
        $reponses= new reply2;
    
        $reponses->comment_id=$comments->id;
        $reponses->nom=$request->nom;
        $reponses->email=$request->email;
        $reponses->reply=$request->reply;
        $reponses->save();
    
        return redirect()->back();
    }
}
