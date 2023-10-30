<?php 
$pagetitle = 'index';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework</title>
	<meta name="description" content="A free open source native icon CSS classes library for the brutalist web design trend." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework">
	<meta name="twitter:description" content="A free open source native icon CSS classes library for the brutalist web design trend.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<!-- Twitter Summary card images must be at least 120x120px -->
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="A free open source native icon CSS classes library for the brutalist web design trend." /> 
	<meta property="og:site_name" content="Brutalist Framework" />
	<?php } ?>
	<?php echo $global_header;?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	<link href="app/themes/default/home.css" type="text/css" rel="stylesheet" media="all" />
	<link href="app/themes/default/deconstructor.css" type="text/css" rel="stylesheet" media="all" />
</head>
<body>
<div class="bflogo"><img src="app/files/images/bf3logo.png" alt="Brutalist Framework" class="responsive" /></div>

<!-- Sticky Nav -->
<?php include 'app/inc/content/nav.php';?>

<!-- Page Nav -->
<div class="jumpnav">
	<a href="#build" class="jumpbtn shape quadrant top-right monolisk"><i class="throb bi bi-down bi-3x"></i><br /><strong>BUILD</strong></a>
	<a href="#core" class="brik monolisk"><i class="bi bi-core-block"></i><br />CORE</a>
	<a href="#molds" class="brik monolisk"><i class="bi bi-corners"></i><br />MOLDS</a>
	<!--<a href="#news" class="brik monolisk"><span class="throb-throw"><i class="bi bi-announce"></i></span><br />News</a>-->
</div>

<!-- CUBESEA -->
<div class="brickbuild" id="uptop" style="width: 100vw; height: 90vh; position: relative;">
	<header class="homeblock flex middle monolisk" style="margin: -3em 0 0 0; padding: 0;">
		<div class="shape hexagon red flex middle" style="margin-top: -6em; width: 150px; height: 150px;">
		<div class="shape hexagon violence yellow-t monolisk center" style="padding: 25px 0 0 0; width: 140px; height: 140px;">
			<span style="font-size: 20px;">version</span><br /><span class="glitchtext" style="font-size: 4rem; line-height: 90%;"><strong>3.0</strong></span>
		</div></div>
		<div class="xfade center">
			<div class="element"><h1 class="fluid-text yellow-t blue-t-s"><strong>Brutalist Framework</strong></h1></div>
			<div class="element"><h2 class="fluid-text yellow-t blue-t-s">A Framework for the Brutalist<br />Web Design Style</h2></div>
			<div class="element"><p class="fluid-text-h1 yellow-t glitchtext"><strong>Build Brutality.</strong></p></div>
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
<div class="jumpdown flex middle">
	<div class="xfade center flow-text lime-t depixel" style="margin-top: -1.25em;">
		<p class="element"><strong>javascript, CSS3, PHP <span class="blink">_</span></strong></p>
		<p class="element"><strong>FREE &amp; Open Source <span class="blink">_</span></strong></p>
		<p class="element"><strong>Built with<span class="blink">...</span></strong></p>
	</div>
</div>
<div class="dotgrid-throb padded" style="width: 100vw;" id="build">
	<div class="wrap-1200 padded">
		<h3 class="charcoal-t monolisk fittext"><strong>Build Brutality.</strong></h3>
		<div class="blueprint box-s padded bitstream">
			<p class="flow-text padded"><em>Brutalist Framework</em> is a free and open source collection of HTML templates, CSS libraries, javascript and PHP scripts specifically designed for the <a href="https://www.brutalistwebdesign.com" target="_blank" class="lemonlink">brutalist web design</a> style.</p>
		</div>
		<div class="flex" style="margin-top: 2.5em;"><div class="padded half">
			<div style="padding: 6px;" class="sliced-corner black"><div class="padded blueprint sliced-corner">
				<h4 class="monolisk fluid-text" style="margin: 0; padding: 0;">Features</h4>
				<ul class="bitstream check indent">
					<li>Open source under MIT</li>
					<li>HTML5 templates</li>
					<li>CSS3 classes &amp; elements</li>
					<li>Vanilla javascript</li>
					<li>jQuery plugins</li>
					<li>Plain PHP templates</li>
					<li>Data based on CSV and XML files</li>
				</ul>
			</div></div>
			<p class="files" style="font-size: 4rem; margin-top: -6px;"><i class="css"></i><i class="js"></i><i class="html"></i><i class="php"></i></p>
		</div><div class="padded half center">
			<div class="shape triangle trikat red"><div class="shape triangle padded"><img src="app/files/images/spikat.jpg" alt="KAT" class="shape triangle responsive" /></div></div>
		</div></div>
		<p class="spacer"></p>
	</div>
