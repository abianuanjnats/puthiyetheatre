<?php
$con=mysqli_connect("localhost","root","","multiplex");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiplex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>