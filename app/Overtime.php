<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $table = 'overtimes';

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
