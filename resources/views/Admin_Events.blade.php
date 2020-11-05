 <!DOCTYPE html>
<html>
<head>
	<title>admin:events</title>
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

   <a class="navbar-brand" href="/admin/home">Admin Home</a>

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


<form method="post" action="/Admin-events/store">
  @csrf
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Event-Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Location</th>
      <th scope="col">Instructor</th>
      <th scope="col">Entry type</th>
      <th scope="col">No.Seats</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row"><input type="text" placeholder="event name" required name="Event-Name"></th>
      <td><input type="text" placeholder="DD-MM-YYYY" required name="Event-Date"></td>
      <td><input type="text" placeholder="HH:MM " required name="Event-Time"></td>
      <td><input type="text" placeholder="location" required name="Event-Location"></td>
      <td><input type="text" placeholder="Instructor"required name="Event-Instructor"></td>
      <td><input type="text" placeholder="event type"required name="Event-Type"></td>
      <td><input type="text" placeholder="Seats"required name="seats"></td>
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
      <th scope="col">No.Seats</th>
    </tr>
  </thead>
   @foreach($event as $eve)
  <tbody>
    <tr>
      <th scope="row">{{$eve->eventname}}</th>
      <td>{{$eve->date}}</td>
      <td>{{$eve->time}} AM</td>
      <td>{{$eve->location}}</td>
      <td>{{$eve->instructor}}</td>
      <td>{{$eve->entrytype}}</td>
      <td>{{$eve->seats}}</td>
    </tr>
       <tr>
     <form action="/admin/event_delete/{{$eve->id}}" method="post" onsubmit ="return cinfirm()">
      @csrf
      <td> <input type="submit"  class="btn btn-warning" value="Delete"></td>
       <td> created at:{{$eve->created_at}}</td>
      </form>
    
    
  </tbody>
  @endforeach
</table></div>
</body>
</html>