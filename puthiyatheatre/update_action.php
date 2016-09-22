<?php
include 'config.php';
$essn=$_POST["essn"];
$query="select * from employee where $essn=essn";
$result=mysqli_query($con,$query);
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:360px;
	top:87px;
	width:328px;
	height:350px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:358px;
	top:42px;
	width:326px;
	height:46px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:454px;
	top:384px;
	width:88px;
	height:25px;
	z-index:3;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="update_action1.php">


<div id="apDiv1">
  <table width="322" height="284" border="1">
  <?php
  $row=mysqli_fetch_array($result);
  ?>
  
    <tr>
      <td>ESSN</td>
      <td><label>
        <input type="text" name="essn" id="essn" value="<?php echo $row["essn"]?>" />
      </label></td>
    </tr>
    <tr>
      <td>NAME</td>
      <td><label>
        <input type="text" name="name" id="name" value="<?php echo $row["name"]?>"/>
      </label></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><label>
        <input type="text" name="dob" id="dob" value="<?php echo $row["dob"]?>"  />
      </label></td>
    </tr>
    <tr>
      <td>ADDRESS</td>
      <td><label> 
        <input type="text" name="address" id="address"value="<?php echo $row["address"]?>"  />
      </label></td>
    </tr>
    <tr>
      <td>DEPTNO</td>
      <td><label>
        <input type="text" name="deptno" id="deptno"value="<?php echo $row["deptno"]?>"  />
      </label></td>
    </tr>
    <tr>
      <td>SALARY</td>
      <td><label>
        <input type="text" name="salary" id="salary"value="<?php echo $row["salary"]?>"  />
      </label></td>
    </tr>
  </table>
</div>
<div id="apDiv2">
  <div align="center">VIEW/UPDATE</div>
</div>
<div id="apDiv3">
  <label>
  <input type="submit" name="button" id="button" value="update" />
  </label>
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
</form>
</body>
</html>
