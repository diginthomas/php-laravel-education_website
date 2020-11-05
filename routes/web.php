<?php

use Illuminate\Support\Facades\Route;
use App\Mail\usermail;
use App\Mail\Gmail;

use Illuminate\Support\Facades\Mail;

//home And subscribers
Route::post('/subscribed','Home@Subscribed');
Route::get('/','Home@home');
Route::get('/admin-subscribers','Home@ViewSubscribers')->middleware('checkStatus');
Route::post('admin/Delete-subscriber/{s}','Home@Delete_subscriber')->middleware('checkStatus');
//courses
Route::get('/courses','CourseController@getCourse');
Route::get('/admin-courses','CourseController@AdminViewCourse')->middleware('checkStatus');
Route::get('/admin-addcourse','CourseController@Addcourseform')->middleware('checkStatus');
Route::post("/Admin-storecourse",'CourseController@Storecourse')->middleware('checkStatus');
Route::post("/admin-deletecourse/{course}",'CourseController@Deletecourse')->middleware('checkStatus');

//application
Route::get('/courses/apply','application@showApplication');
Route::post('/courses/apply/submited','application@getApplication');
Route::get('/admin-application','Application@AdminShowApplication')->middleware('checkStatus');;

//login & logout
Route::get('/A_login','Admin@login');
Route::post("admin/login",'Admin@clogin');
Route::get('admin/home','Admin@adminhome')->middleware('checkStatus');
Route::get("admin/logout",'Admin@logout')->middleware('checkStatus');

//events
Route::get('/admin-events','EventController@Adminevents')->middleware('checkStatus');
Route::get("/events",'EventController@AllEvents');
Route::post('/Admin-events/store','EventController@AddEvent')->middleware('checkStatus');
Route::post('/admin/event_delete/{eve}','EventController@Delete_event')->middleware('checkStatus');
Route::get("/book/{eve}",'EventController@Event_book_form');
Route::post("/Event-booked/{eve}",'EventController@Event_booked');
