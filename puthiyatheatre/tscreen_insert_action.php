<?php
include 'config.php';
$scId=$_POST["scId"];
$scName=$_POST["scName"];
$scPicture=$_POST["scPicture"];
$scIsactive=$_POST["scIsactive"];

//$query="insert into multiplex values('$scId','$scName','$scIsactive')";
//$query="INSERT INTO `multiplex`.`screen` (`scId`, `scName`, `scPicture`, `scIsactive`) VALUES ('$scId', '$scName', '$scPicture', '$scIsactive')";
$query="INSERT INTO `multiplex`.`screen` (`scId`, `scName`, `scIsactive`) VALUES ('$scId', '$scName', '$scIsactive')";
$result=mysqli_query($con,$query);
if($result>0)
{
header("location:tscreen_view.php");
}
else
{
header("location:tscreen_insert_design");
}
?>