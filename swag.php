<!-- $servername = "127.0.0.1:3307";  // Change port if necessary
$username = "root";
$password = "";
$database = "formdb";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "✅ Connected successfully!";
 -->
<?php
$servername = "127.0.0.1";  
$username = "root";         
$password = "";             
$database = "formdb";       
$port = 3307; 

// Create connection
$con = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "✅ Connected successfully!";
$db = mysqli_select_db($con, 'formdb');
if($db){
    echo "success";
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
	
	<div class="container col-lg-6">
		<h2 class="text-center text-danger">Get Data From Database</h2>
		<form>
			Username: <input type="text" name="username" class="form-control"><br>
			Password: <input type="password" name="password" class="form-control"><br>
			Degree:
			<select class="form-control" onchange="myfunc(this.value)">
				<option>Select any one</option>
				<!-- Options from database will be added here -->
				<?php
					$q = "SELECT * FROM degree"; // Query to get degrees
					$result = mysqli_query($con, $q);
					while($rows = mysqli_fetch_array($result)){
					?>
					<option value="<?php echo $rows['mid']; ?>"><?php echo $rows['degrees']; ?></option> <!-- Added value for mid -->
				<?php
					}
				?>
			</select><br>
			Class: <select class="form-control" id="dataget">
				<option>Choose any one</option>
			</select>
			<br><br>
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>

	<script type="text/javascript">
		function myfunc(datavalue){
			$.ajax({
				url:'class.php',  // The PHP file to process the request
				type:'POST',
				data:{datapost:datavalue},  // Send the selected degree ID
				success: function(result){
					$('#dataget').html(result);  // Populate the classes dropdown with options
				}
			})
		}
	</script>
	
</body>
</html>


