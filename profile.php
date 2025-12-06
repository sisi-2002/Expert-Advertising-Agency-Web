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
        <link rel="stylesheet" href="profile.css">
        
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="about">
                <p class='prof'><b>Profile</b></p> 
                <p class='u_prof'><b>Update profile</b></p><br>
                    <?php
                        require'read.php';
                    ?>   
            </div>
           
        </div>
        
        
        <?php
        require'footer.php';
        ?>
    </body>
</html>