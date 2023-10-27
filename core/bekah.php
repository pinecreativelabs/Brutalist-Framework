<? 
/* BEKAH: 
 * Base Environment Kit Application Helper
 */

/* BASE KIT VARIABLES 
 * ================== */
$sitename = 'Brutalist Framework';
$appname = ''; 	// application name
$basedir = ''; 	// base directory (ex: 'sub-folder')

/* Deconstruct Mode */
$deconstruct = false;

/* Core Components */
$butch = true;
$buix = true;
$bfx = true;
$bicons = true;
$flavors = true;
$rebar = true;

/* Additional CSS Resources */
$animate = true;	// load animate.css
$filetypes = true;	// load filetype icons
$fontpacks = true;	// load custom font packs

/* THEMES */
$css_themes = true;
$default_theme = 'default';

/* Header Elements */
$tracking = true;	// enable tracking codes?
$favicons = true;	// enable favicons?
$tc = true; 		// twitter card
$og = true;			// open graph

/* Footer Elements */
$jquery = true;		// enable jquery
$jqv = 3;			// jquery version (1, 2, or 3)

/* Date & Time Formats */
$df = 'M jS, Y';  // date format
$tf = 'g:i A';    // time format

/* Random Numbers & Strings */
$rmin = 1;		// random number min
$rmax = 100;	// random number max
$rsl = 10;		// random string length


/* APPLICATION HELPERS 
 * no need to edit below this point
 * ================================= */

require_once 'molds/config.php';  // get MOLDS config

$today = date($df);  // current date
$time = date($tf);   // current time
$rand = rand($rmin,$rmax); // random number within range

/* Directory Paths */
$cdir = basename(getcwd()); // current directory name
$cwdir = getcwd();  // current working directory path
$droot = getenv('DOCUMENT_ROOT');  // document root
$cfile= basename($_SERVER['PHP_SELF']); // current file name 
$dir = realpath(__DIR__); // current directory
$pdir = realpath(__DIR__ . '/../..'); // parent directory
$gdir = realpath(__DIR__ . '/../../..'); // grandparent directory
$ggdir = realpath(__DIR__ . '/../../../..'); // great-grandparent directory

/* URL Helpers */
$https = getenv('HTTPS'); // get status of HTTPS (on or off?)
$host = getenv('SERVER_NAME'); // host(domain name, ip)
// base URL
$burl = (isset($https) && $https === 'on' ? "https" : "http")."://".$host;
$rurl = $_SERVER['PHP_SELF']; // requested resource URL
if((!isset($basedir))||($basedir=='')){
	$bdir = $burl.'/';
	$app_files = $burl.'/app/files/';
	$app_audio = $burl.'/app/files/audio/';
	$app_video = $burl.'/app/files/video/';
	$app_images = $burl.'/app/files/images/';
	$app_docs = $burl.'/app/files/docs/';
	$app_data = $burl.'/app/data/';
	$app_csv = $burl.'/app/data/csv/';
	$app_json = $burl.'/app/data/json/';
	$app_xml = $burl.'/app/data/xml/';
	$app_sql = $burl.'/app/data/sql/';
	$appfilesdir = getenv('DOCUMENT_ROOT').'/app/files/';
	$appaudiodir = getenv('DOCUMENT_ROOT').'/app/files/audio/';
	$appvideodir = getenv('DOCUMENT_ROOT').'/app/files/video/';
	$appdocsdir = getenv('DOCUMENT_ROOT').'/app/files/docs/';
	$appimagesdir = getenv('DOCUMENT_ROOT').'/app/files/images/';
	$appdatadir = getenv('DOCUMENT_ROOT').'/app/data/';
	$appcsvdir = getenv('DOCUMENT_ROOT').'/app/data/csv/';
	$appjsondir = getenv('DOCUMENT_ROOT').'/app/data/json/';
	$appsqldir = getenv('DOCUMENT_ROOT').'/app/data/sql/';
	$appxmldir = getenv('DOCUMENT_ROOT').'/app/data/xml/';
} else { 
	$bdir = $burl.'/'.$basedir.'/';
	$app_files = $burl.'/'.$basedir.'/app/files/';
	$app_audio = $burl.'/'.$basedir.'/app/files/audio/';
	$app_video = $burl.'/'.$basedir.'/app/files/video/';
	$app_images = $burl.'/'.$basedir.'/app/files/images/';
	$app_docs = $burl.'/'.$basedir.'/app/files/docs/';
	$app_data = $burl.'/'.$basedir.'/app/data/';
	$app_csv = $burl.'/'.$basedir.'/app/data/csv/';
	$app_json = $burl.'/'.$basedir.'/app/data/json/';
	$app_xml = $burl.'/'.$basedir.'/app/data/xml/';
	$app_sql = $burl.'/'.$basedir.'/app/data/sql/';
	$appfilesdir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/files/';
	$appaudiodir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/files/audio/';
	$appvideodir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/files/video/';
	$appdocsdir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/files/docs/';
	$appimagesdir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/files/images/';
	$appdatadir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/data/';
	$appcsvdir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/data/csv/';
	$appjsondir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/data/json/';
	$appsqldir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/data/sql/';
	$appxmldir = getenv('DOCUMENT_ROOT').'/'.$basedir.'/app/data/xml/';
}
// standard URL
$url = $burl.$rurl;

