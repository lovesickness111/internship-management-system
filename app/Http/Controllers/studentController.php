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
class studentController extends Controller
{
    function __construct(){
                  
    }   
    public function getRecruitment(){
    	$intern_post= intern_post::all();
    	return view('student.recruitment',['intern_post'=>$intern_post]);
    }
    public function getInterview(){
    	$user= Auth::user();
        $student = student::find($user->student->id);
    	return view('student.interview_list',['student'=>$student]);
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

    public function getFollowPost($id){
        $intern_post = intern_post::find($id);
        $user = Auth::user();
        $follow = new follow();
        $follow->student_id = $user->student->id;
        $follow->post_id = $intern_post->id;
        $follow->save();
        redirect('student/view-post/'.$id);
    }
    public function getViewPost($id){
        $intern_post= intern_post::find($id);
        return view('student.viewPost',['intern_post'=>$intern_post]);
    }

    public function getLogin(){
        
        return view('student.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6|max:20'
        ],[
            'email.required'=>'email mặc định là mã sinh viên',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu dài hơn 6 kí tự',
            'password.max'=>'Mật khẩu ít hơn 20 kí tự'
        ]);
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials))
            {
                return redirect('student/recruitment');
            }
        else{
            return redirect('student/login')->with('thanhcong','đăng nhập không thành công');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect('student/recruitment');
    }
     public function getSignin(){
        return view('student/signin');
    }

    public function postSignin(Request $req){
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
