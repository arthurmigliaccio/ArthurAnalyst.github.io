<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'arthur.m.analyst@gmail.com'; // Replace with your email address
$subject = 'New form submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Thank you for your message. We will get back to you soon!';
} else {
    echo 'Sorry, an error occurred. Please try again later.';
}
?>