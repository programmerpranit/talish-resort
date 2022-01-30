<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];

$to = "taalishresort@gmail.com";
$subject = "Enquiry for Room";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Phone =" . $phone;
$headers = "From: noreply@taalishresort.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>