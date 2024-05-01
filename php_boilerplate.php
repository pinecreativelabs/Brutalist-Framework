<?php 
$pagetitle = 'php_boilerplate';
$ignore_tracking = true;
require_once 'bos/build/constructor.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- echo necessary meta heading -->
	<?php echo $global_meta_header;?>
	
	<title>PHP Boilerplate</title>
	<meta name="description" content="PHP boilerplate starter page" />
	
	<!-- echo CORE CSS -->
	<?php echo $core_css; ?>

</head>
<body>

<!-- PAGE -->

<div class="wrap-1200 bitstream">
	<h1>Boilerplate</h1>
	<!-- bento grid layout -->
	<div class="bentogrid">
		<div class="charcoal-b b-s-t padded" data-bento="2x2">
			<p class="pill b-s-t smoke charcoal-b center" style="margin: 1rem 0 1rem 0;"><small><strong>Full URL:</strong><br /><?php echo $furl;?></small></p>
			<p><small><strong>last modified:</strong> <?php echo $lastmod;?></small></p>
			<h2 class="flow-text">PHP boilerplate starter page</h2>
			<p>This boilerplate uses the Bento Grid layout method.</p>
			<hr />
			<h3 class="flow-text">Logical Weekday Test</h3>
			<p>We'll display content if the current day of the week is either Wednesday, Friday, or Sunday. Otherwise, default content will be shown.</p>
			
			<?php if(($day == 'Wednesday') || ($day == 'Friday') || ($day == 'Sunday')){ ?>
			<p class="padded warning b-s-k rounded"><span class="flow-text">Today is <?php echo $day;?></span><br /><em>Check out our special of the day!</em></p>
			<?php } else { ?>
			<p class="padded disabled b-s-k rounded"><span class="flow-text">Today is <?php echo $day;?></span><br />Nothing special is going on today.</p>
			<?php } ?>
		</div>
		<div class="charcoal-b padded b-s-t" data-bento="1x2">
			<div class="flex middle"><a href="#vanilla" data-modal-open class="nb-btn">Vanilla Modal</a></div>
		</div>
		<div class="charcoal-b padded b-s-t" data-bento="3x1">
			<h3 class="flow-text">Audio Player</h3>
			<p>Jquery-based audio player</p>
			<audio class="baudio" data-title="Cinemato" data-artist="Unknown">
				<source src="app/files/audio/cinemato.mp3" type="audio/mpeg">
			</audio>
		</div>
		<div class="charcoal-b padded b-s-t" data-bento="1x3">
			<h4 class="flow-text">Your Locale</h4>
			<p>
				<span class="charcoal white-t"><small><strong>Country:</strong></small></span><br /><?php echo $user_country.' ('.$user_cc.')';?><br />
				<span class="charcoal white-t"><small><strong>City:</strong></small></span><br /><?php echo $user_city;?><br />
				<span class="charcoal white-t"><small><strong>Timezone:</strong></small></span><br /><?php echo $user_tz;?>
			</p>
		</div>
	</div>
	<!-- end bento grid -->
	<p class="spacer"></p>
</div>
<footer class="black white-t bitstream center padded">
	<p>&copy; <?php echo $year;?></p>
</footer>

<!-- Vanilla Modal -->
<div id="vanilla" style="display: none;">
	<div class="padded info b-s-k bitstream center" style="max-width: 320px;">
		<h3><strong><i class="bi bi-cone bi-3x"></i><br />Vanilla Modal</h3>
		<p>To close, click the X, or anywhere outside the modal box.</p>
	</div>
</div>

<!-- Initiate and display modal -->
<div class="modal">
	<div class="modal-inner">
		<span data-modal-close>&times;</span>
		<div class="modal-content"></div>
	</div>
</div>

<!-- vanilla javascript -->
<?php 
	echo $bentogrid_js;
	echo $modal_js; 
?>
<!-- jQuery -->
<?php 
	echo $jquery3;
	echo $audio_player_js;
?>

</body>
</html>