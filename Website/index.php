<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en">
<head>
<title>Latitude Music Festival</title>
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
				<a href="#">
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
												<div class="button header_button"><a href="#price">Buy Tickets Now!</a></div>
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
							<div class="home_title">Latitude Music Festival</div>
							<div class="home_text">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Countdown -->

		<div class="countdown">
			<table class="countdownContainer">
				<tr class="info">
					<td colspan="4">Event Countdown</td>
				</tr>
				<tr class="info">
					<td id="days">120</td>
					<td id="hours">4</td>
					<td id="minutes">12</td>
					<td id="seconds">22</td>
				</tr>
				<tr>
					<td>Days</td>
					<td>Hours</td>
					<td>Minutes</td>
					<td>Seconds</td>
				</tr>
			</table>
			<script type="text/javascript">

				function countdown(){
					var now = new Date();
					var eventDate = new Date(now.getFullYear(), 11, 35);

					var currentTime = now.getTime();
					var eventTime = eventDate.getTime();

					var remTime = eventTime - currentTime;

					var s = Math.floor(remTime / 1000);
					var m = Math.floor(s / 60);
					var h = Math.floor(m / 60);
					var d = Math.floor(h / 24);

					h %= 24;
					m %= 60;
					s %= 60;

					h = (h < 10) ? "0" + h : h;
					m = (m < 10) ? "0" + m : m;
					s = (s < 10) ? "0" + s : s;

					document.getElementById("days").textContent = d;
					document.getElementById("days").innerText = d;

					document.getElementById("hours").textContent = h;
					document.getElementById("minutes").textContent = m;
					document.getElementById("seconds").textContent = s;

					setTimeout(countdown, 1000);
				}
				countdown();
				</script>
			</div>

			<!-- Intro -->

			<div class="intro">
				<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information1">
					<div class="intro_image"><img src="images/intro_1.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">December 12, 2018</div>
						<div class="intro_title">TICKETS ON SALE NOW!</div>
						<div class="intro_subtitle">Tickets on sale now!</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information2">
					<div class="intro_image"><img src="images/intro_2.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">January 5, 2018</div>
						<div class="intro_title">Happy Bonfire Night!</div>
						<div class="intro_subtitle">On the second night there will be a bonfire party.</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information3">
					<div class="intro_image"><img src="images/intro_3.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">December 25, 2018</div>
						<div class="intro_title">Lorem Ipsum</div>
						<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information4">
					<div class="intro_image"><img src="images/intro_4.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">December 31st, 2018</div>
						<div class="intro_title">Lorem Ipsum</div>
						<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information5">
					<div class="intro_image"><img src="images/intro_5.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">January 6th, 2018</div>
						<div class="intro_title">Lorem Ipsum</div>
						<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

			<!-- Intro Item -->

			<div class="intro_item">
				<a href="news.php#information6">
					<div class="intro_image"><img src="images/intro_6.jpg" alt=""></div>
					<div class="intro_body">
						<div class="intro_event_date">January 25th, 2018</div>
						<div class="intro_title">Lorem Ipsum</div>
						<div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
					<button class="read_button">Read More</button>
					</div>
				</a>
			</div>

		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing" id="price">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pricing.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="pricing_section_title">Choose a plan</div>
				</div>
			</div>
			<div class="row pricing_row">

				<!-- Pricing Item -->

				<div class="col-lg-4 pricing_col">
					<div class="pricing_item">
						<div class="pricing_item_content">
							<div class="pricing_level">Normal Ticket</div>
							<div class="pricing_price">&#8364;55</div>
							<ul class="pricing_list">
								<li>At gate: &#8364;65</li>
								<li>Food</li>
								<li>Drinks</li>
								<li>Loan items</li>
							</ul>
							<div class="pricing_info">
								<a href="#">i</a>
							</div>
							<div class="button pricing_button"><a href="tickets.php">Order plan</a></div>
						</div>
					</div>
				</div>

				<!-- Pricing Item -->

				<div class="col-lg-4 pricing_col">
					<div class="pricing_item pricing_item_mid">
						<div class="pricing_item_content">
							<div class="pricing_level">VIP Ticket</div>
							<div class="pricing_price">&#8364;75</div>
							<ul class="pricing_list">
								<li>At gate: &#8364;85</li>
								<li>Discount on food, drinks and loan items</li>
								<li>Food</li>
								<li>Drinks</li>
							</ul>
							<div class="pricing_info">
								<a href="#">i</a>
							</div>
							<div class="button pricing_button"><a href="tickets.php">Order plan</a></div>
						</div>
					</div>
				</div>

				<!-- Pricing Item -->

				<div class="col-lg-4 pricing_col">
					<div class="pricing_item">
						<div class="pricing_item_content">
							<div class="pricing_level">Group Ticket</div>
							<div class="pricing_price">&#8364;35/p</div>
							<ul class="pricing_list">
								<li>At gate: &#8364;40/p</li>
								<li>Only 6 people</li>
								<li>Food</li>
								<li>Drinks</li>
							</ul>
							<div class="pricing_info">
								<a href="#">i</a>
							</div>
							<div class="button pricing_button"><a href="tickets.php">Order plan</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Calendar -->

	<div class="calendar">
		<div class="container reset_container">
			<div class="row">
				<div class="col-xl-3 calendar_col">
					<div class="calendar_container" style="margin-left:-80px">
						<div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
							<div><div class="calendar_icon"><img src="images/calendar.svg" alt=""></div></div>
							<div class="calendar_title">3rd January Events</div>
						</div>
						<div class="calendar_items">

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_1.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Little Mix</div>
									<div>10 AM - 01 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_2.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Russ</div>
									<div>02 PM - 05 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_3.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Lauv</div>
									<div>06 PM - 09 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_4.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Julia Michaels</div>
									<div>10 PM - 12 AM</div>
									<div>Auditorium</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-xl-3 calendar_col">
					<div class="calendar_container" style="margin-left:60px">
						<div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
							<div><div class="calendar_icon"><img src="images/calendar.svg" alt=""></div></div>
							<div class="calendar_title">4th January Events</div>
						</div>
						<div class="calendar_items">

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_5.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Cheat Codes</div>
									<div>10 AM - 01 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_6.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Lil Kleine</div>
									<div>02 PM - 05 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_7.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Kris Kross Amsterdam</div>
									<div>06 PM - 09 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_8.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Lord Luxury</div>
									<div>10 PM - 12 AM</div>
									<div>Auditorium</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-xl-3 calendar_col">
					<div class="calendar_container" style="margin-left:200px;">
						<div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
							<div><div class="calendar_icon"><img src="images/calendar.svg" alt=""></div></div>
							<div class="calendar_title">5th January Events</div>
						</div>
						<div class="calendar_items">

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_9.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Major Lazer</div>
									<div>10 AM - 01 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_10.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Calvin Harris</div>
									<div>02 PM - 05 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_11.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Anne Marie</div>
									<div>06 PM - 09 PM</div>
									<div>Auditorium</div>
								</div>
							</div>

							<!-- Calendar Item -->
							<div class="calendar_item d-flex flex-row align-items-center justify-content-start">
								<div><div class="calendar_item_image"><img src="images/speaker_12.jpg" alt=""></div></div>
								<div class="calendar_item_text" style="margin-left:20px;">
									<div>Dua Lipa</div>
									<div>10 PM - 12 AM</div>
									<div>Auditorium</div>
								</div>
							</div>

						</div>
					</div>
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
