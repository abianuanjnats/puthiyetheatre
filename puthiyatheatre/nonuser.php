<?php
 session_start();
 if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			
   				header("location:tBookMyShow.php");
   				
  			} else {
     			header("location:tlog.php");
     		}
		?>