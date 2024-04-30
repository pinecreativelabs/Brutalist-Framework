<?php 
$pagetitle = 'construct';
$ignore_tracking = false; 
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || CORE</title>
	<meta name="description" content="Construct a brutal web page or application using a deconstructive approach." />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || CORE">
	<meta name="twitter:description" content="Construct a brutal web page or application using a deconstructive approach.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || CORE" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Construct a brutal web page or application using a deconstructive approach." /> 
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
<div class="dune flex" style="height: 25vh; margin: 0;">
	<div class="shape point-right sand center flex middle" style="min-width: 15vw; height: 100%; margin: 0 1rem 0 0;">
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-core-block charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">CORE</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Construct Object Rendering Engine</h2>
	</div>
</div>
	
<div class="fossil padded smoke-t">
	<div class="wrap-1200">
		<p class="flow-text bitstream">The core of BF is composed of CSS, javascript, data files, and PHP scripts that can be used to construct and render elements on an HTML page or application.</p>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#structure">Structure</a></li>
				<li><a href="#css">CSS</a></li>
				<li><a href="#jab">JAB</a></li>
				<li><a href="#data">Data</a></li>
				<li><a href="#php">PHP</a></li>
			</ul>
		</nav>
		
		<!-- STRUCTURE -->
		<?php include 'app/inc/content/pages/construct/structure.php';?>				
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- CSS Components -->
		<?php include 'app/inc/content/pages/construct/css.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
			
		<!-- JAB -->
		<?php include 'app/inc/content/pages/construct/jab.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- PHP CORE -->
		<?php include 'app/inc/content/pages/construct/php-core.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
			
		<!-- KAT & BEKAH-->
		<h3 class="fluid-text monolisk" id="kat-bekah" style="margin-bottom: 0;"><strong>KAT & BEKAH</strong></h3>
		<p class="bitstream">KAT and BEKAH are the two primary "sister" scripts, which support the CORE script. Both scripts are included in the <em>core.php</em> script.</p>
		<p class="spacer"></p>
		<?php include 'app/inc/content/pages/construct/kat.php';?>
		<p class="spacer"></p>
		<?php include 'app/inc/content/pages/construct/bekah.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- BRAD -->
		<?php include 'app/inc/content/pages/construct/brad.php';?>
		<p class="spacer"></p>

	</div>
</div>
<?php include 'app/inc/content/footer.php';?>


<!-- Download Modal -->
<?php include 'app/inc/content/ui/download-modal.php';?>

<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner">
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<?php 
echo $modal_js;
echo $bfx_js;
echo $buix_js;
echo $jquery3;
?>
<!-- jQuery Plugins -->
<script src="core/jab/plugins/draggable.js"></script>
<script src="core/jab/plugins/cdp.js"></script>
<script src="core/jab/plugins/pagination.js"></script>
<script src="core/jab/plugins/b-loader.js"></script>

</body>
</html>
