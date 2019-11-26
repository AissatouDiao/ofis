<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summernote extends Model
{
    protected $table='summernotes';


    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function likearticles(){
        return $this->hasMany('App\Likearticle');
    }
}
 