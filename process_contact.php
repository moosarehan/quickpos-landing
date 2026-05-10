<?php
// [SCRUM-58] Fixed: Added input sanitization and email format validation

// Sanitize all inputs to prevent XSS (BUG-003)
$name    = htmlspecialchars(trim($_POST['name'] ?? ''));
$email   = htmlspecialchars(trim($_POST['email'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

// Validate empty fields
if (empty($name) || empty($email) || empty($message)) {
    die("Error: All fields are required.");
}

// Validate email format (BUG-001)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Please enter a valid email address.");
}

// Redirect to success page
header("Location: thank-you.html");
exit;
?>
