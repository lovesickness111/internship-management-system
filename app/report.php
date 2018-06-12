<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    //
    protected $table = "report";
    public function student(){
    	return $this->belongsTo('App/student','student_report','id_student');
    }
}
