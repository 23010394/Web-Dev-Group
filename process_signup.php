<?php
// Initialize error message variable
$error_message = '';

// Form validation
if (empty($_POST['name'])) {
    $error_message = "Name is required";
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email";
}

if (empty($_POST['email'])) {
    $error_message = "Email is required";
}

if (strlen($_POST['password']) < 8) {
    $error_message = "Password must be at least 8 characters long";
}

if (!preg_match('/[a-z]/', $_POST['password'])) {
    $error_message = "Password must contain at least one lowercase letter";
}

if (!preg_match('/[0-9]/', $_POST['password'])) {
    $error_message = "Password must contain at least one number";
}

if ($_POST['password'] !== $_POST['password_confirmation']) {
    $error_message = "Passwords do not match";
}

// If there's an error, stop the script here and show the error
if (!empty($error_message)) {
    echo "<p>$error_message</p>";
    echo "<p>Go back <a href='staff_signup.php'>Sign up</a></p>";
    exit; // Stop further script execution here
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Check if email already exists
$mysqli = require __DIR__ . '/database.php';
$email = $_POST['email'];
$query = "SELECT COUNT(*) FROM staff_login WHERE email = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->bind_result($email_count);
$stmt->fetch();
$stmt->close();

if ($email_count > 0) {
    echo "<p>This email address is already registered.</p>";
    echo "<p>Please go back and use a different email to <a href='staff_signup.php'>Sign up</a></p>";
    exit; // Stop script execution
}

// Proceed with the insert if email is unique
$sql = "INSERT INTO staff_login (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    echo "<p>SQL error: " . $mysqli->error . "</p>";
    echo "<p>Go back <a href='staff_signup.php'>Sign up</a></p>";
    exit; // Stop further execution on error
}

$stmt->bind_param(
    'sss',
    $_POST['name'],
    $_POST['email'],
    $password_hash
);

if ($stmt->execute()) {
    header("Location: signup_success.php");
    exit; // Stop further execution after redirect
}
?>