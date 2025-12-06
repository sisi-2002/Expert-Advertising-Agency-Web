<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect non-logged-in users to login page
    header("Location: login.php");
    exit;
}

require 'config.php'; // Include database connection

$email = $_SESSION['email'];

// Prepare SQL statement to delete user profile
$sql = "DELETE FROM user WHERE email=?";
$stmt = $con->prepare($sql);

if ($stmt) {
    // Bind parameter and execute the delete query
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->close();

    // Logout user and redirect to login page after deletion
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
} else {
    echo "Error preparing SQL statement: " . $con->error;
}

$con->close();
?>
