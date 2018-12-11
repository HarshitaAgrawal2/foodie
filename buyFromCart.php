<!DOCTYPE html>
<html>
<head>
	<title>Foodie</title>
</head>
<style type="text/css">
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
</style>
<body>

</body>
<?php
		require "header1.html";
		session_start();
		$total = 0;
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
			$total = $total + $price*$q ;
		?>
			<tr>
		    <td><?php echo "<b>$food</b>"; ?></td>
		    <td><?php echo "<b>$price</b>"; ?></td>
		    <td><?php echo "<b>$q</b>"; ?></td>
		    
		 </tr>
			
	   <?php	 	 
 	  	}
 	
	?>
	</table>
	</center>
	<?php
	    echo "Total Amount : $total" ;
      	
?>
</html>