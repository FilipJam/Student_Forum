<?php
if(isset($_POST['message'])) {
	$title = "Contact us";
	$message = $_POST['message'];
	ini_set("SMTP", "smtp.gre.ac.uk");
	ini_set("sendmail_from", "fj6405s@gre.ac.uk");
	mail("fj6405s@gre.ac.uk", "mail test", $message);
	$output = "Thank you for your message. We will get back to you shortly";
}
else{
	$title = "Contact us";
	ob_start();
	include 'templates/mailform.html.php';
	$output = ob_get_clean();
}
include 'templates/layout.html.php';
?>