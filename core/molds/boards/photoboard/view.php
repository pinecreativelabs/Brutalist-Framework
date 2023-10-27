<?php 
// GALLERY LITE (csv-based)
if($cropped==true){
	$gallery_lite = '<div class="gallery-lite-wrap '.$lg_thumb_size.'-size cropped">'.PHP_EOL;
} else {
	$gallery_lite = '<div class="gallery-lite-wrap '.$lg_thumb_size.'-size">'.PHP_EOL;
}
$row = 0;
$skip_row_number = array("1");
if (($lg_handle = fopen($get_lg_data, "r")) !== FALSE) {
	while (($lgdata = fgetcsv($lg_handle, 1000, ",")) !== FALSE) {
		$row++;
		$imgid = 'img-'.$row;
		if (in_array($row, $skip_row_number)){continue;} else {
			$gallery_lite .= '<div class="figure">'.PHP_EOL;
			$gallery_lite .= '<a href="#'.$imgid.'" data-modal-open><img src="'.$lgdata[2].'" alt="'.$imgid.'" /></a>'.PHP_EOL;
			$gallery_lite .= '</div>'.PHP_EOL;
			$gallery_lite .= '<div id="'.$imgid.'" style="display: none;">'.PHP_EOL;
			$gallery_lite .= '<div class="fullview" style="width: 80vw; max-width: 768px;"><img src="'.$lgdata[2].'" alt="'.$imgid.'" class="responsive" />'.PHP_EOL;
			$gallery_lite .= '<p class="caption"><span class="title">'.$lgdata[0].'</span><br /><span class="description">'.$lgdata[1].'</span></p>'.PHP_EOL;
			$gallery_lite .= '</div></div>'.PHP_EOL;
		}
	} fclose($lg_handle);	
}
$gallery_lite .= '</div>'.PHP_EOL;

// GALLERY PRO (xml-based)
?>