<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "ahmcoding021@gmail.com";
$subject = "This is the subject line";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt);
}
 
// Redirect to
header("Location:Excel.html");
?>
