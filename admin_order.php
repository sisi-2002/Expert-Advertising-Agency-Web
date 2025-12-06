<?php
session_start();
require'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            online advertising agency
        </title>
        <link rel="stylesheet" href="admin_order.css">
        <script>
          function confirmDelete() {
              return confirm('Are you sure you want to delete this order?');
          }
        </script>  
    </head>
    <body>
        <div class="main">
        <div class="icon">
            <img src="assests/logo.png" width="400px"height="100px">
        </div>
        <a class="addadmin" href="add_admin.php">manage admin</a>    
        <a class ="lgout"href="Logout.php">Logout</a>
        

            <div class="about">
                <h2>Manage Order</h2>
                <?php
    require 'config.php';

    // Function to fetch and display data
    function displayOrders()
    {
        global $con;

        // SQL query to select all data from the orders table
        $sql = "SELECT * FROM orders";

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
                        <th>Action</th>
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
                            <a class='tabbtn1' href='admin_o_delete.php?id=" . $row["order_id"] . "' onclick='return confirmDelete();'>Delete</a> 
                        </td>
                        
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No orders found.";
        }
    }

?>


<?php
// Call the function to display orders
displayOrders();
?>

</body>
</html>

            </div>
		    
        </div>
        
    </body>
</html>