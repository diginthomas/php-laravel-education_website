<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\AdminData;
Use App\Auth;
class Admin extends Controller
{ 
   
    public function login(){
    	return view ('login');

    }
  public function clogin(Request $req){ 
  	$usr=new AdminData();
  	$username=$req->post('username');
  	$usr = AdminData::find(3);
      if($usr->username==$username){
        
        $usr->username=$username;
        $usr->status=true;
        $usr->save();
         
        return 'okkk';
      }

     
      
  }
     public function adminhome(){
       $auth=AdminData::first();
       if($auth->status==false){
        return 'please login bro';
         
     }
     else{
      return 'welcome admin';
       }
     }
     public function logout(){
      $auth=AdminData::first();
      $auth->status=false;
      $auth->save();
      return redirect('/login');
     }

 }


 






 
