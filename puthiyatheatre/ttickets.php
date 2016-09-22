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
	left:110px;
	top:124px;
	width:40px;
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
	left:122px;
	top:43px;
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
	left:106px;
	top:164px;
	width:998px;
	height:638px;
	z-index:13;
	background-color: #333333;
}
#apDiv2 {
	position:absolute;
	left:112px;
	top:186px;
	width:766px;
	height:37px;
	z-index:14;
}
#apDiv3 {
	position:absolute;
	left:238px;
	top:180px;
	width:500px;
	height:32px;
	z-index:15;
}

#apDivmovie
{
	position:absolute;
	left:238px;
	top:230px;
	width:600px;
	height:32px;
	z-index:15;
}

#apDiv7 {
	position:absolute;
	left:113px;
	top:259px;
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
	left:243px;
	top:418px;
	width:221px;
	height:28px;
	z-index:17;
}

#apDivShowTimes {
	position:absolute;
	left:-131px;
	top:-101px;
	width:140px;
	height:15px;
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

label{
  width: 50%;
  text-align: right;
  float: left;
  clear: both;
  color: #2779AA;
}

.style34 {font-weight: bold; font-size: 18px; color: #FFFFFF;}
-->

fieldset {
    margin: 0;
    padding: 0;
    border-width: 0;
  }

.marked {
    background-color: yellow;
    border: 3px red solid;
  }

  table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	border-color: #666666;
	border-collapse: collapse;
	text-align: left;
  	float: left;
  	clear: both;
  	display: table;
  	color: #2779AA;
	width:100%;
}
table.gridtable th {
	padding: 18px;

	
}
table.gridtable td {
	width: 100%;

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


</style>

  <style type="text/css" media="screen">
    .has-error input {
      border-width: 2px;
    }
    .validation.text-danger:after {
      content: 'Validation failed';
    }
    .validation.text-success:after {
      content: 'Validation passed';
    }
  </style>


 	<link rel="stylesheet" href="./Scripts/jquery/jquery-ui.css">
  	<script src="./Scripts/jquery/jquery-1.10.2.js"></script>
  	<script src="./Scripts/jquery/jquery-ui.js"></script>
	<script src="./Scripts/jquery/jquery-validate.js"></script>
  	<link rel="stylesheet" href="./Scripts/jquery/bootstrap.min.css">
  	<link rel="stylesheet" href="./Scripts/jquery/bootstrap-responsive.min.css">
  	<!--<link rel="stylesheet" href="./Scripts/jquery/index.css">-->


  <script>
  $(function() 
  {

		$("#datepicker").datepicker({
    		dateFormat: 'dd/mm/yy',
    		minDate: 0,
    		required: true,
    		message: "This is a required field",
    		maxDate: 7,
    		defaultDate: null
		});

  });



  function SubmitForm()
    {
    	if($("#datepicker").val() == "" )
    	{
    		//alert("please select a date");
    		$("#datepicker").focus();


    	}
      	else
       {

        	$("#formMovies").submit();
    	}
    }

  

   </script>





  <style type="text/css">
<!--
#apDiv13 {
	position:absolute;
	left:105px;
	top:124px;
	width:46px;
	height:38px;
	z-index:18;
}
#apDiv14 {
	position:absolute;
	left:130px;
	top:139px;
	width:72px;
	height:29px;
	z-index:19;
}
#apDiv16 {
	position:absolute;
	left:112px;
	top:368px;
	width:196px;
	height:28px;
	z-index:19;
}
.style35 {font-size: large}
#apDiv17 {
	position:absolute;
	left:534px;
	top:382px;
	width:117px;
	height:76px;
	z-index:20;
}
.style36 {font-size: 18px}
.style38 {font-size: 18px; color: #FFFFFF; }
.style39 {color: #FFFFFF}
.style40 {
	color: #000000;
	font-size: 18px;
}
#apDiv18 {
	position:absolute;
	left:106px;
	top:125px;
	width:42px;
	height:36px;
	z-index:20;
}
.style41 {font-size: 16px}
.style42 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
-->
  </style>
</head>

<body>
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
<!--<div class="style7 style35" id="apDiv16"><em>NOW SHOWING</em>:</div>-->

<div id="apDiv18"></div>
<form id="formMovies" name="formMovies" method="post" action="tBookMyShow.php"  >
<?php }
else
{ ?>
<form id="formMovies" name="formMovies" method="post" action="tlog.php">
<?php
}?>



<div id="apDiv5">
  <table width="1001" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="38" height="33" bordercolor="#000000">&nbsp;</td>
      <td width="168" bordercolor="#000000"><div align="center"><span class="style7">TICKETS</span></div></td>
      <td width="192" bordercolor="#000000"><div align="center"><a href="tmovies.php" class="style7">MOVIES</a></div></td>
      <td width="148" bordercolor="#000000"><div align="center"><a href="tfb.php" class="style7">F &amp; B</a></div></td>
      <td width="141" bordercolor="#000000"><div align="center"><a href="tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="145" bordercolor="#000000"><div align="center"><a href="taboutus.php" class="style7">ABOUT US</a></div></td>
      <td width="128" bordercolor="#000000" class="style7"><div align="center"><a href="tfaq.php" class="style7">FAQ</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv6">
  <label>
  <input type="image" width="40px" height="34px"name="imageField" id="imageField" src="./theatre/home-icon.gif" />
  </label>
</div>

<div id="apDiv11">
  <table width="255" border="0">
    <tr>

 <?php

      

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
				
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><CENTER>" . $_SESSION['user'] ."!</strong><br><center><a href='tlogout.php'class='style8' >Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><STRONG><a href='tlog.php' class='style36'>LOGIN/SIGNUP</a></td>";
     		}
		?>


      
      <td width="124" bordercolor="#000000" bgcolor="#000000"><a href="tcontact.php" class="style7 style41">CONTACT US</a></td>
    </tr>
  </table>
