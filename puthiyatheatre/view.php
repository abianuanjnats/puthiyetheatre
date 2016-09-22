<?php
include 'config.php';
$query="select * from employee";
$result=mysqli_query($con,$query);
?><style type="text/css">
<!--
body {
	background-color: #FFCCFF;
}
#apDiv1 {
	position:absolute;
	left:39px;
	top:50px;
	width:985px;
	height:84px;
	z-index:1;
}
-->
</style>
<div id="apDiv1">
  <table width="983" height="88" border="1" bordercolor="#FF33CC">
    <tr>
      <th scope="col">ESSN</th>
      <th scope="col">NAME</th>
      <th scope="col">DOB</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">DEPTNO</th>
      <th scope="col">SALARY</th>
    </tr>
    <?php
    while($row=mysqli_fetch_array($result))
  {
  ?>
    <tr>
      <td><?php echo $row["essn"] ?></td>
      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["dob"] ?></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["deptno"] ?></td>
      <td><?php echo $row["salary"] ?></td>
    </tr>
    <?php
	}
	?>
  </table>
</div>
<p><a href="home.php">Back to home</a></p>
<p>&nbsp;</p>
