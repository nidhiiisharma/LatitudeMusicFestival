<?php

session_start();

if (isset($_POST['submit'])){
include_once 'dbh.inc.php';
    $Email = $_POST['email'];
    $pwd = $_POST['password'];
    if(empty($Email) || empty($pwd)){
      header("Location: ../index.php?Login=empty");
      exit();
    }
    else{
      $sql = "SELECT * FROM participant WHERE email='$Email'";
      $result= mysqli_query($conn, $sql);
      $resultCheck= mysqli_num_rows($result);
      if($resultCheck < 1){
        header("Location: ../index.php?no_user");
        exit();
      }
      else{
        if($row =  mysqli_fetch_assoc($result)) {
          //dehasinh
          /*
          $DB_from_pass = $row['webPassword'];
          echo $DB_from_pass; echo "<br>";
          echo $pwd;
          die("");
          $hashedPwdCheck = password_verify($pwd,$DB_from_pass);
          if($hashedPwdCheck == false){
            header("Location: ../index.php?wrongPassowrd");
            exit();
          }
          elseif ($hashedPwdCheck == true) {
            //log in the user here
          $_SESSION['user_id']= $row['lastName'];
          $_SESSION['email']= $row['email'];
          $_SESSION['uid']= $row['webUsername'];
          header("Location: ../index.php?success");
          exit();
          */
          $DB_from_pass = $row['webPassword'];
          //echo $DB_from_pass; echo "<br>";
        //  echo $pwd;
        //  die("");
          //$hashedPwdCheck = password_verify($pwd,$DB_from_pass);
        //  if($DB_from_pass != $pwd){
        if($pwd <> $DB_from_pass){
            header("Location: ../login.php?wrongPassowrd");
            exit();
          }
          elseif ($pwd == $DB_from_pass) {
            //log in the user here
          $_SESSION['user_id']= $row['lastName'];
          $_SESSION['Lname']= $row['lastName'];
          $_SESSION['Fname']= $row['firstName'];
          $_SESSION['email']= $row['email'];
          $_SESSION['uid']= $row['participantNr'];

          //die("")
         header("Location: ../signup.php?success");
          exit();
          }
        }
      }
    }






}else {
  header("Location: ../index.php?login=error");
}





 ?>
