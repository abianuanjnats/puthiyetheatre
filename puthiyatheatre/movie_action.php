<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Movies</title>
<style type="text/css">


body {
	background-image: url(./theatre/top_hd-_wallpapers-_hd.jpg);
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {
	position:absolute;
	left:105px;
	top:122px;
	width:1000px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:2px;
	top:2px;
	width:42px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv11 {	position:absolute;
	left:856px;
	top:40px;
	width:252px;
	height:36px;
	z-index:9;
}
#apDiv15 {	position:absolute;
	left:62px;
	top:-21px;
	width:60px;
	height:52px;
	z-index:12;
}
.style11 {font-size: 36px}
.style20 {font-size: x-large}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: fantasy;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv4 {
	position:absolute;
	left:116px;
	top:49px;
	width:416px;
	height:67px;
	z-index:3;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#apDiv1 {
	position:absolute;
	left:105px;
	top:164px;
	width:1002px;
	height:590px;
	z-index:13;
	background-color: #333333;
}
#apDiv2 {
	position:absolute;
	left:157px;
	top:197px;
	width:766px;
	height:37px;
	z-index:14;
}
#apDiv3 {
	position:absolute;
	left:-30px;
	top:10px;
	width:81px;
	height:32px;
	z-index:15;
}
#apDiv7 {
	position:absolute;
	left:151px;
	top:273px;
	width:75px;
	height:26px;
	z-index:16;
}
#apDiv8 {
	position:absolute;
	left:152px;
	top:343px;
	width:165px;
	height:25px;
	z-index:17;
}
#apDiv9 {
	position:absolute;
	left:153px;
	top:378px;
	width:166px;
	height:101px;
	z-index:18;
}
#apDiv10 {
	position:absolute;
	left:150px;
	top:388px;
	width:166px;
	height:93px;
	z-index:18;
}
#apDiv12 {
	position:absolute;
	left:148px;
	top:387px;
	width:890px;
	height:92px;
	z-index:18;	
}


#apDivMovie6 {
	position:absolute;
	left:149px;
	top:604px;
	width:888px;
	height:78px;
	z-index:6;
}

#apDivMoviePic {
	position:absolute;
	left:138px;
	top:208px;
	width:1001px;
	height:172px;
	z-index:11;
}


#apDivMovie3 {
	position:absolute;
	left:139px;
	top:165px;
	width:1000px;
	height:59px;
	z-index:3;
	background-color: #333333;
}
.styleMovie35 {
	font-size: xx-large;
	font-style: italic;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
#apDivMovie4 {
	position:absolute;
	left:139px;
	top:544px;
	width:999px;
	height:268px;
	z-index:4;
	background-color: #333333;
}

#apDivMovie14 {
	position:absolute;
	left:148px;
	top:558px;
	width:281px;
	height:32px;
	z-index:12;
}

#apDivMovie8 {
	position:absolute;
	left:397px;
	top:690px;
	width:223px;
	height:35px;
	z-index:8;
}

.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
-->


.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
-->

</style>

 <style type="text/css">
<!--
#apDiv13 {
	position:absolute;
	left:105px;
	top:123px;
	width:48px;
	height:36px;
	z-index:14;
}
.style35 {font-size: 18px}
.styleMovie34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
.style42 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}


#apDivMovie10 {
	position:absolute;
	left:403px;
	top:759px;
	width:219px;
	height:25px;
	z-index:10;
}

-->
  </style>



</head>

<body>

<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000"><div id="apDiv6">
        <label>
           <a href="newthome.php">
            <img width="40px" height="34px"name="homeimageField" src="./theatre/home-icon.gif"/>
            </a></label>
      </div></td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets.php"><span class="style7">TICKETS</span></a></div></td>
      <td width="192" bordercolor="#000000"><div align="center"><span class="style7">MOVIES</span></div></td>
      <td width="148" bordercolor="#000000"><div align="center"><a href="tfb.php" class="style7">F &amp; B</a></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="145" bordercolor="#000000"><div align="center"><a href="taboutus.php" class="style7">ABOUT US</a></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center"><a href="tfaq.php" class="style7">FAQ</a></div></td>
    </tr>
  </table>
</div>


<div id="apDiv11">
  <table width="255" border="0" bordercolor="#C1BCFF">
    <tr>
      <?php

  			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><CENTER>" . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php' class='style8'>Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><a href='tlog.php' class='style7'>LOGIN/SIGNUP</a></td>";
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7">CONTACT US</a></td>
    </tr>
  </table>
</div>


<div class="style8" id="apDiv4">
  <div align="center" class="style42"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv1"></div>



<div id="apDiv3">

   


<?php
	include 'database.php';
	$mId=$_GET['mId'];
	$connect = dbconnect();
	$sql = "select * from movie WHERE mId='$mId'";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) 
	{
    
    	while($row = $result->fetch_assoc()) 
    		{


    			?>

				
				<div id="apDivMoviePic">
				<p><img src="<?php echo "./Movies/".$row['mBanner'] ?>"  height="320" width="400" /></p>
				</div>
				<div class="styleMovie35" id="apDivMovie14">SYNOPSIS</div>


				<div id="apDivMovie3"><span class="styleMovie35"><?php echo $row['mName']   ."|". $row['mRating']?></span></div>
				<div id="apDivMovie4"></div>
				<div id="apDivMovie6" class="styleMovie34" ><?php echo $row['mDetails'] ?></div>
				<div class="styleMovie35" id="apDiv7">CAST:</div>
				<div id="apDivMovie8" class="styleMovie34"><?php echo $row['mCast'] ?></div>
				<div class="styleMovie35" id="apDiv9">RELEASE:</div>
				<div id="apDivMovie10" class="styleMovie34"><?php echo $row['mStartdate'] ?></div>

			
	
  			<?php
				//echo "Name:".$row['Name'];
				//echo "Details:".$row['Description'];
			}
	} 
	else
    {
  	  echo "0 results";
	}
		
	$conn->close();

?>

</div>

