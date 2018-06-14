<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    //
    protected $table = "partner";
    public function intern_post(){
    	return $this->hasOne('App\intern_post','partner_id','id');
    }
    public function User(){
    	return $this->belongsTo('App\User','account_id','id');
    }
    public function student(){
    	return $this->hasMany('App\student','partner_id','id');
    }
}
