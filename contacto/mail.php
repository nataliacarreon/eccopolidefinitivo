<?php 

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['phonenumber'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$formcontent="From: $name $lastname\n email: $email \n number: $number \n Message: $message \n";
$recipient = 'nath.atlia@gmail.com';
$subject = "Eccopoli Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Gracias!";
header ("location: index.html")
?>