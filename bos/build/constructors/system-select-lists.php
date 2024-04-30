<?php 
// CONSTRUCT FONTLIST & Font Selector
$fontids = array_keys($fonts);
$fontlist = '<ul class="font-list">'.PHP_EOL;
$font_selector = '<select name="font">'.PHP_EOL;
for($i=0; $i < count($fonts); $i++) {
	$fontname = $fontids[$i];
    foreach($fonts[$fontids[$i]] as $fontid => $value) {
		if($fontid=='fontclass'){$fontclass=$value;}
		if($fontid=='active'){if($value==true){
			$fontlist.= '<li class="'.$fontclass.'">'.$fontname.'</li>'.PHP_EOL;
			$font_selector.='<option class="'.$fontclass.'" value="'.$fontclass.'">'.$fontname.'</option>'.PHP_EOL;
		}}
    }
}
$fontlist .= '</ul>'.PHP_EOL;
$font_selector .= '</select>'.PHP_EOL;

// CONSTRUCT BLOCKTYPELIST
$block_type_list = '<ul class="blocktype-list">'.PHP_EOL;
$block_type_selector.='<select name="block-type">'.PHP_EOL;
for($i=0; $i < count($blocktypes); $i++) {
  $block_type_list.='<li>'.$blocktypes[$i].'</li>'.PHP_EOL;
  $block_type_selector.='<option value="'.$blocktypes[$i].'">'.$blocktypes[$i].'</option>'.PHP_EOL;
}
$block_type_list.='</ul>'.PHP_EOL;
$block_type_selector.='</select>'.PHP_EOL;

// CONSTRUCT CONTENTTYPELIST
$content_type_list = '<ul class="content-type-list">'.PHP_EOL;
$content_type_selector = '<select name="content-type">'.PHP_EOL;
for($i=0; $i < count($contenttypes); $i++) {
  $content_type_list.='<li>'.ucwords($contenttypes[$i]).'</li>'.PHP_EOL;
  $content_type_selector .='<option value="'.$contenttypes[$i].'">'.ucwords($contenttypes[$i]).'</option>'.PHP_EOL;
}
$content_type_list.='</ul>'.PHP_EOL;
$content_type_selector.='</select>'.PHP_EOL;

// CONSTRUCT STREAM TYPE LIST
$stream_type_list = '<ul class="stream-type-list">'.PHP_EOL;
$stream_type_selector = '<select name="stream-type">'.PHP_EOL;
for($i=0; $i < count($stream_types); $i++) {
  $stream_type_list.='<li>'.ucwords($stream_types[$i]).'</li>'.PHP_EOL;
  $stream_type_selector .='<option value="'.$stream_types[$i].'">'.ucwords($stream_types[$i]).'</option>'.PHP_EOL;
}
$stream_type_list.='</ul>'.PHP_EOL;
$stream_type_selector.='</select>'.PHP_EOL;

// CONSTRUCT CONTENT GROUP TYPE LIST
$cids = array_keys($content_group_types);
$content_group_type_list = '<ul class="category-list">'.PHP_EOL;
$content_group_type_selector = '<select name="content-group-type">'.PHP_EOL;
for($i=0; $i<count($content_group_types); $i++){
	$cgt_name = ucwords($cids[$i]);
	foreach($content_group_types[$cids[$i]] as $cid => $value){
		if($cid=='active'){if($value==true){
			$content_group_type_list.='<li>'.$cgt_name.'</li>'.PHP_EOL;
			$content_group_type_selector.='<option value="'.$cgt_name.'">'.$cgt_name.'</option>'.PHP_EOL;
		}}
	}
}
$content_group_type_list.='</ul>'.PHP_EOL;
$content_group_type_selector.='</select>'.PHP_EOL;

// CONSTRUCT GROUPTYPELIST 
$gtids = array_keys($grouptypes);
$group_type_list = '<ul class="grouptype-list">'.PHP_EOL;
$group_type_selector = '<select name="group-type">'.PHP_EOL;
for($i=0; $i<count($grouptypes); $i++){
	$grouptypename = $gtids[$i];
	foreach($grouptypes[$gtids[$i]] as $gtid => $value){
		if($gtid=='permissions'){$permissions=$value;}
		if($gtid=='accesslevel'){if($value!=3){
			$group_type_list.='<li>'.$grouptypename.' ('.$permissions.')</li>'.PHP_EOL;
			$group_type_selector.='<option value="'.$grouptypename.'">'.$grouptypename.' ('.$permissions.')</option>'.PHP_EOL;
		}}
	}
}
$group_type_list.='</ul>'.PHP_EOL;
$group_type_selector.='</select>'.PHP_EOL;

// CONSTRUCT US TIMEZONE SELECTOR
$ustzids = array_keys($us_timezones);
$us_tz_selector = '<select name="us-timezone">'.PHP_EOL;
$us_tz_offset_selector = '<select name="us-timezone">'.PHP_EOL;
for($i=0; $i < count($us_timezones); $i++) {
	$tz_title = $ustzids[$i];
    foreach($us_timezones[$ustzids[$i]] as $ustzid => $value) {
		if($ustzid=='offset'){$offset=$value;}
		if($ustzid=='offset'){if(!empty($value)){
			$us_tz_selector.='<option value="'.$tz_title.'">'.$tz_title.'</option>'.PHP_EOL;
			$us_tz_offset_selector.='<option value="'.$offset.'">'.$tz_title.' ('.$offset.')</option>'.PHP_EOL;
		}}
    }
}
$us_tz_selector .= '</select>'.PHP_EOL;
$us_tz_offset_selector .= '</select>'.PHP_EOL;
?>