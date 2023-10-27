					<h3 class="fluid-text monolisk" id="heights">Height Breakpoints</h3>
					<p>There are two height-based breakpoint types: min-height or max-height. Classes from each can be combined.</p>
					<div class="padded">
						<h4 class="lucida red-text white-text-shadow">Min-Height</h4>
						<p class="charcoal-text lucida">Use min-height classes to display or hide elements on these screen sizes and up, based on the screen height.</p>
						<div class="info padded">
							<p><b>.show-over-320h</b> - display on screens with a height of 321px or above<br /><b>.hide-over-320h</b> - hide on screens with a height of 321px or above</p>
							<hr />
							<p><b>.show-over-360h</b> - display on screens with a height of 361px or above<br /><b>.hide-over-360h</b> - hide on screens with a height of 361px or above</p>
							<hr />
							<p><b>.show-over-480h</b> - display on screens with a height of 481px or above<br /><b>.hide-over-480h</b> - hide on screens with a height of 481px or above</p>
							<hr />
							<p><b>.show-over-540h</b> - display on screens with a height of 541px or above<br /><b>.hide-over-540h</b> - hide on screens with a height of 541px or above</p>
							<hr />
							<p><b>.show-over-640h</b> - display on screens with a height of 641px or above<br /><b>.hide-over-640h</b> - hide on screens with a height of 641px or above</p>
							<hr />
							<p><b>.show-over-768h</b> - display on screens with a height of 769px or above<br /><b>.hide-over-768h</b> - hide on screens with a height of 769px or above</p>
							<hr />
							<p><b>.show-over-960h</b> - display on screens with a height of 961px or above<br /><b>.hide-over-960h</b> - hide on screens with a height of 961px or above</p>
							<hr />
							<p><b>.show-over-1024h</b> - display on screens with a height of 1025px or above<br /><b>.hide-over-1024h</b> - hide on screens with a height of 1025px or above</p>
						</div>
						
						<h4 class="flow-text">Max-Height</h4>
						<p>Use max-width classes to display or hide elements on these screen sizes and down.</p>
						<div class="info padded">
							<p><b>.show-under-320h</b> - display on screens with a height of 320px or above<br /><b>.hide-under-320h</b> - hide on screens with a height of 320px or less</p>
							<hr />
							<p><b>.show-under-360h</b> - display on screens with a height of 360px or above<br /><b>.hide-under-360h</b> - hide on screens with a height of 360px or less</p>
							<hr />
							<p><b>.show-under-480h</b> - display on screens with a height of 480px or above<br /><b>.hide-under-480h</b> - hide on screens with a height of 480px or less</p>
							<hr />
							<p><b>.show-under-540h</b> - display on screens with a height of 540px or above<br /><b>.hide-under-540h</b> - hide on screens with a height of 540px or less</p>
							<hr />
							<p><b>.show-under-640h</b> - display on screens with a height of 640px or above<br /><b>.hide-under-640h</b> - hide on screens with a height of 640px or less</p>
							<hr />
							<p><b>.show-under-768h</b> - display on screens with a height of 768px or above<br /><b>.hide-under-768h</b> - hide on screens with a height of 768px or less</p>
							<hr />
							<p><b>.show-under-960h</b> - display on screens with a height of 960px or above<br /><b>.hide-under-960h</b> - hide on screens with a height of 960px or less</p>
							<hr />
							<p><b>.show-under-1024h</b> - display on screens with a height of 1024px or above<br /><b>.hide-under-1024h</b> - hide on screens with a height of 1024px or less</p>
						</div>
						<h4 class="flow-text">Example 1</h4>
						<p>We have a content area that needs to be hidden on screens that are under 540px. To do this, simply apply this class:</p>
						<p class="ready padded heavy">.hide-under-540h</p>
						<p class="hide-under-540h padded success">This box becomes hidden on screens that are under 540px tall. Re-size your browser window!</p>
						<h4 class="flow-text">Example 2</h4>
						<p>Here, we want to hide our content box <em>only</em> for screens that have a height ranging between 320 and 768px. To do this, we will need to use these classes:</p>
						<p class="ready padded heavy">.show-under-320h .hide-over-320h .show-over-768h</p>
						<div class="padded success show-under-320h hide-over-320h show-over-768h">
							<p class="center">This box is shown on screens with a height under 320px and over 768px, but is hidden on screen heights between 321 and 768px.</p>
						</div>
					</div>