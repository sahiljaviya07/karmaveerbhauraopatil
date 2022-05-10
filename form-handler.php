<?php

$name = $_POST["name"];

$visitor_email = $_POST["email"];

$subject = $_POST["subject"];

$message = $_POST["message"];

$email_from = "sahiljaviya18102002@gmail.com"

$email_subject = "new form submisson"

$email_body = "user_name: $name.\n".
"user_email: $visitor_email.\n".
"subject: $subject.\n".
"message: $message.\n".
"user_message: $message./n";

$to ="sohanjaviya123@gmail.com";
$headers ="From:$email_from \r\n";

$headers. = "reply-To:$visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html")


?>