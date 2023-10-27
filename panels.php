<?php 
$pagetitle = 'panels';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || Panels</title>
	<meta name="description" content="A free open source native icon CSS classes library for the brutalist web design trend." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || Panels">
	<meta name="twitter:description" content="A free open source native icon CSS classes library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || Panels" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source native icon CSS classes library for the brutalist web design trend." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-box"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">Panels</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Pre-packaged page templates</h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">Panels are pre-packaged PHP page starter templates that are ideal for simple and lightweight applications.</p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#panels101">Panels 101</a></li>
						<li><a href="#commerce">Commerce</a></li>
						<li><a href="#data">Data</a></li>
						<li><a href="#promo">Marketing</a></li>
						<li><a href="#portal">Portal</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded smoke-t main">
				<!-- Intro to Panels -->
				<h3 class="fluid-text monolisk" id="panels101"><i class="bi bi-book-open"></i> Panels 101</h3>
				<p class="bitstream">Panels are self-contained starter templates that involve PHP functions, and utilize either XML or CSV data files. They are self-contained packages, so they can easily be included in a PHP boilerplate page.</p>
				<p class="bitstream padded warning" style="margin-top: 1rem;"><strong>NOTE:</strong> Panels will become available in 3.1 and later. Below are planned panels.</p>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- Commerce -->
				<h3 class="fluid-text monolisk" id="commerce"><i class="bi bi-cart"></i> Commerce</h3>
				<p class="bitstream">Commerce panels are useful for e-commerce projects.</p>
				<div class="flex bitstream"><div class="half padded">
						<h4 class="flow-text charcoal"><i class="bi bi-card"></i> Order Form</h4>
						<p>An order form template for collecting payment info.</p>
						<ul class="check">
							<li>Credit card input validation</li>
							<li>Shipping same as payment address option</li>
							<li>Payment method options: credit card, check, or cash</li>
							<li>Shipping method options: USPS, UPS, Fed-Ex, pick-up</li>
							<li>Stores order data in either CSV or XML data files</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					</div><div class="padded half">
						<h4 class="flow-text charcoal"><i class="bi bi-cart"></i> Cart</h4>
						<p>A simple shopping cart template, with product data based on either CSV or XML data.</p>
						<ul class="check">
							<li>Ajaxed drag-n-drop interface</li>
							<li>PayPal cart compatibility</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- Data -->
				<h3 class="fluid-text monolisk" id="data"><i class="bi bi-save"></i> Data</h3>
				<p class="bitstream">Data panels are useful for projects that require data manipulation or interaction.</p>
				<div class="flex bitstream"><div class="half padded">
						<h4 class="flow-text charcoal"><i class="bi bi-edit"></i> CRUD Editor</h4>
						<p>An ajaxed CRUD (create, read, update, delete) editor for CSV data.</p>
						<ul class="check">
							<li>Load CSV files from specified folder</li>
							<li>Edit either TXT or CSV files</li>
							<li>Enable / disable ability to edit, delete, or add new records</li>
							<li>Copy &amp; backup files to another directory</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					</div><div class="padded half">
						<h4 class="flow-text charcoal"><i class="bi bi-zoom-right"></i> Instant Search</h4>
						<p>An ajax instant search box based on XML data.</p>
						<ul class="check">
							<li>Results appear and narrow down in real-time as user types</li>
							<li>Data is retrieved from an XML file</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- Marketing -->
				<h3 class="fluid-text monolisk" id="promo"><i class="bi bi-announce"></i> Marketing</h3>
				<p class="bitstream">Marketing panels are ideal for collecting lead data submitted by users. All submitted data will be stored in CSV files.</p>
				<div class="flex bitstream"><div class="half padded">
						<h4 class="flow-text charcoal"><i class="bi bi-email"></i> Contact Lead Form</h4>
						<p>A standard form for collecting user contact information. This mold will feature:</p>
						<ul class="check">
							<li>Field validation (PHP and javascript)</li>
							<li>Notifies recipient(s) of a submission via email</li>
							<li>Stores field data in CSV file</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					</div><div class="padded half">
						<h4 class="flow-text charcoal"><i class="bi bi-mailbox"></i> Newsletter Subscription</h4>
						<p>A simple sign-up form for email newsletter subscriptions. This mold will feature:</p>
						<ul class="check">
							<li>Fields: name (optional), email (required)</li>
							<li>Subscribe to multiple newsletters at once</li>
							<li>Stores data in CSV file(s)</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- Portals -->
				<h3 class="fluid-text monolisk" id="portal"><i class="bi bi-user"></i> Portal</h3>
				<p class="bitstream">Portal panels are ideal for pages or applications that require a user login. Ideal for protecting valuable or exclusive content and data. No database is needed!</p>
				<div class="flex bitstream"><div class="half padded">
						<h4 class="flow-text charcoal"><i class="bi bi-encrypt"></i> Create Account</h4>
						<p>A lightweight user account creation form.</p>
						<ul class="check">
							<li>Username, email, password</li>
							<li>Password verification</li>
							<li>Data stored in CSV file</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					</div><div class="padded half">
						<h4 class="flow-text charcoal"><i class="bi bi-key"></i> Login</h4>
						<p>A user account login page with logout function.</p>
						<ul class="check">
							<li>Session-based login</li>
							<li>Displays error message if incorrect login credentials</li>
							<li>Logout function ends session</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					</div><div class="padded half">
						<h4 class="flow-text charcoal"><i class="bi bi-upload"></i> FU (File Uploader)</h4>
						<p>A file uploader interface page.</p>
						<ul class="check">
							<li>Option to require user login</li>
							<li>Multiple file upload support</li>
							<li>Specify type(s) of files (images, audio, video, other)</li>
							<li>Ajaxed interface with progress bar</li>
						</ul>
						<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
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
<script src="core/jab/plugins/timeline.js"></script>

</body>
</html>