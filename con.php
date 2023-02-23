<?php
include "connect.php";

$fn=$_POST['fullname'];
$un=$_POST['username'];
$em=$_POST['email'];
$pwd=$_POST['password'];

$sql="insert into register(fullname,username,password,email)values('$fn','$un','$em','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:regis.php");
}else{
    echo "error";
}

?>