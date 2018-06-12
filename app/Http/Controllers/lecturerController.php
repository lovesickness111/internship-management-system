<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lecturer;

class lecturerController extends Controller
{
    public function getInfor(){
        
        return view('lecturer.information');
    }
    public function getChangePassword(){
        
        return view('lecturer.changePassword');
    }
    public function getStudentList(){
        
        return view('lecturer.studentList');
    }
    public function getInbox(){
        
        return view('lecturer.inbox');
    }
    public function getWriteMessage(){
        
        return view('lecturer.writeMessage');
    }
    public function getReport(){
        
        return view('lecturer.viewReport');
    }
    public function getFeedback(){
        
        return view('lecturer.viewFeedback');
    }
    public function getLogin(){
        
        return view('lecturer.login');
    }
    public function postLogin(){
        
        return view('lecturer.viewPost');
    }
}

