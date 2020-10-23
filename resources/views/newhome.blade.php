<!DOCTYPE html>
<html>
<head>
	<title></title> <link rel="stylesheet" type="text/css" href="{{asset('assets/home.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/footer2.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">   
   



</head>
<body>
	
	<header>
    <div class="wrapper">
        <div class="logo">
            <img src="https://i.postimg.cc/GhHQTFZc/logo-transparent.png" alt="">

        </div>
<ul class="nav-area">
<li><a  href="/courses">Courses </a></li>
<li><a href="/events">Events</a></li>
<li><a href="/courses/apply">Connect us </a></li>
<li><a href="/A_login">Login</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
Online Courses</h1>
<a href="/courses">Get Started</a>
    </div>
</header>
 


    
    <!-- Footer 2 -->
    <footer >
        
        <div class="search-text"> 
            <div class="container">
                <div class="row text-center">
                 
                   <div class="form">
                       <h4>SIGN UP TO OUR NEWSLETTER</h4>
                        <form id="search-form" class="form-search form-horizontal" action="/subscribed" method="post">@csrf
                            <input type="text" class="input-search" placeholder="Email Address" name="Email">
                            <button type="submit" class="btn-search"><i class="fa fa-bell-o"></i> SUBMIT</button>
                        </form>
                    </div>
                
                </div>         
            </div>     
        </div>
        
        <div class="footer-top2"> 
           <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                   <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                   <a href="#"><i class="fa fa-twitter fa-2x"></i>Twitter</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                   <a href="#"><i class="fa fa-flickr fa-2x"></i>Flickr</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                    <a href="#"><i class="fa fa-tumblr fa-2x"></i>Tumblr</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                    <a href="#"><i class="fa fa-github fa-2x"></i>Github</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                    <a href="#"><i class="fa fa-google-plus fa-2x"></i>Google</a>
                </div>
           </div> 
        </div>  
        
        <div class="container" style="border-top:1px solid grey;">
            <div class="row text-center">   
                <div class="col-lg-6 col-lg-offset-3">
                      <ul class="menu">
                                 
                             <li>
                                <a href="#">Home</a>
                              </li>
                                   
                              <li>
                                 <a href="#">courses</a>
                              </li>
                                   
                              <li>
                                <a href="#">events</a>
                              </li>
                                   
                              <li>
                                 <a href="#">application</a>
                              </li>
                                   
                              <li>
                                <a href="#">Contact</a>
                             </li>
                   
                        </ul>
                </div>
            </div>
        </div>
        
    </footer>
    
    
    <div class="copyright">
     <div class="container">
       
         <div class="row text-center">
          <p>Copyright © 2020 All rights reserved</p>
         </div>
         
     </div>
    </div>
    <!-- Footer 2 End -->
    
    
   






</body>

</html>