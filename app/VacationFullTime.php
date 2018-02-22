<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacationFullTime extends Model
{
    protected $table = 'vacation_fulltimes';

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
