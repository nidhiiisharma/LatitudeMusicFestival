<?php

if (isset($_POST['submit'])){
include_once 'dbh.inc.php';
}
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $success = "";

    $sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$visitor_email','$subject','$message');";
    mysqli_query($conn, $sql);
    header("location:../index.php?success");

/*
    $email_from = "eventplanning@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User Message: $message.\n".
        $to = "nidhisharmas0103@gmail.com";

        $headers = "From: $email_from \r\n";

        $headers .= "Reply-To: $visitor_email \r\n";

        mail($to, $email_subject, $email_body, headers);

        header("Location: contact.php");
        $success = "Message Sent!";
        */



?>
