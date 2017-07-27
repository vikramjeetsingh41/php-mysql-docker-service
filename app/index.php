<?php

$servername = "db";
$username = "dev";
$password = "123456";
$dbname = 'myapp';

//phpinfo();

// Create connection

$conn = mysqli_connect($servername,$username,$password,$dbname);

// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";

?>
