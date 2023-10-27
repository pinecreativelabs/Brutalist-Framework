<?php 
$pagetitle = 'boards';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || Boards</title>
	<meta name="description" content="Build grouped web page element templates with PHP and content based on XML or CSV data." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || Boards">
	<meta name="twitter:description" content="Build grouped web page element templates with PHP and content based on XML or CSV data.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || Boards" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.brutalistframework.com" />
	<meta property="og:image" content="https://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="Build grouped web page element templates with PHP and content based on XML or CSV data." /> 
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-half-panes"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">Boards</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">Grouped content element templates</h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">Boards are groups of elements arranged into predefined reusable templates. Content is rendered via PHP classes and based on either CSV or XML data.</p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#audioboard"><i class="bi bi-vol-h"></i> AudioBoard</a></li>
						<li><a href="#blogboard"><i class="bi bi-edit"></i> BlogBoard</a></li>
						<li><a href="#databoard"><i class="bi bi-save"></i> DataBoard</a></li>
						<li><a href="#photoboard"><i class="bi bi-image"></i> PhotoBoard</a></li>
						<li><a href="#productboard"><i class="bi bi-cart"></i> ProductBoard</a></li>
						<li><a href="#slideboard"><i class="bi bi-ff"></i> SlideBoard</a></li>
						<li><a href="#videoboard"><i class="bi bi-video"></i> VideoBoard</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded smoke-t main">
				<!-- AudioBoard -->
				<h3 class="fluid-text monolisk" id="audioboard"><i class="bi bi-vol-h"></i> AudioBoard</h3>
				<p class="bitstream">AudioBoards are used to display an audio playlist, or a single audio file player on a page.</p>
				<div class="flex bitstream"><div class="padded half">
					<h4 class="charcoal flow-text padded">Podcast Block</h4>
					<p>Display a podcast episode block based on XML data.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div><div class="padded half">
					<h4 class="charcoal flow-text padded">Audio Playlist</h5>
					<p>Display a list of audio files based on XML data.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- BlogBoard -->
				<h3 class="fluid-text monolisk" id="blogboard"><i class="bi bi-edit"></i> BlogBoard</h3>
				<p class="bitstream">BlogBoards are used to display a list of blog posts, or a single blog post article on a page.</p>
				<h4 class="charcoal flow-text padded bitstream">Microblog</h4>
				<p class="bitstream">Display a list of simple blog post entries using XML data. Each full Microblog post article opens up in an overlay modal.</p>
				<div class="padded emptiness" style="margin-top: 1em;">
					<p><span class="flow-text">Microblog Demo</span><br /></p>
					<?php 
						$cover_height = 260;
						$view_post_text = 'View Post';
						$modal_post_view = true;
						$get_mb_data = 'app/data/xml/microblog.xml';
						include 'core/molds/boards/blogboard/view.php'; 
						echo $microblog;
					?>
				</div>
				<?php include 'app/inc/content/pages/boards/microblog.php'; ?>
				
				<h4 class="charcoal flow-text padded bitstream">Blog Post List</h4>
				<p class="bitstream">Use CSV data to display a list of blog post entries. Each blog post list item contains a thumbnail image, title, summary, and date of initial posting (DIP) all wrapped within a link.</p>
				<?php 
					/* blog post list demo */
					$new_window = true;
					$get_bpl_data = 'app/data/csv/blogpostlist.csv';
					include 'core/molds/boards/blogboard/view.php'; 
					echo $blogpostlist;
					
					/* blog post list docs */
					include 'app/inc/content/pages/boards/blog-post-list.php';
				?>

				<div class="flex bitstream"><div class="padded half">
					<h4 class="charcoal flow-text padded bitstream">Blog Category List</h4>
					<p class="bitstream">Use CSV files to display a simple list of active blog categories.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div><div class="padded half">
					<h4 class="charcoal flow-text padded bitstream">Blog Article</h4>
					<p class="bitstream">Use XML files to render a single blog article on a page.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div></div>
				
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- DataBoard -->
				<h3 class="fluid-text monolisk" id="databoard"><i class="bi bi-save"></i> DataBoard</h3>
				<p class="bitstream">DataBoards use CSV files to render data on a page.</p>
				<div class="bitstream padded">
					<h4 class="charcoal padded flow-text">CSV Data Table</h4>
					<p>Read and display a simple data table based on a CSV file.</p>
					<div class="padded emptiness" style="margin-top: 1em;">
						<p class="flow-text"><strong>DEMO:</strong> <em>Books.csv</em></p>
						<?php 
							$get_csv_data = 'app/data/csv/books.csv';
							include 'core/molds/boards/databoard/view.php'; 
							echo $csv_table;
						?>
					</div>
					<?php include 'app/inc/content/pages/boards/databoard.php';?>
					<p class="spacer"></p>
					
					<h4 class="charcoal flow-text padded">Ajaxed CSV File Reader</h4>
					<p>Read and display data from multiple CSV files via an ajaxed interface.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
					<p class="spacer"></p>
					
				</div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- PhotoBoard -->
				<h3 class="fluid-text monolisk" id="photoboard"><i class="bi bi-image"></i> PhotoBoard</h3>
				<p class="bitstream">PhotoBoards are used to display a list of images (gallery) using either CSV or XML data.</p>
				
				<h4 class="charcoal flow-text padded bitstream">Lite Gallery</h4>
				<p class="bitstream">Display a simple image gallery using CSV data. Thumbnail images open an image modal with a title &amp; description caption. It uses <em>Vanilla Modal</em>, which is already included with the core.</p>
				<div class="flex bitstream"><div class="padded half">
					<div class="padded emptiness" style="margin-top: 1em;">
						<p><span class="flow-text">Lite Gallery Demo</span><br />This gallery uses uncropped small thumbnails.</p>
						<?php 
							$lg_thumb_size = 'small';
							$cropped = false;
							$get_lg_data = 'app/data/csv/gallery-lite.csv';
							include 'core/molds/boards/photoboard/view.php'; 
							echo $gallery_lite;
						?>
					</div>
					<p style="margin-top: 1em;"><span class="flow-text">Markup</span><br />Use the following PHP code to render a gallery:</p>
					<code class="smaller padded">
						&lt;?php<br />
						&nbsp;&nbsp;$lg_thumb_size = '<em>tiny</em>'; <span class="azure-t">// tiny, small, medium, large</span><br />
						&nbsp;&nbsp;$cropped = false; <span class="azure-t">// true or false</span><br />
						&nbsp;&nbsp;$get_lg_data = 'app/data/csv/gallery-lite.csv';<br />
						&nbsp;&nbsp;include 'core/molds/boards/photoboard/view.php';<br />
						&nbsp;&nbsp;echo $gallery_lite;<br />
						?&gt;
					</code>
				</div><div class="padded half">
					<p style="margin-top: 1em;"><span class="flow-text">Data File</span><br />Lite Gallery uses the following data file: <span class="red white-t">app/data/csv/gallery-lite.csv</span>. Do not remove the first line! Each row should contain the following values: <span class="terminal"><em><strong>title, description, src</strong></em></span>, where <em>src</em> is the full URL of the image.</p>
					<p style="margin-top: 1em;"><span class="flow-text">PHP Template</span><br />The PHP template for rendering Lite Gallery is found at:<br /><span class="red white-t">core/molds/boards/photoboard/view.php</span>.<br />The CSS style is found at:<br /><span class="red white-t">core/molds/boards/photoboard/view.css</span>.</p>
					<p style="margin-top: 1em;"><span class="flow-text">Variables &amp; Rendering</span><br />When rendering a gallery, use the following variables:<br /><br />
					<strong>$lg_thumb_size</strong>: Specify the size of gallery thumbnails as <em>tiny</em> (60px), <em>small</em> (90px), <em>medium</em> (180px), or <em>large</em> (360px).<br /><br />
					<strong>$cropped</strong>: Specify whether to crop thumbnails (<em>true</em> or <em>false</em>).<br /><br />
					<strong>$get_lg_data</strong>: Specify location of CSV file.<br /><br />
					To render the gallery, be sure to include the PHP view template, and echo the variable <em>$gallery_lite</em>.</p>
				</div></div>
				<p class="spacer"></p>
				
				<h4 class="charcoal flow-text padded bitstream">Pro Gallery</h4>
				<p class="bitstream">Display a photo gallery based on XML data.</p>
				<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- ProductBoard -->
				<h3 class="fluid-text monolisk" id="productboard"><i class="bi bi-cart"></i> ProductBoard</h3>
				<p class="bitstream">ProductBoards are used to display lists of products.</p>
				<h4 class="charcoal flow-text padded bitstream">ProductBoard Lite</h4>
				<p class="bitstream">Display a basic list of products based on CSV data. </p>
				<div class="padded emptiness" style="margin-top: 1em;">
					<p class="bitstream"><span class="flow-text">Demo</span><br />Default product list view.</p>
					<?php 
						$cur = '$';
						$sale_text = 'On Sale';
						$link_text = 'Buy Now';
						$get_pblite_data = 'app/data/csv/products.csv';
						include 'core/molds/boards/productboard/view.php'; 
						echo $productboard_lite;
					?>
				</div>
				<?php include 'app/inc/content/pages/boards/productboard_lite.php';?>
				<p class="spacer"></p>
				
				<h4 class="charcoal flow-text bitstream padded">ProductBoard Pro</h4>
				<p class="bitstream">Display a list of products based on data from an XML file.</p>
				<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- SlideBoard -->
				<h3 class="fluid-text monolisk" id="slideboard"><i class="bi bi-ff"></i> SlideBoard</h3>
				<p class="bitstream">SlideBoards are used to display presentational content in the form of an interactive slider.</p>
				<div class="padded clean" style="margin-top: 1em;">
				<?php 
					$autoplay = false;
					$loop = true;
					$vertical = false;
					$sb_height = 'half';
					$sb_skin = 'dark';
					$get_sb_data = 'app/data/xml/slideboard.xml';
					include 'core/molds/boards/slideboard/view.php';
					echo $slideboard;
				?>
				</div>
				<?php include 'app/inc/content/pages/boards/slideboard.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- VideoBoard -->
				<h3 class="fluid-text monolisk" id="videoboard"><i class="bi bi-video"></i> VideoBoard</h3>
				<p class="bitstream">VideoBoards are used to display self-hosted vlogs (video logs) on a page.</p>
				<div class="flex bitstream"><div class="padded half">
					<h4 class="charcoal flow-text padded">Vlog Lite</h4>
					<p>Display simple vlog entries using CSV data.</p>
					<p class="padded flow-text warning b-s-t inline-block">Coming in 3.1+</p>
				</div><div class="padded half">
					<h4 class="charcoal flow-text padded">Vlog Pro</h4>
					<p>Display a list of vlog entries using XML data.</p>
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
<script src="core/jab/plugins/presenter.js"></script>

</body>
</html>