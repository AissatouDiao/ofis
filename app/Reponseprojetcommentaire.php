<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponseprojetcommentaire extends Model
{
    public function reponse(){
        return $this->belongsTo('App\Projetcommentaire');
    }
}
