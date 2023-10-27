				<h3 class="fluid-text monolisk" id="interactions">Interactions</h3>
				<p>Interactions are elements that enhance user experience.</p>
				<!-- Cursors & Resizeable Elements -->
				<h4 class="charcoal flow-text white-t">Cursors & Resizeable Elements</h4>
				<p>Make any element have a specific cursor type, or make any element rezizeable by the user!</p>
				<div class="flex"><div class="padded half">
					<h5 class="flow-text">Cursor Classes</h5>
					<p>Apply these classes to any element. Hover for preview.</p>
					<div class="disabled blocked padded"><span class="bold bigger">.blocked</span></div>
					<div class="ready cell padded"><span class="bold bigger">.cell</span></div>
					<div class="alert crosshair padded"><span class="bold bigger">.crosshair</span></div>
					<div class="success grab padded"><span class="bold bigger">.grab</span></div>
					<div class="info help padded"><span class="bold bigger">.help</span></div>
					<div class="warning move padded"><span class="bold bigger">.move</span></div>
					<div class="bubblepop pointer padded"><span class="bold bigger">.pointer</span></div>
					<div class="mono-inv wait padded"><span class="bold bigger">.wait</span></div>
					<div class="mint-chocolate zoom-in padded"><span class="bold bigger">.zoom-in</span></div>
					<div class="campfire zoom-out padded"><span class="bold bigger">.zoom-out</span></div>
				</div><div class="padded half">
					<h5 class="flow-text">Resize Elements</h5>
					<p>Apply these classes to make any element resizeable by the user.</p>
					<div class="padded info blue-b b-s-t resize-both"><span class="bold bigger">.resize-both</span><br />
						Resize the element both vertically and horizontally.</div>
					<div class="padded ready orange-b b-s-t resize-h"><span class="bold bigger">.resize-h</span><br />
						Resize the element horizontally only.</div>
					<div class="padded disabled grey-b b-s-t resize-v"><span class="bold bigger">.resize-v</span><br />
						Resize the element vertically only.</div>
				</div></div>
				<p class="spacer"></p>
				
				<!-- Preview Hover -->
				<h4 class="charcoal flow-text white-t">Preview Hover</h4>
				<div class="flex"><div class="padded half">
					<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/buix.js</em></span></p>
					<p>Add hoverable video and image previews to any element.</p>
					<h5 class="flow-text">Markup</h5>
					<p>Markup is simple! Simply apply the class <strong><em>.ph</em></strong> and a <em>data-src</em> attribute, like so:</p>
					<code class="black lime-t padding smaller">
						&lt;element class="ph" data-src="./file-url"&gt;&lt;/element&gt;
					</code>
					<p class="padded info"><strong>Supported File Types:</strong> .jpg, .jpeg, .png, .ico, .gif, .svg, .bmp, .webp, .mp4, .webm</p>
				</div><div class="padded half">
					<p><strong>Demo:</strong> Hover over each of the elements below.</p>
					<button href="#" class="ph btn small-btn red-t heavy" data-src="app/files/images/blinker-fluid.jpg">Blinker Fluid Button</button>&nbsp;&nbsp;
					<img class="ph small-thumb circle" data-src="app/files/images/blinker-fluid.jpg" alt="Blinker Fluid" src="app/files/images/blinker-fluid.jpg" /><br />
				</div></div>
				
				<p class="spacer"></p>
				<!-- REVEAL -->
				<h4 class="flow-text charcoal white-t">Reveal</h4>
				<div class="flex"><div class="padded half">
					<h5>Reveal.hover</h5>
					<p><em>Reveal.hover</em> reveals hidden content upon hovering over an element!</p>
					<p>The reveal container starts at a maximum width of 50% of the container it is wrapped within, and enlarges to 100% width upon hover while also revealing a caption.</p>
					<p class="info padded"><span class="heavy">.reveal</span> (wrap content within this class)<br />
						&nbsp;&nbsp;&nbsp;<span class="heavy">.secret</span> (hidden content to be revealed upon hover)</p>
					<div class="flex" style="margin-top: 2em;"><div class="padded half">
						<div class="reveal hover orange-cream">
							<p class="lucida heavy flow-text center">Hover Over Me!</p>
							<p class="arial secret center">I'm a <span class="heavy">SECRET</span>!</p>
						</div>
					</div><div class="padded half">
						<div class="reveal hover orange-cream">
							<img src="app/files/images/rupp-drive.jpg" class="medium-thumb" />
							<p class="arial secret">SECRET - only visible upon hover!</p>
						</div>
					</div></div>
				</div><div class="padded half">
					<h5>Reveal.toggle</h5>
					<p><em>Reveal.toggle</em> toggles content upon clicking on a label. </p>
					<div class="reveal toggle">
						<input id="toggle1" class="toggle" type="checkbox"><!-- To have the toggle open by default, simply set the "checked" attribute -->
						<label for="toggle1" class="label-toggle navy white-t tahoma heavy">Toggle Me!</label>
						<div class="toggle-content grey navy-t">
							<p>You will need a unique ID for each reveal toggle element. Clicking on the label either opens or closes the toggled content. Use the markup as follows:</p>
							<code class="black lime-t lucida padding"><small>
								&lt;div class="reveal toggle"&gt;<br />
								&nbsp;&nbsp;&lt;input id="unique-id-1" class="toggle" type="checkbox"&gt;<br />
								&nbsp;&nbsp;&lt;label for="unique-id-1" class="label-toggle"&gt;<br />
								&nbsp;&nbsp;&lt;div class="toggle-content"&gt;<br />
								&nbsp;&nbsp;...content...<br />
								&nbsp;&nbsp;&lt;/div&gt;<br />&lt;/div&gt;
							</small></code>
						</div>
					</div>
				</div></div>
				<p class="spacer"></p>
				
				<!-- DRAGGABLE ELEMENTS -->
				<h4 class="flow-text charcoal white-t">Draggable Elements</h4>
				<div class="flex">
					<div class="padded half">
						<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/jquery.3.js<br />core/jab/plugins/draggable.js</em></span></p>
						<p>Make any element draggable! Simply apply the class <span class="heavy flow-text">.draggable</span> to any element.</p>
						<p class="info padded" style="margin-top: 2em;"><span class="bigger bold">Draggable Modals</span><br />Make a modal draggable just by adding the class <em>draggable</em> to the modal inner wrapper:<br /><span class="bold">.modal-inner.draggable</span></p>
					</div>
					<div class="padded half">
						<h4 class="flow-text"><strong>DEMO:</strong> <em>Draggable Bricks</em></h4>
						<p>In the example below, we have two draggable brick elements, which can be dragged anywhere, including outside of the <em>bricks</em> container.</p>
						<!-- Draggable Bricks -->
						<div class="rounded padded b-a-k silver charcoal-b bricks brix-demo" style="min-height: 25vh;">
							<div class="draggable">Drag Me</div>
							<div class="draggable b-d-t smoke-b"><img src="core/files/images/blox.png" class="medium-thumb" /><br /><small>move me</small></div>
						</div>
						
					</div>
				</div>
				<p class="spacer"></p>
				
				<!-- Content Display Picker -->
				<h4 class="flow-text charcoal white-t">CDP: Content Display Picker</h4>
				<div class="flex">
					<div class="padded half">
						<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/jquery.3.js<br />core/jab/plugins/cdp.js</em></span></p>
						<p>Display content when an option is selected.</p>
						<h5 class="flow-text">Markup</h5>
						<code class="black lime-t lucida-t padding smaller">
							&lt;div class="cdp-wrap" id="unique-id"&gt;<br />
							&nbsp;&nbsp;&lt;select class="cdp_select"&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="0"&gt;Content 1&lt;/option&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="1"&gt;Content 2&lt;/option&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="2"&gt;Content 3&lt;/option&gt;...<br />
							&nbsp;&nbsp;&lt;/select&gt;<br /><br />
							&nbsp;&nbsp;&lt;div class="content"&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="cdp-element" data-option="0"&gt;<br />...Option 1 Content...&lt;/div&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="cdp-element" data-option="1"&gt;<br />...Option 2 Content...&lt;/div&gt;<br />
							&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="cdp-element" data-option="2"&gt;<br />...Option 3 Content...&lt;/div&gt;<br />
							&nbsp;&nbsp;&lt;/div&gt;<br />
							&lt;/div&gt;
						</code>
					</div>
					<div class="padded half">
						<h5 class="flow-text">Demo:</h5>
						<div class="cdp-wrap" id="cdp1">
							<select class="cdp_select flow-text charcoal lime-t">
								<option value="0">Content 1</option>
								<option value="1">Content 2</option>
								<option value="2">Content 3</option>
							</select>
							<div class="content">
								<div class="cdp_element" data-option="0">
									<div class="padded ireland flow-text seaweed-t bold">Win a trip to Ireland!</div>
								</div>
								<div class="cdp_element" data-option="1">
									<div class="padded sweden-gradient flow-text white-t bold">Win a trip to Sweden!</div>
								</div>
								<div class="cdp_element" data-option="2">
									<div class="padded octoberfest flow-text black-t comic bold">Win a Beer Party!</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p class="spacer"></p>
				
				<!-- B-Loader -->
				<h4 class="flow-text charcoal white-t">B-Loader</h4>
				<div class="flex"><div class="padded half">
						<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/jquery.3.js<br />core/jab/plugins/b-loader.js</em></span></p>
						<p style="margin-bottom: 1em;">Load more list items upon button press!</p>
						<p class="padded info">Simply create a list of <strong>div, p, li</strong> or <strong>article</strong> elements, wrapped within a <strong><em>.b-loader</em></strong> class container!
						<br /><br />By default, <em>b-loader</em> displays 5 items at a time. This can be modified in the <em>start.brutalizing.js</em> initialization script.
						<br /><br />To <em>hide</em> the counter within the "load more" button, add the class <em><strong>no-counter</strong></em> to the <em>b-loader</em> wrapper.
						</p>
				</div><div class="padded half">
					<h5 class="flow-text">DEMO:</h5>
					<div class="b-loader vanilla charcoal-t padded">
						<div>List Item 1</div>
						<div>List Item 2</div>
						<div>List Item 3</div>
						<div>List Item 4</div>
						<p>List Item 5 (Paragraph)</p>
						<div>List Item 6</div>
						<div>List Item 7</div>
						<div>List Item 8</div>
						<div>List Item 9</div>
						<p>List Item 10 (Paragraph)</p>
						<div>List Item 11</div>
						<div>List Item 12</div>
						<div>List Item 13</div>
						<div>List Item 14</div>
						<div>List Item 15</div>
						<div>List Item 16</div>
						<div>List Item 17</div>
						<div>List Item 18</div>
						<div>List Item 19</div>
						<p>List Item 20 (Paragraph)</p>
						<div>List Item 21</div>
						<div>List Item 22</div>
						<div>List Item 23</div>
						<div>List Item 24</div>
						<div>List Item 25</div>
						<div>List Item 26</div>
						<div>LAST List Item 27</div>
					</div>
				</div></div>