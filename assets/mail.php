<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jonknightcw@gmail.com";
$subject = "Contact form from Jonknightcw.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: ../thank-you.html")
//echo "Thank You!";
?>
 