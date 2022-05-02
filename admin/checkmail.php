<?php
$test="Hello";
$to_email = "manavstud121@gmail.com";
$subject = "Simple Email Test via PHP";
$returndate = date("d-m-Y", strtotime("+1 week"));
$body = "Respected Ma'am/Sir,\nBook has been issued Successfully\nPlease return it by ".$returndate."\nThis is an acknowledgement mail, do not reply.";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}