<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

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
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="current_page">News</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>News</li>
								</ul>
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

	<div class="intro_item">
			<div class="intro_image"><img src="images/intro_1.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">December 12, 2018</div>
				<div class="intro_title">TICKETS ON SALE NOW!</div>
				<div class="intro_subtitle">Tickets on sale now!</div>
				<div id="information1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
	</div>

	<!-- Intro Item -->

	<div class="intro_item">
			<div class="intro_image"><img src="images/intro_2.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">January 5, 2018</div>
				<div class="intro_title">Happy Bonfire Night!</div>
				<div class="intro_subtitle">On the second night there will be a bonfire party.</div>
				<div id="information2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
	</div>

	<!-- Intro Item -->

	<div class="intro_item">
			<div class="intro_image"><img src="images/intro_3.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">December 25, 2018</div>
				<div class="intro_title">Lorem Ipsum</div>
				<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
				<div id="information3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
	</div>

	<!-- Intro Item -->

	<div class="intro_item">
			<div class="intro_image"><img src="images/intro_4.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">December 31st, 2018</div>
				<div class="intro_title">Lorem Ipsum</div>
				<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
				<div id="information4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
	</div>

	<!-- Intro Item -->
	<div class="intro_item">
			<div class="intro_image"><img src="images/intro_5.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">January 6th, 2018</div>
				<div class="intro_title">Lorem Ipsum</div>
				<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
				<div id="information5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
	</div>

	<!-- Intro Item -->

	<div class="intro_item">
		<a href="news.html">
			<div class="intro_image"><img src="images/intro_6.jpg" alt=""></div>
			<div class="intro_body">
				<div class="intro_event_date">January 25th, 2018</div>
				<div class="intro_title">Lorem Ipsum</div>
				<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
				<div id="information6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Donec quis metus ac arcu luctus accumsan.</div>
			</div>
		</a>
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
