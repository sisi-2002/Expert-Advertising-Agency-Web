<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: orderlist.php"); // Redirect to login page if not logged in
    exit();
}

// Check if order ID is provided
if (isset($_GET['id'])) {
    $orderId = $_GET['id'];

    // Delete the order
    $con->query("DELETE FROM orders WHERE order_id = '$orderId'");

    // Redirect back to the order list page
    header("Location: orderlist.php");
    exit();
} else {
    echo "Order ID not provided.";
}
?>
