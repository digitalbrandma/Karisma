<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width">
	<title>Karisma</title>
	<link type="text/css" rel="stylesheet" href="css/jquery.fancybox.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/input.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script>
		var map;
		function initialize() {
		  var mapOptions = {
			zoom: 16,
			scrollwheel: false,
			center: new google.maps.LatLng(-0.903261, 119.850905)
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		}

		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="page contacts-page">
		<header class="header">
			<div class="wrapper">
				<div class="holder">
					<div class="logo-box">
						<strong class="logo"><a href="#">Karisma Flight Support</a></strong>
					</div>
					<ul class="contacts-list">
						<li>
							<span class="call">Questions? Call Us</span>
						</li>
						<li>
							<a href="callto:+622180884882" class="phone">+62 (21) 80 88 4882</a>
						</li>
						<li>
							<a href="#login-form" class="btn-white fancybox">Contact Us</a>
						</li>
					</ul>
				</div>
				<h2>Contact Us<span>Indonesia flight support</span></h2>
				<div class="nav-holder">
					<nav class="nav">
						<ul>
							<li><a href="#">About US</a></li>
							<li><a href="#">One Stop Service</a></li>
							<li><a href="#">Without middleman</a></li>
							<li><a href="#">Staff international experience</a></li>
						</ul>
					</nav>
					<a href="#sent-form" class="btn-white fancybox">Sent Email</a>
				</div>
			</div>
		</header>
		<section class="main">
			<div class="our-address">
				<div class="wrapper">
					<h2>Our Adress</h2>
					<address>
						PT. Karisma Bahan Aviasi <br />
						Terminal Building, suite A64/PK<br />
						Halim Perdanakusuma International <br />Airport<br />
						Jakarta 13610, Indonesia<br />
					</address>
					<div class="phone-box">
						<a href="callto:622180884882">+62 (21) 80 88 4882</a>
						<a href="callto:622180004002">+62 (21) 80 00 4002</a>
					</div>
				</div>
			</div>
			<div class="map-holder">
				<div id="map-canvas"></div>
			</div>
			<div class="intro">
				<div class="wrapper">
					<h2>We Serve Flight Support in Indonesia</h2>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="wrapper">
				<strong class="logo"><a href="#">Karisma</a></strong>
				<address>
					<span>PT. Karisma Bahan Aviasi</span>
					<span>Terminal Building, suite A64/PK</span>
					<span>Halim Perdanakusuma International Airport</span>
					<span>Jakarta 13610, Indonesia</span>
				</address>
				<ul class="contacts">
					<li>
						<a href="callto:+622180884882" class="phone">+62 (21) 80 88 4882</a>
					</li>
					<li>
						<a href="mailto:info@kbairops.com" class="mail">info@kbairops.com</a>
					</li>
				</ul>
			</div>
		</footer>
	</div>
	<form id="login-form" action="#">
		<fieldset>
			<h2>Order Ground Handling</h2>
			<span>Write your name, email and phone number and we will contact you to discuss an offer</span>
			<input type="text" class="text" placeholder="Name"/>
			<input type="text" class="text" placeholder="Email Address"/>
			<input type="text" class="text" placeholder="Phone"/>
			<input type="submit" class="submit" value="Send" />
			<span>Our manager will contact you in 15 minutes</span>
			<p>Your Personal inforamtion is safe. We do not disclose any personal information about our customer</p>
		</fieldset>
	</form>
	<form id="sent-form" action="#">
		<fieldset>
			<h2>Log In</h2>
			<input type="text" class="text" placeholder="Email Address"/>
			<input type="text" class="text" placeholder="Password"/>
			<div class="action-row">
				<input type="submit" class="submit" value="Log In Now" />
				<a href="#">Forget password?</a>
			</div>
		</fieldset>
	</form>
</body>
</html>