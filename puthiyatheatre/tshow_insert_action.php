<?php
include 'config.php';
$SId=$_POST["RadioGroup3"];
$SName=$_POST["SName"];
$SMovie=$_POST["SMovie"];
$SScreen=$_POST["SScreen"];
$SShowtime=$_POST["SShowtime"];
$SIsactive=$_POST["RadioGroup1"];
$SIsbookingallowed=$_POST["RadioGroup2"];
$STicketavailable=$_POST["STicketavailable"];
$SCost=$_POST["SCost"];
$SShowdate=$_POST["SShowdate"];
if($SId==1)
$SName='matinee';
if($SId==2)
$SName='morning';
if($SId=='3')
$SName='noon';
if($SId=='4')
$SName='first';
if($SId=='5')
$SName='second';
if($SId=='6')
$SName='special';
$query="INSERT INTO `multiplex`.`shows` (`SId`, `SName`, `SMovie`, `SScreen`, `SShowtime`, `SIsactive`, `SIsbookingallowed`, `STicketavailable`, `SCost`, `SShowdate`) VALUES ('$SId', '$SName', '$SMovie', '$SScreen', '$SShowtime', '$SIsactive', '$SIsbookingallowed', '$STicketavailable', '$SCost', '$SShowdate')";
//$query1="insert into shows SName value matinee where SId=1";

$result=mysqli_query($con,$query);
//$result1=mysqli_query($con,$query1);
if($result>0)
{
header("location:tshow_view.php");
}
else
{
header("location:tshow_insert_design");
}
?>