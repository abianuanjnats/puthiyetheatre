

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(..//puthiyatheatre/colorful-bubble-wallpaper-images-222.jpg);
}
#apDiv1 {
	position:absolute;
	left:391px;
	top:92px;
	width:373px;
	height:602px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:372px;
	top:157px;
	width:361px;
	height:346px;
	z-index:1;
	background-color: #A60053;
}
.style1 {color: #A60053}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
.style9 {font-size: 14px}
#apDiv3 {
	position:absolute;
	left:452px;
	top:170px;
	width:30px;
	height:18px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:513px;
	top:403px;
	width:121px;
	height:38px;
	z-index:3;
}
-->
</style>
<script src="file:///G|/drishya/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1"  action="tforgot_action.php" onsubmit="return validateForm()" method="post" >

<div id="apDiv2"> 
  <p> <span class="style1">ssddddddddddddd<span class="style8">Forgot Password</span></span></p>
  <p class="style5">&nbsp;</p>
  <p class="style5">*<span class="style9">Email ID</span> <span class="style1">iiiiiiiiiiiiiiiiiiii</span>:
    <label>
    <input type="text" name="uEmail" id="uEmail" />
    </label>
  </p>
  <p class="style5">*New Password <span class="style1">iiiiiiiii</span>:
    <label>
    <input type="password" name="uPassword" id="uPassword" />
    </label>
  </p>
  <p class="style5">*Confirm Password<span class="style1"> iii</span>:
    <label>
    <input type="password" name="ucpassword" id="ucpassword" />
    </label>
  </p>
  <p class="style5">&nbsp;</p>
  <p class="style5"><span class="style1">iiiii </span><span class="style1">i </span>
    <label></label>
  </p>
</div>
<div id="apDiv3"><img src="../puthiyatheatre/images.jpg" width="33" height="33" /></div>
<div id="apDiv4">
  <label>
  <input type="submit" name="LOGIN" id="LOGIN" value="LOGIN" />
  </label>
</div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <script>
function validateForm() {
    var x = document.forms["form1"]["uEmail"].value;
    if (x == null || x == "") {
        alert("Email field must not be left blank");
        return false;
    } 
	
	var z = document.forms["form1"]["uPassword"].value;
    if (z == null || z == "") {
        alert("Password field must not be left blank");
        return false;
    } 
	
	var y = document.forms["form1"]["ucpassword"].value;
	if (y == null || y == "") {
        alert("Please confirm your new Password");
        return false;
    }
	 
	 if (y != z)
	 {alert("Passwords do not match");
        return false;}
	 
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    
	
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
	}
	
	
}
</script>

</form>
</body>
</html>
