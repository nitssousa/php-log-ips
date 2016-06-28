<?php
$file = "log.txt"; //needs to be created in the same dir
$ip = $_SERVER['REMOTE_ADDR'];
// Load all file lines to an array
$alreadyInFile = file($file, FILE_IGNORE_NEW_LINES);
if (!in_array($ip, $alreadyInFile)) {
    //the ip is not in the array
    echo 'Added ' . $ip . ' to ' . $file;
    file_put_contents($file, $ip . PHP_EOL, FILE_APPEND);
} else {
    echo 'IP already in file! Total: ' . count($alreadyInFile);
}
