<?php
$name = $_POST['name'];
$email = $_POST['email'];
$services = $_POST['services'];
$subject = $_POST['subject'];

// $email_from = '';

// $email_subject = "New Submission"

// $email_body = "User Name: $name.\n". 
// "User Email:$email.\n". 
// "User Message:$subject.\n";

$to = "jhkwon2019@gmail.com";

$headers="From:$email_from \r\n";
$headers .="Reply To:$email \r\n";
mail($to,email_subject,$email_body,$headers);

header("location: index.html");

?>