<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../puthiyatheatre/top_hd-_wallpapers-_hd.jpg);
}
#apDiv11 {
	position:absolute;
	left:882px;
	top:21px;
	width:252px;
	height:36px;
	z-index:9;
}
.style11 {font-size: 36px}
.style16 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style8 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style9 {	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	color: #FFFFFF;
}
#apDiv4 {
	position:absolute;
	left:142px;
	top:46px;
	width:416px;
	height:67px;
	z-index:3;
}
.style7 {	color: #FFFFFF;
	font-weight: bold;
}
#apDiv5 {
	position:absolute;
	left:138px;
	top:122px;
	width:1008px;
	height:43px;
	z-index:4;
	background-color: #000000;
}
#apDiv6 {
	position:absolute;
	left:2px;
	top:2px;
	width:40px;
	height:41px;
	z-index:5;
	background-color: #000000;
}
#apDiv1 {
	position:absolute;
	left:139px;
	top:164px;
	width:1006px;
	height:8155px;
	z-index:10;
	background-color: #0099CC;
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
#apDiv2 {
	position:absolute;
	left:87px;
	top:-33px;
	width:144px;
	height:141px;
	z-index:11;
}
#apDiv3 {
	position:absolute;
	left:139px;
	top:163px;
	width:1009px;
	height:916px;
	z-index:12;
	background-color: #0099CC;
}
#apDiv {
	position:absolute;
	left:27px;
	top:15px;
	width:914px;
	height:903px;
	z-index:2;
}
#apDiv7 {
	position:absolute;
	left:1000px;
	top:122px;
	width:148px;
	height:44px;
	z-index:13;
	background-color: #0099CC;
}
#apDiv8 {
	position:absolute;
	left:1017px;
	top:130px;
	width:115px;
	height:23px;
	z-index:14;
}
#apDiv13 {
	position:absolute;
	left:1px;
	top:2px;
	width:84px;
	height:188px;
	z-index:16;
}
.style18 {color: #000000}
.style19 {
	font-size: 18px;
	font-weight: bold;
}
.style20 {color: #FFFFFF}
-->
</style></head>

<body>
<div id="apDiv11">
  <table width="255" border="0" bordercolor="#C1BCFF">
    <tr>
      <?php

      	

     
			if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				echo "<td width='130' height='31' bordercolor='#000000' bgcolor='#FF9900'><strong><center>" . $_SESSION['user'] ."!</strong><br><a href='tlogout.php' class='style8' >Logout</a> | <a href='tMyShows.php'class='style8'>My shows</a><center></td>";
   				
  			} else {
     			echo "<td width='120' height='31' bordercolor='#000000' bgcolor='#FF9900'><a href='tlog.php' class='style36'><STRONG>LOGIN/SIGNUP</a></td>";
     		}
		?>
      <td width="124" bordercolor="#000000" bgcolor="#000000" class="style7"><a href="tcontact.php" class="style7">CONTACT US</a></td>
    </tr>
  </table>
</div>
<div class="style8" id="apDiv4">
  <div align="center" class="style9"><span class="style11">FORTUNE</span> CINEMAS</div>
</div>
<div id="apDiv5">
  <table width="1007" height="39" border="1" bordercolor="#000000">
    <tr>
      <td width="37" height="33" bordercolor="#000000"><div id="apDiv13">
        <label> <a href="newthome.php"> <img src="home1.jpg" alt=""/>
        <!--<input type="image" name="imageField" id="imageField" src="home1.jpg" />-->
        </a> </label>
      </div></td>
      <td width="167" bordercolor="#000000"><div align="center"><a href="ttickets.php" class="style7">TICKETS</a></div></td>
      <td width="190" bordercolor="#000000"><div align="center"><a href="../puthiyatheatre/tmovies.php" class="style7">MOVIES</a></div></td>
      <td width="146" bordercolor="#000000"><div align="center"><a href="tfb.php" class="style7">F & B</a></div></td>
      <td width="140" bordercolor="#000000"><div align="center" class="style7"><a href="../puthiyatheatre/tfacilities.php" class="style7">FACILITIES</a></div></td>
      <td width="144" bordercolor="#000000"><div align="center" class="style7"><a href="../puthiyatheatre/taboutus.php" class="style7">ABOUT US</a></div></td>
      <td width="137" bordercolor="#000000" bgcolor="#0099FF" class="style7"><div align="center">FAQ</div></td>
    </tr>
  </table>
</div>
<div id="apDiv3">
  <div id="apDiv">
    <h3 tabindex="0" id="ui-accordion-accordion-header-0" role="tab" aria-selected="true" aria-controls="ui-accordion-accordion-panel-0">1. How do I book the tickets for my preferred movie?</h3>
    <div id="ui-accordion-accordion-panel-0" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-0">
      <p> First of all thank you for choosing Fortune cinemas, In our webpage you may find a link for ‘book tickets’ when you click at the particular link it will directly lead you to the booking page where you will be able to choose the number of tickets, preferred movie, date and the show, the next step would lead you to an option of choosing your own seat, after the seat selection, it will take you to a screen where you can include the snacks &amp; food along with your tickets and press the pay buttom to complete the transaction, we have multiple options in the payment process viz. Credit cards, Debit cards, Netbanking and Cash cards, choose the right one and complete the transaction. After the booking is complete an email and an SMS would be sent to your email-id, produce the confirmation number at the dedicated internet counters to pick-up your tickets.</p>
    </div>
    <h3 tabindex="0" id="ui-accordion-accordion-header-2" role="tab" aria-selected="true" aria-controls="ui-accordion-accordion-panel-2">2.What if I received an error when trying to buy tickets? </h3>
    <div id="ui-accordion-accordion-panel-2" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-2">
      <p> We apologize for the inconvenience you have encountered with our online service. Before re-attempting your purchase, we recommend that you check your order status. If an order was placed, the order status will appear on the page just after you sign in. If no order appears in your Order History, we recommend that you then re-attempt your purchase. If you have questions regarding the purchase email our support team at<span class="style20"> fortune<a href="mailto:support@ticketnew.com">@ticketnew.com</a></span> </p>
      <h3 tabindex="0" id="ui-accordion-accordion-header-3" role="tab" aria-selected="true" aria-controls="ui-accordion-accordion-panel-3">3.What is the policy for obtaining a refund for cancelled/postponed events? </h3>
      <div id="ui-accordion-accordion-panel-3" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-3">
        <p> Here we would like to make one statement clear that the probability of a particular show getting cancelled is a rare occurrence. But if under a worst case scenario that happens then the refund amount for the ticket you purchased will only be the ticket's face value paid which neither includes the facility fee nor the convenience charges. And even if a refund is issued, it will be issued using the same method of payment that was used to purchase the tickets. For instance, if a credit card was used to make the refunded purchase, then only that actual credit card will receive the credit for the refund. We are not liable for travel or any other expenses that you or anyone else incurs in connection with a cancelled or postponed movie. If the movie is rescheduled, the refund limitations will be set accordingly. If the movie you booked in, has not been cancelled or postponed refunds are not allowed. Policies set forth by us prohibit from issuing exchanges or refunds after a ticket has been purchased or for lost, stolen, damaged, or destroyed tickets. </p>
      </div>
      <h3 tabindex="0" id="ui-accordion-accordion-header-4" role="tab" aria-selected="true" aria-controls="ui-accordion-accordion-panel-4">4.What if I did not receive the Order Confirmation? </h3>
      <div id="ui-accordion-accordion-panel-4" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-4">
        <p> If you do not receive a confirmation number (in the form of a confirmation page or email or SMS) after submitting payment information, or if you experience an error message or service interruption after submitting payment information, it is your responsibility to confirm with us whether or not your order has been placed. Only you may be aware of any problems that may occur during the purchase process. We will not be responsible for losses (monetary or otherwise) if you assume that an order was not placed because you failed to receive confirmation. </p>
      </div>
      <p class="style19">5.If I have problems in online booking whom should I approach? </p>
    </div>
    <div id="ui-accordion-accordion-panel-8" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-8">
      <p> When you have any issues in online booking, pls send an email to <a href="mailto:support@ticketnew.com">fortune@ticketnew.com</a> or contact 044-42082233 or +91-9790905588. </p>
      <p> <span class="style19">6.How do I know that my transaction is secure and that my personal information is protected? </span></p>
    </div>
    <div id="ui-accordion-accordion-panel-5" role="tabpanel" aria-expanded="true" aria-hidden="false" aria-labelledby="ui-accordion-accordion-header-5">
      <p> We ensure a safe and secure customer buying experience. Our service is equipped with the latest computer technology making sure of transaction security. All transactions conducted on our website are through a secure browser protected by the industry standard and the best software available today for secure online commerce business</p>
    .</div>
    <p>&nbsp;</p>
  </div>
</div>
<div id="apDiv7"></div>
<div class="style7" id="apDiv8">
  <div align="center" class="style7">FAQ</div>
</div>
</body>
</html>
