<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model

{
    protected $table='comments';

    public function summmernote(){
        return $this->belongsTo('App\Summernote');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }
}
 