<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'rafaelvareto@dcc.ufmg.br';
$email_subject = "HOMEPAGE contact:  $name";
$email_body = "You have received a new message from your UFMG-DCC website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@vareto.com.br\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>