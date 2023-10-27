				<h3 class="fluid-text monolisk" id="scrollers">Scrollers</h3>
				<div class="flex"><div class="padded half">
					<p>Create an infinitely scrolling content area. It is pure CSS, so no javascript is needed. There are four directions that content can be scrolled: left, right, up, and down. Hover over the scroller to pause it.<br /><br /></p>
					<p class="flow-text"><strong>Define the Height</strong></p>
					<p>The height of the scroller will need to be defined. When using a horizontal (left or right) scroller, the wrapped content will also need to have the same height. A vertical scroller (up or down) only needs the height defined for the wrapper.</p>
					<h4 class="flow-text">Markup</h4>
					<p>This is the markup for creating a scroller. Note that the scroller-wrap needs a specific height defined.</p>
					<code class="padding smaller">
						&lt;div class="scroller-wrap" style="height: 200px;" &gt;<br />
						&nbsp;&nbsp;&lt;div class="scroll-direction"&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="scroll-item"&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="scroll-item"&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
						&nbsp;&nbsp;&lt;/div&gt;<br />
						&lt;/div&gt;
					</code>
					<div class="info padded">
						<p class="flow-text"><strong>Changing the Speed</strong></p>
						<p>By default, the scroller takes 10 seconds to scroll all the content. The wider or taller the area is, the faster it will appear to scroll. The shorter or narrower, the movement appears slower.</p>
						<p>To change the speed, you will need to modify the scroll direction classes in the <em>buix.css</em> file. </p>
					</div>
					
				</div><div class="padded half">
					<p class="flow-text"><strong>.scroll-left</strong></p>
					<div class="scroller-wrap black" style="height: 30px;">
						<div class="scroll-left">
							<div class="scroll-item">
								<p class="sweden" style="font-size: 20px; line-height: 30px; padding-left: 8px; padding-right: 8px;"> I'm a scrolling text box! </p>
							</div>
							<div class="scroll-item">
								<p class="pink grape-t" style="font-size: 20px; line-height: 30px; padding-left: 8px; padding-right: 8px;"> Create as many <span class="blink">scrolling</span> content items as you want! </p>
							</div>
							<div class="scroll-item">
								<p class="green banana-t" style="font-size: 20px; line-height: 30px; padding-left: 8px; padding-right: 8px;"> I scroll to the left... </p>
							</div>
						</div>
					</div>
					<p class="flow-text"><strong>.scroll-right</strong></p>
					<div class="scroller-wrap gray" style="height: 120px;">
						<div class="scroll-right">
							<div class="scroll-item"><img src="app/files/images/brutal-building.jpg" class="medium-thumb invert" /></div>
							<div class="scroll-item"><img src="app/files/images/edge.jpg" class="medium-thumb" /></div>
							<div class="scroll-item"><img src="app/files/images/rupp-drive.jpg" class="medium-thumb" /></div>
						</div>
					</div>
					<p class="flow-text"><strong>.scroll-up</strong></p>
					<div class="scroller-wrap white blue-b brdr-s-t" style="height: 250px;">
						<div class="scroll-up">
							<div class="scroll-item">
								<p class="purple banana-t tahoma">This is a mixed content scroller with paragraphs and images.</p>
							</div>
							<div class="scroll-item">
								<img src="app/files/images/brutpink.jpg" class="responsive" />
							</div>
							<div class="scroll-item">
								<p class="water navy-t flow-text arial">This could be used as a news feed!</p>
							</div>
							<div class="scroll-item">
								<img src="app/files/images/rupp-drive.jpg" class="responsive" />
							</div>
						</div>
					</div>
					<p class="flow-text"><strong>.scroll-down</strong></p>
					<div class="scroller-wrap blue lemon-t lucida blue-b b-s-t" style="height: 222px;">
						<div class="scroll-down">
							<div class="scroll-item">
								<p>This is the first paragraph of text.</p>
							</div>
							<div class="scroll-item">
								<img src="app/files/images/vampire-glitch.jpg" class="responsive" alt="vampire" />
							</div>
							<div class="scroll-item">
								<p class="blink-182">I'm blinking to get your attention!</p>
							</div>
							<div class="scroll-item">
								<p class="flow-text">Flow-text paragraph because I'm more important</p>
							</div>
						</div>
					</div>
				</div></div>
				<p class="spacer"></p>
				
				<!-- LoopScroll -->
				<h4 class="charcoal flow-text white-t" id="modals-lite">LoopScroll</h4>
				<div class="flex"><div class="padded half">
					<p class="flow-text"><span class="bold red white-t">REQUIRES: <em>buix.js</em></span></p>
					<p><em>LoopScroll</em> allows you to create an element with a touch-enabled infinitely looping scroll! Ideal for creative navigation menus or any other type of content! Add as many items as you wish. No scrollbars are displayed by default. Recommended for mobile applications.</p>
					<h4 class="flow-text">Markup</h4>
					<p>Wrap <em>loop-item</em> elements within a <em>loopscroll</em> wrapper.</p>
					<code class="padding smaller">
						&lt;div class="loopscroll"&gt;<br />
						&nbsp;&nbsp;&lt;div class="loop-item"&gt;<br />
						&nbsp;&nbsp;&nbsp;...content...<br />
						&nbsp;&nbsp;&lt;/div&gt;<br />
						&lt;/div&gt;
					</code>
					<p class="padded info"><span class="bigger bold">Limit Height</span><br />The height of the <em>loopscroll</em> wrapper needs to be specified in some way. In the demo, the wrapper is set to a max-height of 444 px.</p>
				</div><div class="padded half">
					<h4 class="flow-text">DEMO</h4>
					<div class="loopscroll lush fluid-text" style="max-height: 444px;">
						<div class="loop-item green lemon-t"><a class="link bold">FIRST ITEM</a></div>
						<div class="loop-item hottie lucida"><a class="link">Delightful Dance</a></div>
						<div class="loop-item sunset times"><a class="link">Rebel Fantasies</a></div>
						<div class="loop-item passion georgia"><a class="link"><em>Passionate Love</em></a></div>
						<div class="loop-item deep-desire impact"><a class="link">Henry and June</a></div>
						<div class="loop-item winter tahoma"><a class="link">Frozen Blitz</a></div>
						<div class="loop-item vampire times red-t"><a class="link">Horror Show</a></div>
						<div class="loop-item autumn courier"><a class="link">Fall Finale</a></div>
						<div class="loop-item dusk arial"><a class="link">After Dark</a></div>
						<div class="loop-item river georgia"><a class="link">Strong Stream</a></div>
						<div class="loop-item"><img src="app/files/images/swedekat.jpg" alt="swedekat" class="xlarge-thumb" /></div>
						<div class="loop-item"><img src="app/files/images/brutpink.jpg" alt="crazy" class="xlarge-thumb" /></div>
						<div class="loop-item shades lucida"><a class="link">Shady Secrets</a></div>
						<div class="loop-item red yellow-t"><a class="link bold">LAST ITEM</a></div>
					</div>
				</div></div>