<? 
// require core script
require_once('core.php');

// select tertiary (t) value as custom color from Nude theme array
$ccolor = $themes['Nude']['t'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $global_header;?>
<style>
.swatch {display: inline-block; border: 3px solid #333; padding: 0; margin: 0; height: 32px;}
.swatch div {border: 1px solid #fff; display: inline-block; width: 30px; height: 30px; padding: 0; margin: 0; }
</style>

</head>
<body>
<? 
echo '<p><strong>$browser_lang</strong>: '.$browser_lang.'</p>'.PHP_EOL;
echo '<h3>Random Strings &amp; Numbers</h3>'.PHP_EOL;
echo '<p><strong>Random String:</strong> '.getRandomString($rsl).'</p>'.PHP_EOL;
echo '<p>Random number selected between '.$rmin.' (<b><em>$rmin</em></b>) and '.$rmax.' (<b><em>$rmax</em></b>): <strong>'.$rand.'</strong></p>'.PHP_EOL.'<hr />'.PHP_EOL;
// URLs
echo '<h3>URLs</h3>'.PHP_EOL;
echo '<p><strong>$droot</strong>: '.$droot.'<br /><strong>$cwdir</strong>: '.$cwdir;
echo '<br /><strong>$cdir</strong>: '.$cdir.'<br /><strong>$cfile</strong>: '.$cfile.'<br /><strong>$https</strong>: '.$https.'<br />';
echo '<strong>$dir</strong>: '.$dir.'<br /><strong>$pdir</strong>: '.$pdir.'<br /><strong>$gdir</strong>: '.$gdir.'<br /><strong>$ggdir</strong>: '.$ggdir;
echo '<br /><strong>$rurl</strong>: '.$rurl.'<br /><strong>$host</strong>: '.$host.'<br /><strong>$burl</strong>: '.$burl.'<br />';
echo '<strong>$bdir</strong>: '.$bdir.'<br /><strong>$url</strong>: '.$url.'<br /><strong>$rpath</strong>: '.$rpath.'</p><hr />'.PHP_EOL;
// FILE COUNTERS
echo '<h3>FILE COUNTS</h3>'.PHP_EOL;
echo '<p><strong>app/files/</strong> ('.$files_fc.' files)<br /><strong>app/files/images/</strong> ('.$images_fc.' files)<br /><strong>app/files/audio/</strong> ('.$audio_fc.' files)<br />';
echo '<strong>app/files/video/</strong> ('.$video_fc.' files)<br /><strong>app/files/docs/</strong> ('.$docs_fc.' files)<br />';
echo '<strong>TOTAL FILES:</strong> '.$files_total.'<br /><br />';
echo '<strong>app/data/</strong> ('.$data_fc.' files)<br /><strong>app/data/csv/</strong> ('.$csv_fc.' files)<br /><strong>app/data/xml/</strong> ('.$xml_fc.' files)<br />';
echo '<strong>app/data/sql/</strong> ('.$sql_fc.' files)<br /><strong>app/data/json/</strong> ('.$json_fc.' files)<br />';
echo '<strong>TOTAL DATA FILES:</strong> '.$data_total.'<br /><br /><strong>TOTAL FILE COUNT:</strong> '.$total_fc.'</p>';
// APP URLs
echo '<hr />'.PHP_EOL.'<h3>App File URLs</h3>'.PHP_EOL;
echo '<p><b>$app_files:</b><br /><small>'.$app_files.'</small><br /><b>$app_audio:</b><br /><small>'.$app_audio.'</small><br />';
echo '<b>$app_video:</b><br /><small>'.$app_video.'</small><br /><b>$app_images:</b><br /><small>'.$app_images.'</small><br />';
echo '<b>$app_docs:</b><br /><small>'.$app_docs.'</small><br /><b>$app_data:</b><br /><small>'.$app_data.'</small><br />';
echo '<b>$app_csv:</b><br /><small>'.$app_csv.'</small><br />';
echo '<b>$app_json:</b><br /><small>'.$app_json.'</small><br /><b>$app_sql:</b><br /><small>'.$app_sql.'</small><br /><b>$app_xml:</b><br /><small>'.$app_xml.'</small></p>'.PHP_EOL;
echo '<hr />'.PHP_EOL;
// THEMES 
echo '<p><strong>Default Theme:</strong> '.$default_theme.'<br /><br /><strong>CSS Theme List</strong></p>'.PHP_EOL.$themelist.PHP_EOL;
echo '<p><strong>CSS Theme Class List</strong><br />'.$themeclasslist.'</p>'.PHP_EOL;
echo '<div class="swatch theme_nude">'.PHP_EOL;
echo '<div class="primary"></div><div class="secondary"></div><div class="tertiary"></div><div class="accent"></div><div class="auxiliary"></div><div class="other"></div>';
echo '</div>'.PHP_EOL.'<p><b>custom color:</b> '.$ccolor.'</p>'.PHP_EOL;
echo '<p><strong>Page List</strong></p>'.PHP_EOL.$page_list.'<hr />'.PHP_EOL.'<p><strong>Page List</strong> (all)'.PHP_EOL.$page_list_all.PHP_EOL.'<hr />'.PHP_EOL;
// BLOCKS
echo '<p><strong>Block Type List</strong></p>'.PHP_EOL;
echo $block_type_list.'<hr />'.PHP_EOL;
echo '<p><strong>Block List</strong> (active only)</p>'.PHP_EOL;
echo $block_list.'<hr />'.PHP_EOL.'<p><strong>Block List</strong> (all)'.PHP_EOL.$block_list_all.'<hr />'.PHP_EOL;
// LAYOUTS
echo '<p><strong>Layouts</strong></p>'.PHP_EOL;
echo $layout_list.'<hr />'.PHP_EOL;
// USER GROUPS
echo '<p><strong>Group Types</strong></p>'.PHP_EOL.$group_type_list.'<hr />'.PHP_EOL;
echo '<p><strong>User Groups</strong></p>'.PHP_EOL.$group_list.'<hr />'.PHP_EOL;
// USER INFO
echo '<p><strong>User Info</strong></p>'.PHP_EOL.'<p>User IP: '.$user_ip.'<br />User Timezone: '.$user_tz.'<br />';
echo 'User Country: '.$user_country.' ('.$user_cc.')<br />User Region: '.$user_region.' ('.$user_rc.')<br />User City'.$user_city.'<br />';
echo 'User Lat, Long: '.$user_lat.', '.$user_long.'<br />User Currency: '.$user_curc.' ('.$user_curs.')</p><hr />'.PHP_EOL;
// CONTENT CATEGORIES
echo '<p><strong>Content Types</strong></p>'.PHP_EOL.$content_type_list.'<hr />'.PHP_EOL;
echo '<p><strong>Content Categories</strong></p>'.PHP_EOL.$cat_list.PHP_EOL;
// BRAD TEST
echo '<hr /><p><strong>Country Code List</strong></p>'.PHP_EOL.$countries_table.'<hr />'.PHP_EOL;
echo '<p><strong>Country, State / Province Selectors</strong></p>'.PHP_EOL;
echo '<form><label>Country</label><br />'.$country_select.'<br /><br /><label>Country Currency</label><br />'.$country_select_cur.'<br /><br />'.PHP_EOL;
echo '<label>Country Code</label><br />'.$country_select_code.'<br /><br /><label>Timezone</label><br />'.$timezone_select.'<br /><br />'.PHP_EOL;
echo '<label>Timezone (offset)</label><br />'.$timezone_select_offset.'<br /><br /><label>Language</label><br />'.$language_select.'<br /><br />'.PHP_EOL;
echo '<label>State</label><br />'.$state_select.'<br /><br /><label>Province / Territory</label><br />'.$province_select.'</form><br /><br /><hr />'.PHP_EOL;
echo '<p><strong>States Table</strong></p>'.PHP_EOL.$states_table.'<hr /><p><strong>Province Table</strong></p>'.PHP_EOL.$provinces_table;
echo '<p><strong>Timezone Table</strong></p>'.PHP_EOL.$timezone_table.PHP_EOL;
echo '<p><strong>Languages Table</strong></p>'.PHP_EOL.$language_table.PHP_EOL;
?>
</body>
</html>