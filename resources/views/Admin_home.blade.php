<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin-home</title>
   <link rel="stylesheet" type="text/css" href="{{asset('assets/adminhome.css')}}">
   <script type="text/javascript">
  function cinfirm()
  {let a= confirm("Do you want to logout ?");
  if(a == true){
  return true;}
  else{
    return false;
  }
  }</script>
  </head>
  <body bgcolor="#CDD5DB">
<div class="container">
 <a href="/admin-courses"> <button class="btn btn1">Courses</button></a>
 <a href="/admin-events"> <button class="btn btn2"> Events</button></a>
<a href="/admin-application">  <button class="btn btn3">Applications</button></a>
 <a href="#"> <button class="btn btn4">Feedbacks</button></a>
 <a href="/admin/logout"> <button onclick="return confirm()" class="btn btn4">logout</button>



</div>
  </body>
</html>