</div>


<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> <span class="style20">CINEMAS</span></div>
</div>

<div id="apDiv1"></div>

<div id="apDiv3">

 <table class="gridtable" border="0">
   <tr>
<td>
	<label >DATE: <input type="text" id="datepicker" name="datepicker" class="form-control" required  ></label>
</td>
<td>
  	<label >SEATS:<select name="seats"  id="select">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    </select>
  	</label>
</td>
<td>
	<label >SHOW TIMES:
	<select name="showtime">
 	<option>12:25 PM</option>
    <option>2:30 PM</option>
	 <option>6:40 PM</option>
 	<option>10:20 PM</option>
    </select></label>

</td>
</tr>
</table>

</div>
<!--
<div id="apDiv9" class="container">
    <strong>
     
      <small>please enter the payment details below</small>
    </strong>
    
    
      <div class="form-group">
        <label for="cc-number" class="control-label">Card number :<small class="text-muted">[<span class="cc-brand"></span>]</small></label>
        <input id="cc-number" type="tel" class="input-lg form-control cc-number"  placeholder="•••• •••• •••• ••••" required>
      </div>

      <div class="form-group">
        <label for="cc-exp" class="control-label">Card expiry Date</label>
        <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required>
      </div>

      <div class="form-group">
        <label for="cc-cvc" class="control-label">Card CVV </label>
        <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required>
      </div>

      <div class="form-group">
        <label for="numeric" class="control-label">Card Holder NAme</label>
        <input id="cc-name" type="tel" class="input-lg form-control" >
      </div>

        <div class="form-group">
        <label for="numeric" class="control-label">Card Holder Address</label>
        <input id="cc-address" type="tel" class="input-lg form-control" >
      </div>

    

  </div>
-->

<div id="apDivmovie">

<table class="movietable" border="0" >


     	<!--<div class="banner">-->
     	<?php
			
			include "database.php";
 
			$connect = dbconnect();
			
			$query="select * from movie where mIsactive=1 and mIsrunning=1 ";
			$result= mysqli_query($connect,$query);

			//$row = mysqli_fetch_array($result);
			$rowcount=mysqli_num_rows($result);

			//echo "<script>alert('". $rowcount . "');</script>";
	
			if ($rowcount>0)
			{
				
					for ($i = 0; $i < $rowcount; $i++)
					 {
					 	
            			$row = mysqli_fetch_array($result);
            			$movieID = $row['mId'];
            			$movie = $row['mName'];
            			$rating = $row['mRating'];
            			$runTime = $row['mHrs'];
            			$cast = $row['mCast'];
            			$bannerPath= $row['mBanner'];
            			$MovieDetails=$row['mDetails'];
            			$noImagesPath="this.onerror=null;this.src='./Movies/no-images.png';";

            			//echo "<a href='movieDetails.php'>". $movie ."</a>”;

            			//$bannerRow='<a href="'.$movie.'" onclick="javascript:bookMyShow('.$movie.');" ><img src="./Movies/'.$bannerPath.'" alt="'.$movie.'" width="125" height="125" /></a><p class="companyInfo" >Book '.$movie.'</p>';

            			//$bannerRow='<a href="#" onclick="bookMyShow('.$movie.');return false;" ><img src="./Movies/'.$bannerPath.'" alt="'.$movie.'" width="125" height="125" /></a><p class="companyInfo" >Book '.$movie.'</p>';

            			
	


            			$showquery="select * from shows where mId=".$movieID." and SIsactive=1 ";
						$showresult= mysqli_query($connect,$showquery);
						$showrowcount=mysqli_num_rows($showresult);

						//echo "<script>alert('". $showrowcount . "');</script>";

						if ($showrowcount>0)
						{


            				$bannerRow='<tr><td width="25%" height="15%" align="center"><a href="#" onclick="SubmitForm();return false;" ><img src="./Movies/'.$bannerPath.'" alt="'.$movie.'" width="125" height="125" onError="'.$noImagesPath.'" /></a> <fieldset><button id="movie" name="movie" value="'.$movie.'" width="2px">Book '.$movie.'</button></fieldset><p class="companyInfo" >Rating: '.$rating.'</p></td><td valign="top" text-align="top"><p><b>Synopsis:</b><br/>'.$MovieDetails.' </p><br/><p><b>Cast: </b>'.$cast.' </p><br/><p><b>Running Time: </b>'.$runTime.' Hrs. </p></td></tr>';

            			}
            			else
            			{

            				$bannerRow='<tr><td width="25%" height="15%" align="center"><img src="./Movies/'.$bannerPath.'" alt="'.$movie.'" width="125" height="125" onError="'.$noImagesPath.'" /><fieldset><button disabled name="movie" value="'.$movie.'" width="2px">Sold Out</button></fieldset><p class="companyInfo" >Rating: '.$rating.'</p></td><td valign="top" text-align="top"><p><b>Synopsis:</b><br/>'.$MovieDetails.' </p><br/><p><b>Cast: </b>'.$cast.' </p><br/><p><b>Running Time: </b>'.$runTime.' Hrs. </p><p><img width="125" height="125" src="./Movies/soldout-stamp.png"></p></td></tr>';


            			}
            		


						echo $bannerRow;

						//echo "<script type='javascript'>bookMyShow('2');</script>";
						//echo "<script>alert('". $movie . "');</script>";


       				}

       				db_disconnect($connect);


			}
			else
			{

				echo "No Movies to display!!";
				db_disconnect($connect);
				
			}

		?>  

	

		</table>

</div>

</form>

<script>

function bookMyShow(movie) 
{

	alert(movie);

}

</script>


</body>
</html>
