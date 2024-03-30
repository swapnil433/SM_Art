<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "swapnilkumbharkar100@gmail.com";

    // Subject
    $subject = "New message from contact form";

    // Compose the email message
    $message_content = "Name: $name\n";
    $message_content .= "Email: $email\n\n";
    $message_content .= "Message:\n$message";

    // Send email
    $result = mail($to, $subject, $message_content);

    // Check if email was sent successfully
    if ($result) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // Redirect to the form if accessed directly
    header("Location: index.html");
    exit;
}
