<!DOCTYPE html>
<html>
<head>
	<title>foodie</title>
</head>
<style>
	body {
	    font-size: 28px;
	}

	ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: yellow;
		    position: -webkit-sticky; /* Safari */
		    position: sticky;
		    top: 0;

		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: black;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover {
		    background-color: orange;
		}

		.active {
		    background-color: red;
		}

	div.foodgallery {
	    margin: 5px;
	    border: 1px solid #ccc;
	    float: left;
	    width: 15%;
	}

	div.foodgallery:hover {
	    border: 1px solid #777;
	}

	div.foodgallery img {
	   	width:100%;
	    height: auto;
	}

	div.desc {
	    padding: 15px;
	    text-align: center;
	}

	.button , input[type=submit]{

	    color: white;
	    padding: 10px;
	    text-align: center;
	    text-decoration: none;
	    display: block;
	    font-size: 20px;
	    margin: 2px;
	    cursor: pointer;
	    border-radius: 8px;
	    float:left;
	}


	.buttonCart,input[type=submit]{
	 	background-color:darkorange; 
	}
	.buttonBuy{
	 	background-color:red; 
	}
	
</style>
<body>
	<div class="header">
	   <h2>Foodie</h2>
	  <p>Order your food online !</p>
	</div>

	<ul>
	  <li><a class="active" href="index.html">Home</a></li>
	  <li><a href="order.php">Order</a></li>
	  <li><a href="cart.php">Food Cart</a></li>
	  <li style="float:right"><a href="logout.php" >Log out</a></li>
	</ul>

	<div class="foodgallery">
	  <a target="_blank" href="pizza.PNG">
	    <img src="pizza.PNG" alt="pizza" >
	  </a>
	  <div class="desc">Caprese Pizza<br>
	  	Price : Rs. 249
	 	<form method="post">
	  		<input type="submit" name="sub1" value="+ Food Cart">
	  		<input type="submit" name="osub1" value="Order">
	  	</form>
	  	
	  </div>
	</div>

	<div class="foodgallery">
	  <a target="_blank" href="roll.PNG">
	    <img src="roll.PNG" alt="roll" >
	  </a>
	  <div class="desc">Banana peanut butter french toast roll up<br>
	  	Price : Rs. 99
		<form method="post">
	  		<input type="submit" name="sub2" value="+ Food Cart">
	  	</form>
	  	<a href="buy.php"><button class="button buttonBuy">Order</button></a>
	  </div>
	</div>

	<div class="foodgallery">
	  <a target="_blank" href="roll2.PNG">
	    <img src="roll2.PNG" alt="roll" >
	  </a>
	  <div class="desc">Cheese and Mushroom Spring Roll<br>
	  	Price : Rs. 199
		<form method="post">
	  		<input type="submit" name="sub3" value="+ Food Cart">
	  	</form>
	  	<a href="buy.php"><button class="button buttonBuy">Order</button></a>
	  </div>
	</div>

	<div class="foodgallery">
	  <a target="_blank" href="burger.PNG">
	    <img src="burger.PNG" alt="burger" >
	  </a>
	  <div class="desc">Burger<br>
	  	Price : Rs. 79
		<form method="post">
	  		<input type="submit" name="sub4" value="+ Food Cart">
	  	</form>
	  	<a href="buy.php"><button class="button buttonBuy">Order</button></a>
	  </div>
	</div>

	<div class="foodgallery">
	  <a target="_blank" href="frenchFries.PNG">
	    <img src="frenchFries.PNG" alt="French Fries" >
	  </a>
	  <div class="desc">American French Fries<br>
	  	Price : Rs. 49
	  	<form method="post">
	  		<input type="submit" name="sub5" value="+ Food Cart">
	  	</form>
	  	<a href="buy.php"><button class="button buttonBuy">Order</button></a>
	  </div>
	</div>

	<div class="foodgallery">
	  <a target="_blank" href="pizza2.PNG">
	    <img src="pizza2.PNG" alt="pizza" >
	  </a>
	  <div class="desc">FRESH PIZZA<br>
	  	Price : Rs. 149
	  	<form method="post">
	  		<input type="submit" name="sub6" value="+ Food Cart">
	  	</form>
	  	<a href="buy.php"><button class="button buttonBuy">Order</button></a>
	  </div>
	</div>

</body>
<?php
//if ($_SESSION["email"] == null) {
	//header('Location: login.php');
//}
//else{
	if(isset($_POST["sub1"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "Caprese Pizza";
			$price = 249;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
		else{
			echo "First login";
			header('Location: login.php');
		}
	}

	if(isset($_POST["sub2"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "Banana peanut butter french toast roll up";
			$price = 99;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
	}

	if(isset($_POST["sub3"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "Cheese and Mushroom Spring Roll";
			$price = 199;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
	}

	if(isset($_POST["sub4"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "Burger";
			$price = 79;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
	}

	if(isset($_POST["sub5"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "American French Fries";
			$price = 49;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
	}

	
	if(isset($_POST["sub6"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "FRESH PIZZA";
			$price = 149;
			$email = $_SESSION["email"];
			addToCart($food, $price, $email);
		}
	}

	function addToCart($food, $price, $email){
		$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $dbPassword = '';
        $connObject = mysql_connect($host, $user, $pass);
        if(! $connObject ) 
        	die(" Error in connection.") ;
       
        $sqlQuery = "insert into cart values('$email','$food','$price',1)";
      	mysql_select_db('foodie');
   		$result = mysql_query( $sqlQuery, $connObject );
   		if(! $result ) 
      		die('Cannot add to cart');
      	echo "Added to Food Cart";
	}

	//orderrrr
	if(isset($_POST["osub1"])){
		session_start();
		if ($_SESSION["email"] != null) {
			$food = "Caprese Pizza";
			$price = 249;
			$email = $_SESSION["email"];
			addToBuy($food, $price, $email);
		}
	}

	// add to buyyy
	function addToBuy($food, $price, $email){
		$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $dbPassword = '';
        $connObject = mysql_connect($host, $user, $pass);
        if(! $connObject ) 
        	die(" Error in connection.") ;
       
        $sqlQuery = "insert into buy values('$email','$food','$price',1)";
      	mysql_select_db('foodie');
   		$result = mysql_query( $sqlQuery, $connObject );
   		if(! $result ) 
      		die('Cannot Buy');
      	header('Location: buy.php');
	}
//}
?>
</html>