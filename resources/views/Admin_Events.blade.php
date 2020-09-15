 <!DOCTYPE html>
<html>
<head>
	<title>admin:events</title>
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
<span class="border border-success">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Events</h1>
    <p class="lead">you can add events here :)</p>
  </div>
</div>
<div>
<form method="post" action="admin/events/store">
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Event-Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Location</th>
      <th scope="col">Instructor</th>
      <th scope="col">Entry type</th>
      <th scope="col">Contact Num</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row"><input type="text" placeholder="event name" name=""></th>
      <td><input type="text" placeholder="DD-MM-YYYY" name=""></td>
      <td><input type="text" placeholder="HH:MM " name=""></td>
      <td><input type="text" placeholder="location" name=""></td>
      <td><input type="text" placeholder="Instructor" name=""></td>
      <td><input type="text" placeholder="event type" name=""></td>
      <td><input type="text" placeholder="number" name=""></td>
    </tr>
       <tr>
     
      <td> <button class="btn btn-info" type="submit">Add</button></td>
    
    </tr>
  </tbody>
</table></form>


<div>
	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">All added events</h1><p><button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button></p>
    <p class="lead">you can delete added events</p>
  </div>
</div>
</div>
<div>

</div>
</span>
<div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Event-Name</th>
      <th scope="col">Date</th>
      <th scope="col">time</th>
      <th scope="col">place</th>
      <th scope="col">Instructor</th>
      <th scope="col">Entry type</th>
      <th scope="col">Contact num</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row">Data science with python</th>
      <td>22/10/2020</td>
      <td>9:00 AM</td>
      <td>Town Hall Ernakulam</td>
      <td>Tony Stark</td>
      <td>100 for each person</td>
      <td>+9155555442</td>
    </tr>
       <tr>
     
      <td> <a href="/admin/event/delete"  class="btn btn-warning">Delete</a></td>
    
    
  </tbody>
</table></div>
</body>
</html>