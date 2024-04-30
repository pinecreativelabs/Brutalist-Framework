<?php 
$pagetitle = 'bicons';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || bIcons</title>
	<meta name="description" content="A free open source native icon CSS classes library for the brutalist web design trend." />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || bIcons">
	<meta name="twitter:description" content="A free open source native icon CSS classes library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || bIcons" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.brutalistframework.com" />
	<meta property="og:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source native icon CSS classes library for the brutalist web design trend." /> 
	<meta property="og:site_name" content="Brutalist Framework" />

	<?php echo $core_css; ?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />

</head>
<body>
<!-- Sticky Nav -->
<?php include 'app/inc/content/nav.php';?>

<!-- PAGE -->
<header class="brickbuild padded flex middle" id="uptop" style="min-height: 25vh; margin-bottom: 0;">
	<a href="index.php"><img class="large-thumb brdr-s-k red-b invert-h" src="app/files/images/bf3logo_bloodsand.png" alt="Brutalist Framework" /></a>
</header>
<div class="dune white-t flex" style="height: 25vh; margin: 0;">
	<div class="shape point-right sand center flex middle" style="min-width: 15vw; height: 100%; margin: 0 1rem 0 0;">
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-flag charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t">
		<h1 class="fluid-text start rice-t-s monolisk" style="margin: -10px 0 0 0; font-weight:900;">bIcons</h1>
		<h2 class="flow-text start depixel" style="margin: 0; padding: 0;">
		<span class="rounded sand charcoal-t box-s" style="padding: 6px; display:inline-block;"><?php echo $bicon_count;?></span> <span class="baffle">Brutal Icons</span></h2>
	</div>
</div>

