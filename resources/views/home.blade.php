<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/nav.css')}}">
</head><body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tech-courses</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="/courses">Courses <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="/courses/apply">Connect us</a>
      <a class="nav-link" href="/events">Events</a>
       <a class="nav-link" href="/login">Admin</a>
     
    </div>
  </div>
</nav>
</nav>

  <div>

<div class="wrapper">
    <ul>
<li>home</li>
<li><a href="/c">hh</a></li>
<li>Services
            <ul>
<li>Marketing</li>
<li>Design
                    <ul>
<li>Web</li>
<li>Graphics</li>
<li>Interior</li>
</ul>
</li>
<li>Branding</li>
</ul>
</li>
<li>Portfolio</li>
<li>Contact</li>
</ul>
</div></div>





<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h5> </h5>
        <p></p>
       <p><a href="a.html" class="btn btn-outline-success">apply now</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
        <p><a href="a.html" class="btn btn-outline-success">apply now</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      <p><a href="a.html" class="btn btn-outline-success">apply now</a></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


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
      <footer class="blockquote-footer"><cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><a href='/events'>Upcoming Events...</a></h1>
    <p class="lead"></p>
  </div>
</div>



</body>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>