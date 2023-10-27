<? 
/* CORE: 
 * Construct Object Rendering Engine
 * version 3.0
 */
require_once('bekah.php');
require_once('kat.php');
require_once('brad.php');

/* CORE CONSTRUCTORS
 * ====================
*/ 

class Theme {
	public $name;      // name of theme
	public $pcolor;    // primary color
	public $scolor;    // secondary color
	public $tcolor;    // tertiary color
	public $acolor;    // accent color
	public $xcolor;    // auxiliary color
	public $ocolor;	   // other color
	function __construct($name, $pcolor, $scolor, $tcolor, $acolor, $xcolor, $ocolor) {
		$this->name = $name;
		$this->pcolor = $pcolor;
		$this->scolor = $scolor;
		$this->tcolor = $tcolor;
		$this->acolor = $acolor;
		$this->xcolor = $xcolor;
		$this->ocolor = $ocolor;
	}
	function name(){return $this->name;}
	function pcolor(){return $this->pcolor;}
	function scolor(){return $this->scolor;}
	function tcolor(){return $this->tcolor;}
	function acolor(){return $this->acolor;}
	function xcolor(){return $this->xcolor;}
	function ocolor(){return $this->ocolor;}
}

/* Construct Theme Styles
 * ======================
 */
$tids = array_keys($themes);
if($css_themes==true){
$themestyle = '<style>'.PHP_EOL;
$themeclasslist = '';
$themelist = '<ul>'.PHP_EOL;
for($i = 0; $i < count($themes); $i++) {
	foreach($themes[$tids[$i]] as $tid => $value) {
		if($tid=='active'){if($value==true){
			$themeclass = '.theme_'.strtolower(str_replace(' ','_',$tids[$i]));
			$themeclasslist .= $themeclass.'<br />';
			$themelist .= '<li>'.ucwords($tids[$i]).'</li>'.PHP_EOL;
			$themestyle .= '/* '.ucwords($tids[$i]).' */'.PHP_EOL;
			foreach($themes[$tids[$i]] as $tid => $value) {
			if($tid=='p'){
				$themestyle .= $themeclass.'.primary, '.$themeclass.' .primary {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.primary-t, '.$themeclass.' .primary-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.primary-b, '.$themeclass.' .primary-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.primary-o, '.$themeclass.' .primary-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			} elseif($tid=='s'){
				$themestyle .= $themeclass.'.secondary, '.$themeclass.' .secondary {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.secondary-t, '.$themeclass.' .secondary-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.secondary-b, '.$themeclass.' .secondary-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.secondary-o, '.$themeclass.' .secondary-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			} elseif($tid=='t'){
				$themestyle .= $themeclass.'.tertiary, '.$themeclass.' .tertiary {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.tertiary-t, '.$themeclass.' .tertiary-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.tertiary-b, '.$themeclass.' .tertiary-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.tertiary-o, '.$themeclass.' .tertiary-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			} elseif($tid=='a'){
				$themestyle .= $themeclass.'.accent, '.$themeclass.' .accent {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.accent-t, '.$themeclass.' .accent-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.accent-b, '.$themeclass.' .accent-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.accent-o, '.$themeclass.' .accent-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			} elseif($tid=='x'){
				$themestyle .= $themeclass.'.auxiliary, '.$themeclass.' .auxiliary {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.auxiliary-t, '.$themeclass.' .auxiliary-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.auxiliary-b, '.$themeclass.' .auxiliary-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.auxiliary-o, '.$themeclass.' .auxiliary-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			} else {
				$themestyle .= $themeclass.'.other, '.$themeclass.' .other {background-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.other-t, '.$themeclass.' .other-t {color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.other-b, '.$themeclass.' .other-b {border-color: '.$value.' !important;}'.PHP_EOL;
				$themestyle .= $themeclass.'.other-o, '.$themeclass.' .other-o {outline-color: '.$value.' !important;}'.PHP_EOL;
			}
			}
		}}
    }
}
$themestyle .= '</style>';
$themelist .= '</ul>'.PHP_EOL;
} else {$themestyle=''; $themeclasslist = '[themes disabled]'; $themelist = '<p>Themes disabled.</p>'.PHP_EOL;}

/* CONSTRUCT FAVICON LIST
 * ======================
 */
