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

$nameid = $_POST['datapost'];  // Get the degree id from the AJAX request

// Query to fetch the classes based on degree id
$q = "SELECT * FROM classes WHERE mid = '$nameid'";
$result = mysqli_query($con, $q);

while($rows = mysqli_fetch_array($result)){
    echo "<option value='".$rows['class']."'>".$rows['class']."</option>"; // Output class names dynamically
}
?>
