<?php 
$pagetitle = 'bicons';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || bIcons</title>
	<meta name="description" content="A free open source native icon CSS classes library for the brutalist web design trend." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || bIcons">
	<meta name="twitter:description" content="A free open source native icon CSS classes library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || bIcons" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.brutalistframework.com" />
	<meta property="og:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source native icon CSS classes library for the brutalist web design trend." /> 
	<meta property="og:site_name" content="Brutalist Framework" />
	<?php } ?>
	<?php echo $global_header;?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	
</head>
<body>
<!-- Sticky Nav -->
<?php include 'app/inc/content/nav.php';?>

<!-- PAGE -->
<header class="brickbuild padded flex middle" id="uptop" style="min-height: 25vh; margin-bottom: 0;">
	<a href="index.php"><img class="large-thumb brdr-s-k red-b invert-h" src="app/files/images/bf3logo.png" alt="Brutalist Framework" /></a>
</header>
<div class="passion white-t courier flex" style="height: 25vh; margin: 0;">
	<div class="shape point-right violence center flex middle" style="min-width: 15vw; height: 100%; margin: 0 1rem 0 0;">
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-flag"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">bIcons</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Brutal Icons</h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">Native UTF-8 symbols in the form of brutal icons.</p>
		<p class="requiresbox"><span class="flow-text bold"><em>core/css/bicons.css</em></span></p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#getstarted">Get Started</a></li>
						<li><a href="#genicons">General</a></li>
						<li><a href="#ui">UI &amp; Actions</a></li>
						<li><a href="#food">Food</a></li>
						<li><a href="#natural">Nature</a></li>
						<li><a href="#zoo">Animals</a></li>
						<li><a href="#horoscopes">Astrology</a></li>
						<li><a href="#filetypes">Filetypes</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded bitstream smoke-t main">
				<!-- GET STARTED -->
				<h3 class="fluid-text monolisk" id="getstarted">Getting Started</h3>
				<p style="margin-bottom: 1em;">Most browsers support some basic symbols, with no dependencies. <em>bIcons</em> allows you to render native UTF-8 symbols by applying classes! Keep in mind that various browsers may render symbols differently. Simply use the following markup, where "<em>icon-name</em>" is any of the below class names.</p>
				<code class="padded flow-text">&lt;i class="bi bi-<span class="red-t"><em>icon-name</em></span>"&gt;&lt;/&gt;</code>
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
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- GENERAL ICONS -->
				<h3 class="fluid-text monolisk" id="genicons">General Icons</h3>
				<?php include 'app/inc/content/pages/bicons/general.php';?>
				<p class="spacer"></p>
				<hr />
				
				<!-- UI -->
				<h4 class="fluid-text monolisk" id="ui">User Interface</h4>
				<?php include 'app/inc/content/pages/bicons/ui.php';?>
				<p class="spacer"></p>
				<hr />
				
				<!-- Food -->
				<h4 class="fluid-text monolisk" id="food">Food</h4>
				<?php include 'app/inc/content/pages/bicons/food.php';?>
				<p class="spacer"></p>
				<hr />
				
				<!-- Nature & Outdoors -->
				<h4 class="fluid-text monolisk" id="natural">Nature &amp; Outdoors</h4>
				<?php include 'app/inc/content/pages/bicons/nature.php';?>
				<p class="spacer"></p>
				<hr />
				
				<!-- Animals -->
				<h4 class="fluid-text monolisk" id="zoo">Animals</h4>
				<?php include 'app/inc/content/pages/bicons/animals.php';?>
				<p class="spacer"></p>
				<hr />
				
				<!-- Astrology -->
				<h4 class="fluid-text monolisk" id="horoscopes">Astrology</h4>
				<?php include 'app/inc/content/pages/bicons/astrology.php';?>
				<p class="spacer"></p>
				<hr />
				<h4 class="fluid-text monolisk" id="filetypes">Filetype Icons Library</h4>
				<p>The filetype icons library allows you to automatically prepend icons to lists of linked files. Over 400 filetypes are supported.<br />
					Simply load the filetypes CSS script from:<br /><span class="flow-text"><strong>/core/css/filetypes.css</strong></span><br /><br />
					<a href="filetypes.html" target="_blank" class="btn-large btn emptiness white-t invert-h">See demo for more details &raquo;</a>
				</p>
			</div>
		</div>
	</div>

	<?php include 'app/inc/content/footer.php';?>
	
</div>


<!-- Download Modal -->
<?php include 'app/inc/content/ui/download-modal.php';?>

<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner draggable"><!-- Remove "draggable" class to prevent modals from being moveable -->
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<?php echo $global_footer;?>

</body>
</html>