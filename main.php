<!DOCTYPE html>
<html>
<head>
	<title>foodie</title>
</head>
<style>
	body {
	    font-size: 28px;
	    background-color:lightblue;
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


		#place{
		  background-color: lightyellow;
		}
		#place img{
		  width:auto;
		  height:auto;

		}
		#menu{
		  background-color: red;
		   
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid red;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: lightyellow;
		}
		tr:nth-child(odd) {
		    background-color: lightgrey;
		}
		th{
		  background-color: orange;
		}
		h2{
			text-align:center;
			font-family:Lucida Handwriting;
			font-size: 40px;
		}
</style>
<body>
	<div class="header">
	  <h2>Foodie</h2>
	  <p style="text-align:center;font-family:Lucida Handwriting;font-size:17px">Order your food online !</p>
	</div>

	<ul>
	  <li><a class="active" href="main.html">Home</a></li>
	  <li><a href="#menu">Menu</a></li>
	  <li><a href="order.php">Order</a></li>
	  <li><a href="cart.php">Food Cart</a></li>
	  <li style="float:right"><a href="login.php" >Log in</a></li>
	  <li style="float:right"><a href="signup.php" >Sign up</a></li>
	</ul>

	<div id="place">
 		<center> 
 			<img src="place.jpg">
 		</center>
	</div>
	
	<article id="menu">
		<h2 style="color:yellow"><center>Foodie Menu</center></h2>

		<table>
		  <tr>
		    <th>Food</th>
		    <th>Price</th>
		 		  </tr>
		  <tr>
		    <td>Caprese Pizza</td>
		    <td>249</td>
		  </tr>

		  <tr>
		    <td>Banana peanut butter french toast roll up</td>
		    <td>99</td>		  
		  </tr>

		  <tr>
		    <td>Cheese and Mushroom Spring Roll</td>
		    <td>199</td>		   
		  </tr>

		  <tr>
		    <td>Burger</td>
		    <td>79</td>		 
		  </tr>

		  <tr>
		    <td>American French Fries</td>
		    <td>49</td>		   
		  </tr>
		  
		   <tr>
		    <td>FRESH PIZZA</td>
		    <td>149</td>		   
		  </tr>
		</table>
	</article>
	
</body>
<?php
session_start();
$_SESSION["email"] = "";
?>
</html>