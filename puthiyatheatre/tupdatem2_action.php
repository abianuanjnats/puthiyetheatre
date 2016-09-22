<?php
include 'config.php';
$mId=$_POST["mId"];
$query="select * from movie where $mId=mId";
$result=mysqli_query($con,$query);
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(colorful-bubble-wallpaper-images-222.jpg);
}
#apDiv1 {
	position:absolute;
	left:15px;
	top:24px;
	width:1025px;
	height:480px;
	z-index:1;
}
#apDiv10 {
	position:absolute;
	left:786px;
	top:20px;
	width:225px;
	height:33px;
	z-index:9;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
}
#apDiv4 {
	position:absolute;
	left:180px;
	top:15px;
	width:416px;
	height:67px;
	z-index:3;
}
#apDiv5 {	position:absolute;
	left:87px;
	top:119px;
	width:1020px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:2px;
	top:3px;
	width:43px;
	height:41px;
	z-index:5;
}
#apDiv2 {
	position:absolute;
	left:198px;
	top:126px;
	width:438px;
	height:365px;
	z-index:2;
	background-color: #800040;
}
#apDiv3 {
	position:absolute;
	left:355px;
	top:455px;
	width:177px;
	height:49px;
	z-index:3;
}
.style11 {font-size: 36px}
.style16 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style17 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="tupdatem_action.php">

<div id="apDiv3">
  <label>
  <input type="submit" name="button" id="button" value="Update" />
  </label>
</div>


<div id="apDiv1">
  <div class="style8" id="apDiv4">
    <div align="center" class="style17"><span class="style11">FORTUNE</span> <span class="style16">CINEMAS</span></div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv2">
  <table width="436" border="1" bordercolor="#000000">
  <?php
  $row=mysqli_fetch_array($result);
  ?>
    <tr>
      <td><div align="center"><strong>mId</strong></div></td>
      <td><label>
        <input type="text" name="mId" id="mId" value="<?php echo $row["mId"]?>" readonly />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mName</strong></div></td>
      <td><label>
        <input type="text" name="mName" id="mName" value="<?php echo $row["mName"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mDetails</strong></div></td>
      <td><label>
        <input type="text" name="mDetails" id="mDetails" value="<?php echo $row["mDetails"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mCast</strong></div></td>
      <td><label>
        <input type="text" name="mCast" id="mCast" value="<?php echo $row["mCast"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mStartdate</strong></div></td>
      <td><label>
        <input type="text" name="mStartdate" id="mStartdate" value="<?php echo $row["mStartdate"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mBanner</strong></div></td>
      <td><label>
        <input type="text" name="mBanner" id="mBanner" value="<?php echo $row["mBanner"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mIsactive</strong></div></td>
      <td><label>
        <input type="text" name="mIsactive" id="mIsactive" value="<?php echo $row["mIsactive"]?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="center"><strong>mIsrunning</strong></div></td>
      <td><label>
        <input type="text" name="mIsrunning" id="mIsrunning" value="<?php echo $row["mIsrunning"]?>" />
      </label></td>
    </tr>
    <tr bgcolor="#666666">
      <td bordercolor="#000000" bgcolor="#800040"><div align="center"><strong>mIsupcoming</strong>ss</div></td>
      <td bordercolor="#000000" bgcolor="#800040"><label>
        <input type="text" name="mIsupcoming" id="mIsupcoming" value="<?php echo $row["mIsupcoming"]?>" />
      </label></td>
    </tr>
    <tr>
      <td bordercolor="#000000" bgcolor="#800040"><div align="center"><strong>mHrs</strong></div></td>
      <td bordercolor="#000000" bgcolor="#800040"><label>
        <input type="text" name="mHrs" id="mHrs" value="<?php echo $row["mHrs"]?>" />
      </label></td>
    </tr>
    <tr>
      <td bordercolor="#000000" bgcolor="#800040"><div align="center"><strong>mRating</strong></div></td>
      <td bordercolor="#000000" bgcolor="#800040"><label>
        <input type="text" name="mRating" id="mRating" value="<?php echo $row["mRating"]?>" />
      </label></td>
    </tr>
  </table>
</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
