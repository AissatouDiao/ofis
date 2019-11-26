<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likearticle extends Model
{
    public function summmernote(){
        return $this->belongsTo('App\Summernote');
    }
}
