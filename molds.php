<?php 
$pagetitle = 'molds';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || MOLDS</title>
	<meta name="description" content="Makeable Object Layout and Design Source for application development." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || MOLDS">
	<meta name="twitter:description" content="Makeable Object Layout and Design Source for application development.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || MOLDS" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Makeable Object Layout and Design Source for application development." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-corners"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">MOLDS</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Makeable Object Layout &amp; Design Source</h2>
	</div>
</div>
<div class="fossil">
	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">MOLDS help shape element objects into pre-defined layouts and designs.</p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#molds101">Overview</a></li>
						<li><a href="#config">Configure</a></li>
						<li><a href="#cssjs">CSS &amp; JS</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded smoke-t main">
				<!-- OVERVIEW -->
				<?php include 'app/inc/content/pages/molds/overview.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- CONFIGURE MOLDS -->
				<?php include 'app/inc/content/pages/molds/configure.php';?>
				
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- CSS & JS Resources -->
				<h3 class="fluid-text monolisk files" id="cssjs">CSS &amp; Javascript</h3>
				<p class="bitstream">CSS resources for MOLDS are found within their respective directories for each MOLD. For Boards, the CSS is in a <em>view.css</em> file (ex: <em>/core/molds/boards/blogboard/view.css</em>). All CSS resources are automatically added to the header, if that particular MOLD is enabled.</p>
				<p style="margin-top: 1rem;" class="bitstream">Javascript resources are found in the <em>/core/jab</em> or <em>/core/jab/plugins</em> directories, depending on what javascript file each MOLD requires. All javascript resources will need to be manually added to the end of your application page.</p>
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