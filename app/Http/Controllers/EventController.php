<?php

namespace App\Http\Controllers;
use App\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function AllEvents(){
        $event=Events::all();
    	return view("newevent",['event'=>$event]);
    }



    public function Adminevents(){
        $event=Events::all();
     	
    	return view("Admin_Events",['event'=>$event]);
    }
     


     public function AddEvent(Request $req){
     
        $event=new Events();
        $event->eventname= $req->post('Event-Name');
         $event->date= $req->post('Event-Date');
          $event->time=$req->post('Event-Time');
          $event->location=$req->post('Event-Location');
          $event->instructor=$req->post('Event-Instructor');
          $event->entrytype=$req->post('Event-Type');
          $event->contact=$req->post('Event-Number');
          $event->save();
          return redirect()->back();
  

     }
     public function Delete_event(Events $eve){
      $eve->delete();
      return back();
     }

}


