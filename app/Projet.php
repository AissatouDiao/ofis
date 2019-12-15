<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table='projets';
    
    public function comments(){
        return $this->hasMany('App\Projetcommentaire');
    }

    public function donsprojets(){
        return $this->hasMany('App\Donsprojet');
    }

   
}
