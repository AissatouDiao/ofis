<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replyprojet extends Model
{
    protected $table='replyprojets';
    
    public function comments(){
        return $this->belongsTo('App\Commentprojet');
    }
}
