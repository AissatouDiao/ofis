<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    
    
    public function commentaires(){
        return $this->hasMany('App\Projetcommentaire');
    }

    public function donsprojets(){
        return $this->hasMany('App\Donsprojet');
    }

   
}
