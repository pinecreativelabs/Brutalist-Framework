<h3 class="fluid-text monolisk" id="basic">Basic Filters</h3>
<p class="bitstream">Basic filters apply a single CSS filter property to elements. Use these classes to apply filters directly to any element. Ideal for images.</p>
<p class="padded warning bitstream" style="display: inline-block;"><strong>NOTE:</strong> It is NOT possible to apply multiple filter classes to the same element.</p>
<div class="flex" style="margin-top: 1.15em;">
	<div class="disabled padded"><p><strong>Original Image</strong><br />
		<img class="large-thumb" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.invert</strong><br /><img class="large-thumb invert" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.grayscale</strong> <small>-d</small><br />
		<img class="large-thumb grayscale" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.sepia</strong> <small>-d</small><br />
		<img class="large-thumb sepia" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.contrast</strong> <small>-d / -i</small><br />
		<img class="large-thumb contrast" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.hue</strong> <small>-d / -i</small><br />
		<img class="large-thumb hue" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.saturate</strong> <small>-d / -i</small><br />
		<img class="large-thumb saturate-i" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.darken</strong> <small>-d / -i</small><br />
		<img class="large-thumb darken" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.lighten</strong> <small>-d / -i</small><br />
		<img class="large-thumb lighten" src="app/files/images/brutal-building.jpg" /></p>
	</div>
	<div class="padded">
		<p><strong>.blur</strong> <small>-d / -i</small><br />
		<img class="large-thumb blur" src="app/files/images/brutal-building.jpg" /></p>
	</div>
</div>
<div class="flex bitstream">
	<div class="padded half">
		<div class="info padded">
			<h4 class="flow-text allcaps"><strong>Increase / Decrease Filters</strong></h4>
			<p>Simply append <em>-i</em> or <em>-d</em> to a basic filter class to increase or decrease the affect a filter has on an element.<br /><br />
				<strong>-i</strong> <em>(increases filter affect)</em><br />
				<strong>-d</strong> <em>(decreases filter affect)</em><br /><br />
				<span class="flow-text">Examples:</span><br /><strong>.contrast-i</strong> <em>(increase contrast)</em><br />
				<strong>.hue-d</strong> <em>(decrease hue)</em><br /><br />
				<strong>NOTE: </strong>Not all filter classes support increasing or decreasing a filter. See the list of filter classes above to see what classes support <em>-i</em> and <em>-d</em>.</p>
		</div>
	</div><div class="padded half">
		<div class="disabled padding">
			<h4 class="flow-text allcaps"><strong>Hover Filter</strong></h4>
			<p>Apply a filter upon hover simply by adding <em>-h</em> after the class. <br /><strong>Examples:</strong></p>
			<p class="courier" style="display: inline-block;"><strong>.invert-h</strong><br />
				<img class="medium-thumb invert-h pointer" src="app/files/images/brutal-building.jpg" /></p>
			<p class="courier" style="display: inline-block;"><strong>.darken .hue-i-h</strong><br />
				<img class="medium-thumb darken hue-i-h pointer" src="app/files/images/brutal-building.jpg" /></p>
		</div>
	</div>
</div>
<div class="flex bitstream">
	<div class="half padded">
		<div class="disabled padded">
			<h4 class="flow-text allcaps charcoal-t"><strong>Background Filters</strong></h4>
			<p class="charcoal-t">Filters can be applied to backgrounds. Apply any of these classes:</p>
			<p><strong>.grayscale-bg<br />.sepia-bg<br />.saturate-bg<br />.hue-bg<br />.invert-bg<br />.brighten-bg<br />.darken-bg<br />.glassmorph <small>(blur)</small></strong></p>
		</div>
	</div><div class="padded half">
		<div class="padded disabled">
			<p class="flow-text bold">EXAMPLE</p>
			<div class="flex middle column center" style="width: 100%; height: 300px; background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url('app/files/images/brutpink.jpg');">
			<p class="padded grayscale-bg flow-text white-t fuchsia-t-s">.GREYSCALE-BG</p>
			<p class="padded sepia-bg flow-text white-t fuchsia-t-s">.SEPIA-BG</p>
			<p class="padded glassmorph flow-text white-t fuchsia-t-s">.GLASSMORPH</p>
			</div>
		</div>
	</div>
</div>
<p class="spacer"></p>