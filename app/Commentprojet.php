<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentprojet extends Model
{

    public function projet(){
        return $this->belongsTo('App\Projet');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }
}
