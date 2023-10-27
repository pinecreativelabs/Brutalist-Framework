<? 
/* BRAD: 
 * Build Renderable Application Data
 * (BETA)
 */

// country selectors
//https://www.nationsonline.org/oneworld/country_code_list.htm#U
$get_ccc_data = $bdir.'core/data/csv/countries.csv';
$countries_table = '<table>'.PHP_EOL.'<tr><th>Country</th><th>Alpha 2</th><th>Currency</th><th>UN Code</th></tr>'.PHP_EOL;
$country_select = '<select name="country">'.PHP_EOL;
$country_select_cur = '<select name="country currency">'.PHP_EOL;
$country_select_code = '<select name="country code">'.PHP_EOL;
$country_select_uncode = '<select name="country uncode">'.PHP_EOL;
$row=0; 
$skip_row_number = array("1");
if (($ccc_handle = fopen($get_ccc_data, "r")) !== FALSE) {
	while (($cccdata = fgetcsv($ccc_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			$countries_table.='<tr><td>'.$cccdata[0].'</td><td>'.$cccdata[1].'</td><td>'.$cccdata[3].'</td><td>'.$cccdata[4].'</td></tr>';
			if($user_country==$cccdata[0]){
				$country_select.='<option value="'.$cccdata[0].'" selected>'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur.='<option value="'.$cccdata[3].'" selected>'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode.='<option value="'.$cccdata[4].'" selected>'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}else{
				$country_select.='<option value="'.$cccdata[0].'">'.$cccdata[0].'</option>'.PHP_EOL;
				$country_select_cur.='<option value="'.$cccdata[3].'">'.$cccdata[0].' ('.$cccdata[3].')</option>'.PHP_EOL;
				$country_select_uncode.='<option value="'.$cccdata[4].'">'.$cccdata[0].' ('.$cccdata[4].')</option>'.PHP_EOL;
			}
			if($user_cc==$cccdata[1]){
				$country_select_code.='<option value="'.$cccdata[1].'" selected>'.$cccdata[0].' ('.$cccdata[1].')</option>'.PHP_EOL;
			}else{$country_select_code.='<option value="'.$cccdata[1].'">'.$cccdata[0].' ('.$cccdata[1].')</option>'.PHP_EOL;}
		}
	} fclose($ccc_handle);	
}
$countries_table .= '</table>'.PHP_EOL;
$country_select .= '</select>'.PHP_EOL;
$country_select_cur .= '</select>'.PHP_EOL;
$country_select_code .= '</select>'.PHP_EOL;
$country_select_uncode .= '</select>'.PHP_EOL;

// US state selectors
$get_states_data = $bdir.'core/data/csv/states.csv';
$states_table = '<table>'.PHP_EOL.'<tr><th>State</th><th>Abbr.</th></tr>'.PHP_EOL;
$state_select = '<select name="state">'.PHP_EOL;
$row=0; 
$skip_row_number = array("1");
if (($states_handle = fopen($get_states_data, "r")) !== FALSE) {
	while (($statesdata = fgetcsv($states_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			$states_table.='<tr><td>'.$statesdata[0].'</td><td>'.$statesdata[1].'</td></tr>'.PHP_EOL;
			if($user_rc==$statesdata[1]){
				$state_select.='<option value="'.$statesdata[1].'" selected>'.$statesdata[0].'</option>'.PHP_EOL;
			}else{$state_select.='<option value="'.$statesdata[1].'">'.$statesdata[0].'</option>'.PHP_EOL;}
		}
	} fclose($states_handle);	
}
$states_table.='</table>'.PHP_EOL;
$state_select.='</select>'.PHP_EOL;

// Canadian Province / Territory selectors
$get_province_data = $bdir.'core/data/csv/ca_provinces.csv';
$province_select = '<select name="province">'.PHP_EOL;
$provinces_table = '<table><tr><th>Province</th><th>Alpha Code</th><th>Geo Code</th><th>Region</th></tr>'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($provs_handle = fopen($get_province_data, "r")) !== FALSE) {
	while (($provsdata = fgetcsv($provs_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($user_rc==$provsdata[1]){
				$province_select.='<option value="'.$provsdata[1].'" selected>'.$provsdata[0].'</option>'.PHP_EOL;
			}else{$province_select.='<option value="'.$provsdata[1].'">'.$provsdata[0].'</option>'.PHP_EOL;}
			$provinces_table.='<tr><td>'.$provsdata[0].'</td><td>'.$provsdata[1].'</td><td>'.$provsdata[2].'</td><td>'.$provsdata[3].'</td></tr>'.PHP_EOL;
		}
	} fclose($provs_handle);	
}
$province_select.='</select>'.PHP_EOL;
$provinces_table.='</table>'.PHP_EOL;

// Timezones
$get_tz_data = $bdir.'core/data/csv/timezones.csv';
$timezone_select = '<select name="timezone">'.PHP_EOL;
$timezone_select_offset = '<select name="timezone">'.PHP_EOL;
$timezone_table = '<table><tr><th>Timezone</th><th>UTC offset</th><th>Name</th></tr>'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($tz_handle = fopen($get_tz_data, "r")) !== FALSE) {
	while (($tzdata = fgetcsv($tz_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if($user_tz==$tzdata[0]){
				$timezone_select.='<option value="'.$tzdata[0].'" selected>'.$tzdata[0].'</option>'.PHP_EOL;
				$timezone_select_offset.='<option value="'.$tzdata[1].'" selected>'.$tzdata[0].' ('.$tzdata[1].')</option>'.PHP_EOL;
			}else{
				$timezone_select.='<option value="'.$tzdata[0].'">'.$tzdata[0].'</option>'.PHP_EOL;
				$timezone_select_offset.='<option value="'.$tzdata[1].'">'.$tzdata[0].' ('.$tzdata[1].')</option>'.PHP_EOL;
			}
			$timezone_table.='<tr><td>'.$tzdata[0].'</td><td>'.$tzdata[1].'</td><td>'.$tzdata[2].'</td></tr>'.PHP_EOL;
		}
	} fclose($tz_handle);	
}
$timezone_select.='</select>'.PHP_EOL;
$timezone_select_offset.='</select>'.PHP_EOL;
$timezone_table.='</table>'.PHP_EOL;

// Languages
$get_lang_data = $bdir.'core/data/csv/language-codes.csv';
$language_select = '<select name="language">'.PHP_EOL;
$language_table = '<table><tr><th>alpha3-b</th><th>alpha2</th><th>Language</th></tr>'.PHP_EOL;
$row=0;
$skip_row_number = array("1");
if (($lang_handle = fopen($get_lang_data, "r")) !== FALSE) {
	while (($langdata = fgetcsv($lang_handle, 1000, ",")) !== FALSE) {
		$row++;
		if (in_array($row, $skip_row_number)){continue;} else {
			if(strtolower($browser_lang)==$langdata[1]){
				$language_select.='<option value="'.$langdata[1].'" selected>'.$langdata[2].'</option>'.PHP_EOL;
			}else{
				$language_select.='<option value="'.$langdata[1].'">'.$langdata[2].'</option>'.PHP_EOL;
			}
			$language_table.='<tr><td>'.$langdata[0].'</td><td>'.$langdata[1].'</td><td>'.$langdata[2].'</td></tr>'.PHP_EOL;
		}
	} fclose($lang_handle);	
}
$language_select.='</select>'.PHP_EOL;
$language_table.='</table>'.PHP_EOL;


?>