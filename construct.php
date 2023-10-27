<?php 
$pagetitle = 'construct';
$ignore_tracking = true; 
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || CORE</title>
	<meta name="description" content="Construct a brutal web page or application using a deconstructive approach." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || CORE">
	<meta name="twitter:description" content="Construct a brutal web page or application using a deconstructive approach.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || CORE" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Construct a brutal web page or application using a deconstructive approach." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-core-block"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">CORE</h1>
		<h2 class="flow-text baffle start keep-all" style="margin: 0; padding: 0;">Construct Object Rendering Engine</h2>
	</div>
</div>
	
<div class="fossil">
	<div class="padding smoke-t"><div class="wrap-1200">
		<p class="flow-text bitstream">The core of BF is composed of CSS, javascript, and PHP objects that can be used to construct and render elements on an HTML page or PHP application.</p>
		<div class="checkerboard padded" style="margin-top: 1.5em;">
			<h3 class="monolisk fittext red-t center" style="text-shadow: 4px 3px #fff;"><strong>A Dualistic Approach</strong></h3>
		</div>
		<div class="flex"><div class="padded half mono">
			<h4 class="monolisk fluid-text"><strong>Deconstruct</strong></h4>
			<p class="bitstream">Break down overall concepts and ideas into dislocated, raw elements and components.</p>
			<p class="flow-text red-t">&#9626;\&#9697;\&#9698;\&#9709;\&#9556;\&#9706;\&#9703;\&#9693;\&#9623;</p>
		</div><div class="padded half mono-inv">
			<h4 class="monolisk fluid-text"><strong>Construct</strong></h4>
			<p class="bitstream">Assemble, consolidate, and build components into a creative end product that we're happy with.</p>
			<p class="flow-text lemon-t">&#9623;&#9626;&#9556;&#9693;&#9697;&#9698;&#9706;__&#9709;__&#9703;</p>
		</div></div>
		<div class="padded lemon black-t bitstream">
			
			<p class="flow-text">Let's deconstruct this b<span class="baffle-forever arial">itc</span>h and take a look at how the CORE of BF works.</p>
		</div>
		<p class="spacer"></p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="courier flow-text">
						<li><a href="#structure">Structure</a></li>
						<li><a href="#css">CSS</a></li>
						<li><a href="#jab">JAB</a></li>
						<li><a href="#php">PHP CORE</a></li>
						<li><a href="#kat-bekah">KAT &amp; BEKAH</a></li>
						<li><a href="#brad">BRAD</a></li>
					</ul>
				</nav>
			</div>
			<div class="main smoke-t padded">
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
