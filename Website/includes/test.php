

  <?php
  session_start();
  /*
  $dbServername ="localhost";
  $dbUsername ="root";
  $dbPassword ="";
  $dbName ="users";
  */

  $dbServername ="studmysql01.fhict.local";
  $dbUsername ="dbi399963";
  $dbPassword ="1234567";
  $dbName ="dbi399963";

/*
  $conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName )or die ("connect failed");
  echo "connected";
  echo $_SESSION['email'];

  $sql = " SELECT * FROM participant WHERE email='$_SESSION[email]'";
  echo $sql;
    $result= mysqli_query($conn, $sql);

    $row =  mysqli_fetch_assoc($result);
     $DB_from_pass = $row['webPassword'];
     echo '00000000000000';
     echo "$DB_from_pass";
      echo '00000000000000';
       echo $_SESSION['uid'];
         echo '00000000000000';
      echo $_SESSION['user_id'];
      echo '00000000000000';
    echo  $_SESSION['uid'];
    $mysqli = new mysqli("studmysql01.fhict.local","dbi399963","1234567","dbi399963");
    $sqlSelect="SELECT spotNr FROM camping_spot WHERE nrOfPersons<1";
    $result = $mysqli -> query ($sqlSelect);
    $row =  mysqli_fetch_assoc($result);
     $values = $row['nrOfPersons'];
     */
     $date = date('Y-m-d H:i:s');
     //$date=now();
     echo $date;






   ?>
