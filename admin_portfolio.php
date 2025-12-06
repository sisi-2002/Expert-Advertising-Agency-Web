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
              return confirm('Are you sure you want to delete this portfolio?');
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
            <h2>manage portfolio</h1><br>
            <form method="post" action="insertportfolio.php">
       
            <label for="company">company name:</label>
            <input type="text" id="company" name="company"  placeholder = "Insert company name"><br>
            
            <label for="catagory">catagory:</label>
			  <select name="category" id="category">
			        <option value=""></option>
                    <option value="social">Social meadia</option>
                    <option value="TV">TV commercial</option>
                    <option value="web">Web advetesement</option>
            </select><br>
            <!--label for="category">category:</label>
            <input type="name" id="category" name="category" placeholder = "Insert category"><br-->
            
      
            <label for="rate">ratings:</label>
            <input type="text" id="rate" name="rate" placeholder = "Insert ratings out of 5.0"><br>

            <button type="submit" class="subutton">Submit</button>
        </form>

        <a class="back" href="admin.php">Go back </a>
        <?php
        function displayportfolio()
            {
                global $con;

                // SQL query to select all data from the portfolio table
                $sql = "SELECT * FROM portfolio";

                // Execute the query
                $result = $con->query($sql);

                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table border='1'>
                            <tr>
                                <th>portfolio ID</th>
                                <th>company name</th>
                                <th>category</th>
                                <th>ratings</th>
                                <th>Action</th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["p_id"] . "</td>
                                <td>" . $row["company_name"] . "</td>
                                <td>" . $row["category"] . "</td>
                                <td>" . $row["ratings"] . "</td>
                                <td>
                                    <a class='tabbtn1' href='admin_p_delete.php?id=" . $row["p_id"] . "' onclick='return confirmDelete();'>Delete</a> 
                                    <a class='tabbtn1' href='admin_p_update.php?id=" . $row["p_id"] . "'>Update</a>    
                                </td>
                                
                            </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No portfolio found.";
                }
            }

        ?>


<?php
// Call the function to display portfolio
displayportfolio();
?>
        </div>
          
    </body>
</html>
