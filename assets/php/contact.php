<!-- <?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/contact.php'); 
?> 

<?php
	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
	$recipient = "roxnlopez@gmail.com";
	$subject = "Subject from $name";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $mailheader) or die("Error!");
	echo "Thank You! I will get back to you as soon as possible!" . " -" . "<a href='./contact.php'> Back to site</a>";
?>


 -->