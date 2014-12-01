<?php include "admin/lang.php"; ?>
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
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE 8]><link media="all" rel="stylesheet" href="css/ie.css"><![endif]-->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox({
				scrolling:'visible',
				padding:0
			});
		});
	</script>
</head>
<body>
	<div class="page <?php if($thisPage == "about"){echo"about-page";} ?> ">
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
				<h2><?php lang("5"); ?>  <!--Indonesia Flight Support --><span> <?php lang("6"); ?>  <!--We ready to serve you 24/7 --></span></h2>
				<div class="nav-holder">
					<nav class="nav">
						<ul>
							<li><a href="about.php"><?php lang("7"); ?>  <!--About US --></a></li>
							<li><a href="#services"><?php lang("8"); ?>  <!--Our Services --></a></li>
							<li><a href="contact.php"><?php lang("9"); ?>  <!--Contanct us --></a></li>
							
						</ul>
					</nav>
					<a href="#sent-form" class="btn-white fancybox">  <?php lang("10"); ?>  <!--Send Email --></a>
				</div>
			</div>
		</header>