<?php 
// ProductBoard LITE (csv-based)
$productboard_lite = '<div class="productboard-lite">'.PHP_EOL;
$row = 0;
$skip_row_number = array("1");
if (($pblite_handle = fopen($get_pblite_data, "r")) !== FALSE) {
	while (($pbldata = fgetcsv($pblite_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			$pid = $row.'-'.$pbldata[0];
			if($pbldata[1]=='true'){$active=true;}else{$active=false;}
			$title = $pbldata[2];
			$price = $cur.$pbldata[3];
			if($pbldata[4]=='true'){$sale=true;} else {$sale=false;}
			$description = $pbldata[5];
			$img = $pbldata[6];
			$link = $pbldata[7];
			
			$product = '';
			if($active==true){
				$product .= '<div class="product" id="'.$pid.'">'.PHP_EOL.'<div class="cover">'.PHP_EOL;
				if((!empty($pbldata[6]))||($pbldata[6]!='')){
					$product .= '<img src="'.$img.'" alt="'.$title.'" class="xlarge-thumb" />'.PHP_EOL;
				} 
				$product .= '<h4>'.$title.'</h4>'.PHP_EOL.'</div>'.PHP_EOL;
				if($sale==true){
					$product .= '<div class="pricetag"><p class="sale">'.$sale_text.'</p><p class="price">'.$price.'</p></div>';
				} else {
					$product .= '<div class="pricetag"><p class="price">'.$price.'</p></div>';
				}
				$product .= PHP_EOL.'<p class="description">'.$description.'</p>'.PHP_EOL;
				if((!empty($link))||($link!='')){
					$product .= '<a href="'.$link.'" class="linkbtn">'.$link_text.'</a>';
				}
				$product .= '</div>'.PHP_EOL;
			}
			$productboard_lite .= $product;
		}
	} fclose($pblite_handle);	
}
$productboard_lite .= '</div>'.PHP_EOL;

// ProductBoard PRO (xml-based)
?>