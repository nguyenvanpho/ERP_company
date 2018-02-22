<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacationPartTime extends Model
{
    protected $table = 'vacation_parttimes';

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
