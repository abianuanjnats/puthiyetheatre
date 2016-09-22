<?php
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file ;
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

include 'config.php';
$mId=$_POST["mId"];
$mName=$_POST["mName"];
$mDetails=$_POST["mDetails"];
$mCast=$_POST["mCast"];
$mStartdate=$_POST["mStartdate"];
$mIsactive=$_POST["mIsactive"];
$mIsrunning=$_POST["mIsrunning"];
$mIsupcoming=$_POST["mIsupcoming"];
$mHrs=$_POST["mHrs"];
$mRating=$_POST["mRating"];
$sql = "INSERT INTO movie 
VALUES ('$mId','$mName','$mDetails','$mCast','$mStartdate','$target_file','$mIsactive','$mIsrunning','$Isupcoming','$mHrs','$mRating')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

