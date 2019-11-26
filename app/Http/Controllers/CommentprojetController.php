<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentprojetRequest;
use App\Projet;
use App\Commentprojet;

class CommentprojetController extends Controller
{
    public function comment(CommentprojetRequest $request,Projet $projets){
       
    
        $commentaires= new Commentprojet;
    
        $commentaires->projet_id=$projets->id;
        $commentaires->nom=$request->nom;
        $commentaires->email=$request->email;
        $commentaires->commentaire=$request->commentaire;
        $commentaires->save();
    
        return redirect()->back();
    }

}
