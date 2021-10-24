<?php
$conn  = mysqli_connect("localhost", "root", "root", "myweb");

// Check connection
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    //echo 'success';
}
?>