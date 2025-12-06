<?php
session_start();
require 'config.php';

// Function to fetch and display orders for the logged-in user
function displayfeedback()
{
    global $con;

    // Check if user is logged in
    if (isset($_SESSION['email'])) {
        $mail = $_SESSION['email'];

        // SQL query to select orders for the logged-in user
        $sql = "SELECT * FROM feedback INNER JOIN user ON feedback.email =user.email WHERE user.email = '$mail'";

        // Execute the query
        $result = $con->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table border='1'>
                    <tr>
                        <th>Feedback ID</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>feedback</th>
                        <th>Action</th>
                    </tr>";    

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["feedback_id"] . "</td>
                        <td>" . $row["names"] . "</td>
                        <td>" . $row["phone_number"] . "</td>
                        <td>" . $row["feedback"] . "</td>
                        <td>
                            <a class='tabbtn1' href='feedback_delete.php?id=" . $row["feedback_id"] . "'>Delete</a>  
                            <a class='tabbtn2' href='feedback_update.php?id=" . $row["feedback_id"] . "'>Update</a>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='notifi'>No orders found for the logged-in user.</p>";
        }
    } else {
        echo "User not logged in.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order List</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>

<div class="main">
    <?php
        require'header.php';
    ?>
    <div class="about">
    <h2>Order List</h2>
        <?php
            // Call the function to display orders for the logged-in user
            displayfeedback();
        ?>
        <br><a class ="addnew" href="contactus.php">Add New Feedback +</a> 
    </div>
       
</div>
        
        
<?php
require'footer.php';
?>


</body>
</html>