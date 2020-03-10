<?php
function geoip() {
    $ip = str_replace(['127.0.0.1', '::1', 'localhost'], '', $_SERVER['REMOTE_ADDR']);
    return json_decode(file_get_contents("https://pro.ip-api.com/json/$ip?key=WjRgk4zNd0tp4JX"), true);
}

function getOS() {
    $oses = array (
        'iPhone'         => '(iPhone)',
        'Windows 3.11'   => 'Win16',
        'Windows 95'     => '(Windows 95)|(Win95)|(Windows_95)',
        'Windows 98'     => '(Windows 98)|(Win98)',
        'Windows 2000'   => '(Windows NT 5.0)|(Windows 2000)',
        'Windows XP'     => '(Windows NT 5.1)|(Windows XP)',
        'Windows 2003'   => '(Windows NT 5.2)',
        'Windows Vista'  => '(Windows NT 6.0)|(Windows Vista)',
        'Windows 7'      => '(Windows NT 6.1)|(Windows 7)',   
        'Windows 8'      => '(Windows NT 6.2)',
        'Windows 10'     => '(Windows NT 10.0)',
        'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'Windows ME'     => 'Windows ME',
        'Open BSD'       => 'OpenBSD',
        'Sun OS'         => 'SunOS',
        'Linux'          => '(Linux)|(X11)',
        'Safari'         => '(Safari)',
        'Mac OS'         => '(Mac_PowerPC)|(Macintosh)',
        'QNX'            => 'QNX',
        'BeOS'           => 'BeOS',
        'OS/2'           => 'OS/2'
    );
    
    foreach($oses as $os => $preg_pattern) {
        if(preg_match("#$preg_pattern#", $_SERVER['HTTP_USER_AGENT'])) {
            return $os;
        }
    }

    return 'N/A';
}

function logger($data) {
    $today = date('l, d F H H:i:s');
    $visit = geoip();
    $os    = getOS();

    $fopen = fopen('logs/access.log', 'a+');
    fwrite($fopen, "[$today] $data [{$_SERVER['REMOTE_ADDR']} - {$visit['city']}, {$visit['country']} - $os - {$_SERVER['HTTP_USER_AGENT']}]\n");
    fclose($fopen);
}