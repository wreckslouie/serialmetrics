<?php
	$name="";
	$company="";
	$email="";
	$phone="";

	if($_POST){

		$name=$_POST['name'];
		$company=$_POST['company'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message_text=$_POST['message'];
		$response="";

		if(($name && $company && $email && $phone && $message_text)!=null){
			$to="amir@serialmetrics.com";
			$subject="Message From " . $name . " at " . $company;
			$message=$message_text . "\r\n" . "\r\n" . "Name: " . $name . "\r\n" . "Company: " . $company .
				"\r\n" . "Email: " . $email . "\r\n" . "Phone number: " . $phone;
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
	}else if($_GET){
		$name=$_GET['name'];
		$company=$_GET['company'];
		$email=$_GET['email'];
		$phone=$_GET['phone'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<?php include('includes/head_links.php'); ?>
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
</head>
<body>
<?php include('includes/main_nav.php'); ?>
<form id="contact" name="contact" method="post">
	<h1>Contact</h1>
	<input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name ?>">
	<input type="company" id="company" name="company" placeholder="Company" value="<?php echo $company ?>">
	<input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email ?>">
	<input type="phone" id="phone" name="phone" placeholder="Phone" value="<?php echo $phone ?>">
	<textarea id="message" name="message" placeholder="Message..."></textarea>
	<input type="submit" value="Submit >>" id="submit" />
</form>
</body>
</html>