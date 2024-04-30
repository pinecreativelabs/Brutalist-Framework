<?php 
$pagetitle = 'search';
$ignore_tracking = false;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Search</title>
	<meta name="description" content="Instant search demo using ajax." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Search BF">
	<meta name="twitter:description" content="An ajax instant sitewide search demo.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || bIcons" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="An ajax instant sitewide search demo." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-zoom-left"></i></div>
	</div>
	<div class="flex middle column rebecca-t bitstream">
		<h1 class="fluid-text start rice-t-s" style="margin: -10px 0 0 0;">Search</h1>
		<h2 class="flow-text start" style="margin: 0; padding: 0;"><span class="rice-t-s baffle">Instant search demo</span></h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p><strong>DEMO:</strong> start typing, and results will display below. If there are no matches, nothing is displayed.</p>
		<?php echo $instant_search; ?>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#intro">Implement</a></li>
						<li><a href="#data">Edit Data</a></li>
						<li><a href="#style">Styling</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded bitstream smoke-t main">
				<!-- Implement -->
				<h3 class="fluid-text monolisk" id="intro">Implement</h3>
				<p style="margin-bottom: 1rem;">Simply include <em>/core/core.php</em> on the page, and use the code below to render. No additional resources are needed.</p>
				<code class="padded flow-text">&lt;?php echo $instant_search; ?&gt;</code>
				<p style="margin-top: 1rem; margin-bottom: 1rem;">Instant search uses XML data to search application page links, and returns results via AJAX.</p>
				<p class="padded warning"><strong>NOTE:</strong> Only one Instant Search widget can be used per page, as it uses a unique ID.</p>
				
				<!-- EDIT DATA -->
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				<h3 class="fluid-text monolisk" id="data">Edit Data</h3>
				<div class="flex"><div class="half padded">
					<p>Instant search uses the XML data file: <span class="black lime-t">/core/data/xml/pages.xml</span>. Each page link needs a <em>title</em>, <em>keywords</em>, and <em>url</em> specified. Use the following XML markup:</p>
					<code class="padded" style="margin-top: 1rem;">
						&lt;link&gt;<br />&nbsp;&nbsp;&nbsp;&lt;title&gt;Page Title&lt;/title&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;keywords&gt;...&lt;/keywords&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;url&gt;...&lt;/url&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;target&gt;_self&lt;/target&gt;<br />
						&lt;/link&gt;
					</code>
					<p style="margin-top: 1rem;">URLs should be fully qualified (absolute URLs), especially if they are linked to an external page or application. By default, all links open in the same window (<em>target</em> set to "<em>_self</em>"). To open links in a new window, set <em>target</em> to "<em>_blank</em>".</p>
				</div><div class="padded half">
					<h4 class="flow-text">Page Titles &amp; Keywords</h4>
					<p>The search results uses data from page titles and keywords. Data from these are matched with the input as the user types in real-time. Keywords can be single words, or phrases that are related to the page title (no need to separate by commas). An example might be:</p>
					<p class="info padded" style="margin-top: 1rem; margin-bottom: 1rem;"><strong>TITLE:</strong> Auto Services<br /><strong>KEYWORDS:</strong> car repair maintenance help</p>
					<p>Keywords <em>don't</em> display in search results, although they do affect them. As with the above example, if a user searches <em>"car repair"</em>, the result <em>"Auto Services"</em> will appear.</p>
				</div></div>
				
				<!-- Styling -->
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				<h3 class="fluid-text monolisk" id="style">Styling</h3>
				<p style="margin-bottom: 1rem;">Instant Search can be easily styled through custom theme CSS. The HTML output markup is as follows:</p>
				<code class="padded">
					&lt;div class="instant-search"&gt;<br />
					&nbsp;&nbsp;&lt;form&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text"&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="search-results"&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class="result-list"&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Page Title&lt;/a&gt;&lt;/li&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
					&nbsp;&nbsp;&lt;/form&gt;<br />
					&lt;/div&gt;
				</code>
				
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