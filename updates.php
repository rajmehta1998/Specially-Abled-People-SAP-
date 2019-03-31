<?php include('server.php'); ?>
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
						<li><a href="#">View Updates</a></li>
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
						<h1>To post an update, click below</h1>
						<a class="btn btn-first" href="post.php">Post an Update</a>
					</div>
					
					<div class="col-sm-6 banner-image">
						<img src="image1.png" class="img-responsive">
					</div>
				</div>
			</div>
		</header>
		<div class="container" id="about">
		<div class="row">
			<table class="table table-striped">
			<thead>
				<tr>
					<th>Place</th>
					<th>Service</th>
					<th colspan="2">Description</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row=@mysqli_fetch_array($results))
				{ ?>
					<tr>
						<td><?php echo $row['place']; ?></td>
						<td><?php echo $row['service']; ?></td>
						<td><?php echo $row['description']; ?></td>
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