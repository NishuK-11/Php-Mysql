<?php

$servername = "127.0.0.1";  // Your localhost IP
$username = "root";         // Default XAMPP user
$password = "";             // Default XAMPP password (empty)
$database = "crudyoutube";  // Correct database name
$port = 3307;               // Your MySQL port

$con = mysqli_connect($servername, $username, $password, $database, $port);
$db = mysqli_select_db($con,$database);


if ($db) {
    // echo "connection successful";
    ?>
    <script>
        alert('connection successful');
    </script>
    <?php
} else {
    die( "no connection".mysqli_connect_error());
}
?>