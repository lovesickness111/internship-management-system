<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    //
    protected $table = "administrator";
    public function User(){
    	return $this->belongsTo('App\User','account_id','id');
    }
}
