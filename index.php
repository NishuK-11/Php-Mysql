<?php
$servername = "localhost"; // or "127.0.0.1"
$username = "root"; // Default in XAMPP
$password = ""; // Default is empty
$database = "formdb"; // Ensure this database exists

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fetch Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<h2 class="text-center text-danger">Get Data From Database</h2>
		<form>
			Username: <input type="text" name="username" class="form-control"><br>
			Password: <input type="password" name="password" class="form-control"><br>
			Degree:
			<select class="form-control">
				<!-- Options from database will be added here -->
			</select>
		</form>
	</div>
	
</body>
</html>