</div>
<div class="checkerboard" style="width: 100vw; border-top: 6px solid #ff0000; border-bottom: 6px solid #ff0000;">
	<p class="spacer"></p>
	<div class="wrap-1200 padded">
		<div class="flex"><div class="padded half">
				<div class="sliced-corner black" style="padding: 6px;"><div class="padded lemon sliced-corner">
					<h4 class="monolisk fluid-text red-t black-t-s" style="margin: 0; padding: 0;">Dualistic<br />Deconstructionist<br />Design Approach</h4>
					<p class="black-t bitstream" style="margin-top: 1rem; margin-bottom: 1rem;"><strong>Core components are broken down into raw, independent elements that can be used to construct a creative design.</strong></p>
					<p class="center" style="margin-bottom: 1.5rem;"><a href="construct.php" class="b-s-k red-b btn btn-medium flow-text bitstream hue-h black lemon-t"><strong>More Info &raquo;</strong></a></p>
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
<div class="dotgrid-throb padded" style="width: 100vw;" id="build">
	<div class="wrap-1200 padded">
		<p class="spacer"></p>
		<div class="lcd-trip jagged" style="max-width: 80%; margin: 4.5rem auto 0 auto;"><div class="padded">
			<p class="monolisk fluid-text-h1 center glitchtext blue-t" style="line-height: 100%;">Only through<br />brutality<br />do we evolve.</p>
			<p class="center glitchtext"><a href="about.php" class="b-s-t lime-b btn btn-medium flow-text bitstream invert-h sweden">About BF &raquo;</a></p>
		</div></div>
		<div class="vh10"></div>
		<h3 class="monolisk charcoal-t fittext"><strong>Related Projects</strong></h3>
		<div class="flex">
			<div class="padded half">
				<div style="padding: 6px;" class="hue-h sliced-corner red">
					<a href="https://www.brutalcms.com" target="_blank"><div class="emptiness padded sliced-corner">
						<h4 class="fluid-text monolisk red-t white-t-s"><i class="bi bi-mining"></i> Brutal CMS</h4>
						<p class="smoke-t bitstream" style="min-height: 90px;">An open source lightweight flat-file content management system for the brutalist web design trend.</p>
					</div></a>
				</div>
			</div>
			<div class="padded half">
				<div class="sliced-corner blueberry hue-h" style="padding: 6px;">
					<a href="https://www.blueprintgrid.com" target="_blank"><div class="blueprint sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-grid"></i> Blueprint Grid</h4>
						<p class="bitstream" style="min-height: 90px;">An open source multimethod grid library built with flexbox and CSS grid. Create scalable mobile-friendly responsive website and application layouts.</p>
					</div></a>
				</div>
			</div>
		</div>
		<p class="spacer"></p>
		<h3 class="monolisk charcoal-t fittext"><strong>UNDER DEVELOPMENT</strong></h3>
		<p class="padded mono flow-text bitstream">The following micro-app projects (based on <em>Brutal CMS</em>) are under development. Each will feature multi-user access (based on CSV data).</p>
		<div class="flex">
			<div class="padded half">
				<div class="sliced-corner charcoal hue-h" style="padding: 6px;">
					<a href="" target="_blank"><div class="disabled sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-sol"></i> DICK</h4>
						<p class="bitstream" style="min-height: 90px;"><strong>Daily Integrated Content Keeper</strong><br />
						Micro-app for managing daily content to be displayed on a front-end app or website.</p>
					</div></a>
				</div>
			</div><div class="padded half">
				<div class="sliced-corner charcoal hue-h" style="padding: 6px;">
					<a href="" target="_blank"><div class="disabled sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-save"></i> CRUDE</h4>
						<p class="bitstream" style="min-height: 90px;"><strong>Create Read Update Data Environment</strong><br />
						Micro-app for managing CSV and XML data records with printing and PDF exporting.</p>
					</div></a>
				</div>
			</div><div class="padded half">
				<div class="sliced-corner charcoal hue-h" style="padding: 6px;">
					<a href="" target="_blank"><div class="disabled sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-compose"></i> PAWS</h4>
						<p class="bitstream" style="min-height: 90px;"><strong>Post Admin &amp; Writer System</strong><br />
						Blogging micro-app for managing and creating multiple types of posts.</p>
					</div></a>
				</div>
			</div><div class="padded half">
				<div class="sliced-corner charcoal hue-h" style="padding: 6px;">
					<a href="" target="_blank"><div class="disabled sliced-corner padded">
						<h4 class="fluid-text monolisk"><i class="bi bi-verify"></i> PORTS</h4>
						<p class="bitstream" style="min-height: 90px;"><strong>Project Organization Roles & Task Streams</strong><br />
						Micro-app for group, project, and task management. Ideal for small teams.</p>
					</div></a>
				</div>
			</div>
		</div>
	</div><div class="vh10"></div>
