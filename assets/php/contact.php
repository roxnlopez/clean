<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = "roxnlopez@gmail.com";
	$subject = "Subject from $name";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You! I will get back to you as soon as possible!" . " -" . "<a href='./contact.php'> Back to site</a>";
?>


