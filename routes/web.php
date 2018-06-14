<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\student;
//students

Route::get('/','pageController@getdangnhap');
Route::get('trangchu','PagesController@trangchu');
Route::get('lienhe','PagesController@lienhe');
Route::get('gioithieu',function(){
	return view('pages.gioithieu');
});

Route::get('logout','pageController@getLogout');

Route::get('student/login','studentController@getLogin');
Route::post('student/login','studentController@postLogin');

Route::get('change-password','pageController@getChangePassword');
Route::post('change-password','pageController@postChangePassword');

Route::group(['prefix'=>'student','middleware'=>'studentLogin'],function(){
	Route::get('recruitment','pageController@getRecruitment');
	Route::get('view-post/{id}','studentController@getViewPost');
	Route::get('follow/{id}','studentController@getFollowPost');
	Route::get('unfollow/{id}','studentController@getUnFollowPost');
	Route::get('interview-list','studentController@getInterview');
	Route::get('write-message','studentController@getWriteMessage');
	Route::post('write-message','studentController@postWriteMessage');
	Route::get('infor','studentController@getInfor');
	Route::post('infor','studentController@postInfor');
	Route::get('report','studentController@getReport');
	Route::post('report','studentController@postReport');
	Route::get('info-by-school','studentController@getInfoBySchool');
	

	Route::get('inbox','pageController@getInbox');
	
});
//lectuer 
Route::get('lecturer/login','lecturerController@getLogin');
Route::post('lecturer/login','lecturerController@postLogin');


Route::group(['prefix'=>'lecturer','middleware'=>'lecturerLogin'],function(){
	Route::get('infor','lecturerController@getInfor');
	Route::get('student-list','lecturerController@getStudentList');
	Route::get('inbox','lecturerController@getInbox');
	Route::get('write-message','lecturerController@getWriteMessage');
	Route::post('write-message','lecturerController@postWriteMessage');

	Route::get('view-report','lecturerController@getReport');
	Route::post('view-report','lecturerController@postReport');
	Route::get('infor','lecturerController@getInfor');
	Route::get('view-feedback','lecturerController@getFeedback');
	// Route::get('change-password','lecturerController@getChangePassword');
	// Route::post('change-password','lecturerController@postChangePassword');
	
	
	// Route::get('view-post','lecturerController@getViewPost');
	// Route::post('post{id}','lecturerController@postViewPost');
});

//partner
	Route::get('partner/login','partnerController@getLogin');
	Route::post('partner/login','partnerController@postLogin');

Route::group(['prefix'=>'partner','middleware'=>'partnerLogin'],function(){

	Route::get('infor','partnerController@getInfor');
	Route::get('follower-list','partnerController@getFollowerList');
	Route::get('student-list','partnerController@getStudentList');
	Route::get('inbox','partnerController@getInbox');
	Route::get('write-message','partnerController@getWriteMessage');
	Route::post('write-message','partnerController@postWriteMessage');

	Route::get('recruitment','partnerController@getRecruitment');
	Route::post('recruitment','partnerController@postRecruitment');

	Route::get('infor','partnerController@getInfor');
	Route::get('view-feedback','partnerController@getFeedback');
	// Route::get('change-password','pageController@getChangePassword');
	// Route::post('change-password','pageController@postChangePassword');
	
	
	// Route::get('view-post','lecturerController@getViewPost');
	// Route::post('post{id}','lecturerController@postViewPost');
});
//administrator
Route::get('admin/login','adminController@getLogin');
Route::post('admin/login','adminController@postLogin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::get('signup','pageController@getSignup');
	Route::post('signup','pageController@postSignup');
	Route::get('recruitment','pageController@getRecruitment');
	Route::get('view-post/{id}','adminController@getViewPost');
	Route::get('follow/{id}','adminController@getFollowPost');
	Route::get('unfollow/{id}','adminController@getUnFollowPost');
	Route::get('interview-list','adminController@getInterview');
	Route::get('write-message','adminController@getWriteMessage');
	Route::post('write-message','adminController@postWriteMessage');
	Route::get('infor','adminController@getInfor');
	Route::get('report','adminController@getReport');
	Route::post('report','adminController@postReport');
	Route::get('info-by-school','adminController@getInfoBySchool');
	

	Route::get('inbox','adminController@getInbox');
	
});