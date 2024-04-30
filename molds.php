<?php 
$pagetitle = 'molds';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>MOLDS</title>
	<meta name="description" content="Modular Objects and Layout Design Source for application development." />
	<?php echo $favicon_list;?>
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || MOLDS">
	<meta name="twitter:description" content="Modular Objects and Layout Design Source for application development.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || MOLDS" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Modular Objects and Layout Design Source for application development." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-corners charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">MOLDS</h1>
		<h2 class="flow-text baffle start depixel" style="margin: 0; padding: 0;">Modular Objects Linked Data Source</h2>
	</div>
</div>
<div class="fossil smoke-t padded">
	<div class="wrap-1200">
		<p class="flow-text bitstream">MOLDS are blocks of content and data based on modules found in the <a href="#lockedout" data-modal-open class="lemonlink">BOS Portal</a>.</p>
		
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#molds101">Overview</a></li>
				<li><a href="#integrate">Integration</a></li>
				<li><a href="#mods">Modular Objects</a></li>
				<li><a href="#design">Design</a></li>
			</ul>
		</nav>


		<!-- OVERVIEW -->
		<?php include 'app/inc/content/pages/molds/overview.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- Integration -->
		<h3 class="fluid-text monolisk files" id="integrate">Integration</h3>
		<p class="bitstream warning padded b-s-t"><strong>NOTE:</strong> documentation coming in 3.1</p>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- MODULAR OBJECTS -->
		<h3 class="fluid-text monolisk files" id="mods">Modular Objects</h3>
		<p class="bitstream"><strong>BOS</strong> contains 20 modules, which can be used to manage content data for the following types of modular objects:</p>
		<?php include 'app/inc/content/pages/molds/module-objects.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- Design -->
		<h3 class="fluid-text monolisk files" id="design">Design</h3>
		<p class="warning padded b-s-t bitstream"><strong>NOTE:</strong> documentation coming in 3.1</p>
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
echo $baffle_js;
echo $jquery3;
?>

</body>
</html>