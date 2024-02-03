<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mobile_num = $_POST['mobile_no'];
$message = $_POST['message'];


$email_from = 'atharvkulkarni200604@nktrading.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name\n" .
    "User Email: $visitor_email\n" .
    "User Mobile Number: $mobile_num\n" .
    "User Message: $message\n";

$to = 'atharvkulkarni200604@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: Contact.html");

?>