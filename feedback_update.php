<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if feedback ID is provided
if (!isset($_GET['id'])) {
    header("Location: feedback.php"); // Redirect back to feedback list if feedback ID is not provided
    exit();
}

// Get the feedback ID 
$fId = $_GET['id'];


$sql = "SELECT * FROM feedback WHERE feedback_id = '$fId'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Populate variables with feedback details
    $name = $row['names'];
    $p_num = $row['phone_number'];
    $f_back = $row['feedback'];
} else {
    echo "feedback not found.";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $p_num = $_POST['phone'];
    $f_back = $_POST['feedback'];

    // Update the feedback
    $sql = "UPDATE feedback SET names = '$name', phone_number = '$p_num', feedback = '$f_back'
            WHERE feedback_id = '$fId'";

    if ($con->query($sql) === TRUE) {
        // feedback updated successfully
        header("Location: feedback.php"); // Redirect back to the feedback list page
        exit();
    } else {
        echo "Error updating feedback: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html >
<head>
    
     
    <link rel="stylesheet" href="update_order.css">
</head>
<body>
<div class="main">
<div class="icon">
        <a href="index.php"><img src="assests/logo.png" width="400px"height="100px"></a>
</div>
<div class="about">


<form method="post">
    
    <label for="name">Name:</label>
    <input type="text" id="nam" name="name" value="<?php echo $name;?>">
    

    <label for="phone">Phone number:</label>
    <input type="text" id="phone" name="phone" value="<?php echo $p_num; ?>">


    <label for="feedback">Description:</label>
    <textarea id="feedback" name="feedback"><?php echo $f_back?>"></textarea><br><br>

    <input class="btn" type="submit" value="Update feedback">
</form>

                
               
</div>
           
</div>    


</body>
</html>