</div>
<!-- CORE Components -->
<div class="black" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
	<div class="clear-block jagged" id="core"><p class="checkerboard padding"></p></div>
</div>
<div class="infinitile" style="width: 100vw;">
	<div class="vh10" style="margin-top: -3em;"></div>
	<div class="wrap-1200 padded">
		<h3 class="fittext monolisk charcoal-t glitchtext" style="margin: 0; padding: 0;"><strong><i class="bi bi-core-block"></i> CORE</strong></h3>
		<p class="flow-text charcoal-t bitstream" style="margin: 0 0 1.5em 0;"><strong>Construct Object Rendering Engine</strong></p>
		<?php include 'app/inc/content/pages/index/core-components.php';?>
		<div class="right-align"><p class="flow-text monolisk point-right charcoal inline-block scale-h" style="margin-top: 4rem; padding: 8px;">
			<a href="construct.php" class="btn btn-large point-right sweden invert-h"><strong>About CORE &raquo;&nbsp;&nbsp;</a>
		</p></div>
	</div>
	<div class="vh10"></div>
	
	<!-- MOLDS -->
	<div class="clear-block jagged" id="molds"><p class="checkerboard padding"></p></div>
	<div class="vh10" style="margin-top: -3em;"></div>
	<div class="wrap-1200 padded">
		<h3 class="fittext glitchtext monolisk charcoal-t" style="margin: 0; padding: 0;"><strong><i class="bi bi-corners"></i> MOLDS</strong></h3>
		<p class="flow-text charcoal-t bitstream" style="margin: 0 0 1.5em 0;"><strong>Makeable Object Layout & Design Source</strong></p>
		<?php include 'app/inc/content/pages/index/molds-components.php';?>
		<div class="right-align"><p class="flow-text monolisk point-right charcoal inline-block scale-h" style="margin-top: 4rem; padding: 8px;">
			<a href="molds.php" class="btn btn-large point-right sweden invert-h"><strong>About MOLDS &raquo;&nbsp;&nbsp;</a>
		</p></div>
	</div>
	<div class="vh10"></div>
</div>
<!-- NEWS REEL 
<div class="black" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
	<div class="clear-block jagged" id="news"><p class="checkerboard padding"></p></div>
</div>
<div class="socialize" style="width: 100vw;">
	<div class="vh10"></div>
	<div class="wrap-1200">
		<h3 class="fittext glitchtext monolisk rice-t" style="margin: 0; padding: 0;"><i class="bi bi-announce"></i> News Reel</h3>
		<p class="flow-text rice-t bitstream" style="margin: 0 0 1.5em 0;"><strong>What's new in the brutal universe?</strong></p>
	</div>
	<div class="vh10"></div>
</div>-->
<div class="black" style="border-top: 3px solid #ff0000; border-bottom: 3px solid #ff0000;">
	<div class="clear-block jagged" id="news"><p class="checkerboard padding"></p></div>
</div>
<?php include 'app/inc/content/footer.php';?>

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