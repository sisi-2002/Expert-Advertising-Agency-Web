<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   <div class="main">
   <div class="icon">
        <a href="index.php"><img src="assests/logo.png" width="400px"height="100px"></a>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" action="process_login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>'
                <p>Don't have an Account? <a href="signin.php">  Sign in</a></p> 
            </div>
        </form>
    </div>
   </div>
    
</body>
</html>
