<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = "student";
    public function lecturer(){
    	return $this->belongsTo('App\lecturer','lecturer_id','id');
    }
    public function feedback(){
    	return $this->hasMany('App\feedback','student_id','id');
    }
    public function report(){
    	return $this->hasMany('App\report','student_report','id');
    }
    public function follow(){
    	return $this->hasMany('App\follow','student_id','id');
    }
    public function User(){
    	return $this->belongsTo('App\User','account_id','id');
    }
    public function partner(){
        return $this->belongsTo('App\partner','partner_id','id');
    }
}
