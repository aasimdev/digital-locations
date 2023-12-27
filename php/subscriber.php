<?php
if (!isset($_SESSION)) session_start();
if (!$_POST) exit;
include dirname(__FILE__) . '/settings/settings.php';
require 'phpmailertesting/PHPMailer/class.phpmailer.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailaddress = strip_tags(trim($_POST["email"]));

	if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
		$hostname = strtolower($_SERVER["COMPUTERNAME"]);
	} else {
		$hostname = `hostname`;
		$hostnamearray = explode('.', $hostname);
		$hostname = $hostnamearray[0];
	}

	header("Content-Type: text/plain");
	header("X-Node: $hostname");
	$from = "DLOC";
	$toemail = "zack@digitallocations.com";
	$subject = "Newsletter Form";
	$message = '
	 Email: ' . $emailaddress;
	$result = mail($toemail, $subject, $message, "From: $from" );
	if ( $result && $redirectForm == true) {
		header("Location: /thank-you.php");
	} else {
		echo 'FAIL';
	}

}
