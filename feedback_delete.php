<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: feedback.php"); // Redirect to login page if not logged in
    exit();
}

// Check if feedback ID is provided
if (isset($_GET['id'])) {
    $fId = $_GET['id'];

    // Delete the feedback
    $con->query("DELETE FROM feedback WHERE feedback_id = '$fId'");

    // Redirect back to the feedback page
    header("Location: feedback.php");
    exit();
} else {
    echo "feedback ID not provided.";
}
?>

