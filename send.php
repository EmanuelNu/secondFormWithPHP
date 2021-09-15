<?php 
    $to = $_POST["email"]; 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cellphone = $_POST["cellphone"];
    $message = $_POST["message"];
    $content = "Name: " . $name . "\nEmail: " . $email . "\nCellphone: " . $cellphone . "\nMessage: " . $message;
    mail($to, "Contact", $content);
    header("Location: thanks.html");
?>