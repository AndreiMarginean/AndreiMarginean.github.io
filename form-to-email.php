<?php
if(!isset($_POST['submit']))
{
    //This page should not be accesed directly. Need to submit the form.
    echo "error; you need to submit the form!";
}
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

if(empty($name)|| empty($visitator_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_form = 'georgel1988@gmail.com';
$email_subject = "New person contact u";
$email_body = "You have received a new mesage from the user &name.\n".
    "email address: $visitator_email\n"
    "Here is the message: \n $message".
$to = "georgel1988@gmail.com";
$headers = "Form: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
