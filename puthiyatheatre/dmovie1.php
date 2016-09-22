<?php
include 'config.php';
$query="select * from movie";
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
	background-image: url(top_hd-_wallpapers-_hd1111111111111111111.jpg);
}
#apDiv1 {
	position:absolute;
	left:554px;
	top:121px;
	width:177px;
	height:23px;
	z-index:1;
	background-color: #17031E;
}
#apDiv2 {
	position:absolute;
	left:838px;
	top:18px;
	width:133px;
	height:30px;
	z-index:1;
	background-color: #FFCC00;
}
#apDiv3 {
	position:absolute;
	left:973px;
	top:17px;
	width:124px;
	height:31px;
	z-index:2;
	background-color: #000000;
}
#apDiv4 {
	position:absolute;
	left:189px;
	top:26px;
	width:416px;
	height:67px;
	z-index:3;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv5 {
	position:absolute;
	left:138px;
	top:122px;
	width:1000px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:140px;
	top:124px;
	width:40px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv7 {
	position:absolute;
	left:95px;
	top:27px;
	width:85px;
	height:67px;
	z-index:6;
	background-image: url(TypeF-logo.png);
}
#apDiv8 {
	position:absolute;
	left:89px;
	top:213px;
	width:1029px;
	height:586px;
	z-index:7;
	background-image: url(theatre/29744.jpg);
}
#apDiv9 {
	position:absolute;
	left:140px;
	top:545px;
	width:1000px;
	height:328px;
	z-index:8;
}
#apDiv10 {
	position:absolute;
	left:781px;
	top:43px;
	width:279px;
	height:33px;
	z-index:9;
	background-color: #000000;
}
.style11 {font-size: 36px}
.style16 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
#apDiv11 {
	position:absolute;
	left:856px;
	top:40px;
	width:252px;
	height:36px;
	z-index:9;
}
#apDiv12 {
	position:absolute;
	left:139px;
	top:174px;
	width:1000px;
	height:319px;
	z-index:10;
	background-image: url(escape.jpg);
}
#apDiv13 {
	position:absolute;
	left:140px;
	top:514px;
	width:168px;
	height:32px;
	z-index:11;
}
#apDiv14 {
	position:absolute;
	left:140px;
	top:524px;
	width:130px;
	height:20px;
	z-index:11;
	background-color: #000099;
}
#apDiv15 {
	position:absolute;
	left:139px;
	top:175px;
	width:995px;
	height:1796px;
	z-index:10;
	background-color: #0099CC;
}
#apDiv16 {
	position:absolute;
	left:139px;
	top:174px;
	width:935px;
	height:1554px;
	z-index:10;
	background-color: #0066FF;
}
#apDiv17 {
	position:absolute;
	left:13px;
	top:150px;
	width:1145px;
	height:162px;
	z-index:7;
	background-color: #0033FF;
}
#apDiv18 {
	position:absolute;
	left:32px;
	top:103px;
	width:266px;
	height:34px;
	z-index:8;
}
.style18 {
	font-size: 24px;
	font-family: "Berlin Sans FB Demi", "Book Antiqua";
	color: #FF00FF;
	font-weight: bold;
}
#apDiv19 {
	position:absolute;
	left:894px;
	top:77px;
	width:0px;
	height:40px;
	z-index:9;
}
.style19 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> <span class="style16">CINEMAS</span></div>
</div>
<div id="apDiv7"></div>
<div id="apDiv17">
  <table width="1145" height="157" border="1" bgcolor="#006699">
    <tr>
      <th height="71" bgcolor="#999999" scope="col"><span class="style19">mId</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mName</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mDetails</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mCast</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mStartdate</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mBanner</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mIsactive</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mIsrunning</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mIsupcoming</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mHrs</span></th>
      <th bgcolor="#999999" scope="col"><span class="style19">mRating</span></th>
    </tr> 
	<?php
    while($row=mysqli_fetch_array($result))
  {
  ?>
    
    <tr>
      <td><?php echo $row["mId"] ?></td>
      <td><?php echo $row["mName"] ?></td>
      <td><?php echo $row["mDetails"] ?></td>
      <td><?php echo $row["mCast"] ?></td>
      <td><?php echo $row["mStartdate"] ?></td>
      <td><?php echo $row["mBanner"] ?></td>
      <td><?php echo $row["mIsactive"] ?></td>
      <td><?php echo $row["mIsrunning"] ?></td>
      <td><?php echo $row["mIsupcoming"] ?></td>
      <td><?php echo $row["mHrs"] ?></td>
      <td><?php echo $row["mRating"] ?></td>
    </tr>
    <?php
	} ?>
  </table>
</div>
<div class="style18" id="apDiv18">MOVIE DETAILS</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="style11">&nbsp;</p>
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