if($favicons!=true){$faviconlist = ''; } else {
	$faviconlist = PHP_EOL.'<!-- FAVICONS -->'.PHP_EOL;
	if($ficons[0][3]==true){
		if($ficons[0][2]=='ico'){
			$faviconlist .= '<link rel="icon" href="core/files/favicon-'.$ficons[0][1].'.'.$ficons[0][2].'" type="image/x-icon" />'.PHP_EOL;
		} else {
			$faviconlist .= '<link rel="icon" href="core/files/favicon-'.$ficons[0][1].'.'.$ficons[0][2].'" type="image/png" />'.PHP_EOL;
		}
	}
	if($ficons[1][3]==true){
		if($ficons[1][2]=='ico'){
			$faviconlist .= '<link rel="shortcut icon" href="core/files/favicon-'.$ficons[1][1].'.'.$ficons[1][2].'" type="image/x-icon" />'.PHP_EOL;
		} else {
			$faviconlist .= '<link rel="shortcut icon" href="core/files/favicon-'.$ficons[1][1].'.'.$ficons[1][2].'" type="image/png" />'.PHP_EOL;
		}
	}
	if($ficons[2][3]==true){
		if($ficons[2][2]=='ico'){
			$faviconlist .= '<link rel="apple-touch-icon" href="core/files/favicon-'.$ficons[2][1].'.'.$ficons[2][2].'" type="image/x-icon" />'.PHP_EOL;
		} else {
			$faviconlist .= '<link rel="apple-touch-icon" href="core/files/favicon-'.$ficons[2][1].'.'.$ficons[2][2].'" type="image/png" />'.PHP_EOL;
		}
	}
}

/* CONSTRUCT GLOBAL META HEADER 
 * ============================
 */
$global_meta_header = '';
if(($tracking==true)&&($ignore_tracking==false)){include 'app/inc/tracking-codes.php'; $global_meta_header .= $trackingcodes.PHP_EOL;}
$global_meta_header .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>'.PHP_EOL;
$global_meta_header .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>'.PHP_EOL;
if($favicons==true){ $global_meta_header .= $faviconlist.PHP_EOL;}

/* CONSTRUCT GLOBAL HEADER 
 * =======================
 */
$global_header = '';
if($deconstruct!=true){
	$global_header .= '<!-- CORE CSS -->'.PHP_EOL.'<link href="core/css/construct.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
} else {
	$global_header .= '<!-- CORE CSS -->'.PHP_EOL.'<link href="core/css/default.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	if($butch==true){
		$global_header .= '<link href="core/css/butch.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($bfx==true){
		$global_header .= '<link href="core/css/bfx.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($buix==true){
		$global_header .= '<link href="core/css/buix.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($flavors==true){
		$global_header .= '<link href="core/css/flavors.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($bicons==true){
		$global_header .= '<link href="core/css/bicons.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($rebar==true){
		$global_header .= '<link href="core/css/rebar.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($animate==true){
		$global_header .= '<link href="core/css/animate.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($filetypes==true){
		$global_header .= '<link href="core/css/filetypes.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
	if($fontpacks==true){
		$global_header .= '<link href="core/css/fonts/construct-fonts.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
	}
}
if($molds==true){
	$molds_css = '<!-- MOLDS -->'.PHP_EOL;
	if($boards==true){
		if($deconstruct_molds!=true){
			$molds_css .= '<link href="core/molds/boards/construct.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
		} else {
			if($audio_board==true){
				$molds_css .= '<link href="core/molds/boards/audioboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($video_board==true){
				$molds_css .= '<link href="core/molds/boards/videoboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($blog_board==true){
				$molds_css .= '<link href="core/molds/boards/blogboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($data_board==true){
				$molds_css .= '<link href="core/molds/boards/databoard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($photo_board==true){
				$molds_css .= '<link href="core/molds/boards/photoboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($product_board==true){
				$molds_css .= '<link href="core/molds/boards/productboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($slide_board==true){
				$molds_css .= '<link href="core/molds/boards/slideboard/view.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
		}
	}
	if($panels==true){
		// coming in 3.1+
	}
	if($tiles==true){
		if($deconstruct_molds!=true){
			$molds_css .= '<link href="core/molds/tiles/construct.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
		} else {
			if($navigation==true){
				$molds_css .= '<link href="core/molds/tiles/navigation.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($shapes==true){
				$molds_css .= '<link href="core/molds/tiles/shapes.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($multimedia==true){
				$molds_css .= '<link href="core/molds/tiles/multimedia.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
			if($uiux==true){
				$molds_css .= '<link href="core/molds/tiles/uiux.css" type="text/css" rel="stylesheet" media="all"/>'.PHP_EOL;
			}
		}
	}
	$global_header .= $molds_css.PHP_EOL;
}
$global_header .= $themestyle.PHP_EOL;


/* CONSTRUCT GLOBAL FOOTER 
 * =======================
 */
$global_footer = '';
if(($buix==true)||($bfx==true)){
	$global_footer .= '<!-- CORE SCRIPTS -->'.PHP_EOL;
	if($bfx==true){ $global_footer .= '<script src="core/jab/bfx.js"></script>'.PHP_EOL; }
	if($buix==true){ $global_footer .= '<script src="core/jab/buix.js"></script>'.PHP_EOL; }
}
if($jquery==true){
	$global_footer .= '<!-- JQUERY -->'.PHP_EOL;
	$global_footer .= '<script src="core/jab/jquery.'.$jqv.'.js"></script>'.PHP_EOL;
}

// CONSTRUCT PAGELIST (active only)
$pids = array_keys($pages);
$page_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i < count($pages); $i++) {
	$pgtitle = $pids[$i];
    foreach($pages[$pids[$i]] as $pid => $value) {
		if($pid=='pf'){$pagefile=$value;}
		if($pid=='active'){if($value==true){
			$page_list.= '<li><a href="'.$bdir.$pagefile.'">'.$pgtitle.'</a></li>'.PHP_EOL;
		}}
    }
}
$page_list .= '</ul>'.PHP_EOL;

// CONSTRUCT PAGELIST (all)
$page_list_all = '<ul class="none">'.PHP_EOL;
for($i=0; $i < count($pages); $i++) {
	$pgtitle = $pids[$i];
    foreach($pages[$pids[$i]] as $pid => $value) {
		if($pid=='pf'){$pagefile=$value;}
		if($pid=='active'){if(($value==true)||($value==false)){
			$page_list_all.= '<li><a href="'.$bdir.$pagefile.'">'.$pgtitle.'</a></li>'.PHP_EOL;
		}}
    }
}
$page_list_all .= '</ul>'.PHP_EOL;

// CONSTRUCT BLOCKLIST (active only)
$bids = array_keys($blocks);
$block_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i<count($blocks); $i++){
	$blockname = $bids[$i];
	foreach($blocks[$bids[$i]] as $bid => $value){
		if($bid=='active'){if($value==true){
			$block_list.='<li>'.$blockname.'</li>'.PHP_EOL;
		}}
	}
}
$block_list .= '</ul>'.PHP_EOL;

