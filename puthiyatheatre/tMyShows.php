<?php 
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tickets</title>
<style type="text/css">


<!--
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
	left:238px;
	top:204px;
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


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

section.gradient button:hover,
section.gradient button.hover {
  box-shadow: inset 0 0 0 1px #27496d,0 5px 15px #193047;
}

section.gradient button:active,
section.gradient button.active {
  box-shadow: inset 0 0 0 1px #27496d,inset 0 5px 30px #193047;
}



.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
-->


.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
-->

</style>

 <link rel="stylesheet" href="./Scripts/jquery/jquery-ui.css">
  <script src="./Scripts/jquery/jquery-1.10.2.js"></script>
  <script src="./Scripts/jquery/jquery-ui.js"></script>



  <script>
  $(function() {
    $("#datepicker").datepicker();
  });
  
  </script>




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
.style42 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
-->
  </style>
</head>

<body>


<form id="formMovies" name="formMovies" method="post" action="tMyShows.php">
<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000"><div id="apDiv6">
        <label>
           <a href="newthome.php">
            <img width="40px" height="34px"name="homeimageField" src="./theatre/home-icon.gif"/>
            </a></label>
      </div></td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets.php" class="style7">TICKETS</a></div></td>
      <td width="192" bordercolor="#000000"><div align="center"><a href="tmovies.php" class="style7">MOVIES</a></div></td>
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
     			header("Location:tlog.php");
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7">CONTACT US</a></td>
    </tr>
  </table>
</div>


<div id="apDiv15">
  <label></label>
</div>

<div class="style8" id="apDiv4">
  <div align="center" class="style42"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv1"></div>



<div id="apDiv3">

   


   <table class="gridtable" border="2">
   <tr>
      <th>Booking ID</th>
      <th>Movie Name</th>
      <th>seats</th>
      <th>Date</th>
      <th>Time</th>
      <th>cost</th>
      <th>Show</th>
      <th>Payment card</th>
      <th>Status</th>
      <th>Cancel</th>
    </tr>



		<?php

		include "database.php";
		
	
		if (isset($_SESSION['login']) && $_SESSION['login'] == true) 
		{
		
			$isUser=1;
			$username=$_SESSION['user'];

		}
		else
		{
			
		
			header("Location:thome.php");
		}


		$connect = dbconnect();


		if(isset($_POST['submit']))
 		{

			$BookingCancel=$_POST["submit"];
			$cancelbooking="update book set bRefno=0,bIscancellable=0 where bId='$BookingCancel'";
			$result= mysqli_query($connect,$cancelbooking);

		}

		

		$query="select * from book where bUsername='$username'";
			

		$result= mysqli_query($connect,$query);

		$row = mysqli_fetch_array($result);
		$rowcount=mysqli_num_rows($result);


		if ($rowcount>0)
			{
				
					for ($i = 1; $i < $rowcount; $i++)
					 {
					 	
            			$row = mysqli_fetch_array($result);
            			$BookingID = $row['bId'];
            			$BookingEmail= $row['bEmail'];
            			$BookingDate= $row['bDate'];
            			$BookingShow= $row['bShow'];
            			$BookingShowTime= $row['bShowtime'];
            			$BookingMovie= $row['bMovie'];
            			$BookingCost= $row['bCost'];
            			$BookingSeats= $row['bQuantity'];
            			$BookingPayment= $row['bPayment'];
            			$BookingPaymentType= $row['bPaymenttype'];
            			$BookingStatus=$row['bRefno'];
            			if ($BookingStatus==1)
            			{$BookingStatus="Confirmed";}
            			else
            			{$BookingStatus="Cancelled";}
            			
            			$BookingCancellable= $row['bIscancellable'];



            			if($BookingCancellable>0)
            			{

            			$bannerRow='<tr><td>'.$BookingID.'</td> <td>'.$BookingMovie.'</td> <td>' .$BookingSeats. '</td> <td>' .$BookingDate.'</td> <td>' .$BookingShowTime.'</td> <td>'.$BookingCost.'</td> <td>' .$BookingShow.'</td> <td>' .$BookingPayment. '</td> <td>' .$BookingStatus.'</td><td><section class="flat"><button type="submit" name="submit" value="'.$BookingID.'" class="active" >Cancel</button></section></td></tr>' ;

            			}
            			else
            			{

            				$bannerRow='<tr><td>'.$BookingID.'</td> <td>'.$BookingMovie.'</td> <td>' .$BookingSeats. '</td> <td>' .$BookingDate.'</td> <td>' .$BookingShowTime.'</td> <td>'.$BookingCost.'</td> <td>' .$BookingShow.'</td> <td>' .$BookingPayment. '</td> <td>' .$BookingStatus.'</td><td><section class="hover"><button type="submit" value="submit" name="submit" class="hover" disabled >Cancel</button></section></td></tr>' ;



            			} 


						echo $bannerRow;



            		}

            }		
	
			


		db_disconnect($connect);
		//header("Location:thome.php");

?>



	</div>
	</form>

</body>
</html>


