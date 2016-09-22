<?php
include 'config.php';
$scId=$_POST["scId"];
$query="SELECT * FROM screen WHERE scId='$scId'";
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
	left:318px;
	top:124px;
	width:371px;
	height:337px;
	z-index:1;
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: 18px;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="tscreen_update3.php">
<div id="apDiv1">
  <table width="344" height="256" border="1" cellpadding="5" bgcolor="#800040">
   <?php
$row=mysqli_fetch_array($result);
?>
  
    <tr>
      <th width="156" scope="row"><span class="style1">Screen ID</span></th>
<td width="156">
              <label>
          <input type="text" name="scId" id="scId" value=" <?php echo $row["scId"]?> " readonly />
          </label>
      
      </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">Screen Name</span></th>
      <td>
        <label>
          <input type="text" name="scName" id="scName"  value=" <?php echo $row["scName"]?> "  />
          </label>
      
      </td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">ScreenIsactive</span></th>
      <td><table width="200">
        <tr>
          <td><label>
            <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_0" />
            0</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" />
            1</label></td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><label>
        <input type="submit" name="button" id="button" value="Update" />
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
  <p>&nbsp;</p>
</form>
</body>
</html>
