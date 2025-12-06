<?php
session_start();
require 'config.php';


// Check if user ID is provided
if (isset($_GET['id'])) {
    $pId = $_GET['id'];

    // Delete the portfolio
    $con->query("DELETE FROM portfolio WHERE p_id = '$pId'");

    // Redirect back to the admin portfolio page
    header("Location: admin_portfolio.php");
    exit();
} else {
    echo "user ID not provided.";
}
?>