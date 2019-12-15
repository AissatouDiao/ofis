<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetcommentaire extends Model
{

    public function commentaire(){
        return $this->belongsTo('App\Projet');
    }

    public function reponses(){
        return $this->hasMany('App\Reponseprojetcommentaire');
    }
}
