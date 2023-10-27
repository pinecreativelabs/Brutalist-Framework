<?php 
$pagetitle = 'buix';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || BUIX</title>
	<meta name="description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || BUIX">
	<meta name="twitter:description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || BUIX" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-navigate"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">BUIX</h1>
		<h2 class="flow-text baffle start keep-all" style="margin: 0; padding: 0;">Base User Interface & Experience</h2>
	</div>
</div>
	
<div class="fossil">
	<div class="padding smoke-t bitstream"><div class="wrap-1200">
		<p class="flow-text">Elements for a brutal user interface and experience.</p>
		<p class="requiresbox"><span class="flow-text bold"><em>core/css/buix.css</em></span></p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="courier flow-text" style="margin-top: 1em;">
						<li><a href="#formputs">Forms &amp; Input</a></li>
						<li><a href="#buttons">Buttons</a></li>
						<li><a href="#nav">Navigation</a></li>
						<li><a href="#stickies">Sticky Stacks</a></li>
						<li><a href="#thumbnails">Thumbnails</a></li>
						<li><a href="#interactions">Interactions</a></li>
						<li><a href="#modals">Modals</a></li>
						<li><a href="#tabs">Tabs</a></li>
					</ul>
				</nav>
			</div>
			<div class="main smoke-t bitstream padded">
				<!-- FORMS & BUTTONS -->
				<?php include 'app/inc/content/pages/buix/forms.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- NAVIGATION -->
				<?php include 'app/inc/content/pages/buix/navigation.php';?>				
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- STICKY STACKS -->
				<?php include 'app/inc/content/pages/buix/stax.php';?>	
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- THUMBNAILS -->
				<?php include 'app/inc/content/pages/buix/thumbnails.php';?>	
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- INTERACTIONS -->
				<?php include 'app/inc/content/pages/buix/interactions.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- MODALS -->
				<?php include 'app/inc/content/pages/buix/modals.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- TABS -->
				<?php include 'app/inc/content/pages/buix/tabs.php';?>
				<p class="spacer"></p>
				
			</div><!-- END MAIN -->
		</div>
	</div>
	
	<?php include 'app/inc/content/footer.php';?>
	
</div>


<!-- Download Modal -->
<?php include 'app/inc/content/ui/download-modal.php';?>

<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner">
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<?php echo $global_footer;?>
<!-- jQuery Plugins -->
<script src="core/jab/jquery.3.js"></script>
<script src="core/jab/plugins/draggable.js"></script>
<script src="core/jab/plugins/cdp.js"></script>
<script src="core/jab/plugins/pagination.js"></script>
<script src="core/jab/plugins/b-loader.js"></script>

</body>
</html>
