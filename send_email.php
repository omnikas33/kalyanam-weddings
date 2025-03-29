<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);

    // Email address to send the form data
    $to = "omnikas33@gmail.com"; // Change this to your email address
    $subject = "New Service Inquiry from $name";
    $message = "Name: $name\nPhone: $phone\nService: $service";
    $headers = "From: noreply@yourdomain.com"; // Change this to a valid email address from your domain

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>