<?php
include 'config.php';
$mId=$_POST["mId"];
$mName=$_POST["mName"];
$mDetails=$_POST["mDetails"];
$mCast=$_POST["mCast"];
$mStartdate=$_POST["mStartdate"];
$mBanner=$_POST["mBanner"];
$mIsactive=$_POST["mIsactive"];
$mIsrunning=$_POST["mIsrunning"];
$mIsupcoming=$_POST["mIsupcoming"];
$mHrs=$_POST["mHrs"];
$mRating=$_POST["mRating"];
$query="INSERT INTO `multiplex`.`movie` (`mId`, `mName`, `mDetails`, `mCast`, `mStartdate`, `mBanner`, `mIsactive`, `mIsrunning`, `mIsupcoming`, `mHrs`, `mRating`) VALUES('$mId','$mName','$mDetails','$mCast','$mStartdate','$mBanner','$mIsactive','$mIsrunning','$Isupcoming','$mHrs','$mRating')";
//$query="insert into movie values('$mId','$mName','$mDetails','$mCast','$mStartdate','$mBanner','$mIsactive','$mIsrunning','$Isupcoming','$mHrs','$mRating')";
$result=mysqli_query($con,$query);
if($result>0)
{
header("location:tmovie_view.php");
}
else
{
header("location:tinsertm_design.php");
}
?>