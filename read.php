<?php


if (!isset($_SESSION['email'])) {
    // Redirect non-logged-in users to login page
    header("Location: login.php");
    exit;
}

require 'config.php'; // Include database connection

$email = $_SESSION['email'];

/*$sql = "SELECT * FROM users WHERE email = '$email'";*/
$query = "SELECT * FROM user WHERE email='$email' ";


$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Display user details
    echo "<p class='user-detail'><strong>First Name   :</strong> " . $row["F_name"] . "</p>";
    echo "<p class='user-detail'><strong>Last Name    :</strong> " . $row["L_name"] . "</p>";
    echo "<p class='user-detail'><strong>Gender       :</strong> " . $row["gender"] . "</p>";
    echo "<p class='user-detail'><strong>Mobile Number:</strong> " . $row["mobile_num"] . "</p>";
    echo "<p class='user-detail'><strong>Email        :</strong> " . $row["email"] . "</p>";
    echo "<p class='user-detail'><strong>Address      :</strong> " . $row["addresses"] . "</p>";
    echo "<p class='user-detail'><strong>Date of Birth:</strong> " . $row["dob"] . "</p>";
    
    // Profile Update Form
    echo "<form class='update' action='update_profile.php' method='POST'>";
    echo "<label>First Name:</label>";
    echo "<input type='text' name='F_name' value='" . $row["F_name"] . "'><br>";
    echo "<label>Last Name:</label>";
    echo "<input type='text' name='L_name' value='" . $row["L_name"] . "'><br>";
	echo "<input class='radiobtn' type ='radio' name='Gender'value='male'value=' ".$row["gender"]."'>male";
	echo "<input class='radiobtn' type ='radio' name='Gender'value='female'".$row["gender"]."'>female<br>";
    echo "<label>Mobile Number:</label>";
    echo "<input type='text' name='mobile_num' value='" . $row["mobile_num"] . "'><br>";
    echo "<label>Email:</label>";
    echo "<input type='email' name='email' value='" . $row["email"] . "'><br>";
    echo "<label>Address:</label>";
    echo "<input type='text' name='addresses' value='" . $row["addresses"] . "'><br>";
    echo "<label>Date of Birth:</label>";
    /*<input type ="date"name="date" min ="1950-01-01" max = "2010-12-31"><br>*/
    echo "<input type='date' name='dob'  min ='1950-01-01' max = '2010-12-31'". $row["dob"] . "'><br>";
    echo "<label>New Password:</label>";
    echo "<input type='password' name='password'><br>";
    echo "<input class='btn1' type='submit' value='Update'>";
    echo "</form>";

    // Delete Profile Button
    echo "<form action='delete_profile.php' method='post'>";
    echo "<input class='btn2' type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete your profile?\")'>";
    echo "</form>";
} else {
    echo "User not found.";
}

$con->close();
?>
