<label></label>
<p><a href="home.php">Back to Home</a></p>

<?php
include 'config.php';
$essn=$_POST["essn"];
$query= "delete from employee where essn='$essn'";
echo $query;
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