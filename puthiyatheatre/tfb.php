<?php
session_start()
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../puthiyatheatre/top_hd-_wallpapers-_hd.jpg);
}
.style17 {color: #FFFFFF}
#apDiv11 {	position:absolute;
	left:856px;
	top:40px;
	width:252px;
	height:36px;
	z-index:9;
}
.style11 {font-size: 36px}
.style16 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv4 {
	position:absolute;
	left:145px;
	top:59px;
	width:416px;
	height:67px;
	z-index:3;
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {
	position:absolute;
	left:136px;
	top:132px;
	width:995px;
	height:42px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {	position:absolute;
	left:140px;
	top:124px;
	width:40px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv1 {
	position:absolute;
	left:134px;
	top:212px;
	width:314px;
	height:120px;
	z-index:10;
}
#apDiv2 {
	position:absolute;
	left:628px;
	top:262px;
	width:141px;
	height:106px;
	z-index:11;
}
#apDiv3 {
	position:absolute;
	left:464px;
	top:217px;
	width:270px;
	height:201px;
	z-index:12;
}
#apDiv7 {
	position:absolute;
	left:783px;
	top:215px;
	width:339px;
	height:99px;
	z-index:13;
}
#apDiv8 {
	position:absolute;
	left:104px;
	top:459px;
	width:988px;
	height:243px;
	z-index:14;
}
#apDiv9 {
	position:absolute;
	left:139px;
	top:419px;
	width:971px;
	height:228px;
	z-index:14;
}
#apDiv10 {
	position:absolute;
	left:105px;
	top:913px;
	width:1059px;
	height:107px;
	z-index:15;
}
#apDiv {
	position:absolute;
	left:137px;
	top:198px;
	width:1023px;
	height:107px;
	z-index:15;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#apDiv12 {
	position:absolute;
	left:138px;
	top:440px;
	width:219px;
	height:194px;
	z-index:15;
}
#apDiv13 {
	position:absolute;
	left:-2px;
	top:0px;
	width:83px;
	height:188px;
	z-index:16;
}
#apDiv14 {
	position:absolute;
	left:819px;
	top:416px;
	width:301px;
	height:195px;
	z-index:17;
}
#apDiv15 {
	position:absolute;
	left:136px;
	top:182px;
	width:1003px;
	height:234px;
	z-index:18;
	background-color: #333333;
}
#apDiv16 {
	position:absolute;
	left:136px;
	top:173px;
	width:995px;
	height:746px;
	z-index:18;
	background-color: #333333;
}
#apDiv17 {
	position:absolute;
	left:149px;
	top:181px;
	width:308px;
	height:19px;
	z-index:19;
}
.style18 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: large;
}
#apDiv18 {
	position:absolute;
	left:142px;
	top:211px;
	width:330px;
	height:120px;
	z-index:20;
}
#apDiv19 {
	position:absolute;
	left:478px;
	top:213px;
	width:281px;
	height:117px;
	z-index:21;
}
#apDiv20 {
	position:absolute;
	left:806px;
	top:212px;
	width:226px;
	height:110px;
	z-index:22;
}
#apDiv21 {
	position:absolute;
	left:138px;
	top:132px;
	width:42px;
	height:37px;
	z-index:23;
}
#apDiv22 {
	position:absolute;
	left:550px;
	top:132px;
	width:151px;
	height:42px;
	z-index:24;
	background-color: #333333;
}
#apDiv23 {
	position:absolute;
	left:560px;
	top:146px;
	width:119px;
	height:18px;
	z-index:25;
}
#apDiv24 {
	position:absolute;
	left:141px;
	top:424px;
	width:990px;
	height:525px;
	z-index:26;
}
.style19 {color: #000000}
-->
</style></head>

<body>
<div id="apDiv11">
  <table width="255" border="0" bordercolor="#C1BCFF">
    <tr>
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><CENTER>" . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php'class='style8' >Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><a href='tlog.php' class='style19'><STRONG>LOGIN/SIGNUP</a></td>";
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7">CONTACT US</a></td>
    </tr>
  </table>
</div>
<div id="apDiv5">
  <table width="1001" height="50" border="0" bordercolor="#000000">
    <tr>
      <td width="38" height="44" bordercolor="#000000">&nbsp;</td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets.php" class="style7">TICKETS</a></div></td>
      <td width="192" bordercolor="#000000"><div align="center"><a href="../puthiyatheatre/tmovies.php" class="style7">MOVIES</a></div></td>
      <td width="148" bordercolor="#000000"><div align="center"><span class="style7">F &amp; B</span></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="../puthiyatheatre/tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="145" bordercolor="#000000"><div align="center"><a href="../puthiyatheatre/taboutus.php" class="style7">ABOUT US</a></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center"><a href="../puthiyatheatre/tfaq.php" class="style7">FAQ</a></div></td>
    </tr>
  </table>
</div>
<div class="style17" id="apDiv16"></div>
<div class="style18" id="apDiv17">FOOD AND BEVERAGES</div>
<div id="apDiv18">
  <label>
  <input type="image" name="imageField4" id="imageField4" src="food gif1.gif" />
  </label>
</div>
<div id="apDiv19">
  <label>
  <input type="image" name="imageField5" id="imageField5" src="../puthiyatheatre/food gif2.gif" />
  </label>
</div>
<div id="apDiv20">
  <label>
  <input type="image" name="imageField6" id="imageField6" src="../puthiyatheatre/food gif3.gif" />
  </label>
</div>
<div id="apDiv21">
  <div id="apDiv13">
    <label> <a href="thome.php"> <img src="home1.jpg"/>
    <!--<input type="image" name="imageField" id="imageField" src="home1.jpg" />-->
      </a> </label>
  </div>
</div>
<div id="apDiv22"></div>
<div id="apDiv23"><a href="../theatre/tfb.php" class="style7">F &amp; B</a></div>
<div id="apDiv24"><img src="food1.jpg" width="982" height="483" /></div>
<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
</body>
</html>
