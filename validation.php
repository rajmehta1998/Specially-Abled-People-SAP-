<?php
	session_start();
	
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'sap');

	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	
	$s= "select * from user_info where name = '$name' && password = '$pass'";
	
	$result = @mysqli_query($con, $s);
	
	$num = @mysqli_num_rows($result);
	
	if($num == 1)
	{
		$_SESSION['username'] = $name;
		header('location:home.php');
	}
	else
	{
		header('location:login.php');
	}
?>