<h3 class="fluid-text monolisk" id="media">Multimedia</h3>
<!-- Thumbnails -->
<h4 class="charcoal flow-text bitstream padded">Thumbnails</h4>
<div class="flex bitstream"><div class="padded half">
	<p>Thumbnails allow you to display a list of images at a reduced size. Useful for galleries. Wrap <em>img</em> tags within a container with any of these classes:</p>
	<h4 class="flow-text">Markup</h4>
	<code class="black lime-t padding smaller">
		&lt;div class="<em>size</em>-thumb"&gt;<br />
		&nbsp;&nbsp;&nbsp;&lt;img src="URL" /&gt;&nbsp;<br />
		&nbsp;&nbsp;&nbsp;&lt;img src="URL" /&gt;&nbsp;...<br />&lt;/div&gt;
	</code>
	<p class="info padded"><span class="flow-text bold">TIP:</span> Thumbnail classes can also be applied directly to the <em><b>img</b></em> or <em><b>picture</b></em> tags.</p>
</div><div class="padded half">
	<div class="warning padded" style="margin-top: 1.5em;">
		<h4 class="flow-text">Cropped &amp; Circle Thumbnails</h4>
		<p>Crop images into even squares (regardless of their original dimensions) by applying the <span class="bigger bold">.crop</span> class in conjunction with any of the thumbnail classes!</p>
		<p style="margin-top: 1rem;">We can also make circle thumbnails! Apply the <span class="bold bigger">.circle</span> class in conjunction with <em>.crop</em> and any thumbnail size class:<br />
			<strong>.size-thumb.crop.circle</strong></p>
		<div class="tiny-thumb crop circle">
			<img src="app/files/images/brutal-building.jpg" />
			<img src="app/files/images/brutpink.jpg" />
			<img src="app/files/images/rupp-drive.jpg" />
		</div>
	</div>
</div><div class="padded half">
	<h4 class="flow-text"><strong>.micro-thumb</strong> <small>(40px)</small></h4>
	<div class="micro-thumb">
		<img src="app/files/images/brutal-building.jpg" />
		<img src="app/files/images/brutpink.jpg" />
		<img src="app/files/images/rupp-drive.jpg" />
		<img src="app/files/images/edgespace.jpg" />
	</div>
	<h4 class="flow-text"><strong>.tiny-thumb</strong> <small>(60px)</small></h4>
	<div class="tiny-thumb">
		<img src="app/files/images/brutal-building.jpg" />
		<img src="app/files/images/brutpink.jpg" />
		<img src="app/files/images/rupp-drive.jpg" />
		<img src="app/files/images/edgespace.jpg" />
	</div>
	<h4 class="flow-text"><strong>.small-thumb</strong> <small>(90px)</small></h4>
	<div class="small-thumb crop">
		<img src="app/files/images/brutal-building.jpg" />
		<img src="app/files/images/brutpink.jpg" />
		<img src="app/files/images/rupp-drive.jpg" />
		<img src="app/files/images/edgespace.jpg" />
	</div>
	<h4 class="flow-text"><strong>.medium-thumb</strong> <small>(120px)</small></h4>
	<div class="medium-thumb crop">
		<img src="app/files/images/brutal-building.jpg" />
		<img src="app/files/images/brutpink.jpg" />
		<img src="app/files/images/rupp-drive.jpg" />
	</div>
</div><div class="padded half">
	<h4 class="flow-text"><strong>.large-thumb</strong> <small>(150px)</small></h4>
	<div class="large-thumb crop">
		<img src="app/files/images/brutal-building.jpg" />
		<img src="app/files/images/brutpink.jpg" />
		<img src="app/files/images/rupp-drive.jpg" />
	</div>
	<h4 class="flow-text"><strong>.xlarge-thumb</strong> <small>(180px)</small></h4>
	<div class="xlarge-thumb"><img src="app/files/images/brutal-building.jpg" /></div>
	<h4 class="flow-text"><strong>.jumbo-thumb</strong> <small>(240px)</small></h4>
	<div class="jumbo-thumb"><img src="app/files/images/brutal-building.jpg" /></div>
</div></div>
<p class="spacer"></p>
	
<!-- Audio Player -->
<h4 class="flow-text charcoal padded"><i class="bi bi-vol-h"></i> Audio Player</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream">A brutally simple responsive audio player.</p>
	<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
		bos/core/jab/plugins/audio-player.js</em><br /><small><span class="echo">$audio_player_js</span></small></p>
	<p style="margin-top: 1em;" class="padded bitstream disabled">Audio players use data attributes to specify a title and artist:<br /><strong>data-title</strong>: name of file<br /><strong>data-artist</strong>: name of artist / source</p>
