<?php
$servername = "<RDS DB Endpoint>";
$username = "admin";
$password = "password";
$db_name = "<DB NAME>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>