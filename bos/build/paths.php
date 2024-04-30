<?php require_once('sysconfig.php');
// get status of HTTPS (on or off?)
$https = getenv('HTTPS');
// host(domain name, ip)
$host = getenv('SERVER_NAME');
// base URL
$burl = (isset($https) && $https === 'on' ? "https" : "http")."://".$host;

$basedir = BASE_DIR;
if((!isset($basedir))||($basedir=='')){
	$bdir = $burl.'/';
	$bosdir = $bdir.'bos/';
	$droot_bos = getenv('DOCUMENT_ROOT').'/bos';
} else { 
	$bdir = $burl.'/'.$basedir.'/';
	$bosdir = $bdir.'bos/';
	$droot_bos = getenv('DOCUMENT_ROOT').'/'.$basedir.'/bos';
}
// current working directory path
$cwdir = getcwd();
$cwdir2 = $cwdir.'/';
$droot = getenv('DOCUMENT_ROOT');

// current directory 
$cdir = basename(getcwd());
$cdir2 = '/'.$cdir.'/';
// current script file 
$cfile= basename($_SERVER['PHP_SELF']);
// current working directory
$cwdir = getcwd();
// parent directory 
$pdir = dirname(__FILE__, 2);
// grandparent directory 
$gdir = dirname(__FILE__, 3);
$ggdir = dirname(__FILE__, 4);
// requested resource URL
$rurl = $_SERVER['PHP_SELF'];

// full URL
$furl = (isset($https) && $https === 'on' ? "https" : "http")."://".$host.$rurl;
// standard URL
$url = $host.$rurl;
?>