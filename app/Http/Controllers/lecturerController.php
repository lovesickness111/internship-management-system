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

class lecturerController extends Controller
{
    public function getInfor(){
        
        return view('lecturer.information');
    }
    public function getChangePassword(){
        
        return view('lecturer.changePassword');
    }
    public function getStudentList(){
        $user = Auth::user();
        $lecturer = lecturer::find($user->lecturer->id);
        $student = student::where('lecturer_id',$lecturer->id)->get();
        return view('lecturer.studentList',['student'=>$student]);
    }
    public function getInbox(){
        $user = Auth::user();
        $inbox = message::where('email_receiver',$user->email)->get();
        $unread = message::where([
                ['email_receiver','=',$user->email],
                ['status','=','0']
            ])->get();
        return view('lecturer.inbox',compact('user','inbox','unread'));
    }
    public function getWriteMessage(){
        
        return view('lecturer.writeMessage');
    }
    public function postWriteMessage(Request $req){
        $message = new message();
        $user = Auth::user();
        $message->email_sender= $user->email;
        $message->email_receiver = $req->email_receiver;
        $message->description = $req->description;
        $message->text_content = $req->text_content;
        if($req->hasFile('file'))
        {
            $file = $req->file("file");
            $duoi =$file->getClientOriginalExtension();
            $name= $file->getClientOriginalName();
            $attach = str_random(4)."-".$name;
            while(file_exists("upload/".$attach))
            {
                $attach = str_random(4)."-".$name;
            }
            $file->move("upload/",$attach);
            $message->file = $attach;
        }
        $message->save();
        return redirect('lecturer/write-message')->with('thanhcong','message sended');
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
    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6|max:20'
        ],[
            'email.required'=>'email giảng viên',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu dài hơn 6 kí tự',
            'password.max'=>'Mật khẩu ít hơn 20 kí tự'
        ]);
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials))
            {
                return redirect('lecturer/student-list');
            }
        else{
            return redirect('lecturer/login')->with('thanhcong','đăng nhập không thành công');
        }
    }
}

