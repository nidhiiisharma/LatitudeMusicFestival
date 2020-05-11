<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en">
<head>
<title>Privacy Policy</title>
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
							<div class="current_page">Privacy Policy</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Privacy Policy</li>
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
	<div class="content-info">
			<p style="margin-top:-50px;"><a href="subscribe.php">Find our newsletter subscription here.</a></p>
			<hr style="color:black;">
				<h2><span style="font-weight: 400; color: black; margin-left: 40%; margin-bottom: 40px;">Who we are</span></h2>
				<p><span style="font-weight: 400; color: black;">Here at Latitude Festival Company (company number </span><span style="font-weight: 400; color: black;">07871423) we take the protection of your personal data very seriously and are committed to maintaining the trust of our customers and visitors to our website in this respect. We have compiled this Privacy Policy to let you know when and why we collect your personal information, what we do with it, how we store it and the circumstances in which we may disclose it to others. This would only ever be in the course of our business operations to provide you with the service(s) you have chosen such as tickets, trader applications or working with us for example. We never sell, rent or trade email lists or personal information to other companies for marketing purposes.</span></p>
				<p><span style="font-weight: 400; color: black;">We have put in place generally accepted standards of technology and operational security in order to protect your personal data from loss, misuse, or unauthorised alteration or destruction. However no website can be completely secure and so we would urge you to notify us if you have any concerns. We will notify you promptly in the event of any breach of your personal data which might expose you to serious risk.</span></p>

			<hr style="color:black;">
				<h2><span style="font-weight: 400; color: black; margin-left: 30%; margin-bottom: 40px;">Data Protection and Privacy</span></h2>
				<p><span style="font-weight: 400; color: black;">We have a legal obligation to protect your personal data and use it line with all applicable laws concerning the protection of personal data (including the Data Protection Act 1998, General Data Protection Regulations, the Data Protection Bill herein collectively referred to in this policy as the ‘data protection laws’). </span></p>
				<p><span style="font-weight: 400; color: black;">If you are just generally visiting our website and having a look around we will not be collecting any personal data about you. We may automatically collect information about your visits, such as browsing patterns, however, information collected in this way does not reveal your contact details or any type of personal data. This information is only used to analyse, manage and develop the website and is not linked to any individual. </span></p>
				<p><span style="font-weight: 400; color: black;">Please be aware that any personal data you provide on chat rooms, message boards and social media groups becomes public information and you should exercise caution when deciding to disclose any of you personal information on these types of media. </span></p>
				<p><span style="font-weight: 400; color: black;">We do ask for your personal details in forms when you subscribe for specific services or entering applications electronically. Personal information collected via this website and the registration process is controlled by Latitude Festival (the data controller) and is only held for the legitimate purpose made clear at the time of collection. We may share this data with our partners for any necessary processing purposes only in relation to the provision of services that you have requested, such as:</span></p>
				<p><span style="font-weight: 400;color: black;">We reserve the right to access and disclose personal data to comply with all applicable laws and lawful government requests or requests by the police investigating suspected illegal activities, to operate our systems properly or to protect the rights, safety or property of Latitude, website users or others.</span></p>

			<hr style="color:black;">
				<h2><span style="font-weight: 400; color: black; margin-left: 39%; margin-bottom: 40px;">Data Retention</span></h2>
				<p><span style="font-weight: 400; color:black;">We only hold your personal data on our systems for as long as is necessary for the relevant purpose. If you want us to remove your details from your subscriptions (providing you do not have any bookings, any other contractual agreements or there is a legal basis for not doing so) then you can email us at eventplanning@gmail.com any time to request this. Please put ‘Personal Data’ in the subject heading.</span></p>
			<hr style="color:black;">
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
