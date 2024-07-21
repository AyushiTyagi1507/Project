<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $chk="";
    $sql="insert into webtable(username,email,phone,message) values('$username','$email','$phone','$message')";
    if(mysqli_query($con,$sql))
    {
    echo "<script>alert('new record inserted')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
   mysqli_close($con);
}
?>