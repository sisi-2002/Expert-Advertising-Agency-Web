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
            <br>
            
            
            <div class="container">
            
        <h2>Feedback Form</h2>

        <form method="post" action="insertfeedback.php">
       
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"  placeholder = "Insert your name"><br>
            
            <label for="phone">phone number:</label><br>
            <input type="phone" id="phone" name="phone" placeholder = "Insert phone number"required title ="10 digits" pattern="[0-9]{10}"><br>
            
      
            <label for="feedback">Feedback:</label><br>

            <textarea id="feedback" name="feedback" rows="5" cols="20"></textarea><br>

            <button type="submit" class="subutton">Submit Feedback</button>
        
        </form>
        <div class="contact">
            <p>TEL : 041 4579090</p><br><br><br><p>Email : expertsadd@gmail.com</p>
                  <br><br><br><p> N0: 34 A <br> broad way<br> matara</p>
        </div>
        
            <br>
        

       </div>
    
        </div>
        
           
        
        
        <?php
        require'footer.php';
        ?>
    </body>
</html>
