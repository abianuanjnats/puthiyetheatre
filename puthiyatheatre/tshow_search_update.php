<?php
include 'config.php';
$SId=$_POST["SId"];
$SMovie=$_POST["SMovie"];
$query="select * from shows where SId=$SId AND SMovie=$SMovie";
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
	left:242px;
	top:123px;
	width:1018px;
	height:247px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	width:315px;
	height:37px;
	z-index:2;
	left: 385px;
	top: 52px;
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-style: italic;
	font-weight: bold;
	font-size: xx-large;
	color: #FFFFFF;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="tshow_update.php">
<div id="apDiv1">
  <table width="470" height="326" border="1" cellpadding="5" bgcolor="#A60053">
    <tr>
      <th width="250" height="90" scope="col"><span class="style2">SId</span></th>
      <th width="188" scope="col">
        <label>
          <input type="text" name="SId" id="SId" />
          </label>      </th>
    </tr>
    <tr>
      <td> <div align="center">SMovie</div></td>
      <td>
              <label>
          <div align="center">
            <input type="text" name="SMovie" id="SMovie" />
          </div>
        </label>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <label>
          <input type="submit" name="button" id="button" value="NEXT" />
          </label>      </td>
    </tr>
  </table>
</div>

  <p>&nbsp;</p>
  <div class="style1" id="apDiv2">SEARCH UPDATE</div>
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
