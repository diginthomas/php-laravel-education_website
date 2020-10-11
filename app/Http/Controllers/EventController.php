<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function AllEvents(){
    	return view("events");
    }
    public function Adminevents(){
    	return view("Admin_Events");
    }
}
