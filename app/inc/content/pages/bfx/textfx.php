<h3 class="fluid-text monolisk" id="textfx">Text Effects</h3>
<div class="flex"><div class="half padded">
	<!-- BAFFLE -->
	<h4 class="flow-text white-t charcoal">BAFFLE Text</h4>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/bfx.js</em></span></p>
	<p><em>Baffle</em> adds an animated obfuscation effect to any text. <span class="heavy">Reload page to see effect.</span> Apply these baffling classes!</p>
	<div class="emptiness box-shadow padded center lucida">
		<h4 class="baffle flow-text red-t">.baffle</h4>
		<p class="grey-t">Baffles once upon page load</p>
	</div>
	<div class="emptiness box-shadow padded center lucida">
		<h4 class="baffle-longer flow-text red-t">.baffle-longer</h4>
		<p class="grey-t">Baffles once, but for a longer duration (3 seconds)</p>
	</div>
	<div class="emptiness box-shadow padded center lucida">
		<h4 class="baffle-prolonged flow-text red-t">.baffle-prolonged</h4>
		<p class="grey-t">Baffles for a prolonged period</p>
	</div>
	<div class="emptiness box-shadow padded center lucida">
		<h4 class="flow-text red-t"><span class="baffle-forever">.baffle-forever</span><br />.baffle-forever</h4>
		<p class="grey-t">Baffles endlessly</p>
	</div>
</div><div class="padded half">
	<!-- Tumble Text -->
	<h4 class="charcoal white-t flow-text">TumbleText</h4>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/jquery.3.js<br />core/jab/plugins/tumbletext.js</em></span></p>
	<p>Tumble text characters either forward, backwards, or both! The tumble animation starts upon page load.<br /><br /></p>
	<div class="shades center monolisk" style="padding-bottom: 1em; line-height: 85%; font-size: 3em; font-weight: 900;">
		<!-- tumble text characters forwards -->
		<span class="tumbletext forwards smoke-t" style="margin: 0; padding: 0;">S M O K E</span><br />
		<!-- tumble text characters backwards -->
		<span class="tumbletext backwards charcoal-t" style="margin: 0; padding: 0;">C H A R C O A L</span><br />
		<!-- tumble alternating characters backwards and forwards -->
		<span class="tumbletext mixed black-t" style="margin: 0; padding: 0;">C O N C R E T E</span>
	</div>
	<p class="padded info"><span class="flow-text bold">Classes</span><br /><strong>.tumbletext</strong> - apply to any text element<br />
		<strong>.forwards</strong> - tumbles all characters forward<br /><strong>.backwards</strong> - tumbles all characters backward<br />
		<strong>.mixed</strong> - combines both forward and backwards, alternating characters<br /><br />EXAMPLE: <strong>.tumbletext.mixed</strong>
	</p>
	<p class="padded warning"><strong>TIP: </strong>Make sure there is at least 1em of padding on the bottom of any parent element that contains tumbled text.</p>
</div></div>
<p class="spacer"></p>
<div class="flex"><div class="half padded">
	<h4 class="charcoal white-t flow-text">Text Shadow Effects</h4>
	<div class="emptiness box-shadow padded center">
		<h4 class="brutal-text vanilla-t">.brutal-text</h4>
	</div>
	<div class="padded emptiness box-shadow center">
		<h4 class="brutal-text-mono vanilla-t">.brutal-text-mono</h4>
	</div>
	<div class="padded box-shadow emptiness center">
		<h4 class="impact fittext neon-text white-t">.neon-text</h4>
	</div>
	<div class="padded box-shadow emptiness center">
		<h4 class="impact fittext cellophane white-t">.cellophane</h4>
	</div>
	<div class="padded box-shadow emptiness center">
		<h4 class="impact fittext bitshadow white-t">.bitshadow</h4>
	</div>
</div><div class="half padded">

</div></div>
<p class="spacer"></p>

<!-- Chop Text -->
<h4 class="charcoal white-t flow-text">Chop Text</h4>
<div class="flex"><div class="half padded">
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/bfx.js</em></span></p>
	<p>Truncate a paragraph of text to a preset number of words. Even if there are a fewer number of words, an elipsis (...) will be appended to the end of the truncated text. Apply any of these classes to any text to truncate it:</p>
	<p class="padded disabled"><strong>.chop-8<br />.chop-16<br />.chop-32<br />.chop-64<br />.chop-128</strong></p>
