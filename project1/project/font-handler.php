<?php
&name = $_POST['name'];
$visitior_email = $_POST['email'];
$subject =  $_POST['Subject'];
$message =  $_POST['Message'];

$email_from = "r9620559@gmail.com"; 
$email_subject = "New Form Submission"
$email_body = "User Name : $name. \n"
                "User Email : $visitior_email. \n"
                "Subject : $subject \n"
                "User Message : $message";

$to = 'r9620559@gmail.com'; 
$headers = "Form : $email_form \r\n";
$headers = "Replay-to : $visitor_email \r\n"; 

mail(&to,&$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
