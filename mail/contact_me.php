<?php
if(empty($_POST['email']))
  {
    echo "Please fill out Email address";
    return false;
  }

$field_email = $_POST['email'];
$mail_to = 'yusuke.mukoyama@gmail.com';
$subject = 'Message from melp.io Landing Page';
$body_message = 'mail-address: '.$field_email."\n";
$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

mail($mail_to, $subject, $body_message, $headers);
return true;
?>