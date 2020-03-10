<?php
$config        = array();
$config['key'] = 'W3LLSTORECO';

function getLog($pattern) {
    $i = 0;
    $get = file_get_contents('../logs/access.log');
    
    foreach(array_unique(explode("\n", $get)) as $data) {
        if(preg_match("/\[$pattern\]/i", $data)) {
            $i++;
        }
    }

    return $i;
}