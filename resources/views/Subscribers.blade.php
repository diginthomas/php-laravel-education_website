<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title></title>
</head>
<div>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

   <a class="navbar-brand" href="/admin/home">Admin Home</a>

  </div>
</nav>
</div>
<body><span class="border border-success">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Subscribers</h1>
    <p class="lead"></p>
  </div>
</div><table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Subscriber</th>
      <th scope="col">Date</th></tr></thead>
      @foreach($sub as $s)<tbody>
    <tr>
      <th scope="row">{{$s->Email}}</th>
      <td>{{$s->created_at}}</td></tr></tbody>
        <form action="admin/Delete-subscriber/{{$s->id}}" method="post" >
      @csrf
      <td> <input type="submit"  class="btn btn-warning" value="Delete"></td>
       <td> 
      </form>
        @endforeach</table>

</body>
</html>