<?php
include 'config.php';
$SId=$_POST["SId"];
$SMovie=$_POST["SMovie"];
$query="SELECT * FROM shows WHERE SId='$SId' AND SMovie='$SMovie'";
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
	background-image: url(file:///G|/puthiyatheatre/colorful-bubble-wallpaper-images-222.jpg);
}
#apDiv1 {
	position:absolute;
	left:218px;
	top:118px;
	width:1019px;
	height:301px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:365px;
	top:50px;
	width:276px;
	height:34px;
	z-index:2;
}
.style1 {
	font-size: xx-large;
	font-style: italic;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<div class="style1" id="apDiv2">SHOW UPDATE</div>
<form id="form1" name="form1" method="post" action="tshow_update_action.php">
<div id="apDiv1">
  <table width="531" border="1" cellpadding="5" bordercolor="#F0F0F0" bgcolor="#A60053">
   <?php

$row=mysqli_fetch_array($result);
?>
  
    <tr>
      <th width="211" scope="col">SId</th>
      <th width="288" scope="col">
        <label>
          <input type="text" name="SId" id="SId" value=" <?php echo $row["SId"]?> " readonly/>
          </label>            </th>
    </tr>
    <tr>
      <td><div align="center"><strong>SName</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SName" id="SName"value=" <?php echo $row["SName"]?> " readonly />
          </div>
        </label>           </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SMovie</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SMovie" id="SMovie" value=" <?php echo $row["SMovie"]?> "/>
          </div>
        </label>        </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SScreen</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SScreen" id="SScreen" value=" <?php echo $row["SScreen"]?> " />
          </div>
        </label>           </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SShowtime</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SShowtime" id="SShowtime"value=" <?php echo $row["SShowtime"]?> "  />
          </div>
        </label>        </td>
    </tr>
    <tr>
      <td> <div align="center">SIsactive</div></td>
      <td>
        <label>
          <table width="200">
            <tr>
              <td><label>
                <div align="center">
                  <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_0" />
                0</div>
              </label></td>
            </tr>
            <tr>
              <td><label>
                <div align="center">
                  <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" />
                1</div>
              </label></td>
            </tr>
          </table>
          <div align="center"></div>
        </label>           </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SIsbookingallowed</strong></div></td>
      <td>
        <label>
          <div align="center"></div>
        </label>            <div align="center">
          <table width="200">
            <tr>
              <td><label>
                <input type="radio" name="RadioGroup2" value="0" id="RadioGroup2_0" />
                0</label></td>
              </tr>
            <tr>
              <td><label>
                <input type="radio" name="RadioGroup2" value="1" id="RadioGroup2_1" />
                1</label></td>
              </tr>
          </table>
        </div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>STicketsavailable</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input name="STicketavailable" type="text" id="STicketavailable" value=" <?php echo $row["STicketavailable"]?> "/>
          </div>
        </label>           </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SCost</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SCost" id="SCost"value=" <?php echo $row["SCost"]?> "  />
          </div>
        </label>          </td>
    </tr>
    <tr>
      <td><div align="center"><strong>SShowdate</strong></div></td>
      <td>
        <label>
          <div align="center">
            <input type="text" name="SShowdate" id="SShowdate"value=" <?php echo $row["SShowdate"]?> "  />
          </div>
        </label>            </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <label></label>
        <div align="center">
          <input type="submit" name="button" id="button" value="UPDATE" />
        </div>            </td>
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
