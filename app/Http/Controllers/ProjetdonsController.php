<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DonsprojetsRequest;
use App\Projet;
use App\Donsproposition;
use App\Donsprojet;

class ProjetdonsController extends Controller
{
    public function donation(DonsprojetsRequest $request,Projet $projet){
        
        $dons= new Donsprojet;
    
        $dons->projet_id=$request->id;
        $dons->nom=$request->nom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=$request->montant;
        $dons->save();

        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
        
    }

    public function donationproposition(DonsprojetsRequest $request,Projet $projet){
        
        $dons= new Donsproposition;
    
        $dons->projet_id=$request->id;
        $dons->nom=$request->nom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=$request->montant;
        $dons->save();

        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
        
    }

    public function pourcentage(DonsprojetsRequest $request,Projet $projet){
        
        $dons= new Donsprojets;
        
        $Montant_total= $projet->montant_global;
        $Montant_dons=$dons::where('projet_id',$projet->id)->sum('montant');
       
        $pourcentage= ($Montant_dons*100)/$Montant_total;
    

        return view('index')->with('pourcentage',$pourcentage);
       
        
    }

    public function afficher($id){
        return view('donsprojets')->with('id',$id);
    }

    public function lire($id)
   {
       $projets=Projet::where('id',$id)->first();
       return view('cause-details',compact('projets'));
   }

}
