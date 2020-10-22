<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>courses</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body><nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

   <a class="navbar-brand" href="/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>  Home</a>

  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">All Courses  <i class='fas fa-laptop-code' style='font-size:40px'></i>

    </h1>
    <p class="lead">we provide 24/7 community support for our students :)</p>
  </div>
</div>



     @foreach($course as $c)

    <div class="card">
  <div class="card-header">
    Coureses <i class='fas fa-code'></i>
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>{{$c->coursename}} </b></h5>
    <p class="card-text">  <i>{{$c->coursedesc}} </i> </p>
    <p class="card-text">
     <button type="button" class="btn btn-outline-secondary"><i class="fa fa-inr"></i>
      {{$c->fees}}</button>
     <button type="button" class="btn btn-outline-secondary"><i class="fa fa-calendar"></i> {{$c->duration}}</button>
         <a href="'/admin/{{$c->coursename}}" class="btn btn-info">offer</a>
     </p>
    <a href="/courses/apply" class="btn btn-danger">Apply now</a>
  </div>
</div></b></p></div></div>
@endforeach
</body>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>

