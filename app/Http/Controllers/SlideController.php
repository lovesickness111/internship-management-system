<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;


class SlideController extends Controller
{
    public function getDanhSach(){
    	$slide= Slide::all();
    	return view('admin.slide.danhsach',['slide'=>$slide]);
    }
    public function getThem(){
    	$slide= Slide::all();
    	return view('admin.slide.them',['slide'=>$slide]);
    }
    //ham nhan du lieu tu form roi dua len db
    public function postThem(Request $request){
    	$this->validate($request,
    	[
    		'Ten'=>'required|unique:slide|min:2|max:100'
    	],
    	[
    		'Ten.required'=>'bạn chưa nhập tên slide',
    		'Ten.unique'=>'tên slide đã trùng',
    		'Ten.min'=>'tên slide dài hơn 2 và ít hơn 100 kí tự',
    		'Ten.max'=>'bạn chưa nhập tên slide'
    	]);
    $slide= new slide;
    $slide->Ten =$request->Ten;
    $slide->NoiDung = $request->NoiDung;
    $slide->link = $request->Link;
        if($request->hasFile('Hinh'))
        {
            $file = $request->file("Hinh");
            $duoi =$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi!= 'png' && $duoi!= 'jpeg' && $duoi != 
                'img'){
                return redirect('admin/slide/them')->with('thongbao','file bạn chọn không phải file ảnh(.jpg,.png,.jpeg)');
            }
            $name= $file->getClientOriginalName();
            $Hinh = str_random(4)."-".$name;
            while(file_exists("upload/slide/".$Hinh))
            {
                $Hinh = str_random(4)."-".$name;
            }
            $file->move("upload/slide",$Hinh);
            $slide->Hinh=$Hinh;
        }else
        {
            $slide->Hinh ="";
        }
    $slide->save();
    return redirect('admin/slide/them')->with('thongbao','success!!');
    }
 
    public function getSua($id){
    	$slide= slide::find($id);
    	return view('admin.slide.sua',['slide'=>$slide]);
    }
    public function postSua(Request $request, $id){
    	$slide= slide::find($id);
    	$this->validate($request,
    	[
    		'Ten'=>'required|min:2|max:100'
    	],
    	[
    		'Ten.required'=>'bạn chưa nhập tên slide',
    		'Ten.unique'=>'tên slide đã trùng',
    		'Ten.min'=>'tên loại slide hơn 2 và ít hơn 100 kí tự',
    		'Ten.max'=>'tên quá dài'
    	]);
    	$slide->Ten=$request->Ten;
        $slide->NoiDung = $request->NoiDung;
        $slide->link = $request->Link;
        if($request->hasFile('Hinh'))
        {
            $file = $request->file("Hinh");
            $duoi =$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi!= 'png' && $duoi!= 'jpeg' && $duoi != 
                'img'){
                return redirect('admin/slide/them')->with('thongbao','file bạn chọn không phải file ảnh(.jpg,.png,.jpeg)');
            }
            $name= $file->getClientOriginalName();
            $Hinh = str_random(4)."-".$name;
            while(file_exists("upload/slide/".$Hinh))
            {
                $Hinh = str_random(4)."-".$name;
            }

            $file->move("upload/slide",$Hinh);
            unlink("upload/slide/".$slide->Hinh);
            $slide->Hinh=$Hinh;
        }
    	$slide->save();
    	return redirect('admin/slide/danhsach')->with('thongbao','sửa thành công!');
    }
    public function getXoa($id){
    	$slide= slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide/danhsach')->with('thongbao','bạn đã xóa thành công ');
    } 
}
