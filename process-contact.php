<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $errors = [];

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    // If there are no validation errors, proceed to send email
    if (empty($errors)) {
        $to = 'your-email@example.com'; // TODO: Replace with real contact information
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        // Attempt to send the email
        if (mail($to, $subject, $body, $headers)) {
            echo 'Thank you for your message! It has been sent.';
        } else {
            echo 'Sorry, there was an error sending your message. Please try again later.';
        }
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
} else {
    echo 'Invalid request method.';
}
?>