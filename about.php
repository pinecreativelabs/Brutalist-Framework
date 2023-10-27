<?php 
$pagetitle = 'about';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>Brutalist Framework || About</title>
	<meta name="description" content="An open source framework for beginner and novice web developers to build simple web pages and applications." />
	<?php if($tc==true){?>
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@brutalistfwk">
	<meta name="twitter:title" content="Brutalist Framework || About">
	<meta name="twitter:description" content="An open source framework for beginner and novice web developers to build simple web pages and applications.">
	<meta name="twitter:creator" content="@brutalistfwk">
	<meta name="twitter:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg">
	<?php }
	if($og==true){ ?>
	<!-- Open Graph data -->
	<meta property="og:title" content="Brutalist Framework || About" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.brutalistframework.com" />
	<meta property="og:image" content="http://www.brutalistframework.com/core/files/images/bf-social-tile.jpg" />
	<meta property="og:description" content="An open source framework for beginner and novice web developers to build simple web pages and applications." /> 
	<meta property="og:site_name" content="Brutalist Framework" />
	<?php } ?>
	<?php echo $global_header;?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	<style>
	.timeline-date {
		font-family: 'Monolisk'; font-weight: 600; font-size: 2.25rem; border: 3px solid #000;
		background: #ff0000; color: #fff; padding: 0 0.75rem 0 0.75rem; border-radius: 0.5rem; -webkit-border-radius: 0.5rem;
	}
	</style>
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
		<div class="fluid-text-h1" style="margin-left: -20px;"><i class="bi bi-info"></i></div>
	</div>
	<div class="flex middle column rebecca-t rice-t-s bitstream">
		<h1 class="fluid-text start" style="margin: -10px 0 0 0;">About BF</h1>
		<h2 class="flow-text baffle start" style="margin: 0; padding: 0;">All About Building Brutality</h2>
	</div>
</div>
		