</div><div class="padded half">
	<h5 class="flow-text">Markup</h5>
	<code class="padded smaller lucida">
		&lt;audio class="baudio" data-title="" data-artist=""&gt;<br />
		&nbsp;&nbsp;&lt;source src="" type="audio/ogg"&gt;<br />
		&nbsp;&nbsp;&lt;source src="" type="audio/mpeg"&gt;<br />&lt;/audio&gt;
	</code>
	<h5 class="flow-text">DEMO:</h5>
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
	<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
		bos/core/jab/plugins/video-player.js</em><br /><small><span class="echo">$video_player_js</span></small></p>
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
	<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
		bos/core/jab/plugins/gif-player.js</em><br /><small><span class="echo">$gif_player_js</span></small></p>
	<p class="padded disabled bitstream" style="margin-top: 1em;">Apply either of these classes to an <em>img</em> tag:<br /><strong>.gifplay</strong>: play upon click<br /><strong>.gifplay-h</strong>: play upon hover</p>
</div><div class="padded third">
	<h5 class="bitstream flow-text">Play Upon Click</h5>
	<img src="app/files/images/swedekat-glitch.gif" class="gifplay responsive" alt="Glitch KAT" />
</div><div class="padded third">
	<h5 class="bitstream flow-text">Play Upon Hover</h5>
	<img src="app/files/images/swedekat-glitch.gif" class="gifplay-h responsive" alt="Glitchy Kitty" />
</div></div>
<p class="spacer"></p>

<!-- Presenter -->
<h4 class="flow-text charcoal padded"><i class="bi bi-seek-next"></i> Presenter</h4>
<div class="presenter half-screen">
	<a href="#" class="slide-prev charcoal smoke-t">&laquo;</a>
	<div class="slides">
		<div class="slide passion"><div class="padded white-t black-t-s">
			<h5 class="fluid-text communist">Presenter</h5>
			<img class="shape point-left right" src="app/files/images/platform-pain.jpg" alt="pain" style="max-height: 300px; width: auto;" />
			<p class="flow-text bitstream">Presenter is a touch-enabled, swipe-friendly content slider! Ideal for displaying presentational content.</p>
			<p class="bitstream flow-text" style="margin-top: 1em;">Presenter is fluid-width, so it will fit within any area. You can add as many slides as you want. By default, Presenter loops back to the beginning / end.</p>
		</div></div>
		<div class="slide virgin"><div class="padded center">
			<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
			bos/core/jab/plugins/presenter.js</em><br /><small><span class="echo">$prsenter_js</span></small></p>
			<p class="bitstream" style="margin-top: 1em;"><strong>NOTE:</strong> You'll need to make sure jQuery is loaded.</p>
		</div></div>
		<div class="slide emptiness white-t"><div class="padded">
			<h5 class="fluid-text communist">Code</h5>
			<hr class="thick shades" />
			<p class="bitstream flow-text">Code markup is pretty straight forward:</p>
			<code class="padded smaller lucida lime-b b-s-t">
				&lt;div class="presenter"&gt; <br />
				&nbsp;&nbsp;&nbsp;&lt;a href="#" class="slide-prev"&gt;&laquo;&lt;/a&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;div class="slides"&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="slide"&gt;...content...&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&lt;a href="#" class="slide-next"&gt;&raquo;&lt;/a&gt;<br />
				&lt;/div&gt;
			</code>
		</div></div>
		<div class="slide hottie"><div class="padded">
			<h5 class="fluid-text communist">Specify Height</h5>
			<p class="bitstream flow-text">The presenter height needs to be specified. Use inline style to specify a height on the <em>presenter</em> element wrapper. Alternatively, you can apply any of these classes to the <em>presenter</em> outer wrapper:<br /><br />
			<strong>.third-screen</strong> (33% height of screen)<br /><strong>.half-screen</strong> (50% height of screen)<br /><strong>.full-screen</strong> (100% height of screen)</p>
		</div></div>
		<div class="slide liminal"><div class="padded">
			<h5 class="fluid-text communist">Disable Auto-Loop</h5>
			<p class="bitstream flow-text">To disable the auto-loop, simply append <em><strong>-noloop</strong></em> to the outer wrapper, so that:<br /><br />
			<span class="flow-text"><b><em>presenter-noloop</em></b></span></p>
		</div></div>
		<div class="slide liminal"><div class="padded">
			<h5 class="fluid-text communist">AutoPlay</h5>
			<p class="bitstream flow-text">To enable autoplay so that slides automatically advance to the next (every 5 seconds), simply append <em><strong>-autoplay</strong></em> to the outer wrapper, so that:<br /><br /><span class="flow-text"><b><em>presenter-autoplay</em></b></span></p>
		</div></div>
		<div class="slide liminal"><div class="padded">
			<h5 class="fluid-text communist">Vertical Options</h5>
			<p class="bitstream flow-text">Slides can transition vertically. Use any of these classes as the outer wrapper:<br /><br />
			<span class="flow-text"><b><em>.presenter-vertical<br />.presenter-vertical-noloop<br />.presenter-vertical-autoplay</em></b></span></p>
		</div></div>
	</div>
	<a href="#" class="slide-next charcoal smoke-t">&raquo;</a>
