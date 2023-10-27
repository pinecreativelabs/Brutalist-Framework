<h3 class="fluid-text monolisk" id="config"><i class="bi bi-tools"></i> Configure</h3>
<p class="bitstream">Each MOLDS component and their individual elements can be enabled or disabled via <span class="red lemon-t">core/molds/config.php</span>, which is included in the CORE (it is used to add the necessary CSS and javascript files to the header and footer). Each of the below values use either <strong><em>true</em></strong> or <strong><em>false</em></strong>:</p>
<div class="flex start" style="margin-top: 1.15em;">
	<p style="font-size: 1.25em; margin-left: 1em;" class="padded disabled inline-block">
		<strong>$molds</strong> <small>[activate MOLDS]</small><br />
		<strong>$boards</strong> <small>[load Boards resources]</small><br />
		<strong>$panels</strong> <small>[load Panels resources]</small><br />
		<strong>$tiles</strong> <small>[load Tiles resources]</small><br /><br />
		<strong>$deconstruct_molds</strong><br /><small>[load CSS resources individually (true), or use <em>construct.css</em> (false)]</small><br /><br />
	</p>
	<p style="font-size: 1.25em; margin-left: 1em;" class="padded disabled inline-block">
		<strong>$audio_board</strong> <small>[enable Audio Board]</small><br />
		<strong>$blog_board</strong> <small>[enable Blog Board]</small><br />
		<strong>$data_board</strong> <small>[enable Data Board]</small><br />
		<strong>$slide_board</strong> <small>[enable Slide Board]</small><br />
		<strong>$product_board</strong> <small>[enable Product Board]</small><br />
		<strong>$video_board</strong> <small>[enable Video Board]</small>
	</p>
	<p style="font-size: 1.25em; margin-left: 1em;" class="padded disabled inline-block">
		<strong>$megamenu</strong> <small>[load megamenu.css]</small><br />
		<strong>$shapes</strong> <small>[load shapes.css]</small><br />
		<strong>$tasklist</strong> <small>[load tasklist.css]</small><br />
		<strong>$testimony</strong> <small>[load testimony.css]</small><br />
		<strong>$timeline</strong> <small>[load timeline.css]</small>
	</p>
</div>