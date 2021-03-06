<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CpRequest;
use App\Projetcommentaire;
use App\Projet;

class CommentaireprojetController extends Controller
{
    public function commentaire(CpRequest $request,Projet $projet){
        
        $commentaire= new Projetcommentaire;
    
        $commentaire->projet_id=$projet->id;
        $commentaire->email=$request->email;
        $commentaire->nom=$request->nom;
        $commentaire->commentaire=$request->commentaire;
        $commentaire->save();
        
        return redirect()->back();
        
    }
}
