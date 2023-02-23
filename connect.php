<?php
    $con=mysqli_connect("localhost","root","","sample");
    if($con){
       // echo "connected";
    }else{
        echo "not connected";
    }
?>