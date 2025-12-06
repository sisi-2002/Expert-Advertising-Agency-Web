<!DOCTYPE html>
<html>
   <head>
   <!-- add a title -->
    <title>sign in page</title>
	<link rel="stylesheet" href="signin.css">
	
	<script src ="signin.js">
	</script>
	
	</head>
	<body>
	<div class="main">
	<!----------------------web site logo-------------------->
    <div class="navbar">
            </div>
            <div class="icon">
                <a href="index.php"><img src="assests/logo.png" width="400px"height="100px"></a>
            </div>
            
            
	<div>
	<!-------------------------signin form-------------------------->
    <div class="login-container">
        <h2>Sign Up</h2>
        <form method="post" action="insertsign.php" onsubmit = 'checkpassword()'>
		<div class="input1">
		<ul>
		    <li >
			  first name:<br>
			  <input type ="text"name="fname" placeholder = "Insert your first name"><br>
			  Last name:<br>
			  <input type ="text"name="lname" placeholder = "Insert your Last name"><br>
			  Gender:<br>
			  <label for="Gender"></label>
			  <input class="radiobtn" type ="radio" name="Gender"value="male">Male <br>
			  <input class="radiobtn" type ="radio" name="Gender"value="female">Female<br>
			  Mobile number:<br>
			  <input type="text"name="m_number" placeholder = "xxx-xxxxxxx" required title ="10 digits" pattern="[0-9]{10}"><br>
			  Email:<br>
			  <input type ="text"name="mail" placeholder = "abc@gmail.com">
			</li>
			<li>
			  Address:<br>
			  <textarea id="txtarea"name="adrs" rows="6" cols="45"> </textarea><br>
			  DOB:<br>
			  <input type ="date"name="date" min ="1950-01-01" max = "2010-12-31"><br>
			
			  password:<br>
			  <input  type = "password" name="pw" id="PW1"><br>
			
			  Re-Enter password:<br>
			  <input  type = "password" id="PW2">
			
			</li>
		</ul>
		</div>
		
		
		<input class="chkbox" id ="checkbox" type ="checkbox" onclick="enalbleButten()">  I agree with policy and tearms<br>
			
		<input class="subbtn" type = "submit"  value = "Submit" disabled id ="submitbtn">
 
		 </form>

    </div>
	

	</div>	
	</div>
	
	     
	
	
</body>

</html>