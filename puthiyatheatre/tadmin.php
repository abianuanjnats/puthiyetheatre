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
	left:1002px;
	top:72px;
	width:218px;
	height:165px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:150px;
	top:167px;
	width:489px;
	height:278px;
	z-index:2;
	background-color: #990033;
}
#apDiv3 {
	position:absolute;
	left:450px;
	top:165px;
	width:637px;
	height:311px;
	z-index:2;
}
#apDiv15 {
	position:absolute;
	left:55px;
	top:4px;
	width:60px;
	height:52px;
	z-index:12;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
#apDiv4 {
	position:absolute;
	left:103px;
	top:33px;
	width:416px;
	height:67px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:1135px;
	top:20px;
	width:78px;
	height:29px;
	z-index:13;
	background-color: #FFFFFF;
}
#apDiv6 {
	position:absolute;
	left:565px;
	top:174px;
	width:363px;
	height:32px;
	z-index:14;
}
#apDiv7 {
	position:absolute;
	left:565px;
	top:220px;
	width:232px;
	height:27px;
	z-index:15;
}
#apDiv8 {
	position:absolute;
	left:566px;
	top:268px;
	width:327px;
	height:36px;
	z-index:16;
}
#apDiv9 {
	position:absolute;
	left:565px;
	top:318px;
	width:337px;
	height:27px;
	z-index:17;
}
#apDiv10 {
	position:absolute;
	left:565px;
	top:367px;
	width:327px;
	height:24px;
	z-index:18;
}
.style22 {
	font-family: "Courier New", Courier, monospace;
	font-size: xx-large;
	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
}
#apDiv11 {
	position:absolute;
	left:387px;
	top:186px;
	width:204px;
	height:153px;
	z-index:19;
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
.style28 {
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
}
.style11 {font-size: 36px}
.style29 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
.style32 {color: #FFFFFF; font-weight: bold; font-style: italic; font-size: 16px; }
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
<div class="style8" id="apDiv4">
  <div align="center" class="style29"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv5">
  <table width="95" border="0">
    <tr>
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#BFBFBF'><strong>Welcome " . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php' >Logout</a>";
   				
  			} else {
     			//echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#BFBFBF'><a href='tlog.php' class='style31'>LOGIN/SIGNUP</a></td>";
     		}
		?>
    </tr>
  </table>
  <a href="newthome.php" class="style28">LOGOUT</a></div>
<div class="style22" id="apDiv6"><a href="tmanage_shows.php" class="style8">MANAGE SHOWS</a></div>
<div class="style22" id="apDiv7"><a href="tmanage_user.php" class="style8">MANAGE USERS</a></div>
<div class="style22" id="apDiv8"><a href="tmanage_screen.php" class="style8">MANAGE SCREENS</a></div>
<div class="style22" id="apDiv9"><a href="tmanage_movies.php" class="style8">MANAGE MOVIES</a></div>
<div class="style22" id="apDiv10"><a href="torderhistory.php" class="style8">ORDER HISTORY</a></div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="style28">&nbsp;</p>
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
