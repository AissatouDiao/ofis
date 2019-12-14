<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply2 extends Model
{
    protected $table='reply2projets';
    
    public function comments(){
        return $this->belongsTo('App\Commentprojet');
    }
}
