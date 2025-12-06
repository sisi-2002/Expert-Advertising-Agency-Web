<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if admin ID is provided
if (!isset($_GET['id'])) {
    header("Location: add_admin.php"); // Redirect back to admin page if admin ID is not provided
    exit();
}

// Get the admin ID 
$aId = $_GET['id'];


$sql = "SELECT * FROM admins WHERE admin_ID = '$aId'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    $mail = $row['email'];
    $name = $row['F_name'];
    $pw = $row['pass_word'];
} else {
    echo "admin not found.";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $mail = $_POST['email'];
    $name = $_POST['name'];
    $pw = $_POST['password'];

    // Update the admin
    $sql = "UPDATE admins SET email = '$mail', F_name = '$name', pass_word = '$pw'
            WHERE admin_ID = '$aId'";

    if ($con->query($sql) === TRUE) {
        // admin updated successfully
        header("Location: add_admin.php"); // Redirect back to the add_admin page
        exit();
    } else {
        echo "Error updating admin: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html >
<head>
    
     
    <link rel="stylesheet" href="admin_a_update.css">
</head>
<body>
<div class="main">
<div class="icon">
        <a href="index.php"><img src="assests/logo.png" width="400px"height="100px"></a>
</div>
<div class="about">

<h1>update admin</h1>
<form method="post">
    
    <label for="email">email:</label>
    <input type="text" id="email" name="email" value="<?php echo $mail;?>">
    

    <label for="name">name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">


    <label for="password">password:</label>
    <input type="password" id="password" name="password" value="<?php echo $pw; ?>">

    <input class="btn" type="submit" value="Update admin">
</form>

                
               
            </div>
           
        </div>    


</body>
</html>
