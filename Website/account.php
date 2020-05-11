<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once 'dbh.inc.php';
if(! isset($_SESSION['email'])){
  header("location:login.php");
}
?>

<html lang="en">
<head>
<title>Account</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
					 <div class="home_content d-flex flex-row align-items-end justify-content-start">
						 <div class="current_page">Account</div>



<ul>
    <li> <div class="speaker_title">First Name   :
   <?php
     echo $_SESSION['Fname'];
   ?></div>
    </li>
    <li> <div class="speaker_title">Last Name   :
    <?php
      echo $_SESSION['Lname'] ; ?></div>
    </li>
    <li> <div class="speaker_title">Email   :
    <?php
      echo $_SESSION['email']; ?></div>
    </li>
    <li> <div class="speaker_title">Ticket Nr   :
      <?php
      $sql = "SELECT * FROM participant_event WHERE participantNr='$_SESSION[uid]'";
      $result= mysqli_query($conn, $sql);
      $resultCheck= mysqli_num_rows($result);
    if(isset($_SESSION['email'])){
      if($resultCheck < 1){
        echo 'no ticket yet';
        exit();
      }else{
        $row =  mysqli_fetch_assoc($result);
        $pn = $row['participantNr'];
        $tn=$row['ticketNr'];
        echo $tn;
      }
    }
      ?>
  </div>
    </li>
    <li> <div class="speaker_title">Camping Spot   :
    <?php
    $sn=$row['spotNr'];
      echo $row['spotNr']; ?></div>
    </li>
    <li> <div class="speaker_title">Camping Spot Code  :
    <?php
      if(isset($_SESSION['email'])){
        $sql22="SELECT * FROM camping_spot WHERE spotNr='$sn'";
        $result22=mysqli_query($conn,$sql22);
        $row22=mysqli_fetch_assoc($result22);

          $sc=$row22['spotCode'];
          echo $sc;
          echo $sn;
        echo $sc;


      }

    ?>
    </li>



</ul>












					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
