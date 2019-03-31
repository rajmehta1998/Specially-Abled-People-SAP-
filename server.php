<?php
	session_start();

	
	$id=0;

	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'sap');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());

	if(isset($_POST['post']))
	{
		$place=$_POST['place'];
		$service=$_POST['service'];
		$description=$_POST['description'];
		$query="insert into user_posts(place, service, description) values('$place', '$service', '$description')";
		@mysqli_query($db,$query);
		$_SESSION['msg']="Posted";
		header('location: updates.php');
	}
	
	$results= @mysqli_query($db,"select * from user_posts order by id desc");
?>