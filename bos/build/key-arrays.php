<?php 

// BLOCK TYPES
$blocktypes = array('content','nav','media','data','form','other');
sort($blocktypes);

// CONTENT GROUPING
$contenttypes = array('blog','ecommerce','multimedia','other','hidden');
$content_group_types = array(
	'Posts'=>array('type'=>'blog','active'=>true),
	'Galleries'=>array('type'=>'multimedia','active'=>true),
	'Products'=>array('type'=>'ecommerce','active'=>true),
	'Tabs'=>array('type'=>'hidden','active'=>true),
	'Modals'=>array('type'=>'hidden','active'=>true),
	'Sliders'=>array('type'=>'multimedia','active'=>true)
);
$blog_post_types = array('How-to','Case Study','Ebook','Authority','Podcast','Video','Research','Ephemeral','Gamified');
$stream_types = array('audio','video','gallery','article','event','product','notification');
sort($blog_post_types);
sort($contenttypes);
sort($stream_types);
ksort($content_group_types);

// Favicons
$ficons = array (
	// icon initial, size, format (ico or png), enabled
	array('f',16,'ico',true),		// favicon
	array('s',32,'png',true),		// shortcut icon
	array('a',180,'png',true),		// Apple touch
);

// FONTS
$fonts = array(
	'Bitstream'=>array('fontclass'=>'bitstream','active'=>true),
	'Communist'=>array('fontclass'=>'communist','active'=>true),
	'Depixel'=>array('fontclass'=>'depixel','active'=>true),
	'Monolisk'=>array('fontclass'=>'monolisk','active'=>true),
	'VCR Mono'=>array('fontclass'=>'vcr-mono','active'=>true),
	'Writer Duospace'=>array('fontclass'=>'writer-duospace','active'=>true)
);
ksort($fonts);

// USER GROUP TYPES
$grouptypes = array(
	'superadmin'=>array('permissions'=>'owner','accesslevel'=>3),
	'admin'=>array('permissions'=>'full read-write','accesslevel'=>2),
	'editors'=>array('permissions'=>'partial read-write','accesslevel'=>1),
	'guests'=>array('permissions'=>'read-only','accesslevel'=>0)
);

// TIMEZONES
$us_timezones = array(
	'AST'=>array('offset'=>'UTC -4','name'=>'Atlantic Standard Time'),
	'AKST'=>array('offset'=>'UTC -9','name'=>'Alaska Standard Time'),
	'CST'=>array('offset'=>'UTC -6','name'=>'Central Standard Time'),
	'EST'=>array('offset'=>'UTC -5','name'=>'Eastern Standard Time'),
	'HST'=>array('offset'=>'UTC -10','name'=>'Hawaii Standard Time',),
	'MST'=>array('offset'=>'UTC -7','name'=>'Mountain Standard Time'),
	'PST'=>array('offset'=>'UTC -8','name'=>'Pacific Standard Time'),
	'SST'=>array('offset'=>'UTC -11','name'=>'Samoa Standard Time'),
	'WAKT'=>array('offset'=>'UTC +12','name'=>'Wake Time')
);

?>