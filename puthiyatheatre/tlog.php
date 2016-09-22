<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
<!--
body {
	background-image: url(./theatre/colorful-bubble-wallpaper-images-222.jpg);
	background-color: #BCBCBC;
	background-repeat: no-repeat;
}
#apDiv1 {
	position:absolute;
	left:405px;
	top:134px;
	width:597px;
	height:348px;
	z-index:1;
	background-color: #A60053;
	visibility: visible;
}
#apDiv2 {
	position:absolute;
	left:98px;
	top:22px;
	width:498px;
	height:38px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:468px;
	top:154px;
	width:143px;
	height:78px;
	z-index:2;
}
.style1 {color: #FFFFFF}
#apDiv4 {
	position:absolute;
	left:480px;
	top:240px;
	width:286px;
	height:450px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:976px;
	top:135px;
	width:306px;
	height:270px;
	z-index:4;
	background-color: #660066;
}
#apDiv6 {
	position:absolute;
	left:569px;
	top:484px;
	width:143px;
	height:54px;
	z-index:5;
}
.style3 {color: #FFFFFF; font-weight: bold; }
#apDiv7 {
	position:absolute;
	left:801px;
	top:236px;
	width:173px;
	height:225px;
	z-index:4;
}
#apDiv8 {
	position:absolute;
	left:92px;
	top:148px;
	width:62px;
	height:60px;
	z-index:5;
}
a:link {
	color: #FFFFFF;
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
#apDiv9 {
	position:absolute;
	left:9px;
	top:135px;
	width:231px;
	height:132px;
	z-index:5;
}
.style11 {font-size: 36px}
.style42 {font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
#apDiv10 {	position:absolute;
	left:122px;
	top:43px;
	width:416px;
	height:67px;
	z-index:3;
}
-->
</style>
<script src="./Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv9">
  <label>
  <input type="image" name="imageField" id="imageField" src="login.png" />
  </label>
</div>
<form id="form1" name="form1"  method="POST" action="tlog_action.php">
<div id="apDiv1">
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p><strong><span class="style1">EmailID</span></strong>    </p>
  <p><strong><span class="style1">Password</span></strong></p>
  <p>&nbsp; </p>
</div>
<div id="apDiv3"><img src="images.jpg" width="28" height="28" /><strong><span class="style1"> USER LOGIN</span></strong></div>
<div id="apDiv4">
 
    <label>
    <input name="email" type="text" id="email" />
    <br />
    <br />
    <input name="password" type="password" id="password" />
    </label>
    <p><strong>
      <label></label>
      <a href="../puthiyatheatre/tforgot.php" >Forgot your password?</style></a></strong></p>
    <p>
      <label></label>
      <label>
      <input type="submit" name="button" id="button" value="Login" onclick="return validateForm()" />
      </label>
    </p>
    <p>
      <label></label>
      <label>
      <input type="submit" name="button2" id="button2" value="cancel" formaction="newthome.php"/>
      </label>
    </p>
    <p>
      <label></label>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  
</div>
<div id="apDiv7">
  <p><span class="style3">Are you a new user?</span></p>
  <p>
    <label></label>
    <input type="submit" name="button3" id="button3" value="  SIGN UP   " formaction="tregistersuccess.php" />
  </p>
</div>

  <p>&nbsp;</p>
  <div class="style8" id="apDiv2">
    <div align="center" class="style42"><span class="style11">FORTUNE</span> CINEMAS</div>
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

<script>
function validateForm() {
    var x = document.forms["form1"]["email"].value;
    if (x == null || x == "") {
        alert("Email field must not be left blank");
        return false;
    } 
	
	var z = document.forms["form1"]["password"].value;
    if (z == null || z == "") {
        alert("Password field must not be left blank");
        return false;
    } 
	
	var y = document.forms["form1"]["password"].value;
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
