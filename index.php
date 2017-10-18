<!DOCTYPE html>
<html>
<head>
	<title>SQL Injection</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form class="form-group" action="login.php" method="POST">
			<br>
			<div>
				<h1>Login</h1>	
			</div>
			<br>	
			<div>
				<input type="text" name="userid" class="form-control" placeholder="User ID">
			</div>
			<br>	
			<div>
				<input type="text" name="pass" class="form-control" placeholder="Password">
			</div>
			<br>	
			<div>
				<input type="submit" name="login" value="Login" class="btn btn-primary">
			</div>
		</form>
	</div>	
</body>
</html>