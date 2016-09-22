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
	background-image: url(../puthiyatheatre/top_hd-_wallpapers-_hd.jpg);
}
#apDiv1 {
	position: absolute;
	left: 16px;
	top: 24px;
	width: 1150px;
	height: 580px;
	z-index: 1;
}
#apDiv10 {
	position:absolute;
	left:855px;
	top:24px;
	width:253px;
	height:33px;
	z-index:9;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
}
#apDiv4 {
	position:absolute;
	left:124px;
	top:62px;
	width:416px;
	height:67px;
	z-index:3;
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {
	position:absolute;
	left:87px;
	top:121px;
	width:1008px;
	height:41px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:0px;
	top:0px;
	width:43px;
	height:43px;
	z-index:5;
}
#apDiv2 {
	position:absolute;
	left:104px;
	top:186px;
	width:1007px;
	height:235px;
	z-index:2;
	background-color: #0099CC;
}
#apDiv3 {
	position:absolute;
	left:22px;
	top:-1px;
	width:198px;
	height:78px;
	z-index:3;
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
#apDiv7 {
	position:absolute;
	left:105px;
	top:193px;
	width:296px;
	height:104px;
	z-index:4;
}
#apDiv8 {
	position:absolute;
	left:226px;
	top:227px;
	width:304px;
	height:1198px;
	z-index:4;
}
#apDiv9 {
	position:absolute;
	left:102px;
	top:185px;
	width:1010px;
	height:304px;
	z-index:4;
	background-color: #0099CC;
}
#apDiv11 {
	position:absolute;
	left:110px;
	top:198px;
	width:980px;
	height:261px;
	z-index:5;
}
.style12 {color: #000000; font-weight: bold; }
-->
</style></head>

<body>
<div id="apDiv1">
  <div id="apDiv10">
    <table width="237" border="0">
      <tr>
        
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><CENTER>" . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php'class='style8' >Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#BFBFBF'><a href='tlog.php' class='style36'>LOGIN/SIGNUP</a></td>";
     		}
		?>
        
        <td bgcolor="#000000"><a href="tcontact.php" class="style7">CONTACT US</a></td>
      </tr>
    </table>
  </div>
  <div class="style8" id="apDiv4">
    <div align="center" class="style9">FORTUNE CINEMAS</div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv5">
    <table width="1009" height="39" border="1" bordercolor="#000000">
      <tr>
        <td width="37" height="33" bordercolor="#000000"><div id="apDiv6">
            <label>
            <a href="newthome.php">
            <img src="home1.jpg"/></a>
            <!--<input type="image" name="imageField" id="imageField" src="home1.jpg" />-->
            
            </label>
        </div></td>
        <td width="167" bordercolor="#000000"><div align="center"><a href="ttickets2.php" class="style7">TICKETS</a><a href="ttickets2.php" class="style7"></a></div></td>
        <td width="190" bordercolor="#000000"><div align="center"><a href="tmovies.php" class="style7">MOVIES</a></div></td>
        <td width="146" bordercolor="#000000"><div align="center"><a href="tfb.php" class="style7">F & B</a></div></td>
        <td width="140" bordercolor="#000000"><div align="center"><a href="../puthiyatheatre/tfacilities.php" class="style7">FACILITIES</a></div></td>
        <td width="144" bordercolor="#000000" bgcolor="#000000"><div align="center"><a href="../puthiyatheatre/taboutus.php" class="style7">ABOUT US</a></div></td>
        <td width="139" bordercolor="#000000" class="style7"><div align="center" class="style7"><a href="tfaq.php" class="style7">FAQ</a></div></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv9"></div>
<div id="apDiv11">
  <p>CONTACT US:</p>
  <p>We thank you for your interest in Fortune Cinemas.</p>
  <p>If u have any questions regarding your online booking Email us at : Fortunecinemas@gmail.com.</p>
  <p>For Enquiries: +91-44-4208-2233. <br />
  </p>
  <p>For corporate &amp; Bulk Booking :Send and Email with the name of the company and the number of tickets,date and showtime to Fortunecinemas@gmail.com.</p>
  <p>For Advertisement inside the Theatre premises : advertising@fortunecinemas.com. For feedback :feedback@fortunecinemas.com</p>
  <p></p>
</div>
<form id="form1" name="form1" method="post" action="">
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
