<?php
$to = "olentangyclubdirectory@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message']; 
$formcontent  = "From: $name \n Message: $message";
$from = $_POST['email']; 
 
// Sending email
if(mail($to, $subject, $formcontent, $from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>