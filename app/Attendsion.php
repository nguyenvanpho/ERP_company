<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendsion extends Model
{
    protected $table = 'attendsions';

    public function user(){
    	return $this->belongsToMany('App\User','user_id','id');
    }
}
