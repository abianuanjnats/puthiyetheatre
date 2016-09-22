<?php
include 'config.php';
$scId=$_POST["scId"];
$scIsactive=$_POST["RadioGroup1"];
$scName=$_POST["scName"];
$query="update screen set scId='$scId',scName='$scName',scIsactive='$scIsactive' where scId='$scId'";
$result=mysqli_query($con,$query);
header("location:tscreen_view.php");
?>