<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en">
<head>
<title>Tickets</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="index.php">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
						<div class="logo_content">
							<div id="logo_text" class="logo_text logo_text_not_ie">Latitude Music Festival</div>
						</div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="index.php">Home</a></li>
				<li class="menu_item"><a href="news.php">News</a></li>
				<li class="menu_item"><a href="artists1.php">Line Up</a></li>
				<li class="menu_item"><a href="account.php">Account</a></li>
				<li class="menu_item"><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_social_title">Follow us on Social Media</div>
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/header.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<a href="index.php">
											<div class="logo_container d-flex flex-row align-items-start justify-content-start">
												<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
												<div class="logo_content">
													<div id="logo_text" class="logo_text logo_text_not_ie">Latitude</div>
													<div class="logo_sub">January 3rd, 2019 - Eindhoven</div>
												</div>
											</div>
										</a>
									</div>
									<div class="subscribe">
										<a href="reviews.php">
											<div class="subscribe_button">Reviews</div>
										</a>
									</div>
									<div class="header_social ml-auto">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul>
													<li><a href="index.php">Home</a></li>
													<li><a href="news.php">News</a></li>
													<li><a href="artists1.php">Line Up</a></li>
													<li><a href="tickets.php">Tickets</a></li>
													<li><a href="contact.php">Contact</a></li>
													<?php
	 											 if(isset($_SESSION['email'])){
	 												 echo " <li><a href='includes/logout.php'>logout</a></li>";
	 											 }else {
	 													echo "<li><a href='login.php'>Login</a></li>";
	 											 }

	 											 ?>
												</ul>
											</nav>
											<div class="header_extra ml-auto">
												<div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>
												<div class="button header_button"><a href="tickets.php">Buy Tickets Now!</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="search_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="search_content d-flex flex-row align-items-center justify-content-end">
											<form action="#" id="search_container_form" class="search_container_form">
												<input type="text" class="search_container_input" placeholder="Search" required="required">
												<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title" style="color:white; margin-top: -50px;">Booking</div>
									<div class="row">
										<div class="normal_block">
											<p id="normal">Normal Ticket: &#8364;55</p>
											<div class="button header_button" style="margin-left: 63%; margin-top: -62px; position: absolute;">
												<a href="checkoutreg.php">Buy Tickets Now!</a>
											</div>
										</div>
										<div class="vip_block">
											<p id="vip">VIP Ticket: &#8364;75</p>
											<div class="button header_button" style="margin-left: 63%; margin-top: -62px; position: absolute;">
												<a href="checkoutvip.php">Buy Tickets Now!</a>
											</div>
										</div>
										<div class="group_block">
											<p id="group">Group Ticket: &#8364;210</p>
											<div class="button header_button" style="margin-left: 63%; margin-top: -62px; position: absolute;">
												<a href="checkoutgro.php">Buy Tickets Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Intro -->
			<div class="intro">
				<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- Intro Item -->
			<div class="camp">
				<h1 id="camp_heading">Camping</h1>
					<div id="fancybox-content" style="border-width: 0px; width: 600px; height: 500px;">
						<a id="fancybox-content-zoom" href="https://www.molecaten.nl/getmedia/ade6f30b-f60f-477a-a692-c9bd3592a518/1030_groot.png" data-options="zoomPosition: inner" class="MagicZoom">
							<figure class="mz-figure mz-hover-zoom mz-no-expand mz-inner-zoom mz-ready">
								<img id="fancybox-img" src="https://www.molecaten.nl/getmedia/ade6f30b-f60f-477a-a692-c9bd3592a518/1030_groot.png" alt="" style="max-width: 900px; max-height: 1000px; margin-left:125px;"></img>
							</figure>
						</a>
					</div>
					<div class="camp_info">
						<p id="tent_info">How to book a tent?</p>
						<p id="tent_booking">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->

		<footer>
			<div class="footer_extra">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
								<div class="footer_social">
									<div class="footer_social_title">Follow us on Social Media</div>
										<ul class="footer_social_list">
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="footer_extra_right ml-lg-auto text-lg-right">
										<div class="footer_extra_links">
											<ul>
												<li><a href="reviews.php">reviews</a></li>
												<li><a href="contact.php">Contact</a></li>
												<li><a href="privacy.php">Privacy</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
