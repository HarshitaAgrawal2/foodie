<!DOCTYPE html>
<html>
<head>
	<title>foodie</title>
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 60%;
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
		#personalInfo{
			width: 60%;
			 background-color: lightyellow;
			 color:darkred;
		}
</style>
</head>

<body>


<?php
	
	require "header1.html";
	session_start();
	
	if ($_SESSION["email"] != null) {
		?>
	<center>
	<div id="personalInfo">
	<?php
		echo "Email : ";
		print_r($_SESSION["email"]);
	?>
	</div>
</center>
	<?php
		echo "<br>";
		$email = $_SESSION["email"];
		$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
   
        $connObject = mysql_connect($host, $user, $pass);
        if(! $connObject ) 
        	die(" Error in connection.") ;
      
        $sqlQuery = "select food, price, sum(q) as quantity from cart where email='$email' group by food";
      	mysql_select_db('foodie');
   		$result = mysql_query( $sqlQuery, $connObject );
   		if(! $result ) 
      		die('Error');
?>
		<center>
      	<table>
		  <tr>
		    <th>Food</th>
		    <th>Price</th>
		    <th>Quantity</th>

		  </tr>
 	<?php
      	while($row = mysql_fetch_array($result)){
			$food = $row['food'];
			$price = $row['price'];
      		$q = $row['quantity'];
	      	if($food == null )
	      		die(" Food Cart is Empty");
	?>
		 <tr>
		    <td><?php echo "<b>$food</b>"; ?>
		    	<form method="post">
		    		<input type="checkbox" name="foodItem[]" value="<?=$row['food']?>"/>
		    		
		    	

		    </td>
		    <td><?php echo "<b>$price</b>"; ?></td>
		    <td><?php echo "<b>$q</b>"; ?></td>
		    
		 </tr>
			
      
	 	  		
	<?php	 	 
 	  	}
 	?>
 	 				<input type="submit" name="delete" value="Remove from cart">
 	 			</form>
 	<?php
 		if(isset($_POST['delete'])){
			if(!empty($_POST['foodItem'])){
		
				foreach($_POST['foodItem'] as $selected){
					echo $selected."</br>";
					  $sqlQuery = "delete from cart where food='$selected'";
      				  mysql_select_db('foodie');
   					  $result = mysql_query( $sqlQuery, $connObject );
   					  
				}
			}
		}
 	}
	?>
	</table>
	</center>
	<a href="buyFromCart.php">Buy</a>
</body>
</html>