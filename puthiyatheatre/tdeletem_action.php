<?php
include 'config.php';
$mId=$_POST["mId"];
$query= "delete from movie where mId='$mId'";
//echo $query;
$result=mysqli_query($con,$query);
if($result>0)
{
header("location:tmovie_view.php");
}
else
{
header("location:tmovie_delete_design.php");
}
?>