<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script type="text/javascript">
  function cinfirm()
  {let a= confirm("Do you want to continue ?");
  if(a == true){
  return true;
}
  else{
    return false;
  }
  }</script>
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
    <h1 class="display-4">All Courses</h1>
    <p class="lead">you can update or delete courses</p>
  </div>
</div><div class="shadow p-3 mb-5 bg-white rounded">
<a href="/admin-addcourse" class="btn btn-primary btn-lg btn-block">Add Coursse</a>
</div>




<div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">course</th>
      <th scope="col">fees</th>
      <th scope="col">duration</th>
      <th scope="col">about</th>
      <th scope="col">last updated</th>
    </tr>
  </thead>
  <tbody>
     
     @foreach($course as $c)

    <tr>
      <th scope="row">{{$c->coursename}}</th>
      <td>{{$c->fees}}</td>
      <td>{{$c->duration}}</td>
      <td>{{$c->coursedesc}}</td>

      <td>{{$c->updated_at}}</td>
    </tr>
       <tr>
      <td> <a href="/courses/apply" class="btn btn-outline-warning btn-sm">Update</a></td>
       <form action="/admin-deletecourse/{{$c->id}}" method="post"  onsubmit ="return cinfirm()">
        @csrf
      <td><input type="submit"  class="btn btn-warning" value="Delete"></td></form>
    
    </tr>
    @endforeach
  </tbody>
</table></div>
</body>
</html>