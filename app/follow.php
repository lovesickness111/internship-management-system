<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    //
    protected $table = "follow";
    public function student(){
    	return $this->belongsTo('App\student','student_id','id');
    }
    public function intern_post(){
    	return $this->belongsTo('App\intern_post','post_id','id');
    }
}
