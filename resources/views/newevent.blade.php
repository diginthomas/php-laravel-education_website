<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="{{asset('assets/course.css')}}">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title></title>
</head>
<body>@foreach($event as $eve)
<div id="container">	
	
<!-- Start	Product details -->
	<div class="product-details">
		
		<!-- 	Product Name -->
	<h2>{{$eve->eventname}}</h2>

	
<!-- The most important information about the product -->
		<p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed. Once tall enough to cut, bring them inside and you'll notice a light scent that some say is reminiscent of apples. "</p>

		
		
<!-- 		Control -->
<div class="control">
	
<!-- Start Button buying -->
	<button class="btn">
<!-- 		the Price -->
	 <span class="price"><i class="material-icons">&#xe7fb;</i>45</span>

   <span class="buy">Apply Now</span>
 </button>
	<!-- End Button buying -->
	
</div>
			
</div>
	
<!-- 	End	Product details   -->
	
	
	
<!-- 	Start product image & Information -->
	
<div class="product-image">
	
	<img src="https://i.postimg.cc/76gB1wzS/photo-1587825140708-dfaf72ae4b04-ixlib-rb-1-2.jpg" alt="Omar Dsoky">
	
<!-- 	product Information-->
<div class="info">
	<h2>The Description</h2>
	<ul>
		<li><strong>Date: </strong>{{$eve->date}}</li>
		<li><strong>Time: </strong>{{$eve->time}} Am</li>
		<li><strong>Zone: </strong>{{$eve->location}}</li>
		<li><strong>Instructor: </strong>{{$eve->instructor}}</li>
		<li><strong>Entry: </strong>{{$eve->entrytype}}</li>
		<li><strong>Contact </strong>{{$eve->contact}}</li>
	</ul>
</div>
</div>
<!--  End product image  -->


</div>
@endforeach


</body>
</html>