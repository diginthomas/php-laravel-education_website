<?php

namespace App\Http\Controllers;
use App\Events;
use App\Mail\Event_Ticket;
use App\Booking_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
          $event->seats=$req->post('seats');
          $event->save();
          return redirect()->back();
      }

     
     public function Delete_event(Events $eve){
      $eve->delete();
      return back();
     }
      public function Event_book_form(Events $eve){
        return view("event_booking_form",['eve'=>$eve]);

      }

   public function Event_booked(Events $eve,Request $req){
 
    $book= new Booking_event();
    $book->id=rand(999999,9999999999);
    $book->name=$req->post('name');
    $book->email=$req->post('email');
    $book->phone=$req->post('phone');
    $book->no_person=$req->post("persons");
    $book->event_name=$eve->eventname;
    $book->location=$eve->location;
    $book->entry=$eve->entrytype;
    $book->date=$eve->date;
    $book->time=$eve->time;
    $book->save();
    $eve->seats= $eve->seats-$req->post('persons');
    $eve->save();
     Mail::to($req->post('email'))->send(new Event_Ticket($book));
    return redirect('/events');

   
}


}