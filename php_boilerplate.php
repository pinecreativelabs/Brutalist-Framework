<?php 
$pagetitle = 'php_boilerplate';
$ignore_tracking = true;
require_once 'bos/build/constructor.php';
include 'bos/molds/ports/view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>PHP Boilerplate</title>
	<meta name="description" content="PHP boilerplate blank starter page." />
	
	<link href="bos/core/css/construct.css" type="text/css" rel="stylesheet" media="all" />
	<!-- Theme CSS -->
	<link href="app/themes/default/theme.css" type="text/css" rel="stylesheet" media="all" />
	<style>summary:before{color:#ff0000;}</style>
</head>
<body>

<!-- PAGE -->

<div class="wrap-960">
	<h1>Boilerplate</h1>
	<p>MM: <?php echo $maintenance_mode;?></p>
	<hr />
	<h4>Roles</h4>
	<?php echo $roles_list;?>
	<hr />
	<h4>Projects</h4>
	<?php echo $project_list;?>
	<hr />
	<h4>Tasks</h4>
	<?php echo $task_list;?>
</div>


<!-- Initiate and display modal itself -->
<div class="modal">
	<div class="modal-inner draggable"><!-- Remove "draggable" class to prevent modals from being moveable -->
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

</body>
</html>