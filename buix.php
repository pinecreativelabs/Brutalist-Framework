<?php 
$pagetitle = 'buix';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || BUIX</title>
	<meta name="description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend." />

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || BUIX">
	<meta name="twitter:description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || BUIX" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source CSS and javascript UI and UX library for the brutalist web design trend." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-navigate charcoal-t wheat-t-s"></i></div>
	</div>
	<div class="flex middle column charcoal-t sand-t-s">
		<h1 class="fluid-text start monolisk" style="margin: -10px 0 0 0; font-weight:900;">BUIX</h1>
		<h2 class="flow-text baffle start keep-all depixel" style="margin: 0; padding: 0;">Base User Interface & Experience</h2>
	</div>
</div>
	
<div class="fossil padded smoke-t">
	<div class="wrap-1200">
		<p class="flow-text bitstream">Elements for a brutal user interface and experience.</p>
		<p class="requiresbox bitsream"><span class="flow-text bold"><em>bos/core/css/buix.css</em></span><br /><span class="echo">$buix_css</span></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>

		<nav class="sandbar monolisk sand flow-text">
			<ul>
				<li><a href="#buttons">Buttons</a></li>
				<li><a href="#nav">Navigation</a></li>
				<li><a href="#media">Multimedia</a></li>
				<li><a href="#interactions">Interactions</a></li>
				<li><a href="#modals">Modals</a></li>
				<li><a href="#tabs">Tabs</a></li>
			</ul>
		</nav>
		<?php include 'app/inc/content/pages/buix/buttons.php';?>
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- NAVIGATION -->
		<?php include 'app/inc/content/pages/buix/navigation.php';?>				
		<p class="spacer"></p>
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		
		<!-- MULTIMEDIA -->
		<?php include 'app/inc/content/pages/buix/multimedia.php';?>
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

<!-- Vanilla Javascript -->
<?php 
echo $modal_js;
echo $smoothscroll_js;
echo $treelist_js;
echo $datetime_picker_js;
echo $form_functions_js;
echo $hscroll_js;
echo $link_previewer_js;
?>
<!-- jQuery Plugins -->
<?php 
echo $jquery3;
echo $audio_player_js;
echo $draggable_js;
echo $cdp_js;
echo $pagination_js;
echo $b_loader_js;
echo $video_player_js;
echo $gif_player_js;
echo $presenter_js;
echo $printer_js;
?>

</body>
</html>
