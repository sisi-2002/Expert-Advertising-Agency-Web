<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if portfolio ID is provided
if (!isset($_GET['id'])) {
    header("Location: add_admin.php"); // Redirect back to portfolio page if ID is not provided
    exit();
}

// Get the portfolio ID 
$pId = $_GET['id'];

$sql = "SELECT * FROM portfolio WHERE p_id = '$pId'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    $name = $row['company_name'];
    $ctgry = $row['category'];
    $rate = $row['ratings'];
} else {
    echo "Portfolio ID not found.";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name']; // Fix: Correct input name
    $ctgry = $_POST['category']; // Fix: Correct input name
    $rate = $_POST['rate']; // Fix: Correct input name

    // Update the portfolio
    $sql = "UPDATE portfolio SET company_name = '$name', category = '$ctgry', ratings = '$rate'
            WHERE p_id = '$pId'";

    if ($con->query($sql) === TRUE) {
        // Portfolio updated successfully
        header("Location: admin_portfolio.php"); // Redirect back to the admin portfolio page
        exit();
    } else {
        echo "Error updating portfolio: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Portfolio</title>
    <link rel="stylesheet" href="admin_a_update.css">
</head>
<body>
<div class="main">
    <div class="icon">
        <a href="index.php"><img src="assests/logo.png" width="400px" height="100px"></a>
    </div>
    <div class="about">
        <h1>Update Portfolio</h1>
        <form method="post">
            <label for="name">Company Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo $ctgry; ?>">
            <label for="rate">Ratings:</label>
            <input type="text" id="rate" name="rate" value="<?php echo $rate; ?>">
            <input class="btn" type="submit" value="Update Portfolio">
        </form>
    </div>
</div>
</body>
</html>
