<?php
    $to = "mhn97@naver.com"; // replace this mail with yours
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $fname = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $headers = "From: $from";
    $message = $_POST["message"];

    $body = "User Message \n";
    $body .= " \n\n\t Name: ".$name;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Subject: ".$subject;
    $body .= " \n\n\t Message: ".$message;

    mail($to, $subject, $message);
?>