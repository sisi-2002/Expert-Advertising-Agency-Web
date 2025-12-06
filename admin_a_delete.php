<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location:login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if admin ID is provided
if (isset($_GET['id'])) {
    $adminId = $_GET['id'];

    // Delete the admin
    $con->query("DELETE FROM admins WHERE admin_ID = '$adminId'");

    // Redirect back to the add admin page
    header("Location: add_admin.php");
    exit();
} else {
    echo "admin ID not provided.";
}
?>