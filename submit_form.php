<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email (example)
    $to = "ahmcoding021@gmail.com";
    $subject = "Message from Contact Form";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send the email
    mail($to, $subject, $email_body);

    // Redirect to a thank you page
    header("Location: generic.html");
    exit();
}
?>

