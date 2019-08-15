<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Thank You!</title>
</head>
<body style="text-align: center;padding:20px 0;">
	<?php

		$name = $_POST['contactname'];
		$email = $_POST['contactemail'];
		$phone = $_POST['contactphone'];
		$city = $_POST['contactcity'];
		$message = $_POST['contactmessage'];

		$formcontent=" From: MiniPO Contact Form $email \n
		Name: $name \n
		Email Address: $email \n
		Phone: $phone \n
		City: $city \n
		Message: $message";

		$recipient = "help.regaltheme@gmail.com";
		$subject = "Contact With MiniPO Admin";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

	?>


</body>
</html>
