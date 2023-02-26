<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$reciever = "sufyanalimir313@gmail.com";
$subject = "Zircon Enquiry From: $name $email";
$body = "Name: $name\n Email: $email \n Message: $msg";
$sender = "From: $email";

if(mail($reciever, $subject, $body, $sender)){
    echo "Message sent successfully";
}else{
    echo "Record sending failed..";
}
?>