
<div class="blonk-tr shape quadrant bottom-left flex middle sand" style="z-index: 10002;">
	<button class="reveal-overlay" id="reveal-nav" aria-controls="primary-menu" aria-expanded="false">
	  <span class="topbar charcoal"></span>
	  <span class="middlebar charcoal"></span>
	  <span class="bottombar charcoal"></span>
	</button>
</div>
<div class="overlay" id="overlay-nav">
	<div class="wrap-960 monolisk" style="margin-top: 1.5rem;"><div class="checkerboard padded" style="border-radius: 1rem;"><div class="padded emptiness">
		<ul class="flex flow-text">
			<li class="third <?php if($pagetitle=='home'){?> current<?php } ?>"><a href="index.php"><i class="bi bi-home"></i> HOME</a></li>
			<li class="third<?php if($pagetitle=='groundwork'){?> current<?php } ?>"><a href="groundwork.php"><i class="bi bi-launch"></i> Get Started</a></li>
			<li class="third<?php if($pagetitle=='construct'){?> current<?php } ?>"><a href="construct.php"><i class="bi bi-core-block"></i> CORE</a></li>
		</ul>
		<ul class="flow-text flex" style="border-top: 2px solid #fff; padding-top: 8px;">
			<li class="third<?php if($pagetitle=='bfx'){?> current<?php } ?>"><a href="bfx.php"><i class="bi bi-sparkle"></i> BFX</a></li>
			<li class="third<?php if($pagetitle=='bicons'){?> current<?php } ?>"><a href="bicons.php"><i class="bi bi-flag"></i> bIcons</a></li>
			<li class="third<?php if($pagetitle=='buff'){?> current<?php } ?>"><a href="buff.php"><i class="bi bi-fill"></i> BUFF</a></li>
			<li class="third<?php if($pagetitle=='buix'){?> current<?php } ?>"><a href="buix.php"><i class="bi bi-navigate"></i> BUIX</a></li>
			<li class="third<?php if($pagetitle=='butch'){?> current<?php } ?>"><a href="butch.php"><i class="bi bi-communist"></i> BUTCH</a></li>
			<li class="third<?php if($pagetitle=='flavors'){?> current<?php } ?>"><a href="flavors.php"><i class="bi bi-cone"></i> Flavors</a></li>
			<li class="third<?php if($pagetitle=='fux'){?> current<?php } ?>"><a href="fux.php"><i class="bi bi-box-x"></i> FUX</a></li>
			<li class="third<?php if($pagetitle=='grids'){?> current<?php } ?>"><a href="grids.php"><i class="bi bi-quadrant"></i> Grids</a></li>
			<li class="third<?php if($pagetitle=='rebar'){?> current<?php } ?>"><a href="rebar.php"><i class="bi bi-converge-left"></i> ReBAR</a></li>
		</ul>
		<ul class="flex flow-text" style="width: 100%; border-top: 2px solid #fff; padding-top: 8px;">
			<li class="third<?php if($pagetitle=='bos'){?> current<?php } ?>"><a href="#lockedout" data-modal-open><i class="bi bi-mining"></i> BOS PORTAL</a></li>
			<li class="third<?php if($pagetitle=='molds'){?> current<?php } ?>"><a href="molds.php"><i class="bi bi-corners"></i> MOLDS</a></li>
			<li class="third<?php if($pagetitle=='about'){?> current<?php } ?>"><a href="about.php"><i class="bi bi-info"></i> About BF</a></li>
		</ul>
	</div><div class="padded emptiness" style="margin-top: 1.25rem;">
		<ul class="flex flow-text">
			<li class="third"><a href="https://github.com/pinecreativelabs/Brutalist-Framework/wiki/Roadmap" target="_blank">Roadmap</a></li>
			<li class="third"><a href="https://github.com/pinecreativelabs/Brutalist-Framework" target="_blank">Github</a></li>
			<li class="third"><a href="https://www.twitter.com/brutalistfwk" target="_blank">Twitter</a></li>
		</ul>
		<ul class="flex flow-text" style="width: 100%; border-top: 2px solid #fff; padding-top: 8px;">
			<li class="half"><a href="https://www.blueprintgrid.com" target="_blank"><i class="blueprint bi bi-grid"></i> Blueprint Grid</a></li>
			<li class="half"><a href="https://www.brutalistwebdesign.com" target="_blank"><i class="bi bi-reference lemon black-t"></i> Reference Guides <!--<span class="red white-t badge">1 NEW</span>--></a></li>
		</ul>
		<ul class="flex flow-text" style="width: 100%; border-top: 2px solid #fff; padding-top: 8px;">
			<li class="half"><a href="#bblast" data-modal-open><i class="bi bi-amp"></i> Brutal Blast</a></li>
			<li class="half"><a href="#lockedout" data-modal-open><i class="bi bi-play"></i> Live Demos</a></li>
		</ul>
	</div></div></div>
</div>
<script>
document.querySelector("#reveal-nav").addEventListener("click", function() {
  this.classList.toggle("active");
  document.querySelector("#overlay-nav").classList.toggle("open");
})
</script>
<a href="#uptop" class="blonk-cr blood shape semicircle west white-t monolisk lighten-h"><i class="bi bi-up bi-3x"></i><br /><strong>top</strong></a>
<a href="#download" class="blonk-br lemon blue-t shape quadrant top-left white-t monolisk invert-h" style="font-weight:900;" data-modal-open><i class="bi bi-download bi-2x"></i><br />download</a>
<?php 
include 'ui/brutalblast-modal.php';
include 'ui/lockedout.php';
?>