<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../puthiyatheatre/colorful-bubble-wallpaper-images-222.jpg);
}
#apDiv1 {
	position:absolute;
	left:377px;
	top:80px;
	width:472px;
	height:341px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:382px;
	top:56px;
	width:601px;
	height:503px;
	z-index:1;
}
.style1 {color: #FFFFFF}
.style2 {color: #880044}
.style4 {color: #FFFFFF; font-weight: bold; }
.style5 {
	color: #F0F0F0;
	font-weight: bold;
}
#apDiv3 {
	position:absolute;
	left:545px;
	top:229px;
	width:166px;
	height:225px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:423px;
	top:426px;
	width:99px;
	height:38px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:592px;
	top:484px;
	width:0px;
	height:4px;
	z-index:3;
}
#apDiv6 {
	position:absolute;
	left:590px;
	top:494px;
	width:51px;
	height:49px;
	z-index:4;
}
#apDiv7 {
	position:absolute;
	left:568px;
	top:218px;
	width:166px;
	height:205px;
	z-index:4;
}
-->
</style></head>

<body>
<form id="form2" name="form2" method="post" action="tregister_action.php">
<div id="apDiv7">
  <p>
    <label>
    <input type="text" name="uEmail" id="uEmail" />
    </label>
  </p>
  <p>
    <label>
    <input type="text" name="uName" id="uName" />
    </label>
  </p>
  <p>
    <label>
    <input type="password" name="uPassword" id="uPassword" />
    </label>
  </p>
  <p>
    <label>
    <input type="password" name="ucpassword" id="ucpassword" />
    </label>
  </p>
  
    <label>
    <input type="text" name="uPhoneno" id="uPhoneno" />
    </label>
    <table width="200">
      <tr>
        <td><label>
          <input name="RadioGroup2" type="radio" id="RadioGroup2_0" value="male" checked="checked" />
          <span class="style1"><strong>Male</strong></span></label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="RadioGroup2" value="female" id="RadioGroup2_1" />
          <span class="style4">Female</span></label></td>
      </tr>
    </table>
    <p>
      <label>
      <input type="submit" name="button" id="button" value="REGISTER" onclick="return validateRegister()" />
      </label>
    </p>
  
  <p>&nbsp; </p>
</div>



<div id="apDiv2">
  <table width="529" height="501" border="1" bgcolor="#880044">
    <tr>
      <td height="89"> <h2 align="center" class="style1">REGISTER  </h2></td>
    </tr>
    <tr>
      <td bgcolor="#880044"><p><span class="style1"><strong>*Email </strong></span><span class="style2"></span></p>
        <p><span class="style1"><strong>*Username</strong></span><span class="style2"> </span></p>
      <p><span class="style1"><strong>*Password</strong></span> <span class="style2"></span></p>
      <p><span class="style1"><strong>*Confirm Password</strong></span> <span class="style2"></span></p>
      <p><span class="style4">*Mobile Number</span><span class="style2"></span></p>
      <p><span class="style5">*Gender</span><span class="style2"></span></p>
      <p>&nbsp; </p></td>
    </tr>
  </table>
</div>
<div id="apDiv3">
  
    <label><br />
      <br />
    </label>
    <p>
      <label></label>
    </p>
    <p>
      <label></label>
    </p>
    <p>
      <label></label>
    </p>
    <p>
      <label><span class="style1"></span></label>
      <br />
      <label><span class="style1"></span> </label>
    </p>
 
<div id="apDiv5"></div>
<div id="apDiv6">
 
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
  
  function validateRegister() {
    var x = document.forms["form2"]["uEmail"].value;
    if (x == null || x == "") {
        alert("Email field must not be left blank");
        return false;
    } 
	
  var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");	
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
	}	
	var z = document.forms["form2"]["uPassword"].value;
    if (z == null || z == "") {
        alert("Password field must not be left blank");
        return false;
    } 
	
	var y = document.forms["form2"]["ucpassword"].value;
   if(y!=z)
   {
   alert("Passwords do not match");
   return false;
      }
	  
	  var mno = document.forms["form2"]["uPhoneno"].value;
    if (mno == null || mno == "") {
        alert("Phone number field must not be left blank");
        return false;
    } 
	  
	  
	  var uname = document.forms["form2"]["uName"].value;
    if (uname == null || uname == "") {
        alert("Username field must not be left blank");
        return false;
		} 
	  
	  /*
	  	 var phone = document.forms["form2"]["uPhoneno"].value;
        var phoneNum = ^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$; 
            if(phone.value.match(phoneNum)) {
               return true;
            }
            else {
                document.getElementById("phone").className = document.getElementById("phone").className + " error";
				
                return false;
            } 
   
	
	
	 /*var error = "Invalid username";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
     var fId= document.forms["form2"]["uName"].value
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a username.\n";
        alert(error);
        return false;
 
    } else if ((fld.value.length < 5) || (fld.value.length > 30)) {
        fld.style.background = 'Yellow';
        error = "please enter a name with atleast 4 characters.\n";
		alert(error);
		return false;
 
    } else if (illegalChars.test(fld.value)) {
        fld.style.background = 'Yellow';
        error = "The username contains illegal characters.\n";
		alert(error);
		return false;
 
    } else {
        fld.style.background = 'White';
		return true
    }
   
	*/
	
	
	
	
	
}
  
  
  
   </script>
  
  
  
</form>
</body>
</html>
