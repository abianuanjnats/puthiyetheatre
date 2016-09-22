<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(top_hd-_wallpapers-_hd.jpg);
}
.style11 {font-size: 36px}
.style16 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv4 {
	position:absolute;
	left:128px;
	top:58px;
	width:416px;
	height:67px;
	z-index:3;
}
#apDiv11 {
	position:absolute;
	left:583px;
	top:27px;
	width:252px;
	height:36px;
	z-index:9;
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {	position:absolute;
	left:138px;
	top:122px;
	width:1000px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:2px;
	top:1px;
	width:40px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv1 {
	position:absolute;
	left:15px;
	top:20px;
	width:978px;
	height:215px;
	z-index:10;
	background-color: #0099CC;
}
#apDiv15 {
	position:absolute;
	left:70px;
	top:-34px;
	width:60px;
	height:52px;
	z-index:12;
}
a:link {
	color: #FFFFFF;
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
#apDiv2 {
	position:absolute;
	left:852px;
	top:122px;
	width:152px;
	height:43px;
	z-index:13;
	background-color: #0099CC;
}
#apDiv3 {
	position:absolute;
	left:863px;
	top:134px;
	width:121px;
	height:21px;
	z-index:14;
}
#apDiv7 {
	position:absolute;
	left:139px;
	top:164px;
	width:999px;
	height:309px;
	z-index:15;
	background-color: #0099CC;
}
#apDiv8 {	position:absolute;
	left:873px;
	top:39px;
	width:252px;
	height:36px;
	z-index:9;
}
-->
</style></head>

<body>
<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000"><div id="apDiv6">
        <label>
        <a href="newthome.php">
        <img src="home1.jpg"/>
        <!--<input type="image" name="imageField" id="imageField" src="home1.jpg" />--></a>        </label>
      </div></td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets.php" class="style7">TICKETS</a></div></td>
      <td width="192" bordercolor="#000000"><div align="center"><a href="tmovies.php" class="style7">MOVIES</a></div></td>
      <td width="148" bordercolor="#000000"><div align="center"><a href="tfb.php" class="style7">F & B</a></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="145" bordercolor="#000000" bgcolor="#0099CC"><div align="center"><span class="style7">ABOUT US</span></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center"><a href="tfaq.php" class="style7">FAQ</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv2"></div>
<div id="apDiv3">
  <div align="center" class="style7"><strong>ABOUTUS</strong></div>
</div>
<div id="apDiv7">
  <div id="apDiv1">
    <p>Fortune Cinemas is a leading player in the entertainment industry offering services such as exhibition, distribution and production. Fortune Cinemas strives to be at the forefront of media technology and endeavours to bring new entertainment technology to customers first. </p>
    <p>Apart from showcasing the latest blockbusters, it also houses Blur, the largest multi-format gaming facility in India and the concept restaurants, ID and Ecstasy. </p>
    <p> We focus on providing a paramount movie-viewing experience by exhibiting movies in settings like never before.Fortune multiplex is a visual treat apart from being a top notch entertainment destination. </p>
    <p> fortuneCinemas is one of the key movie distributors in Tamil Nadu and has forayed into the music business with Think Music to distribute Tamil, Telugu and Malayalam movie soundtracks via digital media and Purplenote to distribute non-movie contemporary music. </p>
    <p>&nbsp;</p>
  </div>
</div>
<div id="apDiv8">
  <table width="255" border="0" bordercolor="#C1BCFF">
    <tr>
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><center>" . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php'class='style8' >Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><a href='tlog.php' class='style36'>LOGIN/SIGNUP</a></td>";
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7">CONTACT US</a></td>
    </tr>
  </table>
</div>
</body>
</html>
