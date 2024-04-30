<?php 
$pagetitle = 'bos';
$ignore_tracking = false; 
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>BOS Portal</title>
	<meta name="description" content="Construct a brutal web page or application using a deconstructive approach." />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="BOS Portal">
	<meta name="twitter:description" content="Construct a brutal web page or application using a deconstructive approach.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="BOS Portal" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Construct a brutal web page or application using a deconstructive approach." /> 
	<meta property="og:site_name" content="Brutalist Framework" />

	<?php echo $core_css; ?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	<style>
		.cdp_select {background: #333; color: #c2b280; padding: 6px; border: 2px solid #c2b280; border-radius: 6px; -webkit-border-radius: 6px; font-size: 1.5rem; }
	</style>
</head>
<body>
<!-- Sticky Nav -->
<?php include 'app/inc/content/nav.php';?>

<!-- PAGE -->
<header class="brickbuild padded flex middle" id="uptop" style="min-height: 25vh; margin-bottom: 0;">
	<a href="index.php"><img class="large-thumb brdr-s-k red-b invert-h" src="app/files/images/bf3logo_bloodsand.png" alt="Brutalist Framework" /></a>
</header>
<div class="dune flex" style="height: 25vh; margin: 0;">
	<div class="shape point-right sand center flex middle charcoal-t" style="min-width: 15vw; height: 100%; margin: 0 1rem 0 0;">
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-mining wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">BOS Portal</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Base Operating System Portal</h2>
	</div>
</div>
	
<div class="fossil padded smoke-t">
	<div class="wrap-1200">
		<p class="spacer"></p>
		<nav class="sandbar flow-text sand monolisk">
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#modules">Modules</a></li>
				<li><a href="#setup">Setup</a></li>
			</ul>
		</nav>
		<!-- OVERVIEW -->
		<h3 class="fluid-text monolisk" id="overview" style="margin: 0;"><strong>Be the <em>BOS</em> of Your Content</strong></h3>				
		<p class="flow-text bitstream" style="margin: 1.5rem 0 1.5rem 0;">BOS ("<em>Base Operating System</em>") is the back-end dashboard for the administration of all static or dynamic application content data.</p>

		<p class="spacer"></p>
		<p>[ place slideshow here...]</p>
		
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- FEATURES -->
		<h3 class="fluid-text monolisk" id="features" style="margin: 0;"><strong>Features</strong></h3>
		<div class="flex"><div class="padded half">
			<p>The</p>
		</div><div class="padded half">
			<div class="cdp-wrap padded dune sand-b b-s-k rounded" id="cdp1">
				<select class="cdp_select depixel">
					<option value="0">User Features</option>
					<option value="1">FAM Features</option>
					<option value="2">System Features</option>
				</select>

				<div class="content bitstream">
					<div class="cdp_element" data-option="0">
								<ul class="square">
									<li>Multiple user accounts</li>
									<li>User profiles</li>
									<li>Permission Access Levels (PAL)</li>
									<li>Manage user groups</li>
								</ul>
					</div>
					<div class="cdp_element" data-option="1">
								<ul class="square">
									<li>Upload &amp; delete files</li>
									<li>Copy file URLs in one click</li>
									<li>Validation of file types</li>
								</ul>
					</div>
					<div class="cdp_element" data-option="2">
						<h4 class="flow-text monolisk"><strong>System Features</strong></h4>
						<ul class="square">
									<li>Define locale &amp; other global defaults</li>
									<li>Set SEO &amp; Meta data defaults</li>
									<li>Configure "Coming Soon" page</li>
									<li>Put app into "Maintenance Mode"</li>
									<li>Customize error page messages</li>
						</ul>
					</div>
				</div>
			</div>
		</div></div>
		
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
			
		<!-- MODULES -->
		<h3 class="fluid-text monolisk" id="modules" style="margin: 0;"><strong>Modules</strong></h3>
			
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
			
		<!-- SETUP -->
		<h3 class="fluid-text monolisk" id="setup" style="margin: 0;"><strong>Setup</strong></h3>
		
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
echo $jquery3;
echo $cdp_js;
?>

</body>
</html>
