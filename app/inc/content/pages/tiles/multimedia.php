<!-- Audio Player -->
<h4 class="flow-text charcoal padded"><i class="bi bi-vol-h"></i> Audio Player</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream">A brutally simple responsive audio player.</p>
	<p class="requiresbox" style="margin-top: 1em;"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/audio-player.js</em></span></p>
	<p style="margin-top: 1em;" class="padded bitstream disabled">Audio players use data attributes to specify a title and artist:<br /><strong>data-title</strong>: name of file<br /><strong>data-artist</strong>: name of artist / source</p>
</div><div class="padded half">
	<h5 class="flow-text">Markup</h5>
	<code class="padded smaller lucida">
		&lt;audio class="baudio" data-title="" data-artist=""&gt;<br />
		&nbsp;&nbsp;&lt;source src="" type="audio/ogg"&gt;<br />
		&nbsp;&nbsp;&lt;source src="" type="audio/mpeg"&gt;<br />
		&lt;/audio&gt;
	</code>
	<div class="padded shine">
		<audio class="baudio" data-title="Cinemato" data-artist="Unknown Artist">
			<!--<source src="https://www.jqueryscript.net/images/sample.ogg" type="audio/ogg">-->
			<source src="app/files/audio/cinemato.mp3" type="audio/mpeg">
		</audio>
	</div>
</div></div>
<p class="spacer"></p>
<!-- Video Player -->
<h4 class="flow-text charcoal padded"><i class="bi bi-video"></i> Video Player</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream">A brutally simple video player for self-hosted videos, with fullscreen viewer.</p>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/video-player.js</em></span></p>
	<p style="margin-top: 1em;" class="padded bitstream disabled">Video players use data attributes to customize their appearance:<br />
		<strong>data-skin</strong>: <em>default</em>, <em>minimal</em> or <em>compact</em>.<br />
		<strong>data-color</strong><small>(optional)</small>: custom hex color<br /><strong>data-title</strong><small>(optional)</small>: title of video<br />
		<strong>data-overlay</strong>: use value 1 or 2
	</p>
</div><div class="padded half">
	<h5 class="flow-text">Markup</h5>
	<code class="padded lucida smaller">
		&lt;video src="" poster=""<br />&nbsp;&nbsp;data-title=""<br />
		&nbsp;&nbsp;data-skin="default"<br />
		&nbsp;&nbsp;data-overlay="1"<br />&nbsp;&nbsp;data-color="#ff0000"&gt;<br />
		&lt;/video&gt;
	</code>
</div></div>
<div class="flex flood"><div class="third padded">
	<h5 class="navy-t tahoma water-t-s">Default DEMO</h5>
	<video poster="" src="app/files/video/ocean.mp4" data-skin="default" data-overlay="1" data-title="Wavy Waves"></video>
</div><div class="third padded">
	<h5 class="navy-t tahoma water-t-s">Minimal DEMO</h5>
	<video poster="" src="app/files/video/ocean.mp4" data-skin="minimal" data-overlay="2"></video>
</div><div class="third padded">
	<h5 class="navy-t tahoma water-t-s">Red Compact DEMO</h5>
	<video poster="" src="app/files/video/ocean.mp4" data-color="#ff0000" data-skin="compact" data-overlay="1"></video>
</div></div>
<p class="spacer"></p>

<!-- GIF Player -->
<h4 class="flow-text charcoal padded"><i class="bi bi-play"></i> GIF Player</h4>
<div class="flex"><div class="padded third">
	<p class="bitstream">A simple plugin that allows the user to play / pause an animated GIF upon click or hover.</p>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/gif-player.js</em></span></p>
	<p class="padded disabled bitstream" style="margin-top: 1em;">Apply either of these classes to an <em>img</em> tag:<br /><strong>.gifplay</strong>: play upon click<br /><strong>.gifplay-h</strong>: play upon hover</p>
</div><div class="padded third">
	<h5 class="bitstream flow-text">Play Upon Click</h5>
	<img src="app/files/images/swedekat-glitch.gif" class="gifplay responsive" alt="Glitch KAT" />
</div><div class="padded third">
	<h5 class="bitstream flow-text">Play Upon Hover</h5>
	<img src="app/files/images/swedekat-glitch.gif" class="gifplay-h responsive" alt="Glitchy Kitty" />
</div></div>