<?php
if (isset($_POST['submit'])){
  include_once 'dbh.inc.php';
  $fname =$_POST['Fname'];
  $lname =$_POST['Lname'];
  $email = $_POST['Email'];
  $pwd = $_POST['Password'];



if(empty($fname) ||empty($lname) || empty($email) || empty($pwd)){
  header("Location: ../signup.php?signup=empty");
  exit();

}
  else{
    $sql1 = "SELECT * FROM  participant WHERE email='$email'";
    $result = mysqli_query($conn, $sql1);
    $resultCheck= mysqli_num_rows($result);
    if($resultCheck > 0){
      header("Location: ../signup.php?emailtaken");
      exit();
    }else {
      // hashing the Passowrd

  //  $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);


    //$Nr=$Nr+1
    //insert the user into the SQLiteDatabase
    $sql = "INSERT INTO participant(email,firstName,lastName,webPassword,webUsername,dob) VALUES('$email','$fname','$lname','$pwd','$email','1000-01-1');";

    mysqli_query($conn, $sql);
    header("Location: ../signup.php?success");
    //header("Location: ../index.php");
    exit();
    }
  }
}






 ?>
