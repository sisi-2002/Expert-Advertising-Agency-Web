<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect non-logged-in users to login page
    header("Location: login.php");
    exit;
}

require 'config.php'; // Include database connection

$email = $_SESSION['email'];

// Get updated user details from POST
$F_name = $_POST['F_name'];
$L_name = $_POST['L_name'];
$gender = $_POST['Gender']; // Ensure the correct name attribute from your form
$mobile_num = $_POST['mobile_num'];
$new_email = $_POST['email'];
$new_password = $_POST['password']; // Use provided password directly
$addresses = $_POST['addresses'];
$dob = $_POST['dob'];

// Prepare SQL statement to update user details
$sql = "UPDATE user SET F_name=?, L_name=?, gender=?, mobile_num=?, email=?, passwords=?, addresses=?, dob=? WHERE email=?";
$stmt = $con->prepare($sql);

if ($stmt) {
    // Bind parameters and execute the update query
    $stmt->bind_param("sssssssss", $F_name, $L_name, $gender, $mobile_num, $new_email, $new_password, $addresses, $dob, $email);
    $stmt->execute();
    $stmt->close();

    // Update the email in the session if it was changed
    if ($new_email != $email) {
        $_SESSION['email'] = $new_email;
    }

    // Redirect back to profile page after update
    echo"update successfully..!";
    header("Location: profile.php");
    
    exit;
} else {
    echo "Error preparing SQL statement: " . $con->error;
}

$con->close();
?>


