<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Recipient email address
    $to = "khanamaan0788@gmail.com";

    // Email subject
    $subject = "New Contact Us Form Submission";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page (optional)
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Recipient email address
    $to = "your-email@example.com";

    // Email subject
    $subject = "New Contact Us Form Submission";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page (optional)
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>