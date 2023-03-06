<?php
//get data from form  
$name= $_POST['contact-name'];
$email= $_POST['contact-email'];
$mobile = $_POST['contact-phone'];
$message = $_POST['contact-message'];
$to = "aryan.uppu007@gmail.com";
$subject = "Contact Us Form ";
$txt ="Email = " . $email . "\r\n Name = ". $name "\r\n Name = ". $name "\r\n Mobile = ". $mobile "\r\n Message = ". $message;
$headers = "From: contact@lifeboat.co.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>