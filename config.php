<?php
$hostName = "localhost"; // host name
$username = "mariam";  // database username
$password = "1234"; // database password
$databaseName = "robot_control_panel"; // database name

$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
?>
