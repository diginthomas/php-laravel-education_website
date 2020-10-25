<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	* {
	box-sizing: border-box;
}

.wrapper {
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: Montserrat;
	background: #262626;
	width: 100%;
	height: 100vh;
}

.outer {
	position: relative;
	background: #fff;
	height: 350px;
	width: 550px;
	overflow: hidden;
	display: flex;
	align-items: center;
}

img {
	position: absolute;
	top: 0px;
	right: -20px;
	z-index: 0;
	animation-delay: 0.5s;
}

.content {
	animation-delay: 0.3s;
	position: absolute;
	left: 20px;
	z-index: 3
	
}

h1 {
	color: #111;
}

p {
	width: 280px;
	font-size: 13px;
	line-height: 1.4;
	color: black;
	margin: 20px 0;
	
}

.bg {
	display: inline-block;
	color: #fff;
	background: cornflowerblue;
	padding: 5px 10px;
	border-radius: 50px;
	font-size: .7em;
}
.button {
	width: fit-content;
	height: fit-content;
	margin-top: 10px;
	
	
	
}

.button a {
	display: inline-block;
	overflow: hidden;
	position: relative;
	font-size: 11px;
	color: #111;
	text-decoration: none;
	padding: 10px 15px;
	border: 1px solid #aaa;
	font-weight: bold;
	
	
}

.button a:after{
	content: "";
	position: absolute;
	top: 0;
	right: -10px;
	width: 0%;
	background: #111;
	height: 100%;
	z-index: -1;
	transition: width 0.3s ease-in-out;
	transform: skew(-25deg);
	transform-origin: right;
}

.button a:hover:after {
	width: 150%;
	left: -10px;
	transform-origin: left;
	
}

.button a:hover {
	color: #fff;
	transition: all 0.5s ease;
}


.button a:nth-of-type(1) {
	border-radius: 50px 0 0 50px;
	border-right: none;
}

.button a:nth-of-type(2) {
	border-radius: 0px 50px 50px 0;
}

.cart-icon {
	padding-right: 8px;
	
}

.footer {
	position: absolute;
	bottom: 0;
	right: 0;
}
</style>
	<title></title>
</head>
<body>
<div class="wrapper">
	<div class="outer">
		<div class="content animated fadeInLeft">
			<span class="bg animated fadeInDown">Event Booked</span>
			<h1>Data Science<br/>No.persons:4</h1>
			<p>Shadow your real allegiance to New York's Pirate radio with this cool cap featuring the Graphic Know Wave logo.</p>
			
			<div class="button">
				 <button type="button" class="btn btn-outline-primary">No.person:4</button>
			</div>
			
		</div>
		<img src="https://i.postimg.cc/c4MRPDy4/logo.png" width="300px" class="animated fadeInRight">
	</div>
	<p class="footer">Based on the Silk UI Kit - DesignModo Market</p>
</div>
</body>
</html>