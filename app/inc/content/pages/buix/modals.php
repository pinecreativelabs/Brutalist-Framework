			<h3 class="fluid-text monolisk" id="modals">Modals</h3>
			<p class="bitstream">Modals are popup boxes that open when a user clicks on a link. There are two types of Modals: <em>Vanilla</em> and <em>Lite</em>.</p>
			<h4 class="flow-text bitstream white-t charcoal">Vanilla Modals</h4>
			<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/buix/modal.js</em><br /><small><span class="echo">$modal_js</span></small></p>
			<p class="bitstream">Vanilla modals use plain vanilla javascript (no dependencies). Display a modal with any type of content. Users can close the modal either by clicking anywhere outside of it, or the X in the top right corner. There are three components that are needed.</p>
			<div class="flex bitstream"><div class="half padded">
				<h4 class="flow-text"><strong>STEP 1:</strong> Create Modal Content</h4>
				<p>Wrap your content within this markup. This is what will be displayed within the modal. <em><strong>NOTE:</strong> Content will need to be set to a max-width.</em></p>
				<code class="black lime-t lucida padding smaller">
					&lt;div id="unique-modal-id" style="display: none;"&gt;<br /><br />
					&nbsp;...content...&nbsp;<br /><br />
					&lt;/div&gt;
				</code>
				<h4 class="flow-text"><strong>STEP 2:</strong> Initiate Modal Box</h4>
				<p>This only needs to be included ONCE on the page. It loads the modal content within it. Place this after the main body content, but before any <em>script</em> tags.</p>
				<code class="black lime-t lucida padding smaller">
					&lt;div class="modal"&gt;<br />
					&nbsp;&lt;div class="modal-inner"&gt;<br />
					&nbsp;&nbsp;&lt;span data-modal-close&gt;&times;&lt;/span&gt;<br />
					&nbsp;&nbsp;&lt;div class="modal-content"&gt;&lt;/div&gt;<br />
					&nbsp;&lt;/div&gt;<br />
					&lt;/div&gt;
				</code>
				<h4 class="flow-text"><strong>STEP 3:</strong> Launch Modal</h4>
				<p>Simply create a link with a unique ID and <em>data-modal-open</em> attribute to launch the modal.</p>
				<code class="black lime-t lucida padded smaller">
					&lt;a href="unique-modal-id" data-modal-open&gt;Open Modal&lt;/a&gt;
				</code>
				
			</div><div class="half padded">
				<h4 class="flow-text">Examples</h4>
				<!-- Links to launch modals -->
				<p class="flow-text">
					+ <a href="#modal-1" data-modal-open>Single Image</a><br />
					+ <a href="#modal-yt" data-modal-open>YouTube Video</a><br />
					+ <a href="#modal-2" data-modal-open>Basic Content</a>
				</p>
			</div></div>
			<!-- Image Demo Modal -->
			<div id="modal-1" style="display:none;">
				<img src="app/files/images/swedekat.jpg" style="max-width: 478px; height: auto !important;" alt="Swedish Kat" />
			</div>
			<!-- YouTube Video Demo Modal -->
				<div id="modal-yt" style="display:none;">
				<div class="flex" style="max-width: 620px;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/HS6n24N_grM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<!-- Content Demo Modal -->
			<div id="modal-2" style="display:none;">
				<div class="flex blue" style="max-width: 768px;">
					<div class="padded half sweden lucida">
						<h5>Left Column</h5>
						<p>This is a two-column layout modal, with the width restricted to 768px. This is the left side.</p>
					</div>
					<div class="padded half sweden-gradient">
						<h5 class="lucida white-t">Right Column</h5>
						<p class="bold lucida white-t">Here is a thumbnail image for you stare at.<br /><img class="xlarge-thumb" src="core/files/images/comprehend.jpg" alt="Think Brutalism" /></p>
					</div>
				</div>
			</div>
			<p class="spacer"></p>
				
			<!-- Lite Modals -->
			<h4 class="charcoal bitstream flow-text white-t" id="modals-lite">Lite Modals</h4>
			<p class="bitstream">Pure CSS modals for simple and lightweight content!</p>
			<div class="flex bitstream"><div class="padded half">
				<h4 class="flow-text">Create Modal Content</h4>
				<p>Wrap your content within this markup.</p>
				<code class="black lime-t lucida padding smaller">
					&lt;div id="unique-id" class="modal-lite"&gt;<br />
					&nbsp;&nbsp;&lt;a href="javascript:history.go(-1)" class="close"&gt;&amp;#10006;&lt;/a&gt;<br />
					&nbsp;&nbsp;&lt;div class="modal-content"&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="header"&gt;..heading..&lt;/div&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="body"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;..body content..<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
					&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="footer"&gt;..footer..&lt;/div&gt;<br />
					&nbsp;&nbsp;&lt;/div&gt;<br />
					&lt;/div&gt;
				</code>
				<h4 class="flow-text">Launch Modal</h4>
				<p>Just link to the corresponding unique ID!</p>
				<code class="black lime-t lucida padded smaller">&lt;a href="#unique-id"&gt;Launch Modal&lt;/a&gt;</code>
				<h4 class="flow-text">Examples</h4>
				<a href="#lm-1" class="btn btn-large yellow blue-t invert-h">Lite Modal</a>
				<a href="#lm-2" class="btn btn-large sweden invert-h">Fullscreen Lite Modal</a>
					
				<!-- lite modal demo -->
				<div id="lm-1" class="modal-lite">
					<a href="javascript:history.go(-1)" class="close">&#10006;</a>
					<div class="modal-content">
						<div class="header sweden"><h5 class="flow-text">Swedish Kat</h5></div>
						<div class="body" style="max-width: 468px;">
							<img src="app/files/images/swedekat.jpg" class="responsive" alt="Swedish Kitty" />
						</div>
						<div class="footer disabled"><p class="right-align flow-text heavy"><a href="javascript:history.go(-1)">&laquo; BACK</a></p></div>
					</div>
				</div>
					
				<!-- lite modal full demo -->
				<div class="modal-lite" id="lm-2">
					<a href="javascript:history.go(-1)" class="close">&#10006;</a>
					<div class="modal-content full">
						<div class="header midnight"><h5 class="flow-text">FULL Lite Modal</h5></div>
						<div class="body scroll-y">
							<h4 class="fittext monolisk glitchtext midnight-t center">FULLSCREEN!</h4>
							<p class="flow-text grey-t center arial">I am a fullscreen modal, taking up the entire viewport.<br /><br />
								Did you know you can link between Lite Modals?<br />Simply link to their respective IDs.<br /><br /><a href="#lm-1" class="sweden invert-h">#lm-1</a><br /><br /></p>
							<h4 class="fittext monolisk glitchtext midnight-t center">SCROLLABLE</h4>
							<p class="flow-text grey-t center arial">This modal body container is scrollable.</p>
							<p class="spacer"></p>
							<p class="center flow-text grey-t arial">LOREM IPSUMS:</p>
							<p class="col2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
							<p class="col2" style="margin: 1em 0 1.5em 0;">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh.</p>
						</div>
						<div class="footer disabled"><p class="left-align heavy flow-text"><a href="javascript:history.go(-1)">&laquo; BACK</a></p></div>
					</div>
				</div>
					
			</div><div class="padded half">
				<p class="padded info"><span class="flow-text bold">Customize</span><br />By default, no backgrounds or other colors are applied. Apply any flavors classes as necessary to any of the modal elements. <br /><br /><span class="flow-text bold">Closing Modals</span><br />
					Optionally link the modal footer button to a unique ID within the page, so the user is returned to a specific point on the page.<br /><br />
				<span class="flow-text bold">Fullscreen</span><br />To create a fullscreen modal, apply the class <b>.full</b> to the <em>.modal-content</em> container.<br /><br />
				<span class="flow-text bold">Scrollable</span><br />Ideal for fullscreen modals, make the modal body content vertically scrollable by applying the class <b>.scroll-y</b> to the <em>.modal-content .body</em> container.</p>
			</div></div>