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
        
    </head>
    <body>
        <div class="main">
        <div class="icon">
            <img src="assests/logo.png" width="400px"height="100px">
        </div>
        <a class="port" href="admin_portfolio.php">manage portfolio</a>
        <a class="addadmin" href="add_admin.php">manage admin</a>    
        <a class ="lgout"href="Logout.php">Logout</a>
        
        <div class="about">
            <h2>admin Dashboard</h1><br>
            <div class="category-container">
<!---------------------------usercount----------------------------->                
                <div class="category-box1">
                    <p>active users <br><br>
                    <?php
                    $sql = "SELECT COUNT(*) AS useraccount FROM user";
                    $result = $con->query($sql);
                    
                    if ($result === false) {
                        // Query failed
                        echo "Error: " . $con->error;
                    } else {
                         // Query successful, proceed to fetch data
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($rows = $result->fetch_assoc()) {
                                echo"<span class='count'>". $rows['useraccount']."</span>";
                            }
                        } else {
                            echo "0 results";
                        }
                    }
                    
                    ?> <br><br>
                    <a class="checkout" href="admin_user.php">check</a>
                    </p>
                
                     </div>
<!---------------------------order count----------------------------->
                    <div class="category-box2">
                    <p>orders <br><br>
                    <?php
                   
                    
                   $sql = "SELECT COUNT(*) AS ordercount FROM orders";
                   $result = $con->query($sql);
                   
                   if ($result === false) {
                       // Query failed
                       echo "Error: " . $con->error;
                   } else {
                        // Query successful, proceed to fetch data
                       if ($result->num_rows > 0) {
                           // Output data of each row
                           while($rows = $result->fetch_assoc()) {
                            echo "<span class='count'>".$rows['ordercount']."</span>";

                           }
                       } else {
                           echo "0 results";
                       }
                   }
                   ?> <br><br>
                   <a class="checkout" href="admin_order.php">check</a><br>
                    </p>
                                   
                        
                    </div>
<!---------------------------feedback count----------------------------->                    
                    <div class="category-box3">
                        <p>feedbacks
                        <br>
                        <br>
                        <?php
                   
                    
                    $sql = "SELECT COUNT(*) AS feedbackcount FROM feedback";
                    $result = $con->query($sql);
                    
                    if ($result === false) {
                        // Query failed
                        echo "Error: " . $con->error;
                    } else {
                            // Query successful, proceed to fetch data
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($rows = $result->fetch_assoc()) {
                                echo "<span class='count'>".$rows['feedbackcount']."</span>";
                            }
                        } else {
                            echo "0 results";
                        }
                    }
                    ?> <br><br>
                    <a class="checkout"href="admin_feedback.php">check</a>
                   </p>    
                    </div>
                    <!-- Add more category boxes here -->
                </div>
                
               
            </div>
           
        </div>
        
        
        
    </body>
</html>
