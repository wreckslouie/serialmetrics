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
	<script type="text/javascript">var _kmq = _kmq || []; var _kmk = _kmk || '01a16ed3239af3fe13f608ce33b60e13d5109d1e'; function _kms(u){ setTimeout(function(){ var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = u; f.parentNode.insertBefore(s, f); }, 1); } _kms('//i.kissmetrics.com/i.js'); _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js'); </script>
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

<?php include('includes/scripts.php'); ?>
</body>
</html>