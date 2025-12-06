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
        <link rel="stylesheet" href="admin_user.css">

        <script>
          function confirmDelete() {
              return confirm('Are you sure you want to delete this user?');
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
                <h2>Manage User</h2>
                <?php
    require 'config.php';

    // Function to  display data
    function displayOrders()
    {
        global $con;

        // SQL query to select all data from the orders table
        $sql = "SELECT * FROM user";

        // Execute the query
        $result = $con->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table border='1'>
                    <tr>
                        <th>user ID</th>
                        <th>F_name</th>
                        <th>L_name</th>
                        <th>gender</th>
                        <th>mobile_number</th>
                        <th>email</th>
                        <th>address</th>
                        <th>Dob</th>
                        <th>Action</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["user_id"] . "</td>
                        <td>" . $row["F_name"] . "</td>
                        <td>" . $row["L_name"] . "</td>
                        <td>" . $row["gender"] . "</td>
                        <td>" . $row["mobile_num"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["addresses"] . "</td>
                        <td>" . $row["dob"] . "</td>
                        <td>
                            <a class='tabbtn1' href='admin_u_delete.php?id=" . $row["user_id"] . "' onclick='return confirmDelete();'>Delete</a> 
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