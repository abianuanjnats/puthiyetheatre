<?php
session_start()
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tickets</title>
<style type="text/css">


<!--
body {
	background-image: url(./Theatre/top_hd-_wallpapers-_hd.jpg);
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
	left:107px;
	top:46px;
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
	top:165px;
	width:1001px;
	height:372px;
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
	left:113px;
	top:176px;
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
.style21 {
	color: #FFFFFF;
	font-size: large;
	font-weight: bold;
	font-style: italic;
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
.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}

#apDivmovie
{
	position:absolute;
	left:238px;
	top:230px;
	width:600px;
	height:32px;
	z-index:15;
}

table.movietable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	border-color: #666666;
	border-collapse: collapse;
	text-align: left;
  	float: left;
  	clear: both;
  	display: table;
  	color: #2779AA;
	
}
table.movietable tr {
	height: 20%;

	
}
table.movietable td {
	
	text-align: top;
}

-->



</style>

 <link rel="stylesheet" href="./Scripts/jquery/jquery-ui.css">
  <script src="./Scripts/jquery/jquery-1.10.2.js"></script>
  <script src="./Scripts/jquery/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <link rel="stylesheet" href="./Scripts/jquery/bootstrap.min.css">
  <link rel="stylesheet" href="./Scripts/jquery/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="./Scripts/jquery/index.css">


  <script>
  $(function() {
    $("#datepicker").datepicker();
  });
  
  </script>




  <style type="text/css">
<!--
.style35 {font-size: 18px}
.style42 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
-->
  </style>
</head>

<body>
<form id="formMovies" name="formMovies" method="post" action="tBookMyShow.php"> 

<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000">&nbsp;</td>
      <td width="168" bordercolor="#000000"><div align="center"><a href="ttickets.php" class="style7">TICKETS</a><a href="ttickets.php" class="style7"></a><a href="ttickets.php" class="style8"></a></div></td>
      <td width="192" bordercolor="#000000"><div align="center" class="style8"><a href="tmovies.php" class="style8">MOVIES</a></div></td>
      <td width="148" bordercolor="#000000"><div align="center" class="style8"><a href="tfb.php" class="style8">F &amp; B</a></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="tfacilities.php" class="style8">FACILITIES</a><a href="tfacilities.php" class="style7"></a></div></td>
      <td width="145" bordercolor="#000000"><div align="center" class="style34"><a href="taboutus.php" class="style8">ABOUT US</a></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center" class="style8"><a href="tfaq.php" class="style34">FAQ</a></div></td>
    </tr>
  </table>
</div>

<div id="apDiv11">
  <table width="255" border="0" bordercolor="#C1BCFF">
    <tr>
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><center> " . $_SESSION['user'] ."!</strong><br><a href='tlogout.php' class='style8'>Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><a href='tlog.php' class='style36'>LOGIN/SIGNUP</a></td>";
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7 style35">CONTACT US</a></td>
    </tr>
  </table>
</div>
<div class="style8" id="apDiv4">
  <div align="center" class="style42"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv1"></div>



<div id="apDiv3">

<div class="apDivmovie">



  <table width="255" border="2" class="movietable">
    <tr>

		<?php

		include "database.php";
		
		if(isset($_GET['movie']))
 		{

			$movieID=$_GET["id"];
			$date=$_POST["datepicker"];
			$movie=$_GET["movie"];
			$showtime=$GET["showtime"];
			$seats=$GET["seats"];

			//echo "<script>alert('". $date . "');</script>";
		}
		else
		{

			$movieID=$_GET["id"];
			$date=$_POST["datepicker"];
			$movie=$_POST["movie"];
			$showtime=$_POST["showtime"];
			$seats=$_POST["seats"];

			//echo "<script>alert('". $date . "');</script>";
	
	
		}

		
		if (isset($_SESSION['login']) && $_SESSION['login'] == true) 
		{
		
			$isUser=1;
			$username=$_SESSION['user'];

		}
		else
		{
			$isUser=0;
			$username='NON_USER';
		}


		$connect = dbconnect();
		//$query= "select * from user where uEmail='$email' and uPassword='$password'";

		$query="INSERT INTO `multiplex`.`book` (`bId`, `bRefno`, `bIsuser`, `bDate`, `bUsername`, `bEmail`, `bUserid`, `bShow`, `bShowtime`, `bMovie`, `bScreen`, `bCost`, `bQuantity`, `bTotal`, `bPayment`, `bPaymenttype`, `bSeat`, `bIscancellable`) VALUES(UNIX_TIMESTAMP(),'1','$isUser',CURRENT_DATE(),'$username','$username','$username','MATINEE','$showtime','$movie','75', '125', '$seats', '$seats', '4567', 'card', '23', '1' )";


		$result=mysqli_query($connect,$query);
		if($result>0)
		{
			$time=time();	
			//$timestamp=date("Y-m-d",$time);
			echo "successfull";

		
			echo '<td width="25%" height="15%" align="center" >Booking confirmed for show : '.$movie.', '.$seats.' seats at '.$showtime.'<BR> - tickets confirmation ID : '.$time.'  </td>';


			
		
		}
		else
		{
		
		echo '<div class="style21"  id="apDiv2"><p>Booking failed, Please try again..</p></div>';
		
		}


		
		//header("Location:thome.php");

?>

</tr>
</table>
</div>
	
		</div>
           
	</div>


</form>

</body>
</html>


