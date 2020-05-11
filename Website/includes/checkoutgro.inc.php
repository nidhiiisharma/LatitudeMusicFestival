<?php
session_start();
if (isset($_POST['submit'])){
  include_once 'dbh.inc.php';
  $balance =$_POST['balance'];
  $spotNr =$_POST['spotNr'];
if(empty($balance)) {
  header("Location: ../checkoutreg.php?balance=empty");
  exit();

}
  else{//start of code
    //needed variables:
    $tknum=rand(100000,999999);
    $sql1 = "SELECT * FROM  participant_event WHERE ticketNr='$tknum'";
    $result = mysqli_query($conn, $sql1);
    $resultCheck= mysqli_num_rows($result);
    if($resultCheck > 0){
    $tknum=rand(100000,999999);
  }
  $tktybe='group online';
  $pNum= $_SESSION['uid'];
  $eventNr=1;
  //  if no SpotCode :


  //if no camiping spot is wanted
if($spotNr=='none'){
  $sql = "INSERT INTO participant_event(ticketNr,ticketType,balance,participantNr,eventNr) VALUES('$tknum','$tktybe','$balance','$pNum','$eventNr');";
  mysqli_query($conn, $sql);
  $date = date('Y-m-d H:i:s');
  $amount= $balance ;
  $sql = "INSERT INTO transaction(source,dateTime,amount,ticketNr) VALUES('website','$date','$amount','$tknum');";
  mysqli_query($conn, $sql);
    header("Location: ../account.php?");

}
else {

    $sql = "INSERT INTO participant_event(ticketNr,ticketType,balance,participantNr,eventNr,spotNr) VALUES('$tknum','$tktybe','$balance','$pNum','$eventNr','$spotNr');";
  mysqli_query($conn, $sql);
  $sql = "UPDATE `camping_spot` SET `nrOfPersons` = '6' WHERE `camping_spot`.`spotNr` = '$spotNr';";
  mysqli_query($conn, $sql);
  $date = date('Y-m-d H:i:s');
  $amount= $balance;
  $sql = "INSERT INTO transaction(source,dateTime,amount,ticketNr) VALUES('website','$date','$amount','$tknum');";
  mysqli_query($conn, $sql);
    header("Location: ../account.php?");

}
}
}





 ?>
