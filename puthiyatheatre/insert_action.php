<label><a href="home.php">Back to Home</a></label>
<?php
include 'config.php';
$essn=$_POST["essn"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$deptno=$_POST["deptno"];
$salary=$_POST["salary"];
$query="insert into employee values('$essn','$name','$dob','$address','$deptno','$salary')";
$result=mysqli_query($con,$query);
if($result>0)
{
echo "successfull";
}
else
{
echo "unsuccessfull";
}
?>