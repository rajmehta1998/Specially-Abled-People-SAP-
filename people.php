<?php 

	session_start();

	
	$id=0;

	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'sap');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	
	
	$r=@mysqli_query($db,"select image,name,type,gender from user_info order by id desc");

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
						<li><a href="#">View People</a></li>
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
						<h1 class="big-text">Find People</h1>
					</div>
					
					<div class="col-sm-6 banner-image">
						<img src="image2.png" class="img-responsive">
					</div>
				</div>
			</div>
		</header>
		<div class="container" id="about">
		<div class="row">
			<table class="table table-striped">
			<thead>
				<tr>
					<th>Photo</th>
					<th>Name</th>
					<th>State</th>
					<th>Gender</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row=@mysqli_fetch_array($r))
				{ ?>
					<tr>
						<td><img src="<?php echo $row['image'] ?>"></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['type']; ?></td>
						<td><?php echo $row['gender']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
			</table>
		</div>
		</div>
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