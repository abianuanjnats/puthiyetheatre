<?php
include 'config.php';

$sql = "select * from movie";
$result = $conn->query($sql);
 $query = "SELECT mIsupcoming FROM movie";
$result1 = mysqli_query($conn, $query);

if (mysqli_num_rows($result1) > 0) {

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<a href="movie_action.php?mId=<?php echo $row['mId'] ?>"><img src="<?php echo $row['mBanner'] ?>"  height="150" width="150" ></a>
   <?php }
} else {
    echo "0 results";
}}
$conn->close();
?> 
