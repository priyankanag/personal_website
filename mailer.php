<?php 
if (!isset($_POST["submit"]))
	{
	$from = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$message = wordwrap($message, 70);
	mail("priynag@gmail.com",$subject,$message,"From: $from\n");
	}
?>