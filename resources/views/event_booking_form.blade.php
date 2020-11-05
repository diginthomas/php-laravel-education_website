<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/event_booking.css')}}">
	<title>Booking Form </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	
  <link rel="stylesheet" type="text/css" href="{{asset('assets/boot.css')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<br><h3>Available Slots: {{$eve->seats}}</h3>
							<p><br><h2><b>Selected Event</b></h2><h3><b>Event :</b>{{$eve->eventname}}
  <br><b>Date:</b>    {{$eve->date}}    <b>Time:</b>  {{$eve->time}} AM
   <br> <b> Location :</b>  {{$eve->location}}
    <b>Instructor:</b>  {{$eve->instructor}}
   <br> <b>Entry:</b>  {{$eve->entrytype}}
    <br>  {{$eve->contact}}
								</h3>
								<br><b>*</b>we will sent reservation ticket to your email
							</p>
					
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form action="/Event-booked/{{$eve->id}}" method="post">
								@csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" name='name'>
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="email" name="email">
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="type" name="phone">
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label"></span>
											<select class="form-control">
												<option>Teacher</option>
												<option>Student</option>
												
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Guests</span>
											<select class="form-control" name="persons">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											<option>6</option>
											<option>7</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
							
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset('js/book.js')}}">"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>