<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partner;


class partnerController extends Controller
{
    public function getInfor(){
        
        return view('partner.information');
    }
    public function getChangePassword(){
        
        return view('partner.changePassword');
    }
    public function getStudentList(){
        
        return view('partner.studentList');
    }
    public function getInbox(){
        
        return view('partner.inbox');
    }
    public function getWriteMessage(){
        
        return view('partner.writeMessage');
    }
    public function getReport(){
        
        return view('partner.viewReport');
    }
    public function getFeedback(){
        
        return view('partner.viewFeedback');
    }
    public function getLogin(){
        
        return view('partner.login');
    }
    public function postLogin(){
        
        return view('partner.viewPost');
    }
}



