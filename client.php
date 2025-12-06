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
        <link rel="stylesheet" href="clients.css">
        
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="about">
                <h2>Clients</h1><br>
                <div class="category-container">
                    <div class="category-box1">
                     </div>
                     <div class="category-box2">
                    </div>
                    <div class="category-box3">
                    </div>
                    <!-- Add more category boxes here -->
                </div>
            </div>
           
        </div>
        
        
        <?php
        require'footer.php';
        ?>
    </body>
</html>