<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function comments(){
        return $this->belongsTo('App\Comment');
    }
}
