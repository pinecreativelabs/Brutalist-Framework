<?php 
// SLIDEBOARD
if(($loop==false)&&($autoplay==false)&&($vertical==false)){
	$sbtype = '-noloop';
} elseif(($loop==false)&&($autoplay==true)&&($vertical==false)){
	$sbtype = '-autoplay';
} elseif((($loop==true)||($loop==false))&&($autoplay==true)&&($vertical==true)){
	$sbtype = '-vertical-autoplay';
} elseif(($loop==false)&&($autoplay==false)&&($vertical==true)){
	$sbtype = '-vertical';
} elseif(($loop==true)&&($autoplay==false)&&($vertical==true)){
	$sbtype = '-vertical-noloop';
} else { $sbtype = '';}

$slideboard = '<div class="presenter'.$sbtype.' '.$sb_height.'-screen '.$sb_skin.'">'.PHP_EOL;
$slideboard .= '<a href="#" class="slide-prev">&laquo;</a>'.PHP_EOL;
$slideboard .= '<div class="slides">'.PHP_EOL;

$sbfile = simplexml_load_file($get_sb_data);
foreach($sbfile->slide as $slide){
	if($slide['active']=='true'){
	$slideboard .= '<div class="slide '.$slide['classes'].'"><div class="slide-inner">'.PHP_EOL;
	$slideboard .= '<div class="slide-content"><h4 class="title '.$slide->title['classes'].'">'.$slide->title.'</h4>'.PHP_EOL;
	$slideboard .= '<div class="text '.$slide->text['classes'].'">'.$slide->text.'</div>'.PHP_EOL;
	if($slide->linkto['url']!=''){
		$slideboard .= '<a href="'.$slide->linkto['url'].'" target="'.$slide->linkto['target'].'" class="cta">'.$slide->linkto.'</a>'.PHP_EOL;
	}
	$slideboard .= '</div>'.PHP_EOL;
	if($slide->figure['src']!=''){
		$slideboard .= '<figure><img src="'.$slide->figure['src'].'" alt="'.$slide->figure.'" class="'.$slide->figure['classes'].'" /></figure>'.PHP_EOL;
	}
	$slideboard .= '</div></div>'.PHP_EOL;
	}
}
$slideboard .= '</div>'.PHP_EOL;
$slideboard .= '<a href="#" class="slide-next">&raquo;</a>'.PHP_EOL.'</div>'.PHP_EOL;

?>