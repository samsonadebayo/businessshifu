<?php

    $to = "info@businessshifu.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    // $subject = $_POST['subject'];
    // $number = $_POST['number'];
    $cmessage = $_POST['message'];

    // $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$headers2 = "From: " . $to . "\r\n";
	$headers2 .= "Reply-To: ". $to . "\r\n";
	$headers2 .= "MIME-Version: 1.0\r\n";
	$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from  $name.";
	$subject2 = "Email received";

    // $logo = 'img/logo.png';
    // $link = '#';

	$body2 = "We've received your email, we will get back to you shortly.";
	
	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> $name</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> $from</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> $subject</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>$cmessage</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
	$send2 = mail($from, $subject2, $body2, $headers2);

?>