<?php 
$pagetitle = 'tiles';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || Tiles</title>
	<meta name="description" content="Tiny HTML templates built with CSS and javascript. Free and open source." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || Tiles">
	<meta name="twitter:description" content="Tiny HTML templates built with CSS and javascript. Free and open source.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || Tiles" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Tiny HTML templates built with CSS and javascript. Free and open source." /> 
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
	<div class="point-right violence center flex middle" style="min-width: 15vw; height: 100%; margin: 0 1rem 0 0;">
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-panes"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">Tiles</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Tiny templates for various element types</h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">Tile MOLDS are tiny element templates using javascript and CSS, which are less commonly used than the standard core elements. In addition to the standard CORE elements, Tiles further extend your UI/UX with more complex elements.</p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#shapes">Shapes</a></li>
						<li><a href="#multimedia">Multimedia</a></li>
						<li><a href="#navigation">Navigation</a></li>
						<li><a href="#uiux">UI/UX</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded smoke-t main">
				<!-- SHAPES -->
				<h3 class="fluid-text monolisk" id="shapes"><i class="bi bi-star"></i> Shapes</h3>
				<div class="flex"><div class="padded half">
					<p class="bitstream">Shapes are simple CSS classes that can be applied to any element to make it into a shape. When floated left or right, a shape element can have content wrap around it.</p>
					<p class="requiresbox" style="margin-top: 1em;"><span class="flow-text">REQUIRES:</span><br /><em>core/molds/tiles/shapes.css</em></span></p>
				</div><div class="padded half center">
					<a href="shapes.html" target="_blank" class="inline-block" style="margin: 0 auto;">
						<div class="shape star neon flex middle" style="width: 242px; height: 242px;">
							<div class="shape star vampire hue-h" style="width: 212px; height: 212px;">
								<p class="flow-text monolisk yellow-t" style="margin-top: 3.25em; line-height: 100%;"><strong>VIEW<br />DEMO</strong></p>
							</div>
						</div>
					</a>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- MULTIMEDIA -->
				<h3 class="fluid-text monolisk" id="multimedia"><i class="bi bi-cd"></i> Multimedia</h3>
				<p class="bitstream">Multimedia tiles are used for displaying individual self-hosted audio, video, and GIF files. All multimedia Tiles require:</p>
				<p class="requiresbox flow-text"><em>core/molds/tiles/multimedia.css<br />core/jab/jquery.3.js</em></span></p>
				<?php include 'app/inc/content/pages/tiles/multimedia.php'; ?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- NAVIGATION -->
				<h3 class="fluid-text monolisk" id="navigation"><i class="bi bi-navigate"></i> Navigation</h3>
				<p class="bitstream">Navigation tiles are used for displaying navigation menus or link lists.</p>
				
				<!-- Megamenu -->
				<?php include 'app/inc/content/pages/tiles/megamenu.php'; ?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- UI/UX -->
				<h3 class="fluid-text monolisk" id="uiux"><i class="bi bi-control"></i> UI/UX</h3>
				<p class="bitstream" style="margin-bottom: 1.5rem;">Below are some additional UI/UX plugins. All require the following:</p>
				<p class="requiresbox"><span class="flow-text"><em>core/molds/tiles/uiux.css<br />core/jab/jquery.3.js</em></span></p>
				
				<!-- Printer -->
				<?php include 'app/inc/content/pages/tiles/printer.php'; ?>
				<p class="spacer"></p>
				
				<!-- Timeline -->
				<?php include 'app/inc/content/pages/tiles/timeline.php'; ?>
				<p class="spacer"></p>
				
				<!-- Presenter -->
				<?php include 'app/inc/content/pages/tiles/presenter.php'; ?>
				<p class="spacer"></p>
				
				<!-- Exit Intent -->
				<?php include 'app/inc/content/pages/tiles/exit-intent.php'; ?>
				<p class="spacer"></p>
				
				<!-- Age Restrict -->
				<?php include 'app/inc/content/pages/tiles/age-restrict.php'; ?>
				<p class="spacer"></p>
				
				<!-- Cookie Consent demo -->
				<?php include 'app/inc/content/pages/tiles/cookie-consent.php'; ?>
				<p class="spacer"></p>
				
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
<!-- Plugins -->
<script src="core/jab/plugins/audio-player.js"></script>
<script src="core/jab/plugins/gif-player.js"></script>
<script src="core/jab/plugins/video-player.js"></script>
<script src="core/jab/plugins/megamenu.js"></script>
<script src="core/jab/plugins/timeline.js"></script>
<script src="core/jab/plugins/presenter.js"></script>
<script src="core/jab/plugins/printer.js"></script>
<script src="core/jab/plugins/cookie-consent.js"></script>
<script src="core/jab/plugins/exit-intent.js"></script>

<!-- INITIALIZE jQuery Plugins -->
<script>
$(document).ready(function(){
	// EXIT INTENT
	$.stickToMe({
		layer: '#dontgo'
	});
	// COOKIE CONSENT
	$(".cookie-consent").grtCookie({
		// Main text and background color, or apply core classes to HTML elements
		textcolor: "#333",
		background: "#FFCD69",
		// Button colors
		buttonbackground: "#c40b14",
		buttontextcolor: "#fff",
		// Duration in days
		duration: 365,
	});
});
</script>

</body>
</html>