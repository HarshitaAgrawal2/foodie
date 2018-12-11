<!DOCTYPE html>
<html>
<head>
	<title>foodie</title>
</head>
<body></body>
<?php
 session_start();
 session_unset(); 
 session_destroy();
 unset($_SESSION['email']);
 header('Location: main.php');
?>

</html>