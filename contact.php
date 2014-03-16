<?php
	if($_POST){

		$name=$_POST['name'];
		$company=$_POST['company'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message_text=$_POST['message'];
		$response="";

		if(($name && $company && $email && $phone && $message_text)!=null){
			$to="bjorncooley@gmail.com";
			$subject="Message From " . $name . "at " . $company;
			$message=$message_text . "<br />" . "Name: " . $name . "<br />" . "Company: " . $company .
				"<br />" . "Email: " . $email . "<br />" . "Phone number: " . $phone;
			$headers = 'From: '.$_POST['email']."\r\n".'Reply-To: '.$_POST['email']."\r\n";
			mail($to,$subject,$message,$headers);

			$response="<p> Your email has been sent, we will contact you shortly. </p>" .
			"<p><a href='http://serialmetrics.com'>Return to home page >></a></p>";
			echo "<div class='response'>".$response."</div>";


		}
		else{
			$response="Please fill out all fields";
			echo "<div class='response'>".$response."</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
</head>
<body>
<form id="contact" name="contact" method="post">
	<h1>Contact</h1>
	<input type="text" id="name" name="name" placeholder="Name">
	<input type="company" id="company" name="company" placeholder="Company">
	<input type="email" id="email" name="email" placeholder="Email">
	<input type="phone" id="phone" name="phone" placeholder="Phone">
	<textarea id="message" name="message" placeholder="Message..."></textarea>
	<input type="submit" value="Submit >>" id="submit" />
</form>
</body>
</html>