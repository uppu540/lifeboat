<?php
//get data from form  
$email= $_POST['email'];
$mobile = $_POST['number'];
$to = "aryan.uppu007@gmail.com";
$subject = "Register Form ";
$txt ="Email = " . $email . "\r\n Mobile = ". $mobile;
$headers = "From: contact@lifeboat.co.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>