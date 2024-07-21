<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mywebsite";
$con=mysqli_connect("localhost", "root", "","mywebsite");
// Check connection
if (!$con) 
{
  die ("Connection failed: " .mysqli_error($con));
}
else
{
 echo "Connected successfully";
}
?>