</div><div class="half padded">
	<h4 class="flow-text">Example: <strong>.chop-16</strong></h4>
	<p>In this example, we wish to limit a paragraph of text to 16 words.<br /><br /></p>
	<p class="chop-16 success padding times">
	Lorem ipsum no facer prompta vim, movet ubique qui ei. Per no regione aliquid, ea mei nulla scribentur liberavisse. Vim cu tale ludus possit, discere suavitate nam ad. No verterem reprimique vix, phaedrum hendrerit an quo. Qui feugait apeirian ut, ne virtute numquam mandamus mea. Eos et enim dicant deterruisset.
	</p>
	<h4 class="flow-text">Example: <strong>.chop-64</strong></h4>
	<p>In this example, we wish to limit a paragraph of text to 64 words.</p>
	<p class="chop-64 success padding times">
	Lorem ipsum no facer prompta vim, movet ubique qui ei. Per no regione aliquid, ea mei nulla scribentur liberavisse. Vim cu tale ludus possit, discere suavitate nam ad. No verterem reprimique vix, phaedrum hendrerit an quo. Qui feugait apeirian ut, ne virtute numquam mandamus mea. Eos et enim dicant deterruisset.
	</p>
</div></div>
<p class="spacer"></p>

<!-- FITTEXT -->
<h4 class="white-t charcoal flow-text">FITTEXT</h4>
<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/bfx.js</em></span></p>
<p><em>Fittext</em> makes any text aggressively responsive, and scales the text in proportion to the window width.<br /><br /></p>
<div class="disabled padded">
	<p><strong><span class="red-t">.fittext</span></strong> - Best scales text to fit within container.</p>
	<p class="monolisk fittext blood-t-s">Brutalist Framework 3</p>
</div>
<div class="disabled padded" style="margin-top: 0.5em;">
	<p><strong><span class="red-t">.fittext-c</span></strong> - Compress scaling of text size.</p>
	<p class="monolisk fittext-c blood-t-s">Brutalist Framework 3</p>
</div>
<div class="disabled padded" style="margin-top: 0.5em;">
	<p><strong><span class="red-t">.fittext-cc</span></strong> - Conservative compression of scaling text.</p>
	<p class="monolisk fittext-cc blood-t-s">Brutalist Framework 3</p>
</div>
<div class="disabled padded" style="margin-top: 0.5em;">
	<p><strong><span class="red-t">.fittext-x</span></strong> - Expands scaling text aggressively.</p>
	<p class="monolisk fittext-x blood-t-s">Brutalist Framework 3</p>
</div>
<div class="disabled padded" style="margin-top: 0.5em;">
	<p><strong><span class="red-t">.fittext-xx</span></strong> - Extreme expansion of scaling text!!</p>
	<p class="monolisk fittext-xx blood-t-s">Brutalist Framework 3</p>
</div>
<p class="spacer"></p>
				
<!-- CurveText -->
<h4 class="white-t flow-text charcoal">CurveText</h4>
<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/jquery.3.js<br />core/jab/plugins/curvetext.js</em></span></p>
<p>Warp your text into curves, spirals, circles, and waves! Works best on paragraphs. All are fully responsive. Apply these classes for these effects:</p>
<div class="flex"><div class="padded half">
	<p class="flow-text">.arc-text</p>
	<p class="terminal monolisk arc-text">Arc Text allows you to create a responsive arch of text!</p>
	<p class="flow-text">.bezier-text</p>
	<p class="terminal monolisk bezier-text">Bezier Text allows you to create curvy responsive text!</p>
</div><div class="half padded">
	<p class="flow-text">.circle-text</p>
	<p class="terminal monolisk circle-text spread">Circle Text allows you to create a responsive circle of text!</p>
</div></div>
<div class="flex"><div class="padded half">
	<p class="flow-text">.wave-text</p>
	<p class="terminal monolisk wave-text">Wave Text allows you to create a responsive wave of text!</p>
</div><div class="padded half">
	<p class="flow-text">.spiral-text</p>
	<p class="terminal monolisk spiral-text spread">Spiral Text allows you to become sucked into another dimension! It is fully responsive, too!</p>
</div></div>