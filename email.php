<?php
$subject = 'from the website'; // Subject of your email
$to = "ikyohiabonaventure@gmail.com"; // Recipient's E-mail

$emailTo = $_REQUEST['email'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name . '<' . $email . '>';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: " . $email_from . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

$message = 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg;

if (@mail($to, $subject, $message, $headers)) {
    // Transfer the value 'sent' to ajax function for showing success message.
    echo 'sent';
} else {
    // Transfer the value 'failed' to ajax function for showing error message.
    echo 'failed';
}
?>
