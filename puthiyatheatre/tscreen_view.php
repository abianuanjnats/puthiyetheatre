<?php
include 'config.php';
$query="select * from screen";
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
	background-image: url(../../../Users/User/Desktop/TypeF-logo.png);
}
#apDiv8 {
	position:absolute;
	left:89px;
	top:213px;
	width:1029px;
	height:586px;
	z-index:7;
	background-image: url(../../../Users/User/Desktop/theatre/29744.jpg);
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
	background-image: url(../../../Users/User/Desktop/escape.jpg);
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
	left:413px;
	top:109px;
	width:358px;
	height:40px;
	z-index:7;
}
#apDiv18 {
	position:absolute;
	left:94px;
	top:161px;
	width:981px;
	height:114px;
	z-index:8;
	background-color: #A60053;
}
.style19 {
	font-size: 24px;
	color: #9933FF;
	font-family: "Berlin Sans FB Demi", "Book Antiqua";
	font-weight: bold;
}
.style20 {
	color: #FFFFFF;
	font-family: "Courier New", Courier, monospace;
	font-style: italic;
	font-size: xx-large;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> <span class="style16">CINEMAS</span></div>
</div>
<div class="style19 style20" id="apDiv17">SCREEN VIEW</div>
<div id="apDiv18">
  <table width="981" height="115" border="1" bordercolor="#000000">
    <tr>
      <th bgcolor="#FFFFFF" scope="col">scId</th>
      <th bgcolor="#FFFFFF" scope="col">scName</th>
      <th bgcolor="#FFFFFF" scope="col">scPicture</th>
      <th bgcolor="#FFFFFF" scope="col">scIsactive</th>
    </tr>
        <?php
    while($row=mysqli_fetch_array($result))
  {
  ?>
    <tr>
      <td><?php echo $row["scId"] ?></td>
      <td><?php echo $row["scName"] ?></td>
      <td><?php echo $row["scPicture"] ?></td>
      <td><?php echo $row["scIsactive"] ?></td>
    </tr>
           <?php
	} ?>
  </table>
</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
