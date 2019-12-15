<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponseprojetcommentaire;
use App\Projetcommentaire;

class ReponsecommentaireprojetController extends Controller
{
    public function reponse(Request $request,Projetcommentaire $commentaire){
        
        $reponse= new Reponseprojetcommentaire;
    
        $reponse->projet_id=$commentaire->id;
        $reponse->email=$request->email;
        $reponse->nom=$request->nom;
        $reponse->commmentaire=$request->commentaire;
        $reponse->save();
        
        return redirect()->back();
        
    }
}
