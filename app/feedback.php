<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //
    protected $table = "feedback";
    public function student(){
    	return $this->belongsTo('App/student','student_id','id_student');
    }
}
