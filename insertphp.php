<?php
// Update connection details here:
$servername = "127.0.0.1"; // Use 127.0.0.1 instead of localhost if localhost is causing issues
$username = "root";         // Default username for XAMPP is 'root'
$password = "";             // Default password is empty for XAMPP
$database = "ajaxcrud";     // Your database name
$port = 3307;               // Default MySQL port. Change it if you are using a different port like 3307

// Create connection
$con = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // This will display the error if connection fails
}

// If connection is successful, you can proceed with inserting data
extract($_POST);

if(isset($_POST['submit'])){
    $q = "INSERT INTO ajaxinsert (username, password) VALUES('$username', '$password')";
    $query = mysqli_query($con, $q);
    
    if($query) {
        header('Location: insert.php'); // Redirect to insert.php after successful insertion
    } else {
        echo "Error: " . mysqli_error($con); // In case of error during insertion
    }
}
?>
