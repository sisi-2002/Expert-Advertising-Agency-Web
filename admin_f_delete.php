<?php
session_start();
require 'config.php';


// Check if feedback ID is provided
if (isset($_GET['id'])) {
    $feedbackId = $_GET['id'];

    // Delete the feedback
    $con->query("DELETE FROM feedback WHERE feedback_id = '$feedbackId'");

   
    header("Location: admin_feedback.php");
    exit();
} else {
    echo "feedback ID not provided.";
}
?>