<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if order ID is provided
if (!isset($_GET['id'])) {
    header("Location: order_list.php"); // Redirect back to order list if order ID is not provided
    exit();
}

// Get the order ID from the URL
$orderId = $_GET['id'];

// Fetch order details from the database
$sql = "SELECT * FROM orders WHERE order_id = '$orderId'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Populate variables with order details
    $category = $row['category'];
    $audience = $row['audience'];
    $paymentType = $row['payment_type'];
    $price = $row['price'];
    $mobileNumber = $row['m_number'];
    $keywords = $row['keywords'];
    $description = $row['descript'];
} else {
    echo "Order not found.";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $category = $_POST['category'];
    $audience = $_POST['audience'];
    $paymentType = $_POST['payment_type'];
    $price = $_POST['price'];
    $mobileNumber = $_POST['mobile_number'];
    $keywords = $_POST['keywords'];
    $description = $_POST['description'];

    // Update the order
    $sql = "UPDATE orders SET category = '$category', audience = '$audience', payment_type = '$paymentType', 
            price = '$price', m_number = '$mobileNumber', keywords = '$keywords', descript = '$description' 
            WHERE order_id = '$orderId'";

    if ($con->query($sql) === TRUE) {
        // Order updated successfully
        header("Location: orderlist.php"); // Redirect back to the order list page
        exit();
    } else {
        echo "Error updating order: " . $con->error;
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
    <label for="Add catagory">Choose catagory:</label>
	<select name="category" id="category" name="category" value="?php echo $category; ?>">
		<option value=""></option>
        <option value="social">Social meadia</option>
        <option value="TV">TV commercial</option>
        <option value="web">Web advetesement</option>
    </select><br>


    <!--<label for="category">Category:</label>
    <input type="text" id="category" name="category" value="?php echo $category; ?>"> -->
    
    <label for="audience">Target audience:</label>
	<select name="audience" id="audience"name="audience" value="?php echo $audience; ?>">
		<option value=""></option>
        <option value="children">Children</option>
        <option value="adult">Adults</option>
        <option value="teen">tenagers</option>
		<option value="mens">Only mens</option>
		<option value="women">Only womens</option>
		<option value="all">All</option>
    </select><br>

    <!--label for="audience">Audience:</label>
    <input type="text" id="audience" name="audience" value="?php echo $audience; ?>"--->
    <label for="payment_type">Payment type:</label>
	<select name="payment_type" id="payment_type" name="payment_type" value="?php echo $paymentType; ?>">
		<option value=""></option>
        <option value="trns">Online transfer</option>
        <option value="card">Card payment</option>
        <option value="payp">Paypal</option>
		<option value="btc">bitcoin</option>
    </select><br>

    <!--label for="payment_type">Payment Type:</label>
    <input type="text" id="payment_type" name="payment_type" value="?php echo $paymentType; ?>"-->

    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="<?php echo $price; ?>">

    <label for="mobile_number">Mobile Number:</label>
    <input type="text" id="mobile_number" name="mobile_number" value="<?php echo $mobileNumber; ?>">

    <label for="keywords">Keywords:</label>
    <input type="text" id="keywords" name="keywords" value="<?php echo $keywords; ?>">

    <label for="description">Description:</label>
    <textarea id="description" name="description"><?php echo $description; ?></textarea><br><br>

    <input class="btn" type="submit" value="Update Order">
</form>

                
               
            </div>
           
        </div>    


</body>
</html>
