<?php 
$padfile = simplexml_load_file($droot_bos.'/molds/pad/module/data/config.xml');
foreach($padfile->padconfig as $padconfig){
	if($padconfig['id']=='11'){
		$profiles = $padconfig->profiles['mode'];
		$profile_theme = $padconfig->profiles['theme'];
		$profile_layout = $padconfig->profiles['layout'];
		$blocked_user_message = $padconfig->blocked;
		$blocked_redirect = $padconfig->blocked['redirect'];
		$profile_storyboard = $padconfig->modules['storyboard'];
		$profile_paws = $padconfig->modules['paws'];
		$profile_ports = $padconfig->modules['ports'];
		$profile_fam = $padconfig->modules['fam'];
		$userlist_layout = $padconfig->profiles['userlist'];
	}
}
?>