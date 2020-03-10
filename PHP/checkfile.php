<?php
$filename = 'gid.ttt';
$host = $_SERVER['HTTP_HOST'];

if (file_exists($filename)) {
    echo "file_ok $host";
} else {
    echo "no_file $host";
}
?>
