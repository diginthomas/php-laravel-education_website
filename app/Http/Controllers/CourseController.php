<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function getCourse(){
       $courses=Course::all();

    	return view('index',['course'=>$courses]);
    }
   public function AdminViewCourse(){
   	$courses=Course::all();
   	return view('view_course',['course'=>$courses]);
   }

}

