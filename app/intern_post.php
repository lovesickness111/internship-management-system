<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intern_post extends Model
{
    //
    protected $table = "intern_post";
    public function student(){
    	return $this->belongsTo('App/student','follower_id','id_student');
   
    }
}
