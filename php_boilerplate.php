<?php 
$pagetitle = 'php_boilerplate';
$ignore_tracking = true;
require 'core/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $global_meta_header;?>
	<title>PHP Boilerplate</title>
	<meta name="description" content="A free open source native icon CSS classes library for the brutalist web design trend." />
	
	<?php echo $global_header;?>
	
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	
</head>
<body>

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
	
	<?php include 'app/inc/content/footer.php';?>

</div>


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