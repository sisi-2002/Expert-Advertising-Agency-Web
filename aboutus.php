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
        <link rel="stylesheet" href="aboutus.css">
        
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="about">
                <h2>About Us</h1><br>
                <p>
                Welcome to E<span class="highlight"><b>X</b></span>PERT ADVERTISING, where innovation and expertise converge in digital <br>
                advertising. We're dedicated to propelling businesses forward in the digital age <br>
                through tailored strategies that drive results. With a focus on collaboration and client <br> 
                satisfaction, we craft customized solutions that resonate with your audience and <br> 
                elevate your brand. Leveraging creativity, data-driven insights, and cutting-edge <br>
                technology, we stay ahead of the curve to keep your brand at the forefront of the digital <br>
                conversation. Let us be your trusted partner in navigating the complexities of online <br>
                marketing.Contact us today and let's embark on a journey to digital success together.
               </p>
            </div>
           
        </div>
        
        
        <?php
        require'footer.php';
        ?>
    </body>
</html>