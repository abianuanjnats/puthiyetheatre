<?php
include 'config.php';
$scId=$_POST["scId"];
$query="select * from screen where scId='$scId'";
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
	left:405px;
	top:190px;
	width:329px;
	height:266px;
	z-index:1;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="tscreen_update2.php">
<div id="apDiv1">
  <table width="260" height="203" border="1" cellpadding="5" bgcolor="#800040">
    <tr>
      <th width="107" height="95" scope="row"><span class="style1">SCREEN ID</span></th>
      <td width="121"><label>
        <input type="text" name="scId" id="scId" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><label>
        <input type="submit" name="button" id="button" value="NEXT" />
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
