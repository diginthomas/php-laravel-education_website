<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="{{asset('assets/course.css')}}">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body><div>  @foreach($course as $c)
<div id="container">	
	
<!-- Start	Product details -->
	<div class="product-details">
		
		<!-- 	Product Name -->
	<h2><b>{{$c->coursename}}</b></h2>

	
<!-- The most important information about the product -->
		<p class="information">"{{$c->coursedesc}}. "</p>

		
		
<!-- 		Control -->
<div class="control">
	
<!-- Start Button buying -->
	<button class="btn"  >
<!-- 		the Price -->
	 <span class="price"><i class="fa fa-inr"></i>49554 </span>
<a href="/courses/apply">
   <span class="buy" >Apply Now</a></span>
 </button>
	<!-- End Button buying -->
	
</div>
			
</div>
	
<!-- 	End	Product details   -->
	
	
	
<!-- 	Start product image & Information -->
	
<div class="product-image">
	
	<img src="https://i.postimg.cc/br2TwLw3/photo-1534972195531-d756b9bfa9f2-ixlib-rb-1-2.jpg" alt="Omar Dsoky">
	
<!-- 	product Information-->
<div class="info">
	<h2>The Description</h2>
	<ul>
		<li><strong>fees: </strong>{{$c->fees}}</li>
		<li><strong> duration</strong>{{$c->duration}}</li>
		<li><strong>Zones: </strong>9 - 11</li>
		<li><strong>Height: </strong>2 - 3 feet</li>
		<li><strong>Blooms in: </strong>Mid‑Summer - Mid‑Fall</li>
		<li><strong>Features: </strong>Tolerates heat</li>
	</ul>
</div>
</div>
<!--  End product image  -->


</div>
@endforeach
</div>

</body>
</html>