<?php
$servername = "localhost";
$database = "project-3";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
else
{
 //    echo "Connected successfully";
}
?>