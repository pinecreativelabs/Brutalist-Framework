<?php 
$pagetitle = 'rebar';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || ReBAR</title>
	<meta name="description" content="Responsive Breakpoint Assistance Reference. Open source CSS library for responsive behavior." />
	
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || ReBAR">
	<meta name="twitter:description" content="Responsive Breakpoint Assistance Reference. Open source CSS library for responsive behavior.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || ReBAR" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Responsive Breakpoint Assistance Reference. Open source CSS library for responsive behavior." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-converge-left"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">ReBAR</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Responsive Breakpoint Assistance Reference</h2>
	</div>
</div>

<div class="fossil">
	<div class="padding smoke-t bitstream"><div class="wrap-1200">
		<p class="flow-text">ReBAR is a class reference for improving responsive behavior across devices. Visibility of elements are in relation to screen sizes, orientation, and printing. A breakpoint is the point at which an element is either hidden or displayed, based on the width or height of the screen. This is accomplished using media queries.</p>
		<p class="requiresbox"><span class="flow-text bold"><em>core/css/rebar.css</em></span></p><div class="clear-block"></div>
		<div class="disabled padded" style="display: inline-block; margin: 1em 0 1em 0;">
			<h4 class="flow-text no-margins">General Visibility</h4>
			<p>Use these classes to either show or hide any element.</p>
			<p><span class="heavy">.visible</span> - display an element<br /><span class="heavy">.hidden</span> - hide an element</p>
		</div>
	</div></div>
	<!-- WIDTH BREAKPOINTS -->
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#widths">Width Breakpoints</a></li>
						<li><a href="#heights">Height Breakpoints</a></li>
						<li><a href="#orient">Orientation</a></li>
						<li><a href="#puc">Print Utility Classes (PUC)</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded bitstream smoke-t main">
				<!-- WIDTHS -->
				<?php include 'app/inc/content/pages/rebar/widths.php';?>
				<p class="spacer"></p>
				<hr class="thick smoke" />
					
				<!-- HEIGHT BREAKPOINTS -->
				<?php include 'app/inc/content/pages/rebar/heights.php';?>
				<p class="spacer"></p>
				<hr class="thick smoke" />
					
				<!-- ORIENTATION -->
				<?php include 'app/inc/content/pages/rebar/orientation.php';?>
				<p class="spacer"></p>
				<hr class="thick smoke" />
					
				<!-- PRINT UTILITY CLASSES (PUC) -->
				<div class="padded">
					<h3 class="fluid-text monolisk" id="puc">Print Utility Classes (PUC)</h3>
					<p>Render certain content only for printing.</p>
						<div class="info padded">
						<p><b>.print-only</b> - content is only displayed when being printed, but is hidden on screens</p>
						<hr />
						<p><b>.screen-only</b> - content is hidden from being printed, and is only visible on screens</p>
						<hr />
						<p><b>.print-monochrome</b> - applied only to print view, all text is black, and images are rendered in grayscale</p>
					</div>
				</div><p class="padded"></p>
				
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