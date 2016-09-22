<?php
include'config.php';
$scId=$_POST["scId"];
$query="DELETE FROM screen WHERE scId='$scId'";
$result=mysqli_query($con,$query);
if($result>0)
{
header("location:tscreen_view.php");
}
else
{
header("location:tscreen_delete_design.php");
}
?>