<div class="fossil">

	<div class="padded bitstream smoke-t"><div class="wrap-1200">
		<p class="flow-text">Brutalist Framework is a free and open source collection of PHP &amp; HTML templates, CSS libraries, and javascript resources specifically for the <a href="https://www.brutalistwebdesign.com/" target="_blank" class="lemonlink">brutalist web design</a> style.</p>
	</div></div>
	<div class="padded">
		<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
		<div class="flex">
			<div class="glued start sidebar">
				<nav class="simple nav3">
					<ul class="bitstream flow-text" style="margin-top: 1em;">
						<li><a href="#background">Background</a></li>
						<li><a href="#purpose">Purpose</a></li>
						<li><a href="#history">History</a></li>
						<li><a href="#future">Future</a></li>
					</ul>
				</nav>
			</div>
			<div class="padded smoke-t main">
				<!-- BACKGROUND -->
				<h3 class="fluid-text monolisk" id="background">Background</h3>
				<div class="flex bitstream"><div class="padded half">
					<h4 class="flow-text charcoal">Architectural Aspirations</h4>
					<img class="shape triangle incline jumbo-thumb crop right" src="app/files/images/brutal-peak.png" alt="Brutal Peak" style="border-bottom: 4px solid #333;" />
					<p>Brutalism is a style of architecture that took off after World War II. Reaching its peak in the ‘50s and ‘60s, the style was a reaction to ornate, over-designed structures of preceding decades. The simple and raw of this architectural style allows for creatively ambitious structure design and objectives.<br /><br />Brutalism in web design is inspired by this distinctive style.<br /><br />To learn more, read our <em>FREE</em> e-book:<br /><br /></p>
					<a href="https://www.brutalistwebdesign.com/brut101.pdf" target="_blank" class="btn small-btn full-btn sweden invert-h flow-text b-s-t"><strong>Intro to Brutalism in Web Design</strong></a>
				</div><div class="padded half">
					<h4 class="flow-text charcoal">Building Brutality</h4>
					<p>To build brutality with <em>Brutalist Framework</em>, you'll need basic background and understanding of the following skills:</p>
					<ul class="check charcoal-t-s">
						<li>HTML5</li><li>CSS3</li><li>Javascript &amp; jQuery</li><li>Basic PHP</li><li>XML &amp; CSV</li>
						<li>Creativity</li><li>FTP <small>(or web host file management)</small></li>
						<li>LAMP / WAMP / MAMP Server<br /><small>(optional, but needed for running PHP on a local machine)</small></li>
					</ul>
					<p>BF is ideal for beginner and novice web designers and developers who aspire to build their background, experience, and skillset in web design. BF is most ideal for:</p>
					<ul class="check charcoal-t-s" style="margin-top: 1em;">
						<li>Personal blogs &amp; websites</li>
						<li>Creative landing / splash pages</li>
						<li>Small business websites</li>
						<li>Other bizarre &amp; miscellaneous projects</li>
					</ul>
				</div></div>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- PURPOSE -->
				<h3 class="fluid-text monolisk" id="purpose">Purpose &amp; Philosophy</h3>
				<div class="flex bitstream"><div class="padded half">
					<h4 class="flow-text charcoal">A Concrete Purpose</h4>
					<img src="app/files/images/comprehend.jpg" alt="Brutal Philosophy" class="jumbo-thumb rr-l right shape pentagon" />
					<p>Any creative project is made from a solid framework composed of raw components that can be used to create a product with a concrete purpose.</p>
					<p style="margin-top: 1em;">BF was created to provide a free and open resource to beginner and novice web designers and developers to encourage their professional journey and realize their true creative potential.The purpose of BF is to:</p>
					<ul class="check charcoal-t-s" style="margin-top: 1em;">
						<li>Encourage creativity</li>
						<li>Embody distinctive design</li>
						<li>Enhance crude conventions</li>
					</ul>
					<p>BF is intended as a solid foundation and starting point for developers to construct and create crude websites or web applications.</p>
					<p style="margin-top: 1em;"></p>
				</div><div class="padded half">
					<h4 class="flow-text charcoal">CRUDE Philosophy</h4>
					<p>Brutalist web design philosophy follows the <em>CRUDE</em> convention:</p>
					<p class="padded mono-inv flow-text monolisk inline-block" style="margin-top: 1em;">
						<span class="red white-t"><strong>C</strong></span>reatively Cynical &amp; Confrontational<br />
						<span class="red white-t"><strong>R</strong></span>aw, Rugged, &amp; Real<br />
						<span class="red white-t"><strong>U</strong></span>ncompromisingly Unconventional &amp; Unpolished<br />
						<span class="red white-t"><strong>D</strong></span>eliberately Deconstructive &amp; Dysfunctional<br />
						<span class="red white-t"><strong>E</strong></span>xtremely Exciting &amp; Enthralling
					</p>
					<p style="margin-top: 1em;"><img src="app/files/images/brutal-tower.jpg" alt="Brutal Tower" class="xlarge-thumb right circle" style="margin-left: 1em;"/>
					This distinctive approach to web design is for those who desire and aspire to embody their unlimited creative potential. These more creatively cynical and raw designs may not be widely accepted by most target audiences. Through the brutality of trial and error can a brutalist design truly evolve into something successful.</p>
				</div></div>
				
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- HISTORY -->
				<?php include 'app/inc/content/pages/about/history.php';?>
				<p class="spacer"></p>
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- FUTURE -->
				<h3 class="fluid-text monolisk" id="future">Future</h3>
				<img src="app/files/images/dune.jpg" class="shape heptagon right xlarge-thumb" alt="Future Dune" />
				<p class="bitstream">BF will <em>always</em> be open source and available for free. Future versions will evolve, implementing new design styles and code elements. New projects may branch off from BF. Ultimately, the future of BF is one of revolutionary evolution, with the purpose of serving the development and progress of the digital creative marketing space.</p>
				<p class="bitstream" style="margin-top: 1em;">For purposes of transparency, you can get an idea of what's being planned for future versions by viewing our Roadmap:<br /><br />
				<a href="https://github.com/pinecreativelabs/Brutalist-Framework/wiki/Roadmap" target="_blank" class="flow-text btn small-btn terminal hue-h b-s-t">View Roadmap &raquo;</a></p>
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