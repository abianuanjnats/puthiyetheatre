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
	background-image: url(top_hd-_wallpapers-_hd.jpg);
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {
	position:absolute;
	left:105px;
	top:122px;
	width:1000px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:2px;
	top:2px;
	width:42px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv11 {	position:absolute;
	left:856px;
	top:40px;
	width:252px;
	height:36px;
	z-index:9;
}
#apDiv15 {	position:absolute;
	left:62px;
	top:-21px;
	width:60px;
	height:52px;
	z-index:12;
}
.style11 {font-size: 36px}
.style20 {font-size: x-large}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: fantasy;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv4 {	position:absolute;
	left:179px;
	top:37px;
	width:416px;
	height:67px;
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
#apDiv1 {
	position:absolute;
	left:107px;
	top:166px;
	width:998px;
	height:372px;
	z-index:13;
	background-color: #333333;
}
#apDiv2 {
	position:absolute;
	left:157px;
	top:197px;
	width:766px;
	height:37px;
	z-index:14;
}
#apDiv3 {
	position:absolute;
	left:238px;
	top:274px;
	width:81px;
	height:32px;
	z-index:15;
}
#apDiv7 {
	position:absolute;
	left:151px;
	top:273px;
	width:75px;
	height:26px;
	z-index:16;
}
#apDiv8 {
	position:absolute;
	left:152px;
	top:343px;
	width:165px;
	height:25px;
	z-index:17;
}
#apDiv9 {
	position:absolute;
	left:153px;
	top:378px;
	width:166px;
	height:101px;
	z-index:18;
}
#apDiv10 {
	position:absolute;
	left:150px;
	top:388px;
	width:166px;
	height:93px;
	z-index:18;
}
#apDiv12 {
	position:absolute;
	left:148px;
	top:387px;
	width:890px;
	height:92px;
	z-index:18;
}
.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
.style36 {color: #000000; font-weight: bold; }
.style37 {color: #FFFFFF}
.style40 {font-size: large; font-weight: bold; color: #FFFFFF;}
-->
</style></head>

<body>
<div id="apDiv12">
  <table width="200" height="90" border="1">
    <tr>
     <?php
    while($row=mysqli_fetch_array($result))
  {
  ?>
      <td><?php echo $row["mName"] ?></td>
    </tr>
                <?php
	} ?>
  </table>
</div>
<form id="form1" name="form1" method="post" action="">
<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000">&nbsp;</td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets2.php" class="style7">TICKETS</a></div></td>
      <td width="192" bordercolor="#000000"><div align="center" class="style37"><a href="tmovies.php" class="style7">MOVIES</a></div></td>
      <td width="148" bordercolor="#000000"><div align="center" class="style37"><a href="tfb.php" class="style7">F &amp; B</a></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="145" bordercolor="#000000"><div align="center" class="style7"><a href="taboutus.php" class="style7">ABOUT US</a></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center" class="style7"> <a href="tfaq.php" class="style7">FAQ</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv11">
  <table width="255" border="0">
    <tr>
      <td width="115" height="31" bordercolor="#000000" bgcolor="#FFCC00"><a href="tlog.php" class="style36">LOGIN/SIGNUP</a></td>
      <td width="124" bordercolor="#000000" bgcolor="#000000"><span class="style37"><a href="tcontact.php" class="style7">CONTACT US</a><a href="../mtms/tcontact.php" class="style7"></a></span></td>
    </tr>
  </table>
</div>
<div id="apDiv15">
  <label>
  <input type="image" name="imageField2" id="imageField2" src="../mtms/TypeF-logo1.png" />
  </label>
</div>
<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> <span class="style20">CINEMAS</span></div>
</div>
<div id="apDiv1"></div>
<div id="apDiv2">DATE</div>
<div id="apDiv3">
  <label>
  <select name="select" size="1" id="select">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
          </select>
  </label>
</div>
<div class="style40" id="apDiv7">SEATS</div>
<div class="style7" id="apDiv8">NOW PLAYING</div>   
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
