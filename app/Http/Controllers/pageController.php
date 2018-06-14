<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\intern_post;
use App\follow;
use App\User;
use App\lecturer;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\message;

class pageController extends Controller
{
    public function getInbox(){
    	$user = Auth::user();
        $inbox = message::where('email_receiver',$user->email)->get();
        $unread = message::where([
                ['email_receiver','=',$user->email],
                ['status','=','0']
            ])->get();
    	return view('page.inbox',compact('user','inbox','unread'));
    }
    
    public function getRecruitment(){
    	$intern_post= intern_post::all();
    	return view('page.recruitment',['intern_post'=>$intern_post]);
    }
    public function getChangePassword(){
    	
    	return view('page.changePassword');
    }
    public function postChangePassword(Request $req){
        $user = Auth::user();
        $user->password = Hash::make($req->password);
        return redirect('student/login')->with('thongbao','đổi mật khẩu thành công! Vui lòng đăng nhập lại ');
    }
    public function getLogout(){
        Auth::logout();
        return redirect('student/login');
    }
     public function getSignup(){
        return view('page/signup');
    }

    public function postSignup(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'  required|min:6|max:20',
                'name'=>'required',
                
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'name.required'=>'Vui lòng nhập tên',
                
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->level = $req->level;
        $user->save();
        return redirect('student/login')->with('thanhcong','Tạo tài khoản thành công');
    }
}


