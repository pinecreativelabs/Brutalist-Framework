<?php 
$pagetitle = 'butch';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || BUTCH</title>
	<meta name="description" content="A free open source CSS library for the brutalist web design trend." />
	<link rel="canonical" href="<?php echo $burl;?>/butch/" />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || BUTCH">
	<meta name="twitter:description" content="A free open source CSS library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || BUTCH" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source CSS library for the brutalist web design trend." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-communist charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">BUTCH</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Base Utility & Typography Class Helpers</h2>
	</div>
</div>

<div class="fossil smoke-t padded">
	<div class="wrap-1200">
		<p class="flow-text bitstream">BUTCH is a library of general-use classes for typography, layout, and other basic page elements.</p>
		<p class="requiresbox bitstream"><span class="flow-text bold"><em>bos/core/css/butch.css</em></span><br /><span class="echo">$butch_css</span></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>

		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#type">Typography</a></li>
				<li><a href="#layout">Layout &amp; Layering</a></li>
				<li><a href="#utils">Utility Classes</a></li>
				<li><a href="#bounds">Boundaries</a></li>
				<li><a href="#shapes">Shapes</a></li>
				<li><a href="#tables">Tables &amp; Media</a></li>
			</ul>
		</nav>

		<?php include 'app/inc/content/pages/butch/typography.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		 
		<!-- LAYOUT & LAYERING -->
		<?php include 'app/inc/content/pages/butch/layout.php';?>
		<p class="spacer"></p>
		<?php include 'app/inc/content/pages/butch/stax.php';?>	
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- UTILITY CLASSES -->
		<?php include 'app/inc/content/pages/butch/utils.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- BOUNDARIES -->
		<?php include 'app/inc/content/pages/butch/bounds.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>

		<!-- TABLES & MEDIA -->
		<?php include 'app/inc/content/pages/butch/tables-media.php';?>	
		<p class="spacer"></p>
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
echo $modal_js;
echo $bfx_js;
echo $jquery3;
?>

</body>
</html>
