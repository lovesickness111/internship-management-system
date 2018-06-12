<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = "student";
    public function lecturer(){
    	return $this->belongsTo('App/lecturer','lecturer_id','id_lecturer');
    }
    public function feedback(){
    	return $this->hasMany('App/feedback','student_id','id_student');
    }
    public function report(){
    	return $this->hasMany('App/report','student_report','id_student');
    }
    public function intern_post(){
    	return $this->hasMany('App/intern_post','follower_id','id_student');
    }
    public function User(){
    	return $this->belongsTo('App/User','account_id','id');
    }
}