</div>
<p class="spacer"></p>

<!-- Printer -->
<h4 class="flow-text charcoal padded"><i class="bi bi-print"></i> Printer</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream">The printer plugin makes a specific element easily printable, with a custom header and footer.</p>
	<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
		bos/core/jab/plugins/printer.js</em><br /><small><span class="echo">$printer_js</span></small></p>
	<div class="disabled padded bitstream" style="margin-top: 1em;">
		<p class="flow-text bold">Classes</p>
		<p><strong>.printer</strong><br /><small>wrap content to be printed within this class</small><br />
			<strong>.headprint</strong><br /><small>(optional) content to displayed as header</small><br />
			<strong>.footprint</strong><br /><small>(optional) content to displayed as footer</small><br />
			<strong>button onclick="printer();"</strong><br /><small>button to launch printer interface</small>
		</p><hr />
		<p><span class="bold flow-text">PUC (Print Utility Classes)</span><br />
			<strong>.print-only</strong><br /><small>content is only displayed when being printed, but is hidden on screens</small><br />
			<strong>.screen-only</strong><br /><small>content is hidden from being printed, and is only visible on screens</small><br />
			<strong>.print-monochrome</strong><br /><small>applied only to print view, all text is black, and images are rendered in grayscale</small>
		</p>
		<h5 class="flow-text">Markup</h5>
		<code class="padded lucida smaller">
			&lt;div class="printer"&gt;<br />&nbsp;&nbsp;content...<br />
			&lt;/div&gt;<br />&lt;button onclick="printer();"&gt;Print&lt;/button&gt;<br />
			&lt;div class="headprint print-only"&gt;&lt;h1&gt;Header&lt;/h1&gt;&lt;/div&gt;<br />
			&lt;div class="footprint print-only"&gt;&lt;p&gt;Footer&lt;/p&gt;&lt;/div&gt;
		</code>
	</div>
</div><div class="padded half">
	<div class="padded emptiness">
		<p class="bitstream rice-t"><span class="bold flow-text">DEMO: </span> Hit the "Print Now" button to print this section.</p>
		<!-- Content to be printed -->
		<div class="printer monochrome times">
			<h4>Text To Print</h4>
			<p>Aliquam faucibus luctus quam a placerat. Donec sit amet cursus ante. Nunc volutpat hendrerit orci non viverra. Nam iaculis vitae risus vel interdum. Phasellus tempus odio ac lectus efficitur, in porta ante vulputate. Suspendisse lobortis sem ligula, non pulvinar lectus dictum ut. Ut eu mi vitae felis semper placerat. Proin eget ante facilisis, faucibus ipsum mattis, volutpat libero. Curabitur tincidunt ex sit amet tellus tincidunt interdum a eget ipsum.</p>
			<!-- NOT to be printed -->
			<p class="screen-only warning"><b>This text will NOT be printed.</b></p>
			<!-- resume printing content -->
			<p class="indent">Sed volutpat volutpat ligula at placerat. Integer ut hendrerit arcu. Praesent id massa et turpis laoreet dictum a laoreet justo. Donec semper magna nec sapien lobortis, tincidunt auctor nunc efficitur. Nullam in massa dictum, hendrerit sem et, lacinia odio.</p>
			<img src="app/files/images/rupp-drive.jpg" class="large-thumb" />
		</div>
		<!-- Launch printer interface -->
		<button class="btn bold black-t" onclick="printer();">Print Now</button>
		<!-- Custom Header (only visible for print) -->
		<div class="headprint print-only"><h1>Header Print Test</h1></div>
		<!-- Custom Footer (only visible for print -->
		<div class="footprint print-only"><p>Footer print test</p></div>
	</div>
</div></div>