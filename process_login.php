<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user is in the 'users' table

    $query = "SELECT * FROM user WHERE email='$username' AND passwords='$password'";
    $result = $con->query($query);
    $user_row = mysqli_fetch_assoc($result);

    // Check if the user is in the 'admins' table

    $admin_query = "SELECT * FROM admins WHERE email='$username' AND pass_word='$password' ";
    $admin_result = $con->query($admin_query);
    $admin_row = mysqli_fetch_assoc($admin_result);

    if (is_array($user_row) && !empty($user_row)) {

        // User found in the 'user' table

        $_SESSION['email'] = $user_row['email'];
        $_SESSION['username'] = $user_row['F_name'];
        $_SESSION['id'] = $user_row['user_id'];
        header("Location: index.php");
    } elseif (is_array($admin_row) && !empty($admin_row)) {

        // Admin found in the 'admins' table

        $_SESSION['email'] = $admin_row['email'];
        $_SESSION['username'] = $admin_row['F_name'];
        $_SESSION['id'] = $admin_row['admin_ID'];
        header("Location: admin.php");
    } else {
        
        echo "<script>alert('Wrong username or password');</script>";
        echo "<script>window.location.href='login.php';</script>"; 
        exit(); // Ensure script stops execution after redirect
    }
}
?>
