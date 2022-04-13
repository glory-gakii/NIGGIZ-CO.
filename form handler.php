<?php
$name = $-POST['name'];
$visitor_email = $_POST['email'];
$Dream = $_POST['Dream'];
$request = $_POST['request'];

$email_form = 'info@NIGGIZ.com';

$email_subject = 'Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n". 
               "Dream: $Dream.\n".
               "User Request: $request.\n";
               
$to = 'ronnieowilly@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html.htmls")

               





?>