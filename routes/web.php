<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/courses','CourseController@getCourse');
Route::get('/courses/apply','application@showApplication');
Route::post('/courses/apply/submited','application@getApplication');
Route::post('/feedback','Home@getfeedback');
Route::get('/','Home@home');
Route::get('/login','Admin@login');
Route::post("admin/login",'Admin@clogin');
Route::get('admin/home','Admin@adminhome');
Route::get("admin/logout",'Admin@logout');
Route::get('admin/courses','CourseController@AdminViewCourse');
Route::get('admin/application','Application@AdminShowApplication');
Route::get("/events",'EventController@AllEvents');
Route::get("/test",function(){
	return view('newhome');
});