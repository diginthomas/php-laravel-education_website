<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head><body>
  <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

   <a class="navbar-brand" href="/">Home</a>

  </div>
</nav>
 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Submit Your Application</h1>
    <p class="lead">we will contact you :)</p>
  </div>
</div>
  <div class="card text-center">
  <div class="card-header">
    Edureka
  </div>
  <div class="card-body">
    <h5 class="card-title">Course Registration Form</h5>
    <p class="card-text">'An investment in knowledge pays the best interest' –  Benjamin Franklin
</p><p class="='card-text"><b>Our Course Speciality</b></p>
    <a href="#" class="btn btn-info"> Online support</a>
    <a href="#" class="btn btn-info">Refund policy</a>
    <a href="#" class="btn btn-info">Job placement </a>
    <a href="#" class="btn btn-info">community</a>
  </div>
  <div class="card-footer text-muted">
    Apply Now
  </div>
</div><div><br></div>
<form action="/courses/apply/submited" method="post">
  @csrf
  <div class="row">
    <div class="col">  <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" name='firstname' placeholder="First name">
    </div>
    <div class="col">  <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" name='lastname' placeholder="Last name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name='email' id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone Number</label>
      <input type="text" class="form-control" name='phonenumber' id="inputPassword4">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name='state'>
        <option selected>Choose...</option>
        <option value="kerala">kerala</option>
        <option value="tamilnadu">tamilnadu</option>
         
                      
      </select>
    </div>
  
  </div>
   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Courses</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name='courses'>
    <option selected name='courses'>Choose...</option>
    @foreach($Course as $c)
                            <option  value="{{$c->coursename}}" >{{$c->coursename}}</option>
                            @endforeach
                       
  </select>
   <in
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
  <br><br>
</div>


<div class="card">
  <div class="card-header">
    find a problem!
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>contact us</p>
      <p> <b>email:</b>diginthomas@gmail.com</p>
      <p><b>Phone:</b>+91252551155</p>
      <footer class="blockquote-footer">Team <cite title="Source Title">Edukera</cite></footer>
    </blockquote>
  </div>
</div>











</body>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>