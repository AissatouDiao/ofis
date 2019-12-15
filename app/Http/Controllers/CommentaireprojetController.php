<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projetcommentaire;
use App\Projet;

class CommentaireprojetController extends Controller
{
    public function commentaire(Request $request,Projet $projet){
        
        $commentaire= new Projetcommentaire;
    
        $commentaire->projet_id=$projet->id;
        $commentaire->email=$request->email;
        $commentaire->nom=$request->nom;
        $commentaire->commmentaire=$request->commentaire;
        $commentaire->save();
        
        return redirect()->back();
        
    }
}
