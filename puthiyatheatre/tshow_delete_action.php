<?php
include 'config.php';
$SId=$_POST["SId"];
$SMovie=$_POST["SMovie"];

$query="DELETE FROM `multiplex`.`shows` WHERE `shows`.`SId` = '$SId' AND `shows`.`SMovie` = '$SMovie'";
$result=mysqli_query($con,$query);
if($result>0)
{
header("location:tshow_view.php");
}
else
{
header("location:tshow_delete_design.php");
}
?>
