<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // Validate the email
    if (empty($email)) {
        echo "Please enter an email address.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Email is valid, process it here (e.g., send email, save to database)

        // Example: Save email to a text file
        $file = fopen("emails.txt", "a"); // Open the file in append mode
        fwrite($file, $email . "\n"); // Write the email to the file
        fclose($file); // Close the file

        echo "Thank you! Your email has been recorded.";
    }
}
?>