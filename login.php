
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login</h2>
					<form method="post" action="validation.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="col-md-6 login-right">
					<h2>Register</h2>
					<form method="post" action="registration.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="text" name="age" class="form-control" placeholder="Enter Age" required>
						</div>
						<div class="form-group">
							<label>Upload Image</label>
							<input type="file" name="image" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender </label><br />
							<input type="radio" name="gender" value="male" required>Male
							<input type="radio" name="gender" value="female" required>Female
						</div>
						<div class="form-group">
							<label>Type </label><br />
							<input type="radio" name="type" value="disabled"  required>Disabled
							<input type="radio" name="type" value="contributer"  required>Contributer
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="text" name="cpassword" class="form-control" placeholder="Re-Enter Password" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
		<div id="footer">
					Copyright &copy; 2019 Raj Mehta.
			</div>
		</div>
	</body>
</html>