<?php
session_start();
require 'config.php';


// Check if user ID is provided
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Delete the user account
    $con->query("DELETE FROM user WHERE user_id = '$userId'");

    // Redirect back to the user list page
    header("Location: admin_user.php");
    exit();
} else {
    echo "user ID not provided.";
}
?>