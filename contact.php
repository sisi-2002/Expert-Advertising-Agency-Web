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
        <link rel="stylesheet" href="contact.css">
        
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="about">
                <h2>Contact Us</h1><br>
                <p>
                <img src="assests/phone.png" with="100px"height="100px">
                079 8746774
                <img src="assests/mail.png" with="100px"height="100px">
                expertadd@mail.com
               </p>
            </div>
           
        </div>
        
        
        <?php
        require'footer.php';
        ?>
    </body>
</html>
