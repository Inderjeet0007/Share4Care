<?php
$to = "2015inderjeet.saluja@ves.ac.in";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$headers = "From: inderjeet.saluja97@gmail.com\r\n"; 
if (mail($to, $subject, $body, $headers)) {
echo("<p>Email successfully sent!</p>");
} else {
echo("<p>Email delivery failed…</p>");
}
?>