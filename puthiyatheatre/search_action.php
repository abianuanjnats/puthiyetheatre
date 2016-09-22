<?php 
include 'config.php';
$rollno=$_POST["rollno"];
$query= "select * from student_details where Rollno='$rollno'";

$result=mysqli_query($con,$query);
?>
<style type="text/css">
<!--
body {
	background-color: #9999FF;
}
-->
</style>
<table width="370" height="83" border="1" bordercolor="#000066" bgcolor="#CCCCCC">
  <tr>
    <th scope="col">ROLL NO</th>
    <th scope="col">NAME</th>
    <th scope="col">AGE</th>
  </tr>
  <?php
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tr>
    <td><?php echo $row["Rollno"] ?></td>
    <td><?php echo $row["Name"] ?></td>
    <td><?php echo $row["Age"] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<p><a href="temp.php">Back to home</a></p>




