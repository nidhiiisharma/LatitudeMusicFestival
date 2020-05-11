<?php
include_once 'dbh.inc.php';
session_start();
if(isset($_POST['body']) and isset($_POST['rating'])){

$body =$_POST['body'];
$rating = $_POST['rating'];
if(isset($_SESSION['email'])){
  $user_id = $_SESSION['Fname'].' '.$_SESSION['Lname'];
}
else {
  $user_id = "Anonymous";
}
  $sqlreviewsInsert = "INSERT INTO `reviews`(`body`, `rating`, `user_id`) VALUES ('$body','$rating','$user_id')";
  $result = mysqli_query($conn, $sqlreviewsInsert);
if($result){

  header("location:../reviews.php?Success=yes");

}
else {

    header("location:../reviews.php?Success=no");
}

}







 ?>
