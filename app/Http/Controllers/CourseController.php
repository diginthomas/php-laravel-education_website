<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function getCourse(){
       $courses=Course::all();

    	return view('course',['course'=>$courses]);
    }
   public function AdminViewCourse(){
   	$courses=Course::all();
   	return view('view_course',['course'=>$courses]);
   }
   public function Addcourseform(){
   	return view('Add-course');
   }
   public function StoreCourse(Request $req)
   { $course= new Course();
      $course->coursename= $req->post('name');
      $course->coursedesc=$req->post('desc');
      $course->fees=$req->post('fees');
      $course->duration=$req->post('duration');
      $course->save();
      return redirect('/admin-courses');

   }
   public function DeleteCourse(Course $course)
{
	$course->delete();
	return back();
}
}

