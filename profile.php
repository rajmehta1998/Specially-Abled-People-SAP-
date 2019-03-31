<?php 

	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'sap');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());

	session_start();
	if(isset($_SESSION['username']))
		{
			$username=$_SESSION['username'];
		}
		else{ echo 'session not started';}
	
	$query = "SELECT name,age,gender,type,password,image FROM user_info WHERE name='$username'";
	$re = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($re))
	{
		$name=$row["name"];
		$age=$row["age"];
		$gender=$row["gender"];
		$type=$row["type"];
		$pass=$row["password"];
	}
?>
<html>
	<head>
		<title>SAP</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php if(isset($_SESSION['msg'])): ?>
			<div class="alert alert-info">
				<?php
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				?>
			</div>
		<?php endif ?>
		<header class="header">
			<nav class="navbar navbar-style">
				<div class="container">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
						<a href="#" class="navbar-brand">SAP</a>
					</div>
					<div class="collapse navbar-collapse" id="micon">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="home.php">Home</a></li>
						<li><a href="home.php">About</a></li>
						<li><a href="updates.php">View Updates</a></li>
						<li><a href="people.php">View People</a></li>
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="#contact">Contact Us</a></li>
						<li><a class="float-right" href="logout.php">Logout</a></li>
					</ul>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 banner-info">
						<h1 class="big-text">Your Profile</h1>
					</div>
					
					<div class="col-sm-6 banner-image">
						<img src="image3.png" class="img-responsive">
					</div>
				</div>
			</div>
		</header>
		<div class="container">
		<div class="row">
		<div class="col-sm-6 banner-info">
			<img src="profile.png" class="img-responsive" style="height: 200px; width: 40%;">
		</div>
		<div class="col-sm-6 banner-info">
		<form method="post" action="">
			<div class="form-group">
				<label>Name</label><br />
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
			</div>
			<div class="form-group">
				<label>Age</label><br />
				<input type="text" name="age" class="form-control" value="<?php echo $age; ?>" required>
			</div>
			<div class="form-group">
				<label>Gender</label><br />
				<input type="radio" name="gender" value="male" <?php if($gender=="male"){ echo "checked";}?>>Male &nbsp; <input type="radio" name="gender" value="female" <?php if($gender=="female"){ echo "checked";}?>>Female
			</div>
			<div class="form-group">
				<label>Type</label><br />
				<input type="radio" name="type" value="disabled" <?php if($type=="disabled"){ echo "checked";}?>>Disabled &nbsp; <input type="radio" name="type" value="contributer" <?php if($type=="contributer"){ echo "checked";}?>>Contributer
			</div>
			<div class="form-group">
				<label>Password</label><br />
				<input type="text" name="password" class="form-control" value="<?php echo $pass; ?>" required>
			</div>
			<button class="btn btn-primary" type="submit" name="update" >Update</button>
		</div>
		</div>
		</div>
		<?php 
		
			if(isset($_POST['update']))
			{
				$name=$_POST["name"];
				$age=$_POST["age"];
				$gender=$_POST["gender"];
				$type=$_POST["type"];
				$pass=$_POST["password"];
				$query="update user_info set name='$name', age='$age', gender='$gender', type='$type', password='$pass' where name='$username'";
				$result=@mysqli_query($db,$query);
				$_SESSION['msg']="Updated";
				header('location: profile.php');
			}
		
		?>
		<footer class="page-footer text-center font-small pt-4" id="contact">
				<div>
				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							SAL Education Campus,Sola Bhadaj Road, Opposite Science City, Sola Village, Ahmedabad, Gujarat 380060
						</p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
							(+91) 9999888877; (+91) 8888555566
						</p>
					</li>
					<li>
						<b>Email</b>
						<span>:</span>
						<p>
							<a href="#" class="email" target="_blank">xyz@gmail.com</a>
						</p>
					</li>
				</ul>
			</div>
		</div>
		<p>
			Copyright &copy; 2019 Raj Mehta.
		</p>
		</footer>
	</body>
</html>