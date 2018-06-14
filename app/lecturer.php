<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    //
    protected $table = "lecturer";
    public function student(){
    	return $this->hasMany('App\student','lecturer_id','id');
    }
    public function User(){
    	return $this->belongsTo('App\User','account_id','id');
    }
}
