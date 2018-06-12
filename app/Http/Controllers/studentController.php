<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\intern_post;


class studentController extends Controller
{
    public function getRecruitment(){
    	$intern_post= intern_post::all();
    	return view('student.recruitment',['intern_post'=>$intern_post]);
    }
    public function getInterview(){
    	
    	return view('student.interview_list');
    }
    public function getInfor(){
    	
    	return view('student.information');
    }
    public function getInfoBySchool(){
    	
    	return view('student.infoBySchool');
    }
    public function getChangePassword(){
    	
    	return view('student.changePassword');
    }
    public function getInbox(){
    	
    	return view('student.inbox');
    }
    public function getWriteMessage(){
    	
    	return view('student.writeMessage');
    }
    public function getViewPost(){
        
        return view('student.viewPost');
    }
    public function getLogin(){
        
        return view('student.login');
    }
    public function postLogin(){
        
        return view('student.viewPost');
    }
}
