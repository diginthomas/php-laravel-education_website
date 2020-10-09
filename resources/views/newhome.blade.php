<!DOCTYPE html>
<html>
<head>
	<title></title> <link rel="stylesheet" type="text/css" href="{{asset('assets/home.css')}}">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body>
	
	<header>
    <div class="wrapper">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
<ul class="nav-area">
<li><a  href="/courses">Courses </a></li>
<li><a href="/events">Events</a></li>
<li><a href="/courses/apply">Connect us </a></li>
<li><a href="/login">Login</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
join with us</h1>
<a href="/courses/apply">Apply now</a>
    </div>
</header>

<div class="card">
  <div class="card-header">
    Feedback us
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
     <form method="POST" action="/feedback">
     @csrf
<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Feedback</span>
  </div>
  <input type="text" class="form-control" name='feedbacks'placeholder='Feedback us' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
<button type="submit" class="btn btn-warning">submit</button>
@error('feedback')
</div><div class="alert alert-warning" role="alert">
  its empty...
</div>@enderror
</form>
</body>

</html>