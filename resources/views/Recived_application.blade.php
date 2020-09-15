<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

   <a class="navbar-brand" href="admin/home">Admin Home</a>

  </div>
</nav>






</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">All Applications</h1>
    <p class="lead">you can View or delete applications</p>
  </div>
</div>


<div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">phnumber</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">created date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $userapp)
    <tr>
      <th scope="row">{{$userapp->firstname}}</th>
      <td>{{$userapp->coursename}}</td>
      <td>{{$userapp->phonenumber}}</td>
      <td>{{$userapp->address}}</td>
      <td>{{$userapp->email}}</td>
      <td>{{$userapp->created_at}}</td>
    </tr>
       <tr>
      <td> <a href="/courses/apply" class="btn btn-primary">View</a></td>
      <td> <a href="/courses/apply"  class="btn btn-warning">Delete</a></td>
    
    </tr>
    @endforeach
  </tbody>
</table></div>
</body>
</html>