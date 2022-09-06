<?php
$servername = "terraform-20220905160330504500000001.cq174vfsoqja.us-east-1.rds.amazonaws.com";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
