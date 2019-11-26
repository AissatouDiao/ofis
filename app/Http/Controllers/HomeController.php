<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\DonsProjet;
use App\Summernote;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     
   
    public function index(){
        $projets =Projet::orderBy('id', 'desc')->take(3)->get();
        $articles=Summernote::orderBy('id', 'desc')->take(3)->get();

    
        return view('index',compact('projets','articles'));
       }

   public function admin(){

       return view('admin/dashboard');
       
   }

   


}
