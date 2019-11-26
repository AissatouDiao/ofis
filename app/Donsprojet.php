<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donsprojet extends Model
{
    protected $table='donsprojets';

    public function projet(){
        return $this->belongsTo('App\Projet');
    }
}
