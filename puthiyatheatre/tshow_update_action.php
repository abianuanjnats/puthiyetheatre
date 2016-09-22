<?php
include 'config.php';
$SId=$_POST["SId"];
//$SName=$_POST["SName"];
$SMovie=$_POST["SMovie"];
$SScreen=$_POST["SScreen"];
$SShowtime=$_POST["SShowtime"];
$SIsactive=$_POST["RadioGroup1"];
$SIsbookingallowed=$_POST["RadioGroup2"];
$STicketavailable=$_POST["STicketavailable"];
$SCost=$_POST["SCost"];
$SShowdate=$_POST["SShowdate"];
$query="update shows set SId='$SId',SName='$SName',SMovie='$SMovie',SScreen='$SScreen',SShowtime='$SShowtime',SIsactive='$SIsactive' ,SIsbookingallowed='$SIsbookingallowed',STicketavailable='$STicketavailable',SCost='$SCost',SShowdate='$SShowdate'  ";
$result=mysqli_query($con,$query);
echo "Update sucessfuly";
?>