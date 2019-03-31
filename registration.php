<?php
	session_start();
	header('location:login.php');
	
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'sap');

	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	
	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$type=$_POST['type'];
	$image = $_FILES['image']['name'];
	
	
	$s= "select * from user_info where name = '$name'";
	
	$result = @mysqli_query($con, $s);
	
	$num = @mysqli_num_rows($result);
	
	if($num == 1)
	{
		echo "Username already taken";
	}
	else
	{
		$target = "images/".basename($image);
		$reg = "insert into user_info(name , password , age , gender , type , image) values('$name' , '$pass' , '$age' , '$gender' , '$type' , '$image')";
		@mysqli_query($con, $reg);
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		$_SESSION['msg']="Registration Successfull";
	}
	
?>