<div class="fossil padded smoke-t">
	<div class="wrap-1200">
		<p class="flow-text bitstream">Native UTF-8 symbols in the form of brutal icons.</p>
		<p class="requiresbox bitstream"><span class="flow-text bold"><em>bos/core/css/bicons.css</em></span><br /><span class="echo">$bicons_css</span></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>

		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#getstarted">Getting Started</a></li>
				<li><a href="#categories"><i class="bi bi-rows"></i> Categories</a></li>
				<li class="files"><a href="#filetypes"><i class="blank"></i> Filetype Icons</a></li>
			</ul>
		</nav>
			
			
		<!-- GET STARTED -->
		<h3 class="fluid-text monolisk" id="getstarted">Getting Started</h3>
		<div class="flex bitstream"><div class="half padded">
			<p style="margin-bottom: 1em;">Most browsers support some basic symbols, with no dependencies. <em>bIcons</em> allows you to render native UTF-8 symbols by applying classes! Keep in mind that various browsers may render symbols differently. Simply use the following markup, where "<em>icon-name</em>" is any of the below class names.</p>
			<code class="padded flow-text">&lt;i class="bi bi-<span class="red-t"><em>icon-name</em></span>"&gt;&lt;/i&gt;</code>
			<p class="spacer"></p>
			<h4 class="flow-text">PHP Variables</h4>
			<p>The core includes XML data of bIcons, which is found at: <span class="black lime-t">/core/data/xml/bicons.xml</span>. Below are PHP variables that can be used to render bIcon data:</p>
			<p class="padded disabled">
				<strong>$bicon_count</strong> <small>[renders numeric count of all bicons]</small><br />
				<strong>$bicon_list</strong> <small>[renders list of <em>ALL</em> bicons]</small><br />
				<strong>$bicon_animals</strong> <small>[list of <em>animals</em> bicons]</small><br />
				<strong>$bicon_astrology</strong> <small>[list of <em>astrology</em> bicons]</small><br />
				<strong>$bicon_currency</strong> <small>[list of <em>currency</em> bicons]</small><br />
				<strong>$bicon_danger</strong> <small>[list of <em>danger</em> bicons]</small><br />
				<strong>$bicon_directional</strong> <small>[list of <em>directional</em> bicons]</small><br />
				<strong>$bicon_emoticons</strong> <small>[list of <em>emoticons</em> bicons]</small><br />
				<strong>$bicon_food</strong> <small>[list of <em>food</em> bicons]</small><br />
				<strong>$bicon_freakshow</strong> <small>[list of <em>freakshow</em> bicons]</small><br />
				<strong>$bicon_layout</strong> <small>[list of <em>layout</em> bicons]</small><br />
				<strong>$bicon_nature</strong> <small>[list of <em>nature</em> bicons]</small><br />
				<strong>$bicon_objects</strong> <small>[list of <em>objects</em> bicons]</small><br />
				<strong>$bicon_places</strong> <small>[list of <em>places</em> bicons]</small><br />
				<strong>$bicon_religion</strong> <small>[list of <em>religion &amp; philosophy</em> bicons]</small><br />
				<strong>$bicon_sportsrec</strong> <small>[list of <em>sports &amp; recreation</em> bicons]</small><br />
				<strong>$bicon_symbols</strong> <small>[list of <em>miscellaneous symbols</em> bicons]</small><br />
				<strong>$bicon_uiactions</strong> <small>[list of <em>UI action</em> bicons]</small><br />
				<strong>$bicon_uiav</strong> <small>[list of <em>A/V UI</em> (multimedia) bicons]</small><br />
				<strong>$bicon_uibasic</strong> <small>[list of <em>basic UI</em> bicons]</small><br />
			</p>
		</div><div class="half padded">
			<h4 class="flow-text">Icon Sizes</h4>
			<p>Apply these classes to change the icon size. The <em><strong>.bi-fi</strong></em> class is fluid and resizes in proportion to the screen size.</p>
			<ul class="tags">
				<li><i class="bi bi-2x bi-explode"></i><br /><strong>.bi-2x</strong></li>
				<li><i class="bi bi-3x bi-explode"></i><br /><strong>.bi-3x</strong></li>
				<li><i class="bi bi-4x bi-explode"></i><br /><strong>.bi-4x</strong></li>
				<li><i class="bi bi-5x bi-explode"></i><br /><strong>.bi-5x</strong></li>
				<li><i class="bi bi-6x bi-explode"></i><br /><strong>.bi-6x</strong></li>
				<li><i class="bi bi-fi bi-explode"></i><br /><strong>.bi-fi</strong></li>
			</ul>
			<p><strong>EXAMPLE:</strong> A dangerous red-flag icon that is four times it's original size would have the following markup:</p>
			<code class="padded flow-text">&lt;i class="bi bi-red-flag bi-4x&gt;&lt;/i&gt;</code>
			<p><strong>OUTPUT:</strong> <i class="bi bi-red-flag bi-4x"></i></p>
		</div></div>
	
		<!-- CATEGORIES -->
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<h3 class="monolisk fluid-text" id="categories">Browse by Category</h3>
		<div class="block-wrap">
			<div class="block bw25 xs-100 sm-100">
				<div style="position: sticky; position:-webkit-sticky; top: 3.75rem;">
					<ul class="tags monolisk bicon-cat-list">
						<li><a href="#zoo">Animals</a></li>
						<li><a href="#astrology">Astrology</a></li>
						<li><a href="#currency">Currency</a></li>
						<li><a href="#danger">Danger Zone</a></li>
						<li><a href="#directional">Directional</a></li>
						<li><a href="#emoticons">Emoticons</a></li>
						<li><a href="#food">Food</a></li>
						<li><a href="#freaks">Freakshow</a></li>
						<li><a href="#layout">Layout</a></li>
						<li><a href="#nature">Nature</a></li>
						<li><a href="#objects">Objects</a></li>
						<li><a href="#places">Places</a></li>
						<li><a href="#religion">Religion</a></li>
						<li><a href="#sports">Sports &amp; Rec</a></li>
						<li><a href="#symbols">Symbols &amp; Other</a></li>
						<li><a href="#ui-actions">UI Actions</a></li>
						<li><a href="#ui-av">UI A/V</a></li>
						<li><a href="#ui-basic">UI Basic</a></li>
					</ul>
				</div>
			</div><div class="block bw75 xs-100 sm-100"><div class="padded">
				
				<!-- animals -->
				<div id="zoo"><?php echo $bicon_animals;?></div>
				<!-- astrology -->
				<div id="astrology"><?php echo $bicon_astrology;?></div>
				<!-- currency -->
				<div id="currency"><?php echo $bicon_currency;?></div>
				<!-- danger zone -->
				<div id="danger"><?php echo $bicon_danger;?></div>
				<!-- directional -->
				<div id="directional"><?php echo $bicon_directional;?></div>
				<!-- emoticons -->
				<div id="emoticons"><?php echo $bicon_emoticons;?></div>
				<!-- food -->
				<div id="food"><?php echo $bicon_food;?></div>
				<!-- freakshow -->
				<div id="freaks"><?php echo $bicon_freakshow;?></div>
				<!-- layout -->
				<div id="layout"><?php echo $bicon_layout;?></div>
				<!-- nature & outdoors -->
				<div id="nature"><?php echo $bicon_nature;?></div>
				<!-- objects -->
				<div id="objects"><?php echo $bicon_objects;?></div>
				<!-- places -->
				<div id="places"><?php echo $bicon_places;?></div>
				<!-- religion / philosophy -->
				<div id="religion"><?php echo $bicon_religion;?></div>
				<!-- Sports & Recreation -->
				<div id="sports"><?php echo $bicon_sportsrec;?></div>
				<!-- Symbols & Other -->
				<div id="symbols"><?php echo $bicon_symbols;?></div>
				<!-- UI Actions -->
				<div id="ui-actions"><?php echo $bicon_uiactions;?></div>
				<!-- UI A/V -->
				<div id="ui-av"><?php echo $bicon_uiav;?></div>
				<!-- UI Basic -->
				<div id="ui-basic"><?php echo $bicon_uibasic;?></div>
		</div></div></div>
		
		<!-- FILETYPE ICONS -->
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<h4 class="fluid-text monolisk" id="filetypes">Filetype Icons Library</h4>
		<p>The filetype icons library allows you to automatically prepend icons to lists of linked files. Over 400 filetypes are supported.<br />
			Simply load the filetypes CSS script from:<br /><span class="flow-text"><strong>/core/css/filetypes.css</strong></span><br /><br />
			<a href="filetypes.html" target="_blank" class="nb-btn-big">See demo for more details &raquo;</a>
		</p>
		
	</div>
</div>
<?php include 'app/inc/content/footer.php';?>

<!-- Download Modal -->
<?php include 'app/inc/content/ui/download-modal.php';?>

<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner draggable"><!-- Remove "draggable" class to prevent modals from being moveable -->
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<?php 
echo $baffle_js;
echo $modal_js;
echo $jquery3;
?>

</body>
</html>