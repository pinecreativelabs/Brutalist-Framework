<?php
$generalfile = simplexml_load_file($droot_bos.'/molds/sad/module/data/general.xml');
$syspagesfile = simplexml_load_file($droot_bos.'/molds/sad/module/data/syspages.xml');
// GENERAL SETTINGS
foreach($generalfile->setting as $setting){ 
	// general defaults
	$sitename = $setting->sitename;
	$mailto = $setting->mailto;
	$timezone = $setting->locale['timezone'];
	$tz_mode = $setting->locale['mode'];
	$country = $setting->locale['country'];
	$curc = $setting->locale['cur'];
	$curs = $setting->locale['curs'];
	$language = $setting->locale['lang'];
	$df = $setting->formats['date'];
	$tf = $setting->formats['timestamp'];
	$famcopy = $setting->bosui['famcopy'];
	// dev resources
	$dev_mode = $setting->dev['mode'];
	$jq = $setting->dev['jquery'];
	$jqv = $setting->dev['jqver'];
	$icons = $setting->dev['icons'];
	// access & restrictions
	$register = $setting->access['registration'];
	$pal_default = $setting->access['pal_default'];
	$login_mode = $setting->access['login'];
	$set_pagelock = $setting->access['pagelock'];
	$age_restrict = $setting->agerestrict['status'];
	$min_age = $setting->agerestrict['age'];
	$age_restrict_title = $setting->agerestrict['title'];
	$age_restrict_copy = $setting->agerestrict;
	$age_restrict_redirect = $setting->agerestrict['redirect'];
	$under_age_message = $setting->underage;
	$under_age_redirect = $setting->underage['redirect'];
	$under_age_redirect_url = $setting->underage['redirto'];
	// cookie consent
	$cc_mode = $setting->cc['mode'];
	$cc_dur = $setting->cc['duration'];
	$cc_text_color = $setting->cc['textcolor'];
	$cc_bg_color = $setting->cc['bgcolor'];
	$cc_btn_bg = $setting->cc['btnbg'];
	$cc_btn_text_color = $setting->cc['btn_text_color'];
	$cc_position = $setting->cc['position'];
	$cc_btn_text = $setting->cccontent['btn_text'];
	$cc_policy_url = $setting->cccontent['policyurl'];
	$cc_policy_text = $setting->cccontent['policytext'];
	$cc_title = $setting->cccontent['title'];
	$cc_copy = $setting->cccontent;
	// meta
	$tracking = $setting->meta['tracking'];
	$sc_verify = $setting->meta['scverify'];
	$sc_verify_string = $setting->scverifystring;
	$canonical = $setting->meta['canonical'];
	$meta_rating = $setting->meta['adult'];
	$meta_robots = $setting->meta['robots'];
	$meta_noreadaloud = $setting->meta['noreadaloud'];
	$meta_nosearchbox = $setting->meta['nosearchbox'];
	$meta_notranslate = $setting->meta['notranslate'];
	$global_meta_title = $setting->metatitle;
	$global_meta_desc = $setting->metadesc;
	$og = $setting->og['enabled'];
	$og_image = $setting->og;
	$tc = $setting->tc['enabled'];
	$tc_handle = $setting->tc['handle'];
	$tc_image = $setting->tc;
	// MODULES
	$cad = $setting->cad['enabled'];
	$cad_pal = $setting->cad['pal'];
	$crude = $setting->crude['enabled'];
	$crude_pal = $setting->crude['pal'];
	$dick = $setting->dick['enabled'];
	$dick_pal = $setting->dick['pal'];
	$edu = $setting->edu['enabled'];
	$edu_pal = $setting->edu['pal'];
	$hapi = $setting->hapi['enabled'];
	$hapi_pal = $setting->hapi['pal'];
	$jack = $setting->jack['enabled'];
	$jack_pal = $setting->jack['pal'];
	$mad = $setting->mad['enabled'];
	$mad_pal = $setting->mad['pal'];
	$map = $setting->map['enabled'];
	$map_pal = $setting->map['pal'];
	$mydid = $setting->mydid['enabled'];
	$mydid_pal = $setting->mydid['pal'];
	$paws = $setting->paws['enabled'];
	$paws_pal = $setting->paws['pal'];
	$ports = $setting->ports['enabled'];
	$ports_pal = $setting->ports['pal'];
	$shop = $setting->shop['enabled'];
	$shop_pal = $setting->shop['pal'];
	$storyboard = $setting->storyboard['enabled'];
	$storyboard_pal = $setting->storyboard['pal'];
	$tilt = $setting->tilt['enabled'];
	$tilt_pal = $setting->tilt['pal'];
}
// SYSTEM PAGES 
foreach($syspagesfile->syspage as $syspage){
	$coming_soon = $syspage->comingsoon['status'];
	$coming_soon_template = $syspage->comingsoon['template'];
	$coming_soon_title = $syspage->comingsoon['title'];
	$coming_soon_message = $syspage->comingsoon;
	$coming_soon_deadline = $syspage->comingsoon['deadline'];
	$maintenance_mode = $syspage->mmode['status'];
	$maintenance_mode_title = $syspage->mmode['title'];
	$maintenance_mode_message = $syspage->mmode;
	// error pages 
	$error403 = $syspage->error403['title'];
	$error403_message = $syspage->error403;
	$error404 = $syspage->error404['title'];
	$error404_message = $syspage->error404;
	$error405 = $syspage->error405['title'];
	$error405_message = $syspage->error405;
	$error408 = $syspage->error408['title'];
	$error408_message = $syspage->error408;
	$error500 = $syspage->error500['title'];
	$error500_message = $syspage->error500;
	$error502 = $syspage->error502['title'];
	$error502_message = $syspage->error502;
	$error504 = $syspage->error504['title'];
	$error504_message = $syspage->error504;
}
// GET TRACKING CODES
$getgacode = $droot_bos.'/molds/sad/module/data/ga-tracking-code.txt';
$gettpcode = $droot_bos.'/molds/sad/module/data/tp-tracking-code.txt';
if(file_exists($getgacode)){
	$gacode = fopen($getgacode, 'r') or die("Unable to open file!");
	$ga_tracking_code = fread($gacode,filesize($getgacode));
	fclose($gacode);
} else {$ga_tracking_code = 'GA tracking code not set.';}
if(file_exists($gettpcode)){
	$tpcode = fopen($gettpcode, 'r') or die("Unable to open file!");
	$tp_tracking_code = fread($tpcode,filesize($gettpcode));
	fclose($tpcode);
} else {$tp_tracking_code = 'Third party tracking code not set.';}
?>