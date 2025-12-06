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
        <link rel="stylesheet" href="admin.css">
        <script>
          function confirmDelete() {
              return confirm('Are you sure you want to delete this admin?');
          }
        </script>

    </head>
    <body>
        <div class="main">
        <div class="icon">
            <img src="assests/logo.png" width="400px"height="100px">
        </div>
        <!--a class="addadmin" href="add_admin.php">manage admin</a-->    
        <a class ="lgout"href="Logout.php">Logout</a>
        
        <div class="about">
            <h2>Add new admin</h1><br>
            <form method="post" action="insertadmin.php">
       
            <label for="email">email:</label>
            <input type="text" id="email" name="email"  placeholder = "Insert admin email"><br>
            
            <label for="name">Name:</label>
            <input type="name" id="name" name="name" placeholder = "Insert admin name"><br>
            
      
            <label for="password">password:</label>
            <input type="password" id="password" name="password" placeholder = "Insert password"><br>

            <button type="submit" class="subutton">Submit</button>
        </form>

        <a class="back" href="admin.php">Go back</a>
        <?php
        function displayadmin()
            {
                global $con;

                // SQL query to select all data from the admin table
                $sql = "SELECT * FROM admins";

                // Execute the query
                $result = $con->query($sql);

                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table border='1'>
                            <tr>
                                <th>Admin ID</th>
                                <th>email</th>
                                <th>name</th>
                                <th>Action</th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["admin_ID"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["F_name"] . "</td>
                                <td>
                                    <a class='tabbtn1' href='admin_a_delete.php?id=" . $row["admin_ID"] .  "' onclick='return confirmDelete();'>Delete</a> 
                                    <a class='tabbtn1' href='admin_a_update.php?id=" . $row["admin_ID"] . "'>Update</a>    
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
displayadmin();
?>
        </div>
          
    </body>
</html>
