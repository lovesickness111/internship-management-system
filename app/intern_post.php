<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intern_post extends Model
{
    //
    protected $table = "intern_post";
    public function follow(){
    	return $this->hasMany('App\follow','post_id','id');
    }
    public function bpartner(){
    	return $this->belongsTo('App\partner','partner_id','id');
    }
}
