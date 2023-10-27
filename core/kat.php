<? 
/* KAT: 
 * Key Array Templater
 */

// PAGES 
$pages = array(
	// page title => 'pf' (page file), 'active' (display in page list)
	'Home'=>array('pf'=>'inde.php','active'=>true),
	'About'=>array('pf'=>'about.php','active'=>true),
	'BFX'=>array('pf'=>'bfx.php','active'=>true),
	'bIcons'=>array('pf'=>'bicons.php','active'=>true),
	'BUIX'=>array('pf'=>'buix.php','active'=>true),
	'BUTCH'=>array('pf'=>'butch.php','active'=>true),
	'CORE'=>array('pf'=>'construct.php','active'=>true),
	'Flavors'=>array('pf'=>'flavors.php','active'=>true),
	'ReBAR'=>array('pf'=>'rebar.php','active'=>true),
	'MOLDS'=>array('pf'=>'molds.php','active'=>true),
	'Boards'=>array('pf'=>'boards.php','active'=>true),
	'Panels'=>array('pf'=>'panels.php','active'=>true),
	'Tiles'=>array('pf'=>'tiles.php','active'=>true),
	'Shapes'=>array('pf'=>'shapes.html','active'=>true),
	'Boilerplate'=>array('pf'=>'boilerplate.html','active'=>false),
	'Filetype Icons'=>array('pf'=>'filetypes.html','active'=>false)
);

// THEMES
$themes = array(
	'Nude'=>array('active'=>true, 'p'=>'#fff', 's'=>'#000', 't'=>'#ff0000', 'a'=>'#0000ff', 'x'=>'#808080', 'o'=>'#ffff00'),
	'Communist'=>array('active'=>true, 'p'=>'#fcea96', 's'=>'#000', 't'=>'#a60201', 'a'=>'#fafafa', 'x'=>'#2e2e2e', 'o'=>'#ffc003'),
	'Vaporwave Miami'=>array('active'=>true, 'p'=>'#462064', 's'=>'#e830d9', 't'=>'#ffe1b8', 'a'=>'#26e8e5', 'x'=>'#873177', 'o'=>'#ffff00'),
	'brad bits'=>array('active'=>true, 'p'=>'#2A0A22', 's'=>'#BCA9F5', 't'=>'#0489B1', 'a'=>'#333', 'x'=>'#000', 'o'=>'#04B45F')
);
ksort($themes);

// Favicons
$ficons = array (
	// icon initial, size, format (ico or png), enabled
	array('f',16,'ico',true),		// favicon
	array('s',32,'png',true),		// shortcut icon
	array('a',180,'png',true),		// Apple touch
);

// LAYOUTS
$layouts = array(
	// 'Name'=>('width','height',cols,rows,active);
	'Full'=>array('w'=>'100%','h'=>'','c'=>1,'r'=>1,'active'=>true),
	'Fluid'=>array('w'=>'100vw','h'=>'','c'=>1,'r'=>1,'active'=>true),
	'Quadrant'=>array('w'=>'50vw','h'=>'50vh','c'=>2,'r'=>2,'active'=>true),
	'Sidebar'=>array('w'=>'33%','h'=>'','c'=>1,'r'=>1,'active'=>true)
);
ksort($layouts);

// BLOCKS
$blocktypes = array('content','nav','media','data','form','other');
$blocks = array(
	'Testimonial'=>array('type'=>'content','active'=>true),
	'Main Menu'=>array('type'=>'nav','active'=>false),
	'Audio Player'=>array('type'=>'media','active'=>true),
	'Video Player'=>array('type'=>'media','active'=>true),
	'Data Table'=>array('type'=>'data','active'=>true),
	'Contact Form'=>array('type'=>'form','active'=>true),
	'Exit Intent'=>array('type'=>'other','active'=>false)
);
ksort($blocks);
sort($blocktypes);

// CONTENT CATEGORIES
$contenttypes = array('blog','ecommerce','multimedia','misc','hidden');
$categories = array(
	'News'=>array('type'=>'blog','active'=>true),
	'Gallery'=>array('type'=>'multimedia','active'=>true),
	'Products'=>array('type'=>'ecommerce','active'=>true),
	'Tab'=>array('type'=>'hidden','active'=>true),
	'Testimonials'=>array('type'=>'misc','active'=>true)
);
sort($contenttypes);
ksort($categories);

// USER GROUPS
$grouptypes = array('admin','editors','guests');
$groups = array(
	'Customers'=>array('type'=>'guests','active'=>true),
	'Authors'=>array('type'=>'editors','active'=>true),
	'Admins'=>array('type'=>'admin','active'=>true),
	'Blocked Users'=>array('type'=>'guests','active'=>false)
);
ksort($groups);
ksort($grouptypes);
?>