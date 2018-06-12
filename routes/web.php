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
//front-end

Route::get('/','PagesController@getdangnhap');
Route::get('trangchu','PagesController@trangchu');
Route::get('lienhe','PagesController@lienhe');
Route::get('gioithieu',function(){
	return view('pages.gioithieu');
});
Route::get('student/login','studentController@getLogin');
Route::post('student/login','studentController@postLogin');
Route::get('student/logout','studentController@getLogout');

Route::group(['prefix'=>'student'],function(){
	Route::get('recruitment','studentController@getRecruitment');
	Route::get('interview-list','studentController@getInterview');
	Route::get('request-form','studentController@getFormRequest');
	Route::post('request-form','studentController@postFormRequest');
	Route::get('infor','studentController@getInfor');
	Route::get('info-by-school','studentController@getInfoBySchool');
	Route::get('change-password','studentController@getChangePassword');
	Route::post('change-password','studentController@postChangePassword');
	Route::get('inbox','studentController@getInbox');
	Route::get('write-message','studentController@getWriteMessage');
	Route::post('write-message','studentController@postWriteMessage');
	Route::get('view-post','studentController@getViewPost');
	Route::post('post{id}','studentController@postViewPost');
});
//lectuer 
Route::get('lecturer/login','lecturerController@getLogin');
Route::post('lecturer/login','lecturerController@postLogin');
Route::get('lecturer/logout','lecturerController@getLogout');

Route::group(['prefix'=>'lecturer'],function(){
	Route::get('infor','lecturerController@getInfor');
	Route::get('student-list','lecturerController@getStudentList');
	Route::get('inbox','lecturerController@getInbox');
	Route::get('write-message','lecturerController@getWriteMessage');
	Route::post('write-message','lecturerController@postWriteMessage');

	Route::get('view-report','lecturerController@getReport');
	Route::post('view-report','lecturerController@postReport');
	Route::get('infor','lecturerController@getInfor');
	Route::get('view-feedback','lecturerController@getFeedback');
	Route::get('change-password','lecturerController@getChangePassword');
	Route::post('change-password','lecturerController@postChangePassword');
	
	
	Route::get('view-post','lecturerController@getViewPost');
	Route::post('post{id}','lecturerController@postViewPost');
});

