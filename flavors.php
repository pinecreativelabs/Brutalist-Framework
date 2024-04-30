<?php 
$pagetitle = 'flavors';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || Flavors</title>
	<meta name="description" content="Color CSS library for the brutalist web design trend." />
	<?php echo $favicon_list;?>
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || Flavors">
	<meta name="twitter:description" content="Color CSS library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || Flavors" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Color CSS library for the brutalist web design trend." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-cone charcoal-t-s sepia"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text monolisk start" style="margin: -10px 0 0 0; font-weight:900;">Flavors</h1>
		<h2 class="flow-text baffle start depixel" style="margin: 0; padding: 0;">Color Classes Library</h2>
	</div>
</div>

<div class="fossil smoke-t padded bitstream">
	<div class="wrap-1200">
		<p class="flow-text bitstream"><em>Flavors</em> is a delicious buffet of colors, baked with CSS love.</p>
		<p class="requiresbox bitstream"><span class="flow-text bold"><em>bos/core/css/flavors.css</em></span><br /><span class="echo">$flavors_css</span></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
			
		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#corecolors">Core Colors</a></li>
				<li><a href="#vars">Variables</a></li>
				<li><a href="#mixed">Concoctions</a></li>
				<li><a href="#gradients">Gradients</a></li>
			</ul>
		</nav>
		
		<?php include 'app/inc/content/pages/flavors/core-colors.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- Variable Colors -->
		<h3 class="fluid-text monolisk" id="vars">Variables</h3>
		<p>Similar to Core Colors, there are CSS variables used to define a few color classes. Variables are defined in the <strong><em>core/css/variables.css</em></strong> file. See <em>CORE</em> for more details on working with CSS variables. Variable-based color classes work the same way as <em>Core Colors</em>:</p>
		<ul class="none flow-text bold info inline-block">
			<li>.primary <span class="primary">&nbsp;&nbsp;</span></li>
			<li>.secondary <span class="secondary">&nbsp;&nbsp;</span></li>
			<li>.tertiary <span class="tertiary">&nbsp;&nbsp;</span></li>
			<li>.accent <span class="accent">&nbsp;&nbsp;</span></li>
			<li>.auxiliary <span class="auxiliary">&nbsp;&nbsp;</span></li>
			<li>.ocolor <span class="ocolor">&nbsp;&nbsp;</span> <small>(other)</small></li>
		</ul>
		<p class="inline-block padded info">
			<span class="bold flow-text">Examples:</span><br /><span class="secondary-t">.secondary-t</span><br /><span class="tertiary primary-t">.tertiary.primary-t</span><br />
			<span class="b-s-t ocolor-b auxiliary ocolor-t">.auxiliary.ocolor-b.ocolor-t</span>
		</p>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- MIXED FLAVORS -->
		<?php include 'app/inc/content/pages/flavors/combos.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- GRADIENTS -->
		<?php include 'app/inc/content/pages/flavors/gradients.php';?>
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