// APP DIRECTORY FILE COUNTERS
$rpath = realpath(__DIR__.'/..');
if(is_dir($appfilesdir)) {
	$filespath = $rpath.'/app/files/';
	$fc_files = scandir($filespath);
	$filesfc = count($fc_files)-6;
	if($filesfc>=0){$files_fc=$filesfc;}else{$files_fc=0;}
	if(is_dir($appimagesdir)){
		$imgspath = $rpath.'/app/files/images/';
		$fc_imgs = scandir($imgspath);
		$images_fc = count($fc_imgs)-2;
	} else {$images_fc='no images directory';}
	if(is_dir($appaudiodir)){
		$audpath = $rpath.'/app/files/audio/';
		$fc_aud = scandir($audpath);
		$audio_fc = count($fc_aud)-2;
	} else {$audio_fc='no audio directory';}
	if(is_dir($appvideodir)){
		$vidpath = $rpath.'/app/files/video/';
		$fc_vid = scandir($vidpath);
		$video_fc = count($fc_vid)-2;
	} else {$video_fc='no video directory';}
	if(is_dir($appdocsdir)){
		$docpath = $rpath.'/app/files/docs/';
		$fc_docs = scandir($docpath);
		$docs_fc = count($fc_docs)-2;
	} else {$docs_fc='no docs directory';}
	$files_total = $files_fc + $docs_fc + $video_fc + $audio_fc + $images_fc;
} else {
	$files_fc = 'no files directory';
	$images_fc = 'no images directory';
	$audio_fc = 'no audio directory';
	$video_fc = 'no video directory';
	$docs_fc = 'no docs directory';
	$files_total = 'no files directory';
}

if(is_dir($appdatadir)) {
	$datapath = $rpath.'/app/data/';
	$fc_data = scandir($datapath);
	$datafc = count($fc_data)-6;
	if($datafc>=0){$data_fc=$datafc;}else{$data_fc=0;}
	if(is_dir($appcsvdir)){
		$csvpath = $rpath.'/app/data/csv/';
		$fc_csv = scandir($csvpath);
		$csv_fc = count($fc_csv)-2;
	}else{$csv_fc='no CSV directory';}
	if(is_dir($appjsondir)){
		$jsonpath = $rpath.'/app/data/json/';
		$fc_json = scandir($jsonpath);
		$json_fc = count($fc_json)-2;
	}else{$json_fc='no JSON directory';}
	if(is_dir($appsqldir)){
		$sqlpath = $rpath.'/app/data/sql/';
		$fc_sql = scandir($sqlpath);
		$sql_fc = count($fc_sql)-2;
	}else{$sql_fc='no SQL directory';}
	if(is_dir($appxmldir)){
		$xmlpath = $rpath.'/app/data/xml/';
		$fc_xml = scandir($xmlpath);
		$xml_fc = count($fc_xml)-2;
	}else{$xml_fc='no XML directory';}
	$data_total = $data_fc + $csv_fc + $json_fc + $sql_fc + $xml_fc;
} else {
	$data_fc = 'no data directory';
	$csv_fc = 'no CSV directory';
	$json_fc = 'no JSON directory';
	$sql_fc = 'no SQL directory';
	$xml_fc = 'no XML directory';
	$data_total = 'no data directory';
}
if((is_dir($appdatadir))||(is_dir($appfilesdir))) {
	$total_fc = $files_total + $data_total;
} else {$total_fc = 'no files or data directories';}

// RANDOM STRING 
function getRandomString($rsl){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $rsl; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

// GET USER INFO
function getUserIpAddress() { 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } else { return $_SERVER['REMOTE_ADDR']; } 
}
$user_ip = getUserIPAddress(); 
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$user_ip));
$user_country = $ipdat->geoplugin_countryName;
$user_cc = $ipdat->geoplugin_countryCode;
$user_region = $ipdat->geoplugin_region;
$user_rc = $ipdat->geoplugin_regionCode;
$user_city = $ipdat->geoplugin_city;
$user_lat = $ipdat->geoplugin_latitude;
$user_long = $ipdat->geoplugin_longitude;
$user_tz = $ipdat->geoplugin_timezone;
$user_curc = $ipdat->geoplugin_currencyCode;
$user_curs = $ipdat->geoplugin_currencySymbol;

// get browser language
function get_client_language($availableLanguages, $default_lang='en'){
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
		foreach ($langs as $value){
			$choice=substr($value,0,2);
			if(in_array($choice, $availableLanguages)){
				return $choice;
			}
		}
	} 
	return $default_lang;
}
$browser_lang = get_client_language();

?>