<?php 
$pagetitle = 'grids';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Grids</title>
	<meta name="description" content="A free open source CSS library for the brutalist web design trend." />
	<link rel="canonical" href="<?php echo $burl;?>/buff/" />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="BUFF">
	<meta name="twitter:description" content="A free open source CSS library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Grids" />
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-quadrant charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">Grids</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Multiple Layout Methods</h2>
	</div>
</div>

<div class="fossil smoke-t padded">
	<div class="wrap-1200">
		<p class="flow-text bitstream" style="margin-bottom: 1rem;">Create dynamic and responsive layouts using multiple methods.</p>

		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#methods">Methods</a></li>
				<li><a href="#nesting">Nesting</a></li>
			</ul>
		</nav>

		<?php include 'app/inc/content/pages/grids/overview.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- METHODS -->
		<?php include 'app/inc/content/pages/grids/methods.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- NESTING -->
		<?php include 'app/inc/content/pages/grids/nesting.php';?>
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
echo $baffle_js;
echo $bentogrid_js;
echo $chaosgrid_js;
echo $modal_js;
echo $jquery3;
?>

</body>
</html>
