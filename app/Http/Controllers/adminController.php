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
use App\report;
use Auth\administrator;
class adminController extends Controller
{
    function __construct(){
                  
    }   
    public function getLogin(){
        
        return view('admin.login');
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
                return redirect('admin/inbox');
            }
        else{
            return redirect('admin/login')->with('thanhcong','đăng nhập không thành công');
        }
    }
    public function getInbox(){
        $user = Auth::user();
        $inbox = message::where('email_receiver',$user->email)->get();
        $unread = message::where([
                ['email_receiver','=',$user->email],
                ['status','=','0']
            ])->get();
        return view('admin.inbox',compact('user','inbox','unread'));
     }
}
   
