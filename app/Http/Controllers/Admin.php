<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\AdminData;
Use App\Auth;
class Admin extends Controller
{   
   
    public function login(){
      $usr=new AdminData();
    $usr = AdminData::find(3);
    if($usr->status==true){

      return view('Admin_home');
    }
    else{
    	return view ('alogin');
    }

    }
  public function clogin(Request $req){ 

  	$usr=new AdminData();
    $usr = AdminData::find(3);
  	$email=$req->post('Email');
    $pass=$req->post('pass') ;
  	
      if( $usr->password==$pass and $usr->email==$email){
        
        $usr->status=true;
        $usr->save();
         
        return view('Admin_home');
      }
      else{
        return abort(401);
      }

      }
    

     public function adminhome(){
       $auth=AdminData::first();
       if($auth->status==false){
        return abort(401);
         
     }
     else{
      return view('Admin_home');
       }
     }
     public function logout(){
      $auth=AdminData::first();
      $auth->status=false;
      $auth->save();
      return redirect('/');
     }

 }


 






 
