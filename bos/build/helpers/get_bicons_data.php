<?php 
// bIcons
$bicons_data = simplexml_load_file($droot_bos.'/build/data/xml/bicons.xml')or die("Error: Cannot create object");
if($bicons_data->bicon->count()<=0){$bicon_count='NO BICONS';}else{ 
	
	$bicon_count = $bicons_data->bicon->count();
	
	// standard list of all bicons
	$bicon_list='<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		$bicon_list.='<li><i class="bi bi-'.$bicon.'"></i> '.$bicon;
		if($bicon['alt']!=''){$bicon_list.=' / '.$bicon['alt'];}
		$bicon_list.='</li>';
	}
	$bicon_list.='</ul>'.PHP_EOL;
	
	// instant search list (all bicons)
	$bicon_searchlist='<ul class="bicon-search-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		$bicon_searchlist.='<li class="bicon"><i class="bi bi-'.$bicon.' bi-3x"></i> '.$bicon;
		if($bicon['alt']!=''){$bicon_searchlist.=' <span class="is-hidden">'.$bicon['alt'].'</span>';}
		$bicon_searchlist.=' <span class="is-hidden">'.$bicon['cat'].'</span></li>';
	}
	$bicon_searchlist.='</ul>'.PHP_EOL;
	
	// animals
	$bicon_animals = '<h4 class="bicon-cat">Animals</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='animals'){
			$bicon_animals.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_animals.=' / '.$bicon['alt'];}
			$bicon_animals.'</li>';
		}
	}
	$bicon_animals.='</ul>'.PHP_EOL;
	// astrology
	$bicon_astrology = '<h4 class="bicon-cat">Astrology</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='astrology'){
			$bicon_astrology.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_astrology.=' / '.$bicon['alt'];}
			$bicon_astrology.'</li>';
		}
	}
	$bicon_astrology.='</ul>'.PHP_EOL;
	// currency
	$bicon_currency = '<h4 class="bicon-cat">Currency</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='currency'){
			$bicon_currency.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_currency.=' / '.$bicon['alt'];}
			$bicon_currency.'</li>';
		}
	}
	$bicon_currency.='</ul>'.PHP_EOL;
	// danger
	$bicon_danger = '<h4 class="bicon-cat">Danger Zone</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='danger'){
			$bicon_danger.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_danger.=' / '.$bicon['alt'];}
			$bicon_danger.'</li>';
		}
	}
	$bicon_danger.='</ul>'.PHP_EOL;
	// directional
	$bicon_directional = '<h4 class="bicon-cat">Directional</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='directional'){
			$bicon_directional.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_directional.=' / '.$bicon['alt'];}
			$bicon_directional.'</li>';
		}
	}
	$bicon_directional.='</ul>'.PHP_EOL;
	// emoticons
	$bicon_emoticons = '<h4 class="bicon-cat">Emoticons</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='emoticons'){
			$bicon_emoticons.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_emoticons.=' / '.$bicon['alt'];}
			$bicon_emoticons.'</li>';
		}
	}
	$bicon_emoticons.='</ul>'.PHP_EOL;
	// food
	$bicon_food = '<h4 class="bicon-cat">Food</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='food'){
			$bicon_food.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_food.=' / '.$bicon['alt'];}
			$bicon_food.'</li>';
		}
	}
	$bicon_food.='</ul>'.PHP_EOL;
	// freakshow
	$bicon_freakshow = '<h4 class="bicon-cat">Freakshow</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='freaks'){
			$bicon_freakshow.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_freakshow.=' / '.$bicon['alt'];}
			$bicon_freakshow.'</li>';
		}
	}
	$bicon_freakshow.='</ul>'.PHP_EOL;
	// layout
	$bicon_layout = '<h4 class="bicon-cat">Layout</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='layout'){
			$bicon_layout.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_layout.=' / '.$bicon['alt'];}
			$bicon_layout.'</li>';
		}
	}
	$bicon_layout.='</ul>'.PHP_EOL;
	// nature
	$bicon_nature = '<h4 class="bicon-cat">Nature &amp; Outdoors</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='nature'){
			$bicon_nature.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_nature.=' / '.$bicon['alt'];}
			$bicon_nature.'</li>';
		}
	}
	$bicon_nature.='</ul>'.PHP_EOL;
	// objects
	$bicon_objects = '<h4 class="bicon-cat">Objects</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='objects'){
			$bicon_objects.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_objects.=' / '.$bicon['alt'];}
			$bicon_objects.'</li>';
		}
	}
	$bicon_objects.='</ul>'.PHP_EOL;
	// places
	$bicon_places = '<h4 class="bicon-cat">Places</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='places'){
			$bicon_places.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_places.=' / '.$bicon['alt'];}
			$bicon_places.'</li>';
		}
	}
	$bicon_places.='</ul>'.PHP_EOL;
	// religion-phil
	$bicon_religion = '<h4 class="bicon-cat">Religion &amp; Philosophy</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='religion'){
			$bicon_religion.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_religion.=' / '.$bicon['alt'];}
			$bicon_religion.'</li>';
		}
	}
	$bicon_religion.='</ul>'.PHP_EOL;
	// sports & rec
	$bicon_sportsrec = '<h4 class="bicon-cat">Sports &amp; Recreation</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='sports-rec'){
			$bicon_sportsrec.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_sportsrec.=' / '.$bicon['alt'];}
			$bicon_sportsrec.'</li>';
		}
	}
	$bicon_sportsrec.='</ul>'.PHP_EOL;
	// symbols & other
	$bicon_symbols = '<h4 class="bicon-cat">Symbols &amp; Other</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='other'){
			$bicon_symbols.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_symbols.=' / '.$bicon['alt'];}
			$bicon_symbols.'</li>';
		}
	}
	$bicon_symbols.='</ul>'.PHP_EOL;
	// ui actions
	$bicon_uiactions = '<h4 class="bicon-cat">UI Actions</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='actions'){
			$bicon_uiactions.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_uiactions.=' / '.$bicon['alt'];}
			$bicon_uiactions.'</li>';
		}
	}
	$bicon_uiactions.='</ul>'.PHP_EOL;
	// ui multimedia (a/v)
	$bicon_uiav = '<h4 class="bicon-cat">UI Audio / Video</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='media'){
			$bicon_uiav.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_uiav.=' / '.$bicon['alt'];}
			$bicon_uiav.'</li>';
		}
	}
	$bicon_uiav.='</ul>'.PHP_EOL;
	// ui basic
	$bicon_uibasic = '<h4 class="bicon-cat">UI (Basic)</h4>'.PHP_EOL.'<ul class="bicon-list">'.PHP_EOL;
	foreach($bicons_data->bicon as $bicon){
		if($bicon['cat']=='ui'){
			$bicon_uibasic.='<li><i class="bi bi-'.$bicon.' bi-2x"></i> '.$bicon;
			if($bicon['alt']!=''){$bicon_uibasic.=' / '.$bicon['alt'];}
			$bicon_uibasic.'</li>';
		}
	}
	$bicon_uibasic.='</ul>'.PHP_EOL;
}
?>