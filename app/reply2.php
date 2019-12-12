<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply2 extends Model
{
    public function comments(){
        return $this->belongsTo('App\Commentprojet');
    }
}
