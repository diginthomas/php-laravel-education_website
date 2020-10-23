<?php

use Illuminate\Support\Facades\Route;
use App\Mail\usermail;
use App\Mail\Gmail;

use Illuminate\Support\Facades\Mail;

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
Route::post('/subscribed','Home@Subscribed');
Route::get('/','Home@home');

Route::get('/A_login','Admin@login');

Route::post("admin/login",'Admin@clogin');

Route::get('admin/home','Admin@adminhome')->middleware('checkStatus');;

Route::get("admin/logout",'Admin@logout')->middleware('checkStatus');;

Route::get('/admin-courses','CourseController@AdminViewCourse')->middleware('checkStatus');;
Route::get('/admin-addcourse','CourseController@Addcourseform')->middleware('checkStatus');;
Route::post("/Admin-storecourse",'CourseController@Storecourse')->middleware('checkStatus');;
Route::post("/admin-deletecourse/{course}",'CourseController@Deletecourse')->middleware('checkStatus');;
Route::get('/admin-application','Application@AdminShowApplication')->middleware('checkStatus');;
Route::get('/admin-events','EventController@Adminevents')->middleware('checkStatus');;
Route::get("/events",'EventController@AllEvents');
Route::post('/Admin-events/store','EventController@AddEvent')->middleware('checkStatus');;
Route::post('/admin/event_delete/{eve}','EventController@Delete_event')->middleware('checkStatus');;


