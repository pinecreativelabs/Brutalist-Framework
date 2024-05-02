<?php 
$pagetitle = 'home';
$ignore_tracking = false;
require 'bos/build/constructor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework</title>
	<meta name="description" content="A free and open source framework for brutalist web design & application projects using PHP, HTML, CSS and javascript. Build Brutality." />
	<?php echo $favicon_list;?>

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework">
	<meta name="twitter:description" content="A free and open source framework for brutalist web design & application projects using PHP, HTML, CSS and javascript. Build Brutality.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free and open source framework for brutalist web design & application projects using PHP, HTML, CSS and javascript. Build Brutality." /> 
	<meta property="og:site_name" content="Brutalist Framework" />
	
	<?php echo $core_css;?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	<link href="app/themes/default/home.css" type="text/css" rel="stylesheet" media="all" />
	<link href="app/themes/default/deconstructor.css" type="text/css" rel="stylesheet" media="all" />
	
	<style>
		.tabs label {border-radius: 14px 14px 0 0; -webkit-border-radius: 14px 14px 0 0; font-weight: 900;}
		.tabs .tab {border-radius: 0 14px 14px 14px; -webkit-border-radius: 0 14px 14px 14px;}
		.tabs input[type="radio"]:checked + label {background-color: #dac3a1 !important;}
		.cdp_select {background: #333; color: #c2b280; padding: 6px; border: 2px solid #c2b280; border-radius: 6px; -webkit-border-radius: 6px; font-size: 1.5rem; }
		.sandlink {border-bottom: 3px dotted #5c4d16;}
		.sandlink:hover {border-bottom: 3px solid #5c4d16;}
		.sandtitle{max-width: 80%; padding: 8px; border-radius: 1rem 0 0 0;}
		.sandtitle h4 {margin: 0 0 0 8px; font-weight: 900; text-align:left;}
	</style>
</head>
<body>
<!--
<div class="bflogo"><img src="app/files/images/bf3logo.png" alt="Brutalist Framework" class="responsive" /></div>
-->

<!-- Sticky Nav -->
<?php include 'app/inc/content/nav.php';?>

<!-- Page Nav -->
<div class="jumpnav">
	<a href="#litterbox" class="jumpbtn shape quadrant top-right monolisk" style="padding-top: 2rem;" data-modal-open><span class="sepia"><i class="bi bi-cat bi-2x"></i></span></a>
	<a href="#build" class="brik monolisk"><i class="bi bi-mining"></i><br />BUILD</a>
	<a href="#core" class="brik monolisk"><i class="bi bi-core-block"></i><br />CORE</a>
	<a href="#molds" class="brik monolisk"><i class="bi bi-corners"></i><br />MOLDS</a>
</div>

<!-- BENTOGRID HEADER -->
<div class="brickbuild" style="background-attachment: fixed; margin: 0; padding: 0; width: 100vw;">
	<div class="bxfade" style="position: fixed; top: 0; left: 0; z-index: 1;">
		<div class="element"></div>
		<div class="element"></div>
		<div class="element"></div>
	</div>
	<!-- layer 2 -->
	<div style="position: relative; z-index: 2;">
		<div class="container-1200">
		<div class="block-wrap col" id="uptop">
		<div class="block bw100 center">
			<img src="app/files/images/bf3logo_bloodsand.png" alt="Brutalist Framework" class="sepia" style="margin: 2rem 0 0 0; max-width: 360px; height: auto !important;" />
		</div><div class="block bw100">
			<div class="brick-wrap center" style="margin-top: -4rem;">
				<div class="brick monolisk flow-text" style="font-weight: 900;">
					<a href="#download" class="btn shape point-left sand charcoal-t invert-h" style="margin: 30px -22px 0 0; padding: 0.5rem 0.5rem 0.5rem 1.5rem;" data-modal-open>Download</a>
				</div>
				<div class="brick">
					<div class="shape hexagon sand flex middle" style="margin: 2rem auto 0 auto; width: 150px; height: 150px;">
						<div class="shape hexagon emptiness sand-t monolisk center" style="padding: 0; width: 140px; height: 140px;"><div class="flex middle" style="height: 100%;">
							<div class="inline-block" style="align-self: center;">
								<span style="font-size: 20px;">version</span><br /><span class="glitchtext" style="font-size: 4rem; line-height: 90%;"><strong>3.0.3</strong></span>
							</div>
						</div></div>
					</div>
				</div>
				<div class="brick monolisk flow-text" style="font-weight: 900;">
					<a href="#download" class="btn shape point-right sand charcoal-t invert-h" style="margin: 30px 0 0 -22px; padding: 0.5rem 1.5rem 0.5rem 0.5rem;" data-modal-open>Download</a>
				</div>
			</div>
		</div></div>
		</div>

	<div class="container-1200" id="build" style="margin-top: 15vh;">
		<div class="bentogrid">
			<!-- INTRO -->
			<div data-bento="3x2"><div class="padded">
				<div class="sand sliced-corner charcoal-t sand-t-s monolisk sandtitle">
					<h4 class="flow-text all caps">Construct Something Solid</h4>
				</div>
				<div class="sand-b b-s-k padded terminal disterminal" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<p class="depixel flow-text" style="padding: 0 1.5rem 1rem 1.5rem;"><span class="baffle">A Free &amp; Open Source Framework for the Brutalist Web Design Style</span><span class="blink">_</span></p>
				</div>
				
				<div class="presenter-autoplay" style="margin-top: 22px;">
					<a href="#" class="slide-prev charcoal smoke-t invert-h rounded sand-b b-s-k">&laquo;</a>
					<div class="slides dune b-s-k sand-b rounded" style="height: 33vh;">
						<div class="slide"><div class="padded">
							<h5 class="monolisk charcoal-t fluid-text heavy sand-t-s" style="margin: 0; padding: 0;"><em>Built with...</em></h5>
							<div class="block-wrap"><div class="block bw50 sm-100 md-100" style="font-size:4rem;">
								<ul class="tiles files sepia">
									<li><i class="css"></i></li><li><i class="html"></i></li><li><i class="js"></i></li><li><i class="php"></i></li>
								</ul><ul class="tiles files sepia" style="margin-top: -20px;">
									<li><i class="xml"></i></li><li><i class="csv"></i></li><li><i class="json"></i></li>
								</ul>
							</div><div class="block bw50 sm-100 md-100">
								<ul class="square depixel" style="font-size: 1.25rem;">
									<li>CSS3</li><li>HTML5</li><li>jQuery / vanilla js</li><li>Plain PHP</li><li>XML, CSV, &amp; JSON</li>
								</ul>
							</div></div>
						</div></div>
						<div class="slide"><div class="padded">
							<h5 class="monolisk charcoal-t fluid-text heavy sand-t-s" style="margin: 0; padding: 0;"><em>Features</em></h5>
							<ul class="square depixel" style="font-size: 1.25rem;">
								<li>Open source under MIT</li>
								<li>CSS &amp; javascript libraries</li>
								<li>Portable &amp; dependency-free</li>
							</ul>
						</div></div>
						<div class="slide"><div class="padded">
							<h5 class="monolisk charcoal-t fluid-text heavy sand-t-s" style="margin: 0; padding: 0;"><em>Ideal for...</em></h5>
							<ul class="square depixel" style="font-size: 1.25rem;">
								<li>Static or dynamic websites &amp; apps</li>
								<li>Small &amp; personal projects</li>
								<li>Creative services / agencies</li>
								<li>Beginner &amp; novice web app developers</li>
							</ul>
						</div></div>
						<div class="slide dune10191"><div class="padded">
							<h5 class="monolisk sand-t fluid-text heavy charcoal-t-s" style="margin: 0; padding: 0;"><em>Construct<br />Something<br />Solid</em></h5>
						</div></div>
					</div>
					<a href="#" class="slide-next charcoal rounded smoke-t invert-h sand-b b-s-k">&raquo;</a>
				</div>
				
			</div></div>
			<!-- GET STARTED -->
			<div data-bento="1x1"><div class="padded monolisk">
				<a href="groundwork.php" class="invert-h">
				<div class="sand sliced-corner charcoal-t sandtitle">
					<h4 class="flow-text">Groundwork</h4>
				</div>
				<div class="sand-b b-s-k padded dune flow-text center" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<p style="line-height: 120%; padding-top: 1rem;"><i class="bi bi-launch bi-4x rumble sepia"></i></p>
					<p style="line-height: 180%;"><strong>Project Planning</strong><br />
					<span class="charcoal-b b-s-t rounded charcoal-t sand-t-s" style="padding: 8px; font-weight: 900;"><em>Get Started &raquo;</em></span></p>
				</div></a>
			</div></div>
			<!-- THE CORE -->
			<div data-bento="1x1"><div class="padded monolisk center">
				<a href="construct.php" class="invert-h">
				<div class="sand sliced-corner sandtitle charcoal-t"><h4 class="flow-text">CORE</h4></div>
				<div class="sand-b b-s-k padded dune flow-text" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<p style="line-height: 120%; padding-top: 1rem;"><i class="bi bi-core-block bi-4x"></i></p>
					<p style="line-height: 180%;"><strong>The heart of BF</strong><br />
					<span class="charcoal-b b-s-t rounded charcoal-t sand-t-s" style="padding: 8px; font-weight: 900;"><em>Construct &raquo;</em></span></p>
				</div></a>
			</div></div>
		</div>
		<div class="block-wrap">
			<!-- BOS PORTAL -->
			<div class="block bw50"><div class="padded">
				
				<div class="sand sliced-corner charcoal-t sand-t-s monolisk sandtitle"><h4 class="flow-text">BOS Portal</h4></div>
				<div class="sand-b b-s-k dune" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<div id="rotate-text-1" class="rotator flow-text depixel terminal disterminal" style="border-radius: 0 8px 0 0; padding: 0 1.5rem 1rem 1.5rem;" data-rotate-interval="3000" data-rotate-animate="fadeIn,fadeOut">
						<p class="rotate-arena"></p>
						<ul>
							<li>BOS:<br />Base Operating System</li>
							<li>A backend portal<br />for building brutality.</li>
							<li>Flat-file.<br />Databaseless.</li>
							<li>A portable portal<br />built with plain PHP.</li>
							<li>MOLDS:<br />Manageable modules.</li>
							<li>Create and update<br />XML or CSV content data.</li>
							<li>Be the BOS<br />of your content.</li>
							<li>Coming in<br />version 3.1</li>
						</ul>
					</div>
					<div class="padded">
						<h4 class="flow-text depixel" style="margin: 0 0 14px 0; font-weight: 900;">Preview BOS</h4>
						<div class="cdp-wrap" id="cdp1">
						  <select class="cdp_select depixel">
							<option value="0">BOS Home</option>
							<option value="1">BOS Backdoor</option>
							<option value="2">User Management</option>
							<option value="3">File Management</option>
							<option value="4">Data Management</option>
							<option value="5">Other Features</option>
						  </select>

						  <div class="content">
							<div class="cdp_element" data-option="0">BOS Home Dashboard</div>
							<div class="cdp_element" data-option="1">BOS Backdoor</div>
							<div class="cdp_element" data-option="2">User Management</div>
							<div class="cdp_element" data-option="3">File Management</div>
							<div class="cdp_element" data-option="4">Data Management</div>
							<div class="cdp_element" data-option="5">Other Features</div>
						  </div>
						</div>
					</div>
				</div>
				<!--
				<div class="left shape point-right sand" style="height: 44px; width: 66px;"></div>
				<div class="left shape chevron-right smoke" style="height: 44px; width: 66px; margin-left: -8px;"></div>
				-->
				
			</div></div>
			<!-- What's New Box -->
			<div class="block bw50"><div class="padded">
				<div class="sand sliced-corner charcoal-t sandtitle"><h4 class="flow-text monolisk">What's New</h4></div>
				<div class="sand-b b-s-k padded dotgrid-throb" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<div class="tabs">
						<input type="radio" name="newstabs" checked="checked" id="refguide">
						<label for="refguide" class="flow-text sand invert-h"><i class="bi bi-reference"></i></label>
						<div class="tab">
							<h4 class="flow-text sand charcoal-t depixel sliced-corner" style="margin: 0; padding: 8px;"><i class="bi bi-reference"></i> Reference Guides</h4>
							<div class="block-wrap stretch center dune b-s-k sand-b" style="border-radius: 0 0 1rem 0;">
								<div class="block g0 monolisk dune sand-b b-s-k charcoal-t-s" style="font-size: 2rem;">
								<p class="sepia"><i class="bi bi-new throb"></i><br /><i class="blink bi bi-free"></i><br /><i class="bi bi-books"></i></p></div>
								<!-- latest ebook -->
								<div class="block g1 center"><a href="https://www.brutalistwebdesign.com/pdf/brut111.pdf" target="_blank" class="invert-h">
									<img src="https://www.brutalistwebdesign.com/img/brut111.jpg" class="box-s-k" style="max-width: 180px; height: auto !important; border: 3px solid #000;" alt="Brutalist Substyles" />
								</a></div>
								<div class="block g1 center flow-text monolisk allcaps" style="font-weight:900;">
									<a href="https://www.brutalistwebdesign.com" target="_blank" class="btn shape point-right sand charcoal-t invert-h" style="margin: 30px 0 0 -22px; padding: 0.5rem 1.5rem 0.5rem 0.5rem;"><em>View All</em> &raquo;</a>
								</div>
							</div>
						</div>
						<!-- News -->
						<input type="radio" name="newstabs" id="shoutouts">
						<label for="shoutouts" class="flow-text sand invert-h"><i class="bi bi-bullhorn sepia charcoal-t-s"></i></label>
						<div class="tab">
							<h4 class="flow-text sand charcoal-t depixel sliced-corner" style="margin: 0 0 1rem 0; padding: 8px;"><i class="bi bi-bullhorn sepia"></i> Shoutouts</h4>
							<div class="box-s padded terminal b-b-t bitstream">
								<h5 class="flow-text"><strong>SHOWCASE:</strong> <em>Hitness.club</em></h5>
								<p>Check out <a href="https://hitness.club/" target="_blank" class="lemonlink">hitness.club</a>, built using BF! Hitness Club is a DIY online TV station / art-project based on open-source software. Based in Germany.</p>
							</div>
						</div>
						<!-- Changelog -->
						<input type="radio" name="newstabs" id="changelog">
						<label for="changelog" class="monolisk flow-text sand invert-h">Changelog</label>
						<div class="tab">
							<h4 class="flow-text sand charcoal-t depixel sliced-corner" style="margin: 0; padding: 8px;">What's New in 3.0.3</h4>
							<div class="courier terminal padded" style="font-size: 14px; line-height: 140%;">
							<?php
							$changelog = fopen("changelog.txt", "r") or die("Unable to open file!");
							echo nl2br(fread($changelog,filesize("changelog.txt")));
							fclose($changelog);
							?>
							</div>
						</div>
					</div>
				</div>
			</div></div>
			
			<!-- Blueprint Grid Box -->
			<div class="block bw50"><div class="padded">
				<div class="sliced-corner blueberry hue-h" style="padding: 6px;">
					<a href="https://www.blueprintgrid.com" target="_blank"><div class="blueprint sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-grid"></i> Blueprint Grid</h4>
						<p class="bitstream" style="min-height: 90px;">An open source multimethod grid library built with flexbox and CSS grid. Create scalable mobile-friendly responsive website and application layouts.</p>
					</div></a>
				</div>
			</div></div>
			<!-- Reference Guides Box -->
			<div class="block bw50"><div class="padded">
				<div style="padding: 6px;" class="hue-h sliced-corner red">
					<a href="https://www.brutalistwebdesign.com/" target="_blank"><div class="emptiness padded sliced-corner">
						<h4 class="fluid-text monolisk red-t white-t-s"><i class="bi bi-reference"></i> Reference Guides</h4>
						<p class="smoke-t bitstream" style="min-height: 90px;">Free e-books and other resources about the brutalist web design style and how to develop applications with <em>Brutalist Framework</em>.</p>
					</div></a>
				</div>
			</div></div>
			
			<!-- About Box -->
			<div class="block bw50"><div class="padded">
				<div class="sand sliced-corner charcoal-t sandtitle"><h4 class="flow-text monolisk">Background</h4></div>
				<div class="sand-b b-s-k padded dotgrid-throb flow-text" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<div class="lcd-trip jagged" style="max-width: 80%; margin: 2rem auto 3rem auto;"><div class="padded">
						<p class="monolisk fluid-text-h3 center glitchtext blue-t" style="line-height: 100%;">Only through<br />brutality<br />do we evolve.</p>
						<p class="center glitchtext"><a href="about.php" class="b-s-t lime-b btn rounded flow-text depixel invert-h sweden">About <em>BF</em> &raquo;</a></p>
					</div></div>
				</div>
			</div></div>
			
			
			<div class="block bw50"><div class="padded">
				<div class="sand sliced-corner charcoal-t sandtitle"><h4 class="flow-text monolisk"><i class="bi bi-amp charcoal-t-s"></i> Brutal Blast</h4></div>
				<div class="sand-b b-s-k padded terminal flow-text" style="margin-top: -2px; border-radius: 0 1rem 2rem 3rem;">
					<p>sign-up form here</p>
				</div>
			</div></div>
			
		</div><!-- end block-wrap body -->
		
	</div>
	<div class="vh10"></div>
	

	<div class="black sepia" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
	</div>

	<!-- CUBESEA -->
	<div style="width: 100vw; height: 90vh; position: relative;">
		<header class="homeblock flex middle monolisk" style="margin: -3em 0 0 0; padding: 0;">
			<div class="xfade center sand-t black-t-s">
				<div class="element"><p class="fluid-text-h2 rumble"><strong>BE A REBEL</strong></p></div>
				<div class="element"><p class="fluid-text-h2"><strong>USE BF TO CREATE ANTI-DESIGNS</strong></p></div>
				<div class="element"><p class="fluid-text-h2 rumble"><strong>CAUSE CHAOS</strong></p></div>
			</div>
		</header>
		<div class="grid-mask">
			<div class="main">
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>

				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div class="special"><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>

				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>

				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>

				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
				<div><div class="panel">&#9947;</div><div class="panel">&#9947;</div></div>
			</div>
		</div>
	</div>
	<!-- CORE Components -->
	<div class="black sepia" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
		<div class="clear-block jagged" id="core"><p class="checkerboard padding"></p></div>
	</div>
	<div class="vh10"></div>
	<div class="container-1200">
		<div class="bentogrid"><div class="sand-b b-s-k rounded infinitile" data-bento="4x1"><div class="padded"><div class="padded">
			<div class="flex"><div class="half padded">
				<h3 class="fluid-text monolisk charcoal-t glitchtext" style="margin: 0; padding: 0;"><strong><i class="bi bi-core-block"></i> CORE</strong></h3>
				<p class="flow-text charcoal-t bitstream" style="margin: 0 0 1.5em 0;"><strong>CSS library &amp; javascript plugin components for constructing client-side user experiences.</strong></p>
			</div><div class="padded half center">
				<p class="flow-text monolisk shape point-right charcoal inline-block scale-h sepia" style="margin: 2rem 0 2rem 0; padding: 8px;">
					<a href="construct.php" class="btn btn-large shape point-right sweden invert-h"><strong>Construct with CORE &raquo;&nbsp;&nbsp;</a>
				</p>
			</div></div>
			<div class="sepia"><?php include 'app/inc/content/pages/index/core-components.php';?></div>
		</div></div></div></div>
	</div><div class="vh10"></div>

	<!-- MOLDS -->
	<div class="black sepia" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
		<div class="clear-block jagged" id="molds"><p class="checkerboard padding"></p></div>
	</div>

	<div class="vh10"></div>
	<div class="container-1200">
		<div class="bentogrid"><div class="sand-b b-s-k rounded infinitile" data-bento="4x1"><div class="padded"><div class="padded">
			<h3 class="fluid-text glitchtext monolisk charcoal-t" style="margin: 0; padding: 0;"><strong><i class="bi bi-corners"></i> MOLDS</strong></h3>
			<div class="flex"><div class="padded half">
				<h4 class="flow-text charcoal-t bitstream" style="margin: 0 0 1.5em 0;"><strong>Modular Objects Linked Data Source</strong></h4>
				<p class="bitstream padded sand-b b-s-k dune rounded box-s-k">
					MOLDS are PHP-based content objects constructed from XML or CSV data that is managed via the<br /><a href="bos-portal.php" class="sandlink">BOS Portal</a>.
				</p>
			</div><div class="half center">
				<p class="flow-text monolisk shape point-right charcoal inline-block scale-h sepia" style="margin-top: 4rem; padding: 8px;">
					<a href="molds.php" class="btn btn-large shape point-right sweden invert-h"><strong>Make MOLDS &raquo;&nbsp;&nbsp;</a>
				</p>
			</div></div>
		</div></div></div></div>
	</div><div class="vh10"></div>


<div class="checkerboard" style="width: 100vw; border-top: 6px solid #ff0000; border-bottom: 6px solid #ff0000;">
	<p class="spacer"></p>
	<div class="wrap-1200 padded">
		<div class="flex"><div class="padded half">
				<div class="sliced-corner black" style="padding: 6px;"><div class="padded lemon sliced-corner">
					<h4 class="monolisk fluid-text red-t black-t-s" style="margin: 0; padding: 0;">Brutalist<br />Deconstructivist<br />Design Approach</h4>
					<p class="black-t bitstream" style="margin-top: 1rem; margin-bottom: 1rem;"><strong>Read about our unique design approach to planning, designing, and constructing brutalist websites &amp; applications.</strong></p>
					<p class="center monolisk scale-h" style="margin-bottom: 1.5rem; font-weight:900;">
						<a href="#" target="_blank" class="b-s-k red-b btn btn-medium flow-text hue-h black lemon-t"><strong>Download eBook <em>FREE</em></strong></a>
					</p>
				</div></div>
			</div><div class="padded half">
				<div style="margin: 1rem auto 4.5rem auto;">
					<div id="deconstructor">
						<div class="albers1 red"></div><div class="albers2 red"></div><div class="albers3 red"></div>
						<div class="albers4 black"></div><div class="albers5 black"></div>
						<div class="albers6 red"></div><div class="albers7 black"></div>
						<div class="albers8 red"></div><div class="albers9 black"></div>
						<div class="albers10 red"></div><div class="albers11 black"></div>
						<div class="albers12 red"></div><div class="albers13 black"></div>
						<div class="albers14 red"></div><div class="albers15 black"></div>
						<div class="albers16 black"></div><div class="albers17 red"></div>
						<div class="albers18 black"></div><div class="albers19 red"></div>
						<div class="albers20 black"></div><div class="albers21 red"></div>
						<div class="albers22 black"></div><div class="albers23 red"></div>
						<div class="albers24 black"></div><div class="albers25 black"></div><div class="albers26 black"></div>
						<div class="albers27 red"></div><div class="albers28 black"></div>
						<div class="albers29 red"></div><div class="albers30 black"></div>
						<div class="albers31 red"></div><div class="albers32 black"></div>
						<div class="albers33 red"></div><div class="albers34 black"></div>
						<div class="albers35 black"></div><div class="albers36 black"></div>
						<div class="albers37 red"></div><div class="albers38 black"></div>
						<div class="albers39 red"></div><div class="albers40 black"></div>
						<div class="albers41 red"></div><div class="albers42 black"></div>
						<div class="albers43 red"></div><div class="albers44 black"></div>
						<div class="albers45 black"></div><div class="albers46 black"></div>
						<div class="albers47 red"></div><div class="albers48 black"></div>
						<div class="albers49 red"></div><div class="albers50 black"></div>
						<div class="albers51 red"></div><div class="albers52 black"></div>
						<div class="albers53 red"></div><div class="albers54 black"></div>
						<div class="albers55 black"></div><div class="albers56 red"></div>
						<div class="albers57 black"></div><div class="albers58 red"></div>
						<div class="albers59 black"></div><div class="albers60 red"></div>
						<div class="albers61 black"></div><div class="albers62 red"></div>
						<div class="albers63 black"></div><div class="albers64 black"></div>
						<div class="albers65 red"></div><div class="albers66 black"></div>
						<div class="albers67 red"></div><div class="albers68 black"></div>
						<div class="albers69 red"></div><div class="albers70 black"></div>
						<div class="albers71 black"></div><div class="albers72 black"></div><div class="albers73 black"></div>
						<div class="albers74 red"></div><div class="albers75 black"></div>
						<div class="albers76 red"></div><div class="albers77 red"></div><div class="albers78 red"></div>
						<div class="albers79 black"></div><div class="albers80 black"></div><div class="albers81 black"></div>
						<div class="albers82 black"></div><div class="albers83 black"></div>
						<div class="albers84 red"></div><div class="albers85 black"></div>
						<div class="albers86 red"></div><div class="albers87 red"></div><div class="albers88 red"></div>
						<div class="albers89 black"></div><div class="albers90 black"></div><div class="albers91 black"></div>
						<div class="albers92 red"></div><div class="albers93 red"></div><div class="albers94 red"></div>
						<div class="albers95 black"></div><div class="albers96 black"></div><div class="albers97 black"></div>
						<div class="albers98 red"></div><div class="albers99 red"></div><div class="albers100 red"></div>
						<div class="albers101 black"></div><div class="albers102 black"></div>
						<div class="albers103 red"></div><div class="albers104 red"></div>
						<div class="albers105 black"></div><div class="albers106 black"></div>
						<div class="albers107 red"></div><div class="albers108 red"></div>
						<div class="albers109 black"></div><div class="albers110 red"></div>
						<div class="albers111 black"></div><div class="albers112 red"></div>
						<div class="albers113 red"></div><div class="albers114 black"></div>
						<div class="albers115 black"></div><div class="albers116 black"></div>
						<div class="albers117 red"></div><div class="albers118 black"></div>
						<div class="albers119 red"></div><div class="albers120 black"></div>
						<div class="albers121 red"></div><div class="albers122 black"></div>
						<div class="albers123 black"></div><div class="albers124 black"></div>
						<div class="albers125 red"></div><div class="albers126 black"></div>
						<div class="albers127 red"></div><div class="albers128 black"></div>
						<div class="albers129 red"></div><div class="albers130 black"></div>
						<div class="albers131 black"></div><div class="albers132 black"></div>
						<div class="albers133 red"></div><div class="albers134 black"></div>
						<div class="albers135 red"></div><div class="albers136 black"></div>
						<div class="albers137 red"></div><div class="albers138 black"></div>
						<div class="albers139 black"></div><div class="albers140 black"></div>
						<div class="albers141 red"></div><div class="albers142 black"></div>
						<div class="albers143 red"></div><div class="albers144 black"></div>
						<div class="albers145 black"></div><div class="albers146 black"></div>
						<div class="albers147 red"></div><div class="albers148 black"></div><div class="albers149 red"></div>
					</div>
				</div>
		</div></div>
	</div>
	<p class="spacer"></p>
</div>

<div class="black" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
	<div class="clear-block jagged" id="news"><p class="checkerboard padding"></p></div>
</div>
<?php include 'app/inc/content/footer.php';?>

</div><!-- end layer 2 -->
</div>

<!-- Download Modal -->
<?php include 'app/inc/content/ui/download-modal.php';?>

<!-- Litterbox Modal -->
<?php include 'app/inc/content/ui/sanddune-modal.php';?>

<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner draggable"><!-- Remove "draggable" class to prevent modals from being moveable -->
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<?php 
echo $bentogrid_js;
echo $buix_js;
echo $baffle_js;
echo $modal_js;
echo $jquery3;
echo $cdp_js;
echo $presenter_js;
echo $rotate_text_js;
echo $rumbler_js;
?>
</body>
</html>