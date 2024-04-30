				<h3 class="fluid-text monolisk" id="rotatetext">Rotate Text</h3>
				<div class="flex"><div class="padded half">
					<p style="margin-bottom: 1em;">Rotate Text is a jQuery plugin that rotates text within an element.</p>
					<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br />bos/core/jab/plugins/rotate-text.js</em></p>
					<h5 class="flow-text">Markup</h5>
					<p class="padded info">Rotate Text uses data attributes to configure the settings. You will need to apply a unique ID to each individual Rotate Text element. The markup is as follows:</p>
					<code class="smaller padded">
						&lt;div id="rotate-text-1" class="rotator" data-rotate-interval="3000" data-rotate-animate="fadeIn,rollOut"&gt;<br />
						&nbsp;&nbsp;<span class="azure-t">/* element to render rotated text */</span><br />
						&nbsp;&nbsp;&lt;p class="rotate-arena"&gt;&lt;/p&gt;<br />
						&nbsp;&nbsp;<span class="azure-t">/* specify list of rotated text */</span><br />
						&nbsp;&nbsp;&lt;ul&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;li&gt;First Text Phrase&lt;/li&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;li&gt;Second Phrase of Text&lt;/li&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;li&gt;Last Text Phrase&lt;/li&gt;<br />
						&nbsp;&nbsp;&lt;/ul&gt;<br />
						&lt;/div&gt;
					</code>
					<p class="padded info"><strong>data-rotate-interval</strong><br /><small>[3000 = 3 seconds until next rotation]</small><br /><br />
					<strong>data-rotate-animate</strong><br /><small>[Animations use <em><strong>animate.css</strong></em>. Visit <a href="https://animate.style/" target="_blank" class="link"><strong>animate.style</strong></a> for reference.]</small></p>
				</div><div class="padded half">
					<div class="disabled padded">
						<h4 class="flow-text">Example 1</h4>
						<p>Rotate text within a <em>&lt;span&gt;</em> element.</p>
						<div id="rotate-demo1" class="rotator" data-rotate-interval="4000" data-rotate-animate="zoomIn,zoomOut" style="padding: 8px;">
							<h5 class="terminal padded">Brutalist Framework uses <span class="rotate-arena" style="background: #ff0000; color: #fff;"></span> to Brutalize!</h5>
							<ul><li>HTML5</li><li>CSS3</li><li>jQuery</li></ul>
						</div>
						<h4 class="flow-text">Example 2</h4>
						<p>Rotate text within a header element, with fadeIn and fadeOut animation.</p>
						<div id="rotate-demo2" class="rotator terminal" data-rotate-interval="3000" data-rotate-animate="fadeIn,fadeOut" style="padding: 8px;">
							<h5 class="rotate-arena"></h5>
							<ul>
								<li>Crude and Harsh</li><li>Ugly, Unrefined, Uncomfortable</li><li>Cynical and Confrontational</li>
							</ul>
						</div>
						<h4 class="flow-text">Example 3</h4>
						<p>Rotating paragraph with <em>data-rotate-animate</em> left unspecified.</p>
						<div id="rotate-demo3" class="rotator terminal" data-rotate-interval="2000" data-rotate-animate="" style="padding: 8px;">
							<p class="rotate-arena"></p>
							<ul>
								<li>First text item.</li><li>I have no animation.</li><li>I'm extra chonky.</li><li>I change every 2 seconds.</li>
							</ul>
						</div>
					</div>
				</div></div>