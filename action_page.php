<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you can add your own validation rules)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Send email (you can replace this with your own logic)
        $to = "your-email@example.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        if (mail($to, $subject, $body)) {
            echo "Thank you for contacting us! We will get back to you soon.";
        } else {
            echo "Oops! An error occurred while sending the email.";
        }
    }
}
?>