<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "your_email@example.com";  // Replace with your email address
    $subject = "Message from your website";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully. Thank you for reaching out!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
