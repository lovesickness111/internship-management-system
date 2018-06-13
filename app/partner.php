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
}
