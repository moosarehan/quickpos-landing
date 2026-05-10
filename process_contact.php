<?php
// [SCRUM-58] process_contact.php — Fixed whitespace-only input validation

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// FIX: trim() is applied to ALL fields before validation
// This ensures whitespace-only inputs are treated as empty
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim($_POST['message'] ?? '');

// Validate: name cannot be empty or whitespace-only
if (empty($name)) {
    header('Location: index.php?error=Name+is+required#contact');
    exit;
}

// Validate: email cannot be empty or whitespace-only
if (empty($email)) {
    header('Location: index.php?error=Email+address+is+required#contact');
    exit;
}

// Validate: email must be a valid format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=Please+enter+a+valid+email+address#contact');
    exit;
}

// Validate: message cannot be empty or whitespace-only
if (empty($message)) {
    header('Location: index.php?error=Message+cannot+be+empty#contact');
    exit;
}

// All validations passed — redirect to success page
header('Location: thank-you.html');
exit;
?>
