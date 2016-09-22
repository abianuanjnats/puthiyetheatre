<a href="home.php">Back to home</a>
<?php
include 'config.php';
$essn=$_POST["essn"];
$name=$_POST["name"];

$dob=$_POST["dob"];
$address=$_POST["address"];
$deptno=$_POST["deptno"];
$salary=$_POST["salary"];
$query="update employee set name='$name',address='$address',dob='$dob',deptno='$deptno',salary='$salary' where essn='$essn'";
$result=mysqli_query($con,$query);
echo "Updated successfully";
?>
