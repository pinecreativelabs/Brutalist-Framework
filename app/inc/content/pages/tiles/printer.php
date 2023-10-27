
<h4 class="flow-text charcoal padded"><i class="bi bi-print"></i> Printer</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream">The printer plugin makes a specific element easily printable, with a custom header and footer.</p>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/printer.js</em></span></p>
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