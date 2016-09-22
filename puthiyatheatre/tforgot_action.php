<?php
include 'config.php';
$uEmail=$_POST["uEmail"];
$uPassword=$_POST["uPassword"];
$ucpassword=$_POST["ucpassword"];
$query="update user set uPassword='$uPassword' where uEmail='$uEmail'";
$result=mysqli_query($con,$query);
$query1="select * from user where uPassword='$uPassword' and uEmail='$uEmail'";
$result1= mysqli_query($con,$query1);
$row = mysqli_fetch_array($result1);
if($result==1)
{
if($row["uRoll"]=='admin')
{
header("location:tadmin.php");
}
else
{
header("location:newthome.php");
}
}
else
{
header("location:tforgot.php");
}
?>