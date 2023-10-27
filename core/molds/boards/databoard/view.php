<?php 
// CSV TABLE
$csv_table = '<table class="responsive datatable">'.PHP_EOL;
if (($csv_handle = fopen($get_csv_data, "r")) !== FALSE) {
	while (($row = fgetcsv($csv_handle)) !== false) {
		$csv_table .= '<tr>';
		foreach ($row as $col) { $csv_table .='<td>'.$col.'</td>'; }
		$csv_table .= '</tr>'.PHP_EOL;
	} fclose($csv_handle);	
}
$csv_table .= '</table>'.PHP_EOL;
?>