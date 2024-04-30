	<h3 class="fluid-text monolisk" id="orient">Orientation</h3>
	<p class="bitstream">Display or hide elements depending on the device orientation (landscape or portrait).</p>
	<div class="flex bitstream"><div class="padded half">
		<h4 class="lucida red-text white-text-shadow">Classes</h4>
		<p class="charcoal-text lucida">Use these classes to either show or hide elements based on the device orientation:</p>
		<div class="info padded">
			<p><b>.show-on-landscape</b><br /><small>display only when device is in landscape orientation</small></p>
			<hr />
			<p><b>.show-on-portrait</b><br /><small>display only when device is in portrait orientation</small></p>
			<hr />
			<p><b>.hide-on-landscape</b><br /><small>hidden only when device is in landscape orientation</small></p>
			<hr />
			<p><b>.hide-on-portrait</b><br /><small>hidden only when device is in portrait orientation</small></p>
		</div>
	</div><div class="half padded">
		<h4 class="flow-text">Example</h4>
		<p>We wish to show a different content box on a screen that's in a portrait orientation, than one that's in a landscape orientation.</p>
		<!-- Display for Portrait orientation -->
		<div class="padded success show-on-portrait hide-on-landscape">
			<p class="center">This box is <em>only</em> visible in the PORTRAIT orientation on mobile devices.</p>
		</div>
		<!-- Display for Landscape orientation -->
		<div class="padded ready show-on-landscape hide-on-portrait">
			<p class="center">This box is <em>only</em> visible in the LANDSCAPE orientation. On desktops and laptops, only this box should be visible.</p>
		</div>
	</div></div>