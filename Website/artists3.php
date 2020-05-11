<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en">
<head>
<title>Line Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/artists.css">
<link rel="stylesheet" type="text/css" href="styles/artists_responsive.css">
</head>
<body>

	<div class="super_container">

		<!-- Menu -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container"><div class="menu_close"></div></div>
				<div class="logo menu_logo">
					<a href="php">
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

		<div class="home">
			<!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/speakers.jpg" data-speed="0.8"></div>

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
								<div class="current_page">Artists</div>
								<div class="breadcrumbs ml-auto">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li>Artists</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Speakers -->

		<div class="speakers">
			<div class="container reset_container">

				<!-- Speaker -->

				<div class="row row-lg-eq-height">
					<div class="col-lg-6 speaker_col reset_col">
						<div class="speaker_image" style="background-image:url(images/speaker_9.jpg)"></div>
					</div>
					<div class="col-lg-6">
						<div class="speaker_content d-flex flex-column align-items-start justify-content-center">
							<div class="speaker_title">Major Lazer</div>
							<div class="speaker_subtitle">January 5th, 2019</div>
							<div class="speaker_text">
								<div class="time" style="margin-top:-20px; color:black;">10 AM - 01 PM</br></br></div>
								<div class="info" style="font-size:14px; color:black;">
								Major Lazer is an American electronic dance music trio, which includes record producer Diplo, and DJs Jillionaire and Walshy Fire.
								It was founded in 2008 by Diplo and Switch, with Switch leaving after three years in 2011.
								Its music spans numerous genres, mixing reggae with dancehall, reggaeton, soca, house and moombahton.</br></br>
								</div>
								<div class="albums">
									Albums: </br></br>
									Major Lazer Essentials (2018)</br>
									Peace Is The Mission (2015)</br>
									Free The Universe (2013)</br>
								</div>
							</div>
							<div class="button speaker_button"><a href="tickets.php">Buy Tickets Now!</a></div>
						</div>
					</div>
				</div>

			<!-- Speaker -->

			<div class="row row-lg-eq-height">
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="speaker_content d-flex flex-column align-items-start justify-content-center">
						<div class="speaker_title">Calvin Harris</div>
						<div class="speaker_subtitle">January 5th, 2019</div>
						<div class="speaker_text">
							<div class="time" style="margin-top:-20px; color:black;">02 PM - 05 PM</br></br></div>
							<div class="info" style="font-size:14px; color:black;">
							Adam Richard Wiles (born 17 January 1984), known professionally as Calvin Harris, is a Scottish DJ, record producer, singer and songwriter.
							In 2009, Harris released his second studio album, Ready for the Weekend, which debuted at number one on the UK Albums Chart. Its lead single, "I'm Not Alone", became his first song to top the UK Singles Chart.</br></br>
							</div>
							<div class="albums">
								Albums: </br></br>
								Promises (Remixes) (2018)</br>
								One Kiss (Remixes) (2018)</br>
								Motion (2014)</br>
							</div>
						</div>
						<div class="button speaker_button"><a href="tickets.php">Buy Tickets Now!</a></div>
					</div>
				</div>
				<div class="col-lg-6 speaker_col reset_col order-lg-2 order-1">
					<div class="speaker_image" style="background-image:url(images/speaker_10.jpg)"></div>
				</div>
			</div>


			<!-- Speaker -->

			<div class="row row-lg-eq-height">
				<div class="col-lg-6 speaker_col reset_col">
					<div class="speaker_image" style="background-image:url(images/speaker_11.jpg)"></div>
			</div>
			<div class="col-lg-6">
				<div class="speaker_content d-flex flex-column align-items-start justify-content-center">
					<div class="speaker_title">Anne Marie</div>
					<div class="speaker_subtitle">January 5th, 2019</div>
					<div class="speaker_text">
						<div class="time" style="margin-top:-20px; color:black;">06 PM - 09 PM</br></br></div>
						<div class="info" style="font-size:14px; color:black;">
						Anne-Marie Rose Nicholson (born 7 April 1991), better known professionally as Anne-Marie, is an English singer and songwriter.
						She has attained several charting singles on the UK Singles Chart, including Clean Bandit's "Rockabye", featuring Sean Paul, which peaked at number one, as well as "Alarm", "Ciao Adios", "Friends" and "2002".</br></br>
						</div>
						<div class="albums">
							Albums: </br></br>
							Speak Your Mind (2018)</br>
						</div>
					</div>
					<div class="button speaker_button"><a href="tickets.php">Buy Tickets Now!</a></div>
				</div>
			</div>
		</div>

		<!-- Speaker -->

		<div class="row row-lg-eq-height">
			<div class="col-lg-6 order-lg-1 order-2">
				<div class="speaker_content d-flex flex-column align-items-start justify-content-center">
					<div class="speaker_title">Dua Lipa</div>
					<div class="speaker_subtitle">January 5th, 2019</div>
					<div class="speaker_text">
						<div class="time" style="margin-top:-20px; color:black;">10 PM - 12 AM</br></br></div>
						<div class="info" style="font-size:14px; color:black;">
						Dua Lipa (born 22 August 1995) is an English singer and songwriter. Her musical career began at age 14, when she began covering songs by other artists on YouTube.
						In 2015, she signed with Warner Music Group and released her first single soon after.</br></br>
						</div>
						<div class="albums">
							Albums: </br></br>
						 	One Kiss (Remixes)(2018)</br>
							Dua Lipa (2017)
						</div>
					</div>
					<div class="button speaker_button"><a href="tickets.php">Buy Tickets Now!</a></div>
				</div>
			</div>
			<div class="col-lg-6 speaker_col reset_col order-lg-2 order-1">
				<div class="speaker_image" style="background-image:url(images/speaker_12.jpg)"></div>
			</div>
		</div>

		<div id="bottom-pager" class="inline s_page">
			<ul class="fr">
				<li class="t_pink underline pageno"><a href="artists1.php">1</li>
				<li class="pageno"><a href="artists2.php">2</a></li>
				<li class="pageno"><a href="artists3.php">3</a></li>
			</ul>
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
											<li><a href="reviews.php">Reviews</a></li>
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
