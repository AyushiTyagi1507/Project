<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mywebsite";
// Create connection
$con = mysqli_connect("localhost","root","","mywebsite","3307");

// Check connection
if (!$con) {
  die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully";
?>