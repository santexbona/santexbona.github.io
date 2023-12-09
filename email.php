<?php

$to = "ikyohiabonaventure@gmail.com"; 

$subject = 'Test email';

$message = 'Message body';

$headers = "From: web@example.com\r\n";

if(mail($to, $subject, $message, $headers)) {
  echo 'Email sent';
} else {
  echo 'Email failed';
}

?>