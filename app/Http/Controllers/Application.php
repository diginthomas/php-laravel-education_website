<?php

namespace App\Http\Controllers;
use App\Course;
use App\UserApplication;
use Illuminate\Http\Request;

class Application extends Controller
{
    //
    public function showApplication(){
    	$course1=Course::all();
    	return view('finalconnectus',['Course'=>$course1]);

    }
    public function getApplication(Request $req){
    	$userapp= new UserApplication();
    	$userapp->firstname= $req->post('firstname');
    	$userapp->lastname=  $req->post('lastname');
    	$userapp->email= $req->post('email');
    	$userapp->phonenumber=  $req->post('phonenumber');
    	$userapp->address=  $req->post('address');
    	$userapp->city= $req->post('city');
    	$userapp->state= $req->post('state');
    	$userapp->coursename= $req->post('courses');
    	$userapp->save();
    	return redirect('/');   	
    }

      public function AdminShowApplication(){
        $userapp=UserApplication::all();
        return view('Recived_application',['user'=>$userapp]);
      }

      }