// CONSTRUCT BLOCKLIST (all)
$block_list_all = '<ul class="none">'.PHP_EOL;
for($i=0; $i<count($blocks); $i++){
	$blockname = $bids[$i];
	foreach($blocks[$bids[$i]] as $bid => $value){
		if($bid=='active'){if(($value==true)||($value==false)){
			$block_list_all.='<li>'.$blockname.'</li>'.PHP_EOL;
		}}
	}
}
$block_list_all.='</ul>'.PHP_EOL;

// CONSTRUCT BLOCKTYPELIST
$block_type_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i < count($blocktypes); $i++) {
  $block_type_list.='<li>'.$blocktypes[$i].'</li>'.PHP_EOL;
}
$block_type_list.='</ul>'.PHP_EOL;

// CONSTRUCT LAYOUTLIST
$lids = array_keys($layouts);
$layout_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i<count($layouts); $i++){
	$layoutname = $lids[$i];
	foreach($layouts[$lids[$i]] as $lid => $value){
		if($lid=='w'){if($value!=''){$width=$value;}else{$width='n/a';}}
		if($lid=='h'){if($value!=''){$height=$value;}else{$height='n/a';}}
		if($lid=='c'){$cols=$value;}
		if($lid=='r'){$rows=$value;}
		if($lid=='active'){if($value==true){
			$layout_list.='<li>'.$layoutname.' ['.$cols.' cols x '.$rows.' rows] [width: '.$width.'; height: '.$height.']</li>'.PHP_EOL;
		}}
	}
}
$layout_list .= '</ul>'.PHP_EOL;

// CONSTRUCT GROUPTYPELIST 
$group_type_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i < count($grouptypes); $i++) {
  $group_type_list.='<li>'.$grouptypes[$i].'</li>'.PHP_EOL;
}
$group_type_list.='</ul>'.PHP_EOL;

// CONSTRUCT GROUPLIST
$gids = array_keys($groups);
$group_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i<count($groups); $i++){
	$groupname = ucwords($gids[$i]);
	foreach($groups[$gids[$i]] as $gid => $value){
		if($gid=='type'){
			if($value=='admin'){
				$group_list.='<li>'.$groupname.' ('.$value.')</li>'.PHP_EOL;
			} elseif($value=='editors'){
				$group_list.='<li>'.$groupname.' ('.$value.')</li>'.PHP_EOL;
			} else {
				$group_list.='<li>'.$groupname.' ('.$value.')</li>'.PHP_EOL;
			}
		}
	}
}
$group_list .= '</ul>'.PHP_EOL;

// CONSTRUCT CONTENTTYPELIST
$content_type_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i < count($contenttypes); $i++) {
  $content_type_list.='<li>'.ucwords($contenttypes[$i]).'</li>'.PHP_EOL;
}
$content_type_list.='</ul>'.PHP_EOL;

// CONSTRUCT CONTENT CATLIST
$cids = array_keys($categories);
$cat_list = '<ul class="none">'.PHP_EOL;
for($i=0; $i<count($categories); $i++){
	$catname = ucwords($cids[$i]);
	foreach($categories[$cids[$i]] as $cid => $value){
		if($cid=='active'){if($value==true){
			$cat_list.='<li>'.$catname.'</li>'.PHP_EOL;
		}}
	}
}
$cat_list.='</ul>'.PHP_EOL;
?>