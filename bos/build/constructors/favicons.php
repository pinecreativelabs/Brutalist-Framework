<?php 
// CONSTRUCT FAVICON LIST
$favicon_list = PHP_EOL.'<!-- FAVICONS -->'.PHP_EOL;
if($ficons[0][3]==true){
	if($ficons[0][2]=='ico'){
		$favicon_list .= '<link rel="icon" href="bos/core/files/favicon-'.$ficons[0][1].'.'.$ficons[0][2].'" type="image/x-icon" />'.PHP_EOL;
	} else {
		$favicon_list .= '<link rel="icon" href="bos/core/files/favicon-'.$ficons[0][1].'.'.$ficons[0][2].'" type="image/png" />'.PHP_EOL;
	}
}
if($ficons[1][3]==true){
	if($ficons[1][2]=='ico'){
		$favicon_list .= '<link rel="shortcut icon" href="bos/core/files/favicon-'.$ficons[1][1].'.'.$ficons[1][2].'" type="image/x-icon" />'.PHP_EOL;
	} else {
		$favicon_list .= '<link rel="shortcut icon" href="bos/core/files/favicon-'.$ficons[1][1].'.'.$ficons[1][2].'" type="image/png" />'.PHP_EOL;
	}
}
if($ficons[2][3]==true){
	if($ficons[2][2]=='ico'){
		$favicon_list .= '<link rel="apple-touch-icon" href="bos/core/files/favicon-'.$ficons[2][1].'.'.$ficons[2][2].'" type="image/x-icon" />'.PHP_EOL;
	} else {
		$favicon_list .= '<link rel="apple-touch-icon" href="bos/core/files/favicon-'.$ficons[2][1].'.'.$ficons[2][2].'" type="image/png" />'.PHP_EOL;
	}
}
?>