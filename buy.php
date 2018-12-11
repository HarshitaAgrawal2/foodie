<!DOCTYPE html>
<html>
<head>
	<title>Foodie</title>
</head>
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
	</style>
<body>


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
      
        $sqlQuery = "select food, price, sum(q) as quantity from buy where email='$email' group by food";
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
			$total = $total + $price * $q ;
	?>
		 <tr>
		    <td><?php echo "<b>$food</b>"; ?></td>
		    <td><?php echo "<b>$price</b>"; ?></td>
		    <td><?php echo "<b>$q</b>"; ?></td>
		  
		 </tr>
	<?php } ?>
	</table>
	</center>
	<center>
	<?php
		    echo "Total Amount : $total" ;
	?>
	</center>
	<form method="post">
		<button name="Confirm_Order">Confirm Order</button>
	</form>
	<?php
		if (isset($_POST['Confirm_Order'])) {
			// send mail
			$to = "harshitaagrawal301@gmail.com";
			$subject = "Foodie Order";
			$txt = "Hello world!";
			$header = "From:harshitaagrawal301@gmail.com\r\n";
	        $header .= "Cc:harshitaagrawal301@gmail.com \r\n";
	        $header .= "MIME-Version: 1.0\r\n";
	        $header .= "Content-type: text/html\r\n";

			$retval = mail($to,$subject,$txt,$header);
			if( $retval == true ) {
	           echo "Message sent successfully...";
	        }else {
	           echo "Message could not be sent...";
	        }

		}
	?>
</body>
</html>