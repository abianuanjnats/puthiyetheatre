<?php
include 'config.php';
$username=$_POST["username"];
$password=$_POST["password"];
$query="select * from company_login where Username='$username' and Password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
header("location:home.php");
}
else
{
header("location:login_design.php");
}
?>