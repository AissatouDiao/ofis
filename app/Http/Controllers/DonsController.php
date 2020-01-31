<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DonsRequest;
use App\Dons;
use App\Donsproposition;


class DonsController extends Controller
{


    public function store(DonsRequest $request){
        $dons=new Dons;
        $dons->nom=$request->nom;
        $dons->prenom=$request->prenom;
        $dons->email=$request->email;
        $dons->adresse=$request->adresse;
        $dons->telephone=$request->telephone;
        $dons->montant=preg_replace("/[^0-9]/", '',$request->montant);
        $dons->is_ano=$request->is_ano;


        $dons->save();
        return redirect()->back()->with('successMsg','Votre requête a été prise en compte');
    
        
    }

    public function der(){
        return view('dons');
    }

    public function fin()
    {
        $dons=Dons::paginate(3);
        return view('admin.dons',compact('dons'));
    }

    public function propositionsdons()
    {
        $dons=Donsproposition::paginate(3);
        return view('admin.propositionsdons',compact('dons'));
    }

}
