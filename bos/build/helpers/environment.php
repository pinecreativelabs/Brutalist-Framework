<?php
// SERVER-HOST ENVIRONMENT
$phpversion = phpversion();
$local_ip = getenv('REMOTE_ADDR');
$server_ip = getenv('SERVER_ADDR');
$is_https = getenv('HTTPS');
if($is_https==true){$http = 'enabled';}else{$http='disabled';}
$get_cur_user = get_current_user();
$get_my_uid = getmyuid();
$protocol = getenv('SERVER_PROTOCOL');
$server_os = php_uname();
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$http_accept = $_SERVER['HTTP_ACCEPT'];
$session_dur = (ini_get("session.gc_maxlifetime")/60).' mins';

// server disk space
$freebytes = disk_free_space(".");
$totbytes = disk_total_space(".");
$si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
$bitbase = 1024;
$freediskspace = min((int)log($freebytes , $bitbase) , count($si_prefix) - 1);
$free_disk_space = sprintf('%1.2f' , $freebytes / pow($bitbase,$freediskspace)).' '.$si_prefix[$freediskspace];
$totaldiskspace = min((int)log($totbytes , $bitbase) , count($si_prefix) - 1);
$total_disk_space = sprintf('%1.2f' , $totbytes / pow($bitbase,$totaldiskspace)).' '.$si_prefix[$totaldiskspace];
$percent_freespace = sprintf('%1.2f',$free_disk_space / $total_disk_space)*100;

// get max_file_upload size
$max_file_size = ini_get('upload_max_filesize');
$post_max_size = ini_get('post_max_size');
$memory_limit = ini_get('memory_limit');

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
$userIP = getHostByName(php_uname('n'));
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$user_ip));
$user_continent = $ipdat->geoplugin_continentName;
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
			if(in_array($choice, $availableLanguages)){return $choice;}
		}
	} return $default_lang;
}
$browser_lang = get_client_language();

// print environment (server) info
$environment = '<strong>Server OS: </strong>'.php_uname().'<br />';
$environment .= '<strong>Current User: </strong>'.$get_cur_user.'<br />';
$environment .= '<strong>Current User ID: </strong>'.$get_my_uid.'<br />';
$environment .= '<strong>Server IP: </strong>'.$server_ip.'<br />';
$environment .= '<strong>Server Protocol: </strong>'.$protocol.'<br />';
$environment .= '<strong>HTTPS: </strong>'.$http.'<br /><br />';
$environment .= '<strong>Free Disk Space: </strong>'.$free_disk_space.' '.$si_prefix[$freediskspace].'<br />';
$environment .= '<strong>Total Disk Space: </strong>'.$total_disk_space.' '.$si_prefix[$totaldiskspace].'<br />';
$environment .= '<strong>'.$percent_freespace.'%</strong> available<br /><br />';
$environment .= '<strong>PHP Version: </strong>' .$phpversion.'<br /><br />';
$environment .= '<strong>Upload Max File Size: </strong>'.$max_file_size.'<br /><strong>Post Max Size: </strong>'.$post_max_size.'<br />';
$environment .= '<strong>Memory Limit: </strong>'.$memory_limit.'<br /><br />';
$environment .= '<strong>User Agent: </strong>'.$_SERVER['HTTP_USER_AGENT'].'<br />';
$environment .= '<strong>HTTP Accept: </strong>'.$_SERVER['HTTP_ACCEPT'].'<br /><br />';

// print user (client) info
$user_environment = '<strong>Your IP:</strong> '.$user_ip.'<br /><strong>Browser Language:</strong> '.$browser_lang.'<br />';
$user_environment .= '<strong>Country:</strong> '.$user_country.' ('.$user_cc.')<br />';
$user_environment .= '<strong>Region:</strong> '.$user_region.' ('.$user_rc.')<br /><strong>City:</strong> '.$user_city.'<br />';
$user_environment .= '<strong>Lat, Long:</strong> '.$user_lat.', '.$user_long.'<br />';
$user_environment .= '<strong>Timezone:</strong> '.$user_tz.'<br /><strong>Currency:</strong> '.$user_curc.' ('.$user_curs.')<br />';

?>
