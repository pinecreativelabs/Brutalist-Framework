<?php 
$pagetitle = 'groundwork';
$ignore_tracking = false; 
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Groundwork</title>
	<meta name="description" content="Getting started guide for planning and building with Brutalist Framework." />
	<?php echo $favicon_list;?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Groundwork">
	<meta name="twitter:description" content="Getting started guide for planning and building with Brutalist Framework.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Groundwork" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Getting started guide for planning and building with Brutalist Framework." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-launch sepia rumble charcoal-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">Groundwork</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Getting Started With <em>Brutalist Framework</em></h2>
	</div>
</div>
	
<div class="fossil padded smoke-t">
	<div class="wrap-1200">
		<p class="spacer"></p>
		
		<nav class="sandbar sand monolisk flow-text">
			<ul>
				<li><a href="#quiktour">Quick Tour</a></li>
				<li><a href="#approach"><em>APP</em>roach</a></li>
				<li><a href="#plan">Plan</a></li>
				<li><a href="#build">Build</a></li>
				<li><a href="#launch">Launch</a></li>
			</ul>
		</nav>
			
		<!-- TOUR QUICKIE -->
		<h3 class="fluid-text monolisk" id="quiktour" style="margin: 0;"><strong>Tour Quickie</strong></h3>				
		<p class="flow-text bitstream" style="margin: 1.5rem 0 1.5rem 0;">Let's first take a quick 'n raw look at <em><strong>BF</strong></em>...</p>
		<?php include 'app/inc/content/pages/groundwork/quick-tour.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- APProach -->
		<?php include 'app/inc/content/pages/groundwork/approach.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- PLAN -->
		<h3 class="fluid-text monolisk" id="plan" style="margin: 0;"><strong>Plan</strong></h3>
		<div class="flex bitstream"><div class="padded half">
			<p>Planning your next website or application project will involve various aspects. Thorough project planning should include:</p>
			<ul class="check">
				<li>Understanding your audience &amp; target market</li>
				<li>SEO &amp; marketing strategy</li>
				<li>UI/UX, theme, layout design, &amp; visuals</li>
				<li>Content planning</li>
			</ul>
			<p>Consider these free e-books to help you get started:</p>
		</div><div class="padded half">
			<h4 class="flow-text monolisk center">FREE E-BOOKS</h4>
			<p class="center">
				<a href="https://www.brutalistwebdesign.com/pdf/brut111.pdf" target="_blank" class="invert-h inline-block"><img src="https://www.brutalistwebdesign.com/img/brut111.jpg" alt="brut111" class="xlarge-thumb box-s" /></a>
				<a href="#lockedout" data-modal-open class="invert-h inline-block"><img src="https://www.brutalistwebdesign.com/img/brut121.jpg" alt="brut121" class="greyscale xlarge-thumb box-s" /></a>
				<a href="#lockedout" data-modal-open class="invert-h inline-block"><img src="https://www.brutalistwebdesign.com/img/brut202.jpg" alt="brut202" class="greyscale xlarge-thumb box-s" /></a>
			</p>
		</div></div>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- BUILD -->
		<h3 class="fluid-text monolisk" id="build" style="margin: 0;"><strong>Build</strong></h3>
		<div class="flex bitstream"><div class="padded half">
			<p>If you have opted to use <em>BF</em> to build your next project, consider whether it will be static or dynamic:</p>
			<ul class="none files">
				<li><span class="heavy flow-text"><i class="html"></i> Static</span><br />Plain HTML-only pages. Only CORE CSS and javascript resources will be needed. Ideal for basic landing pages with content that never or rarely changes.</li>
				<li style="margin-top: 1rem;"><span class="heavy flow-text"><i class="php"></i> Dynamic</span><br />PHP-based, allowing for more dynamic and modular content and functionality. Ideal for small business and sites / apps with complex content that regularly changes.</li>
			</ul>
		</div><div class="padded half">
			<h4 class="flow-text charcoal">Get Started with a Boilerplate</h4>
			<p>Depending on whether you're building a static or dynamic page, a couple boilerplate files are included in the root directory of <em>BF</em> as starting points for your next project.</p>
			<p style="margin-top: 1rem;">Use the <a href="boilerplate.html" target="_blank" class="lemonlink"><strong><em>boilerplate.html</em></strong></a> template for static projects, or use the <a href="php_boilerplate.php" target="_blank" class="lemonlink"><strong><em>php_boilerplate.php</em></strong></a> template for dynamic ones.</p>
		</div></div>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- LAUNCH -->
		<h3 class="fluid-text monolisk" id="launch" style="margin: 0;"><strong>Launch</strong></h3>
		<div class="flex bitstream"><div class="padded half">
			<p>Once your website or app has been built, a few things will need to be taken into consideration post-launch:</p>
			<ul class="check">
				<li>Make sure pages have <a href="https://developers.google.com/search/docs/crawling-indexing/special-tags" target="_blank" class="lemonlink">proper meta tags</a></li>
				<li>Proofread content</li>
				<li>Test for errors and performance issues</li>
			</ul>
		</div><div class="padded half">
			<h4 class="flow-text charcoal">Updating <em>BF</em></h4>
			<p>To leverage new features in future versions of <em>BF</em>, keeping the CORE files up-to-date will be necessary. To update, simply replace all files within the <em>/bos</em> directory with those found in the latest version. Eventually, there will be an upgrade script that will automate this process.</p>
		</div></div>
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
echo $rumbler_js;
echo $presenter_js;
?>

</body>
</html>
