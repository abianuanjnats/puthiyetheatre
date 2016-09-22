<?php
//include "config.php";
session_start();
include "database.php";

$email=$_POST["email"];
$password=$_POST["password"];

//echo "<script>alert('$email');</script>";

$connect = dbconnect();
$query= "select * from user where uEmail='$email' and uPassword='$password'";
$result= mysqli_query($connect,$query);
$row = mysqli_fetch_array($result);

//echo "<script>alert('$email');</script>";

//echo "<script>alert('$password');</script>";


if (mysqli_num_rows($result)>0)
{
	if($row["uRoll"]=='admin')
	{
		
		//session_start();
		$_SESSION['login']=true;
		$_SESSION['user']=$row["uName"];
		//echo "Welcome .." . $_SESSION['user'] . "!";
		db_disconnect($connect);
		header("Location:tadmin.php");
		

	}
	else
	{
		
		//session_start();
		$_SESSION['login']=true;
		$_SESSION['user']=$row["uName"];
		//echo "Welcome .. " . $_SESSION['user'] . "!";
		db_disconnect($connect);
		header("Location:newthome.php");
		
	}
}
else
{

	//echo "<script>alert('$password');</script>";
	db_disconnect($connect);
	header("Location:tlog.php");
	
}
?>