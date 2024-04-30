<?php /* SELECTOR INPUTS */

// country selectors
if(($module==true)&&(isset($module))){
	$get_ccc_data = realpath(__DIR__.'/../../..').'/bos/build/data/csv/countries.csv';
} elseif((!isset($module))||($module==false)) { $get_ccc_data = 'bos/build/data/csv/countries.csv';}else{}
$country_select = '<select name="country">'.PHP_EOL;
$country_select_user = '<select name="country">'.PHP_EOL;
$country_select_cur = '<select name="country-currency">'.PHP_EOL;
$country_select_cur_user = '<select name="country-currency">'.PHP_EOL;
$country_select_code = '<select name="country-code">'.PHP_EOL;
$country_select_code_user = '<select name="country-code">'.PHP_EOL;
$country_select_uncode = '<select name="country-uncode">'.PHP_EOL;
$country_select_uncode_user = '<select name="country-uncode">'.PHP_EOL;
$row=0; 
$skip_row_number = array("1");
if (($ccc_handle = fopen($get_ccc_data, "r")) !== FALSE) {
	while (($cccdata = fgetcsv($ccc_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($country==$cccdata[0]){
				$country_select.='<option value="'.$cccdata[0].'" selected>'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur.='<option value="'.$cccdata[3].'" selected>'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode.='<option value="'.$cccdata[4].'" selected>'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}else{
				$country_select.='<option value="'.$cccdata[0].'">'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur.='<option value="'.$cccdata[3].'">'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode.='<option value="'.$cccdata[4].'">'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}
			if($user_country==$cccdata[0]){
				$country_select_user.='<option value="'.$cccdata[0].'" selected>'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur_user.='<option value="'.$cccdata[3].'" selected>'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode_user.='<option value="'.$cccdata[4].'" selected>'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}else{
				$country_select_user.='<option value="'.$cccdata[0].'">'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur_user.='<option value="'.$cccdata[3].'">'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode_user.='<option value="'.$cccdata[4].'">'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}
			if($user_cc==$cccdata[1]){
				$country_select_code.='<option value="'.$cccdata[1].'" selected>'.$cccdata[0].' ('.$cccdata[1].')</option>'.PHP_EOL;
			}else{$country_select_code.='<option value="'.$cccdata[1].'">'.$cccdata[0].' ('.$cccdata[1].')</option>'.PHP_EOL;}
		}
	} fclose($ccc_handle);	
}
$country_select .= '</select>'.PHP_EOL;
$country_select_user .= '</select>'.PHP_EOL;
$country_select_cur .= '</select>'.PHP_EOL;
$country_select_cur_user .= '</select>'.PHP_EOL;
$country_select_code .= '</select>'.PHP_EOL;
$country_select_code_user .= '</select>'.PHP_EOL;
$country_select_uncode .= '</select>'.PHP_EOL;
$country_select_uncode_user .= '</select>'.PHP_EOL;

// US state selectors
if(($module==true)&&(isset($module))){
	$get_states_data = realpath(__DIR__.'/../../..').'/bos/build/data/csv/states.csv';
} elseif((!isset($module))||($module==false)) { $get_states_data = 'bos/build/data/csv/states.csv';}else{}
$state_select = '<select name="state">'.PHP_EOL;
$state_tz_select = '<select name="timezone">'.PHP_EOL;
$row=0; 
$skip_row_number = array("1");
if (($states_handle = fopen($get_states_data, "r")) !== FALSE) {
	while (($statesdata = fgetcsv($states_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($user_rc==$statesdata[1]){
				$state_select.='<option value="'.$statesdata[1].'" selected>'.$statesdata[0].'</option>'.PHP_EOL;
				$state_tz_select.='<option value="'.$statesdata[2].'" selected>'.$statesdata[0].' ('.$statesdata[2].')</option>'.PHP_EOL;
			}else{
				$state_select.='<option value="'.$statesdata[1].'">'.$statesdata[0].'</option>'.PHP_EOL;
				$state_tz_select.='<option value="'.$statesdata[2].'">'.$statesdata[0].' ('.$statesdata[2].')</option>'.PHP_EOL;
			}
		}
	} fclose($states_handle);	
}
$state_select.='</select>'.PHP_EOL;
$state_tz_select.='</select>'.PHP_EOL;

// Canadian Province / Territory selectors
if(($module==true)&&(isset($module))){
	$get_province_data = realpath(__DIR__.'/../../..').'/bos/build/data/csv/ca_provinces.csv';
} elseif((!isset($module))||($module==false)) { $get_province_data = 'bos/build/data/csv/ca_provinces.csv';}else{}
$province_select = '<select name="province">'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($provs_handle = fopen($get_province_data, "r")) !== FALSE) {
	while (($provsdata = fgetcsv($provs_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($user_rc==$provsdata[1]){
				$province_select.='<option value="'.$provsdata[1].'" selected>'.$provsdata[0].'</option>'.PHP_EOL;
			}else{$province_select.='<option value="'.$provsdata[1].'">'.$provsdata[0].'</option>'.PHP_EOL;}
		}
	} fclose($provs_handle);	
}
$province_select.='</select>'.PHP_EOL;

// Timezones
if(($module==true)&&(isset($module))){
	$get_tz_data = realpath(__DIR__.'/../../..').'/bos/build/data/csv/timezones.csv';
} elseif((!isset($module))||($module==false)) { $get_tz_data = 'bos/build/data/csv/timezones.csv';}else{}
$timezone_select = '<select name="timezone">'.PHP_EOL;
$timezone_select_user = '<select name="timezone">'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($tz_handle = fopen($get_tz_data, "r")) !== FALSE) {
	while (($tzdata = fgetcsv($tz_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($user_tz==$tzdata[0]){
				$timezone_select_user.='<option value="'.$tzdata[0].'" selected>'.$tzdata[0].'</option>'.PHP_EOL;
			}else{$timezone_select_user.='<option value="'.$tzdata[0].'">'.$tzdata[0].'</option>'.PHP_EOL;}
			if($timezone==$tzdata[0]){
				$timezone_select.='<option value="'.$tzdata[0].'" selected>'.$tzdata[0].'</option>'.PHP_EOL;
			}else{$timezone_select.='<option value="'.$tzdata[0].'">'.$tzdata[0].'</option>'.PHP_EOL;}
		}
	} fclose($tz_handle);	
}
$timezone_select.='</select>'.PHP_EOL;
$timezone_select_user.='</select>'.PHP_EOL;

// Languages
if(($module==true)&&(isset($module))){
	$get_lang_data = realpath(__DIR__.'/../../..').'/bos/build/data/csv/language-codes.csv';
} elseif((!isset($module))||($module==false)) { $get_lang_data = 'bos/build/data/csv/language-codes.csv';}else{}
$language_select = '<select name="language">'.PHP_EOL;
$language_select_user = '<select name="language">'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($lang_handle = fopen($get_lang_data, "r")) !== FALSE) {
	while (($langdata = fgetcsv($lang_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if(strtolower($browser_lang)==$langdata[1]){
				$language_select_user.='<option value="'.$langdata[1].'" selected>'.$langdata[2].'</option>'.PHP_EOL;
			}else{
				$language_select_user.='<option value="'.$langdata[1].'">'.$langdata[2].'</option>'.PHP_EOL;
			}
			if($language==$langdata[1]){
				$language_select.='<option value="'.$langdata[1].'" selected>'.$langdata[2].'</option>'.PHP_EOL;
			}else{
				$language_select.='<option value="'.$langdata[1].'">'.$langdata[2].'</option>'.PHP_EOL;
			}
		}
	} fclose($lang_handle);	
}
$language_select.='</select>'.PHP_EOL;
$language_select_user.='</select>'.PHP_EOL;

?>