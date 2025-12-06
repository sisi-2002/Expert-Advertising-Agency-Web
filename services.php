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
        <link rel="stylesheet" href="service1.css">
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="about">
                <h2>services</h2>
                <div class="category-container">
                    <div class="category-box1a">
                        <br><br><br>Social Media <br> Advertising
                     </div>
                     <div class="category-box2">
                        <h4>package details </h4><br>
                            Ad Strategy<br>
                            Ad Creation<br>
                            Audience Targeting<brr>
                            Platform Management<br>
                            Performance Monitoring<br>
                            Monthly Reporting<br>
                            Optimization<br>
                    </div>
                    <div class="category-box3">
                    <h4>price</h4><br><br>
                            <h2>Rs 8000.00</h2>
                            (for one advertisement) <br><br><br>
                            <a class="orderbtn" href="order1.php">Order now</a>
                    </div>
                    <!-- Add more category boxes here -->
                </div>
                <div class="category-container">
                    <div class="category-box1b">
                        <br><br><br>Web  <br> Advertising
                     </div>
                     <div class="category-box2">
                        <h4>package details </h4><br>
                            Ad Strategy<br>
                            Ad Creation<br>
                            Audience Targeting<brr>
                            Platform Management<br>
                            Performance Monitoring<br>
                            Monthly Reporting<br>
                            Optimization<br>
                    </div>
                    <div class="category-box3">
                    <h4>price</h4><br><br>
                            <h2>Rs 10000.00</h2>
                            (for one advertisement) <br><br><br>
                            <a class="orderbtn" href="order1.php">Order now</a>
                    </div>
                    <!-- Add more category boxes here -->
                </div>
                <div class="category-container">
                    <div class="category-box1c">
                        <br><br><br>TV  <br> comercials
                     </div>
                     <div class="category-box2">
                        <h4>package details </h4><br>
                            Ad Strategy<br>
                            Ad Creation<br>
                            Audience Targeting<brr>
                            Platform Management<br>
                            Performance Monitoring<br>
                            Monthly Reporting<br>
                            Optimization<br>
                    </div>
                    <div class="category-box3">
                    <h4>price</h4><br><br>
                            <h2>Rs 12000.00</h2>
                            (for one advertisement) <br><br><br>
                            <a class="orderbtn" href="order1.php">Order now</a>
                    </div>
                    <!-- Add more category boxes here -->
                </div>
                <a class="order" href="orderlist.php">order history</a>
                <?php
                 require'footer.php';
                ?>
            </div>
           
        </div>
        
        
        
    </body>
</html>