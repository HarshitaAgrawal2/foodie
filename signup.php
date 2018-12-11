<!DOCTYPE html>
<html>
<head>
<title>foodie</title>
<style>
	
		input[type=text], textarea , input[type=email],input[type=password], select {
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
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter your full name">
				
				<label>Address</label>
				<textarea name="address" placeholder="Enter your full address"></textarea>

				<label>State</label>
				<input type="text" name="state" placeholder="Enter your state name">

				<label>City</label>
				<input type="text" name="city" placeholder="Enter your city name">

				<label>Email</label>
				<input type="email" name="email" placeholder="Enter your Email Id">	

				<label>Password</label>
				<input type="password" name="password" placeholder="Enter password">

				<label>Confirm Password</label>
				<input type="password" name="confirmPassword" placeholder="Re enter same Password">	

				<input type="submit" name="submitSignUp" value="Sign Up">

		</form>
		<a href="login.php">Login</a>
	</div>

</body>
<?php
	if(isset($_POST["submitSignUp"]))
	{
		signUpFormValidate();
	}
	function signUpFormValidate()
	{
			$correct = true ;
			if($_POST["name"]==''){
				echo '<p class="displayErrorMsg">Name is mandatory.</p>';
				$correct = false ;
			}
			
			if($_POST["address"]==''){
				echo '<p class="displayErrorMsg">Address is mandatory.</p>';
				$correct = false ;
			}
			
			if($_POST["state"]==''){
				echo '<p class="displayErrorMsg">State is mandatory.</p>';
				$correct = false ;
			}
			if($_POST["city"]==''){
				echo '<p class="displayErrorMsg">City is mandatory.</p>';
				$correct = false ;
			}
			
			if($_POST["password"]==''){
				echo '<p class="displayErrorMsg">Password is mandatory.</p>';
				$correct = false ;
			}
			if($_POST["confirmPassword"]==''){
				echo '<p class="displayErrorMsg">Confirm Password is mandatory.</p>';
				$correct = false ;
			}
			if($_POST["password"]!==$_POST["confirmPassword"]){
				echo '<p class="displayErrorMsg">Password does not match.</p>';
				$correct = false ;
			}
			if($correct==true)
			{
				connectDatabase();
			}
	}
	function connectDatabase()
	{
		$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $connObject = mysql_connect($host, $user, $pass);
        if(! $connObject ) 
        	die("Could not sign up.") ;
	    $name = $_POST['name'] ;
        $address = $_POST['address'] ;
        $state = $_POST['state'] ;
        $city = $_POST['city'] ;
        $email = $_POST['email'] ;
        $p = $_POST['password'] ;
        $sqlQuery = "INSERT INTO signup VALUES ('$name', '$address', '$state', '$city', '$email', '$p')";
      	mysql_select_db('foodie');
   		$status = mysql_query( $sqlQuery, $connObject );
   		if(! $status ) 
      		die('Could not sign up. This e-mail id already exist.');
 	  	echo "Sign Up Successfully";
		
		session_start();

		$_SESSION["email"] = $email;
 		mysql_close($connObject);
    }
?>

</html>