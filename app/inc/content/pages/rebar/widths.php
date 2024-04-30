	<h3 class="fluid-text monolisk" id="widths">Width Breakpoints</h3>
	<p class="bitstream">There are two width-based breakpoint types: min-width or max-width. Classes from each can be combined.</p>
	<div class="flex bitstream"><div class="padded half">
		<h4 class="flow-text">Min-Width</h4>
		<p>Use min-width classes to display or hide elements on these screen sizes <em><b>and up</b></em>.<br /><br /></p>
		<div class="info padded bold">
			<p>.show-over-240<br />.hide-over-240</p><hr />
			<p>.show-over-320<br />.hide-over-320</p><hr />
			<p>.show-over-360<br />.hide-over-360</p><hr />
			<p>.show-over-480<br />.hide-over-480</p><hr />
			<p>.show-over-540<br />.hide-over-540</p><hr />
			<p>.show-over-640<br />.hide-over-640</p><hr />
			<p>.show-over-768<br />.hide-over-768</p><hr />
			<p>.show-over-960<br />.hide-over-960</p><hr />
			<p>.show-over-1024<br />.hide-over-1024</p><hr />
			<p>.show-over-1280<br />.hide-over-1280</p><hr />
			<p>.show-over-1366<br />.hide-over-1366</p><hr />
			<p>.show-over-1600<br />.hide-over-1600</p>
		</div>
	</div><div class="padded half">
		<h4 class="flow-text">Max-Width</h4>
		<p>Use max-width classes to display or hide elements on these screen sizes <b><em>and down</em></b>.<br /><br /></p>
		<div class="info padded bold">
			<p>.show-under-240<br />.hide-under-240</p><hr />
			<p>.show-under-320<br />.hide-under-320</p><hr />
			<p>.show-under-360<br />.hide-under-360</p><hr />
			<p>.show-under-480<br />.hide-under-480</p><hr />
			<p>.show-under-540<br />.hide-under-540</p><hr />
			<p>.show-under-640<br />.hide-under-640</p><hr />
			<p>.show-under-768<br />.hide-under-768</p><hr />
			<p>.show-under-960<br />.hide-under-960</p><hr />
			<p>.show-under-1024<br />.hide-under-1024</p><hr />
			<p>.show-under-1280<br />.hide-under-1280</p><hr />
			<p>.show-under-1366<br />.hide-under-1366</p><hr />
			<p>.show-under-1600<br />.hide-under-1600</p>
		</div>
	</div></div>
	<div class="flex bitstream"><div class="padded half">
		<h4 class="flow-text">Example 1</h4>
		<p>Let's say we want to display a box of content <em>ONLY</em> on screen sizes that are over 480px, which is roughly the size of a small tablet or large phone. To do this, we simply need to apply two classes to the box:</p>
		<p class="ready padded heavy">.hide-under-480 .show-over-480</p>
		<p class="hide-under-480 show-over-480 padded success">This box becomes hidden on screens that are 480px or smaller. Re-size your browser window!</p>
	</div><div class="padded half">
		<h4 class="flow-text">Example 2</h4>
		<p>We may wish to replace content at different screen sizes. Re-size your browser window to see the changes.</p>
		<!-- Display success box on screens over 1024px -->
		<div class="padded success hide-under-1024 show-over-1024" style="max-width: 468px;">
			<p class="center">This box is only visible on screens over 1024px.</p>
		</div>
		<!-- Display info box on screens 1024px or less -->
		<div class="padded info show-under-1024 hide-over-1024" style="max-width: 468px;">
			<p class="center">This box is only visible on screens UNDER 1024px.</p>
		</div>
	</div></div>
	<!-- Width-Based Breakpoint Ranges -->
	<div class="flex bitstream"><div class="padded half">	
		<h3 class="flow-text">Width-Based Breakpoint Ranges</h3>
		<p>Use these classes to show or hide elements within a specific range of screen size, where the first number is the min-width, and the 2nd number is the max-width.</p>
		<div class="info padded bold">
			<p>.hide-240-320<br />.show-240-320</p><hr />
			<p>.hide-320-480<br />.show-320-480</p><hr />
			<p>.hide-360-480<br />.show-360-480</p><hr />
			<p>.hide-480-540<br />.show-480-540</p><hr />
			<p>.hide-540-640<br />.show-540-640</p><hr />
			<p>.hide-640-768<br />.show-640-768</p><hr />
			<p>.hide-768-960<br />.show-768-960</p><hr />
			<p>.hide-960-1024<br />.show-960-1024</p><hr />
			<p>.hide-1024-1280<br />.show-1024-1280</p><hr />
			<p>.hide-1280-1366<br />.show-1280-1366</p><hr />
			<p>.hide-1366-1600<br />.show-1366-1600</p>
		</div>
	</div><div class="padded half">
		<h4 class="flow-text">Device Type Visibility</h4>
		<p>Show or hide elements based on the type of device size range.</p>
		<div class="info padded">
			<p><b>.hide-on-tv / .hide-on-xlarge</b><br /><small>Hide on screens 1201px and up</small><br />
				<b>.show-on-tv / .show-on-xlarge</b><br /><small>Show on screens 1201px and up</small>
			</p><hr />
			<p><b>.hide-on-desktop / .hide-on-large</b><br /><small>Hide on screens 1025 - 1200px</small><br />
				<b>.show-on-desktop / .show-on-large</b><br /><small>Show on screens 1025 - 1200px</small>
			</p><hr />
			<p><b>.hide-on-laptop / .hide-on-medium</b><br /><small>Hide on screens 769 - 1024px</small><br />
				<b>.show-on-laptop / .show-on-medium</b><br /><small>Show on screens 769 - 1024px</small>
			</p><hr />
			<p><b>.hide-on-tablet / .hide-on-small</b><br /><small>Hide on screens 481 - 768px</small><br />
				<b>.show-on-tablet / .show-on-small</b><br /><small>Show on screens 481 - 768px</small>
			</p><hr />
			<p><b>.hide-on-mobile / .hide-on-xsmall</b><br /><small>Hide on screens 480px and down</small><br />
				<b>.show-on-mobile / .show-on-xsmall</b><br /><small>Show on screens 480px and down</small>
			</p><hr />
			<p><b>.hide-on-wearable / .hide-on-xxsmall</b><br /><small>Hide on screens 272px and down</small><br />
				<b>.show-on-wearable / .show-on-xxsmall</b><br /><small>Show on screens 272px and down</small>
			</p>
		</div>
		<h4 class="flow-text">Example</h4>
		<p>We may wish to hide a block only on screens that are between 320 and 480px, as well as between 768 and 1024px. At all other sizes, the block will be always visible. To do this, we just need to use these classes:</p>
		<div class="ready padded heavy">.hide-320-480 .hide-768-960 .hide-960-1024</div>
		<!-- Hide this box at various screen size ranges -->
		<div class="padded success hide-320-480 hide-768-960 hide-960-1024">
			<p class="center">This box is hidden when the screen width is between 320 and 480px, <em>as well as</em> between 960 and 1024px.</p>
		</div>
	</div></div>