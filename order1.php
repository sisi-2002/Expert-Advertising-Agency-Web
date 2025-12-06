<?php
session_start();
if (!isset($_SESSION['email'])) {
    // Redirect non-logged-in users to login page
    header("Location: login.php");
    
}
?>
<!DOCTYPE html>
<html>
   <head>
   <!-- add a title -->
    <title>Order page</title>
	<link rel="stylesheet" href="order1.css">
	
	
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
	<!-------------------------Order form-------------------------->
    <div class="order-container">
        <h2>ORDER NOW</h2>
        <form method="post" action="orderinsert.php" onsubmit = ''>
		<div class="input1">
		<ul>
		    <li >
			<label for="Add catagory">Choose catagory:</label><br>
			  <select name="category" id="category" onchange="updatePrice()">
			        <option value=""></option>
                    <option value="social">Social meadia</option>
                    <option value="TV">TV commercial</option>
                    <option value="web">Web advetesement</option>
                </select><br>
				<label for="audience">Target audience:</label><br>
			  <select name="audience" id="audience">
				    <option value=""></option>
                    <option value="children">Children</option>
                    <option value="adult">Adults</option>
                    <option value="teen">tenagers</option>
					<option value="mens">Only mens</option>
					<option value="women">Only womens</option>
					<option value="all">All</option>
                </select><br>
			  <label for="payment">Payment type:</label><br>
			  <select name="payment" id="payment">
				    <option value=""></option>
                    <option value="trns">Online transfer</option>
                    <option value="card">Card payment</option>
                    <option value="payp">Paypal</option>
					<option value="btc">bitcoin</option>
                </select><br>
				Price:<br>
			  <input type="text"name="price" id ="price" readonly><br>
				Mobile number:<br>
			  <input type="text"name="m_number" id="phone" placeholder = "xxx-xxxxxxx" required title ="10 digits" pattern="[0-9]{10}"><br>
			</li>
			<li>
			  Key words:<br>
			  <textarea id="txtarea"name="key" rows="5" cols="45" > </textarea><br>
			  Add description:<br>
			  <textarea id="txtarea"name="add_d" rows="6" cols="45"> </textarea><br>
			   Order Deadline<br>
			  <input type ="date"name="date" id ="date" ><br>
			</li>
		</ul>
		</div>
		
			
		<input class="orderbtn" type = "submit"  value = "ORDER NOW"><br><br>
        <a class="orderli" href="orderlist.php">order history</a>
</form>
    </div>
	

	</div>	
	<script>
        function updatePrice() {
            var category = document.getElementById("category").value;
            var priceField = document.getElementById("price");

            // Set price based on the selected category
            switch (category) {
                case "social":
                    priceField.value = "Rs.8000.00"; 
                    break;
                case "TV":
                    priceField.value = "Rs.12000.00"; 
                    break;
                case "web":
                    priceField.value = "Rs.10000.00"; 
                    break;
                default:
                    priceField.value = ""; 
            }
        }
    </script>
	     
	
	
</body>

</html>