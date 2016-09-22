<?php
include 'config.php';
$uEmail=$_POST["uEmail"];
$uPhoneno=$_POST["uPhoneno"];
$uName=$_POST["uName"];
//$uGender=$_POST["RadioGroup1"];
$uPassword=$_POST["uPassword"];
$ucpassword=$_POST["ucpassword"];
$uRoll="user";
$uGender="female";

$query="INSERT INTO user VALUES ( '$uRoll', '$uName','1','$uEmail','$uPassword', '$uGender', '$uPhoneno', '2')";

//$query1="insert into shows SName value matinee where SId=1";

$result=mysqli_query($con,$query);

//$result1=mysqli_query($con,$query1);
if($result>0)
{
header("location:newthome.php");
}
else
{
header("location:tregistersuccess.php");
}
?>