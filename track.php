<?php
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER['HTTP_REFERER'];

$logData = "IP: $ip\nUser Agent: $userAgent\nReferer: $referer\n\n";
file_put_contents('tracked_data.txt', $logData, FILE_APPEND);

echo "Tracked!";
?>
