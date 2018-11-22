<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailto = "zocial@mailinator.com";
	$headers = "From: ".$mailfrom;
	$txt = "You have received an e-mail from".$name.".\n\n".$message;	



	mail($mailto, $subject, $txt, $headers);
	header("Location: ../index.php?mailsended");
}