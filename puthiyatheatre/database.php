<?php
//$con=mysqli_connect("localhost","root","","multiplex");
//global $database;
//global $servername;
//global $debug;
//global $username;
//global $password;


$servername = "localhost";
$username = "root";
$password = "root";
$database = "multiplex";
$debug=1;


function dbconnect()
 {

 	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "multiplex";
	$debug=1;
    
    if ($debug>9){
	print "Connection attempt properties:<br>";
	print "Username: $username<br>";
	print "Password: $password<br>";
	print "Database: $database<br>";
	print "in Server $servername<br>";
    }

    //echo "<script>alert('$database');</script>";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if (!$connection) {
    	print("Connection failed: " . mysqli_connect_error());
     	$connection=false;
     }

    //echo "<script>alert('$username');</script>";
 
    if ($connection)
    {


		return $connection;
	
	}
	
}


function db_disconnect($connection){
	if (mysqli_close ($connection)){
		return true;
	}
	else {
		return false;
	}

}







?>