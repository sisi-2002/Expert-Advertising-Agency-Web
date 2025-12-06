<!DOCTYPE html>
<html>
    <head>
        
    <link rel="stylesheet" href="header1.css">
        
    </head>
    <body>
    <div class="navbar">
    
            </div>
            
            <div class="icon">
                <a href="index.php"><img src="assests/logo.png" width="400px"height="100px"></a>
                <div class="profile">
                <?php
                //check the user login in
                if(isset($_SESSION['username'])){
                    echo'<div class="userinfo">
                    <a class="l1" href="profile.php"><span>'.$_SESSION['username']. '</span></a>
                    <a class="l2"href="logout.php"> <button id="logoutbtn">Log Out </button> </a>
                    </div>';
                }else{
                    echo'<div class="logsign">
                    <ul>
                        <li class="sign"><a href="signin.php">Sign Up</a></li>
                        <li class="login"><a href="login.php">Log in</a></li>
                    
                    </ul>
                    </div>';
                }

                ?>
                <!--<ul>
                    <li class="sign"><a href="signin.php">Sign in</a></li>
                    <li class="login"><a href="login.php">Log in</a></li>
                </ul>-->

            </div>
            </div>
            
            <div class="menu">
                <ul>
                  <li><a href="index.php"><b>Home</b></a></li>
                  <li><a href="aboutus.php" id="au"><b>About us</b></a></li>
                  <li><a href="services.php" id="s"><b>Services</b></a></li>
                  <li><a href="portfolio.php" id="p"><b>Portfolio</b></a></li>
                  <li><a href="client.php" id="c"><b>Clients</b></a></li>
                  <li><a href="contactus.php" id="co"><b>Contact us</b></a></li>
                </ul>
            </div>
            
            
            <div class="searchbar">
                <input type="text" placeholder="Search..">
                <button><img src="assests/search.png" width="20px"height="20px"></button>
            </div>
            
    </body>
</html>