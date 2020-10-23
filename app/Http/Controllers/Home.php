<?php

namespace App\Http\Controllers;
use App\Mail\usermail;
use Illuminate\Http\Request;
use App\subscribers;
use Illuminate\Support\Facades\Mail;



class Home extends Controller
{
    //
      public function home(){
      	return view('newhome');
      }

   public function Subscribed(Request $req){
   	$sub=new Subscribers();
    $sub->Email=$req->post('Email');
    $sub->save();
    Mail::to($req->post('Email'))->send(new usermail());
    return back();

   	  }
    
}
