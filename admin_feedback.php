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
              return confirm('Are you sure you want to delete this feedback?');
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
                <h2>Manage feedback</h2>
                <?php
            require 'config.php';

            // Function to fetch and display data
            function displayfeedback()
            {
                global $con;

                // SQL query to select all data from the feedback table
                $sql = "SELECT * FROM feedback";

                // Execute the query
                $result = $con->query($sql);

                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table border='1'>
                            <tr>
                                <th>Feedback ID</th>
                                <th>email</th>
                                <th>names</th>
                                <th>phone number</th>
                                <th>feedback</th>
                                <th>Action</th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["feedback_id"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["names"] . "</td>
                                <td>" . $row["phone_number"] . "</td>
                                <td>" . $row["feedback"] . "</td>
                                <td>
                                    <a class='tabbtn1' href='admin_f_delete.php?id=" . $row["feedback_id"] ."' onclick='return confirmDelete();'>Delete</a>   
                                </td>
                                
                            </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No feedback found.";
                }
            }

        ?>


<?php
// Call the function to display feedbacks
displayfeedback();
?>

</body>
</html>

            </div>
		    
        </div>
        
    </body>
</html>