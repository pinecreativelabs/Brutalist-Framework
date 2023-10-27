<?php 
$pagetitle = 'bfx';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || BFX</title>
	<meta name="description" content="Brutal element javascript effects and CSS animations." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || BFX">
	<meta name="twitter:description" content="Brutal element javascript effects and CSS animations.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || BFX" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.brutalistframework.com" />
	<meta property="og:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Brutal element javascript effects and CSS animations." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-sparkle"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">BFX</h1>
		<h2 class="flow-text baffle start keep-all" style="margin: 0; padding: 0;">Brutal Effects</h2>
	</div>
</div>
	
<div class="fossil">
	<div class="padding smoke-t bitstream"><div class="wrap-1200">
		<p class="flow-text">Brutalize elements with some CSS and javascript-based effects.</p>
		<p class="requiresbox"><span class="flow-text bold"><em>core/css/bfx.css</em></span></p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<div class="flex">
			<div class="glued sidebar start">
				<nav class="simple nav3">
					<ul class="courier flow-text">
						<li><a href="#textfx">Text Effects</a></li>
						<li><a href="#anims">Animations</a></li>
						<li><a href="#rotatetext">Rotate Text</a></li>
						<li><a href="#animbg">Animated Backgrounds</a></li>
						<li><a href="#rumbler">Rumbler</a></li>
						<li><a href="#blendr">Blenders</a></li>
					</ul>
				</nav>
			</div>
			<div class="main smoke-t bitstream padded">
				<?php include 'app/inc/content/pages/bfx/textfx.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- ANIMATIONS -->
				<?php include 'app/inc/content/pages/bfx/animations.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- ROTATE TEXT -->
				<?php include 'app/inc/content/pages/bfx/rotate-text.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- ANIMATED BACKGROUNDS -->
				<?php include 'app/inc/content/pages/bfx/anim-bg.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- RUMBLER -->
				<?php include 'app/inc/content/pages/bfx/rumbler.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- BLENDERS -->
				<?php include 'app/inc/content/pages/bfx/blenders.php';?>
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
<!-- jQuery Plugins -->
<script src="core/jab/jquery.3.js"></script>
<script src="core/jab/plugins/tumbletext.js"></script>
<script src="core/jab/plugins/curvetext.js"></script>
<script src="core/jab/plugins/rotate-text.js"></script>
<script src="core/jab/plugins/rumbler.js"></script>

</body>
</html>
