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
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div class="main">
            <?php
            require'header.php';
            ?>
            <div class="theme">
                <p>" Elevate your brand online with <br>expert digital advertising solutions."</br><br><i>Let's amplify your success together.</i></p>
            </div>
        
        </div>
        <div class="main2">
            <div class="service">
             
                 <li class="ser1"><p><b>Social media advertising</b></p></li>
                 <li class="ser2"><p><b>Web Advertising</b></p></li>
                 <li class="ser3"><p><b>TV comercials</b></p></li>
             </ul>

            </div>
            

        </div>
        <?php
        require'footer.php';
        ?>
    </body>
</html>