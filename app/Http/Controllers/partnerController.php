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
use App\partner;

class partnerController extends Controller
{
    public function getInfor(){
        
        return view('partner.information');
    }
    public function getChangePassword(){
        
        return view('page.changePassword');
    }
    public function getFollowerList(){
        
        return view('partner.followerList');
    }
    public function getRecruitment(){
        
        return view('partner.recruitment');
    }
    public function postRecruitment(Request $req){
        $intern_post = new intern_post();
        $user = Auth::user();
        $partner = partner::find($user->partner->id);
        $intern_post->partner_id = $partner->id;
        $intern_post->description = $req->description ;
        $intern_post->link = $req->link;
        $intern_post->content = $req->content;
        $intern_post->save();
        return redirect()->back()->with('thanhcong','đăng tin thành công');
    }
    public function getStudentList(){
        $user = Auth::user();
        $partner = partner::find($user->partner->id);
        $student = student::where('partner_id',$partner->id)->get();
        return view('partner.studentList',['student'=>$student]);
    }
    public function getWriteMessage(){
        
        return view('partner.writeMessage');
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
        return redirect('partner/write-message')->with('thanhcong','message sended');
    }
    // public function getReport(){
        
    //     return view('partner.viewReport');
    // }
    public function getFeedback(){
        
        return view('partner.viewFeedback');
    }
    public function getInbox(){
        $user = Auth::user();
        $inbox = message::where('email_receiver',$user->email)->get();
        $unread = message::where([
                ['email_receiver','=',$user->email],
                ['status','=','0']
            ])->get();
        return view('partner.inbox',compact('user','inbox','unread'));
     }
    public function getLogin(){
        
        return view('partner.login');
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
                return redirect('partner/inbox');
            }
        else{
            return redirect('partner/login')->with('thanhcong','đăng nhập không thành công');
        }
    }
}



