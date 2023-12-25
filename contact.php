<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "your@email.com";

    // Set subject
    $subject = "New Contact Form Submission";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html");
    exit;
}
?>
