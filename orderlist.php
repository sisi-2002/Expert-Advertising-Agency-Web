<?php
session_start();
require 'config.php';

// Function to fetch and display orders for the logged-in user
function displayUserOrders()
{
    global $con;

    // Check if user is logged in
    if (isset($_SESSION['email'])) {
        $mail = $_SESSION['email'];

        // SQL query to select orders for the logged-in user
        $sql = "SELECT * FROM orders INNER JOIN user ON orders.email =user.email WHERE user.email = '$mail'";

        // Execute the query
        $result = $con->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table border='1'>
                    <tr>
                        <th>Order ID</th>
                        <th>Category</th>
                        <th>Audience</th>
                        <th>Payment Type</th>
                        <th>Price</th>
                        <th>Mobile Number</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th> <!-- New column for actions -->
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["order_id"] . "</td>
                        <td>" . $row["category"] . "</td>
                        <td>" . $row["audience"] . "</td>
                        <td>" . $row["payment_type"] . "</td>
                        <td>" . $row["price"] . "</td>
                        <td>" . $row["m_number"] . "</td>
                        <td>" . $row["keywords"] . "</td>
                        <td>" . $row["descript"] . "</td>
                        <td>" . $row["dates"] . "</td>
                        <td>
                            <a class='tabbtn1' href='delete_order.php?id=" . $row["order_id"] . "' onclick='return confirmDelete();'>Delete</a>  
                            <a class='tabbtn2' href='update_order.php?id=" . $row["order_id"] . "'>Update</a>
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
    <link rel="stylesheet" href="orderlist.css">
    <script>
          function confirmDelete() {
            return confirm('Are you sure you want to delete this feedback?');
          }
    </script>
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
            displayUserOrders();
        ?>
        <br><a class ="addnew" href="order1.php">Add New Order +</a> 
    </div>
       
</div>
        
        
<?php
require'footer.php';
?>


</body>
</html>


