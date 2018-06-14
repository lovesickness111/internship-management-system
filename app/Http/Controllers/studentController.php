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
class studentController extends Controller
{
    function __construct(){
                  
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
    public function getInterview(){
    	$user= Auth::user();
        $student = student::find($user->student->id);
        $follow = follow::where('student_id','=',$student->id)->get();
    	return view('student.interview_list',compact('student','follow'));
    }

    public function getInfor(){
    	$user= Auth::user();
        $student = student::find($user->student->id);
    	return view('student.information',compact('student'));
    }

    public function postInfor(Request $request){
        $user= Auth::user();
        $id = student::find($user->student->id);
        $request->id
        $request->name 
        $request->msv
        .
    }

    public function getInfoBySchool(){
    	
    	return view('student.infoBySchool');
    }
    

    public function getFollowPost($id){
        $intern_post = intern_post::find($id);
        $user = Auth::user();
        $follow = new follow();
        $follow->student_id = $user->student->id;
        $follow->post_id = $intern_post->id;
        $follow->partner_name =$intern_post->bpartner->name; 
        $follow->partner_email =$intern_post->bpartner->email; 
        $follow->save();
        redirect('student/view-post/'.$id);
    }
    public function getUnFollowPost($id){  
        $follow = follow::find($id);      
        $follow->delete();
        redirect('student/interview-list');
    }
    public function getViewPost($id){
        $intern_post= intern_post::find($id);
        return view('student.viewPost',['intern_post'=>$intern_post]);
    }
    public function getWriteMessage(){
        
        return view('student.writeMessage');
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
        return redirect('student/write-message')->with('thanhcong','message sended');
    }
    public function getReport(){
        
        return view('student.report');
    }
    public function postReport(Request $req){
        $report = new report();
        $user = Auth::user();
        $report->student_report= $user->student->id;

        $report->lecturer_report = $user->student->lecturer_id;
        $report->description = $req->description;
        
        if($req->hasFile('file'))
        {
            $file = $req->file("file");
            $duoi =$file->getClientOriginalExtension();
            $name= $file->getClientOriginalName();
            $attach = str_random(4)."-".$name;
            while(file_exists("upload/report/".$attach))
            {
                $attach = str_random(4)."-".$name;
            }
            $file->move("upload/report/",$attach);
            $report->file = $attach;
        }
        $report->save();
        return redirect('student/report')->with('thanhcong','report sended');
    }
}
   
