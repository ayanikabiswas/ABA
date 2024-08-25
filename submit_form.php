<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check if all fields are filled
    if (!empty($name) && !empty($email) && !empty($message)) {
        // You can store the data in a database or send it via email
        // For this example, let's assume you're sending it via email

        $to = "your-email@example.com";  // Replace with your email address
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            // Redirect to a thank you page or display a success message
            echo "Thank you for contacting us. We will get back to you shortly.";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill out all the fields.";
    }
} else {
    echo "Invalid request.";
}
?>
