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
$query="update movie set mName='$mName',mDetails='$mDetails',mCast='$mCast',mStartdate='$mStartdate',mBanner='$mBanner',mIsactive='$mIsactive',mIsrunning='$mIsrunning',mIsupcoming='$mIsupcoming',mHrs='$mHrs',mRating='$mRating' where mId='$mId'";
$result=mysqli_query($con,$query);
header("location:tmovie_view.php");
?>