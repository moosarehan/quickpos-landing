<?php
// Validate empty fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
    die("Error: All fields are required.");
}

// Redirect to success page
header("Location: thank-you.html");
exit;
?>
