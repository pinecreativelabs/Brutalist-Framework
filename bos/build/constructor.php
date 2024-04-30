<? 
/* BUILD CONSTRUCTOR (BETA)
 * version 3.0.3
 */
require_once('sysconfig.php');
$version = VERSION;

require_once('paths.php');
require_once('helpers/environment.php');
require_once('key-arrays.php');

// get bicons library
require_once('helpers/get_bicons_data.php');

// load date helper
require_once('helpers/dates.php');

$header = '';
include('constructors/meta-header.php');
include('constructors/favicons.php');
include('constructors/select-inputs.php');

include('constructors/css.php');
include('constructors/jab.php');

include('constructors/system-select-lists.php');

/* WIDGETS */
include('constructors/instant-search.php');

// clean text function
function clean_text($string){
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

?>