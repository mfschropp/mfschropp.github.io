<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];

    if(empty($name) || empty($email)){
        exit;
    }

    $to = "mfschropp@gmail.com";
    $headers = "From: $name, $email";

    mail($to, $subject, $msg, $headers);
?>
