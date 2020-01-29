<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dons;
use App\Donsproposition;
use App\Donsprojet;
use App\Projet;
use App\Http\Requests\DonsRequest;
use App\Http\Requests\DonspropositionRequest;
use App\Http\Requests\DonsprojetsRequest;

class AlldonsControllers extends Controller
{
    public function storedons(DonsRequest $request){
        $dons=new Dons;
        $dons->nom=$request->nom;
        $dons->prenom=$request->prenom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=$request->montant;
        $dons->is_ano=$request->is_ano;

        $dons->save();
        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
    
        
    }

    public function storedonspropositions(DonspropositionRequest $request,Projet $projet){
        $dons=new Donsproposition;
        $dons->projet_id=$projet->id;
        $dons->nom=$request->nom;
        $dons->prenom=$request->prenom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=$request->montant;
        $dons->is_ano=$request->is_ano;

        $dons->save();
        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
    
        
    }

    public function storedonsprojets(DonsprojetRequest $request,Projet $projet){
        $dons=new Donsprojet;
        $dons->projet_id=$projet->id;
        $dons->nom=$request->nom;
        $dons->prenom=$request->prenom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=$request->montant;
        $dons->is_ano=$request->is_ano;

        $dons->save();
        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
    
        
    }


}