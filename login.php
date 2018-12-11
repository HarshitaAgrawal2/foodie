<!DOCTYPE html>
<html>
<head>
	<title>foodie</title>
	<style>
	

		input[type=email],input[type=password], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: darkorange;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}

		input[type=submit]:hover {
		    background-color: red;
		}

		.formDiv {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 30px;
		    margin: 0 20% ;
		    margin-top:5%;
		    
		}

	
	</style>
</head>
<body>
	<?php
		require "header1.html";
	?>
	<div class="formDiv">
		<form method="post">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter your Email Id">	
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" name="submitLogIn" value="Log In">	
		</form>
		<a href="signup.php">Sign Up</a>
	</div>
</body>
<?php
	if(isset($_POST["submitLogIn"]))
	{
		logInFormValidate();
	}
	function logInFormValidate()
	{
		$correct = true;
		if($_POST["email"]==''){
			echo "Email is mandatory";
			$correct = false;
		}
		if($_POST["password"]==''){
			echo "Password is mandatory";
			$correct = false;
		}
		if($correct==true){
			logInValidate();
		}
	}
	function logInValidate()
	{
		$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $dbPassword = '';
        $connObject = mysql_connect($host, $user, $pass);
        if(! $connObject ) 
        	die(" Error in connection.") ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;
        $sqlQuery = "select password from signup where email='$email'";
      	mysql_select_db('foodie');
   		$result = mysql_query( $sqlQuery, $connObject );
   		if(! $result ) 
      		die('Could not log In.');
      	while($row = mysql_fetch_array($result))
			$dbPassword = $row['password'];
      	if($dbPassword == null)
      		die(" Email Id does not exist.");
      	else if($dbPassword!==$password)
       		die(" Password is wrong.");
 	  	echo "Log In Successfully";
 	  
 		session_start();

		$_SESSION["email"] = $email;
		//header('Location: order.php');
	}
?>

</html>