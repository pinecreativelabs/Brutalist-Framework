				<h3 class="fluid-text monolisk" id="type">Typography</h3>
				<!-- Font Families -->
				<h4 class="white-t courier charcoal flow-text">Font Family Classes</h4>
				<p class="col2">
					<span class="arial">.arial</span><br />
					<span class="arial-black">.arial-black</span><br />
					<span class="comic">.comic</span><br />
					<span class="tahoma">.tahoma</span><br />
					<span class="helvetica">.helvetica</span><br />
					<span class="impact">.impact</span><br />
					<span class="verdana">.verdana</span><br />
					<span class="courier">.courier</span><br />
					<span class="lucida">.lucida</span><br />
					<span class="georgia">.georgia</span><br />
					<span class="times">.times</span><br />
					<span class="palatino">.palatino</span>
				</p>
				<div class="flex"><div style="width: 50%;">
					<!-- Font Weight -->
					<h4 class="white-t flow-text courier charcoal">Font Weight</h4>
					<p class="normal">.normal</p>
					<p class="bold">.bold</p>
					<p class="heavy">.heavy</p>
				</div><div style="width: 50%;">
					<!-- Font Sizing -->
					<h4 class="white-t courier flow-text charcoal">Font Sizing</h4>
					<p class="fineprint">.fineprint</p>
					<p class="smaller">.smaller</p>
					<p>Normal size text</p>
					<p class="larger">.larger</p>
					<p class="huge">.huge</p>
				</div></div>
				<h4 class="white-t flow-text charcoal courier">Alignment &amp; Direction</h4>
				<p><strong>.center</strong> <small>[centers text]</small><br />
					<strong>.left-align</strong> <small>[aligns text to the left (default)]</small><br />
					<strong>.right-align</strong> <small>[aligns text to the right]</small><br />
					<strong>.justify</strong> <small>[justifies text]</small><br />
					<strong>.rtl</strong> <small>[right-to-left]</small><br />
					<strong>.wm-lr</strong> <small>[vertical writing mode left-to-right]</small><br />
					<strong>.wm-rl</strong> <small>[vertical writing mode right-to-left]</small><br />
					<strong>.left</strong> <small>[floats element to the left]</small><br /><strong>.right</strong> <small>[floats element to the right]</small>
				</p>
				
				<h4 class="white-t flow-text charcoal courier">Text Formatting</h4>
				<p><strong>.letterspace</strong> <small>[character spacing using <em>--charspace</em> variable]</small><br />
					<strong>.spread</strong> <small>[doubles character spacing using <em>--charspace</em> variable]</small><br />
					<strong>.compress</strong> <small>[cuts character spacing by one-third using <em>--charspace</em> variable]</small><br />
					<strong>.oblique</strong> <small>[<span class="oblique">Slants text</span>]</small><br />
					<strong>.allcaps</strong> <small>[<span class="allcaps">Capitalizes all characters</span>]</small><br />
					<strong>.lowercase</strong> <small>[<span class="lowercase">ALL LOWERCASE</span>]</small><br />
					<strong>.capitalize</strong> <small>[<span class="capitalize">all words uppercased</span>]</small><br />
					<strong>.smallcaps</strong> <small>[<span class="smallcaps">Small caps font is displayed</span>]</small><br />
					<strong>.spaced-2x</strong> <small>[double spaced]</small><br />
					<strong>.spaced-3x</strong> <small>[triple line spacing]</small><br />
					<strong>.spaced-4x</strong> <small>[4x line spacing]</small>
				</p>
				<p><strong>.tal-l</strong> <small>[left-aligns last line of text]</small><br /><strong>.tal-r</strong> <small>[right-aligns last line of text</small><br />
					<strong>.tal-c</strong> <small>[centers last line of text]</small><br /><strong>.tal-j</strong> <small>[justifies last line of text]</small><br />
					<strong>.indent</strong> <small>[indents text by 1cm]</small>
				</p>
				<p class="nowrap"><strong>.nowrap</strong> <small>[text will never wrap to next line]</small></p>
				<p class="ws-sm"><strong>.ws-sm</strong> <small>[small word spacing]</small></p>
				<p class="ws-md"><strong>.ws-md</strong> <small>[medium word spacing]</small></p>
				<p class="wordspace-large"><strong>.ws-lg</strong> <small>[large word spacing]</small></p>
				<p class="keep-all"><strong>.keep-all</strong> <small>[word breaks are prohibited between pairs of letters]</small></p>
				<p class="break-all"><strong>.break-all</strong> <small>[lines may break between any two letters]</small></p>
				<p class="break"><strong>.break</strong> <small>[word wrap allows unbreakable words to be broken]</small></p>
				<p class="guard-text"><strong>.guard</strong> <small>[prevents text from being selectable]</small></p>
					
				<h4 class="white-t flow-text charcoal courier">Responsive Text</h4>
				<p class="flow-text"><span class="charcoal"><strong>.flow-text</strong></span> Flow-text makes your text responsive! The font size uses media queries, so it scales depending on the screen width.</p>
				<p>This is a paragraph <em>without</em> flow-text applied.</p>
				
				<h4 class="white-t flow-text charcoal courier">Fluid Text</h4>
				<p><em><strong>Fluid-text</strong></em> is similar to <em>flow-text</em> in that the size scales in relation to the screen size. However, it does NOT make use of media queries. Rather, it uses a calculated scale range to determine the font size. Done in pure CSS!<br /><br /></p>
				<p class="fluid-text bold">.fluid-text</p>
				<p class="fluid-text-h1">.fluid-text-h1</p>
				<p class="fluid-text-h2">.fluid-text-h2</p>
				<p class="fluid-text-h3">.fluid-text-h3</p>
				<p class="fluid-text-h4">.fluid-text-h4</p>
				<p class="fluid-text-h5">.fluid-text-h5</p>
				<p class="fluid-text">.fluid-text-h6</p>
				<p class="spacer"></p>
				<p class="white-t flow-text charcoal courier">Address</p>
				<address>Address Line 1<br />Address Line 2<br />Address Line 3</address>
				<p>&nbsp;</p>
				<p class="white-t flow-text charcoal courier">Blockquote</p>
				<blockquote>
					New brutalism, inevitably, in global dissemination, degenerated into a rough concrete style.
				</blockquote>
				<p class="white-t flow-text charcoal courier">Description Lists</p>
				<dl>
					<dt>Term</dt>
					<dd>Description</dd>
					<dt>Concrete</dt>
					<dd>Cement, air, water, gravel, sand</dd>
				</dl>
				<p class="padding"></p>
				<p class="white-t flow-text charcoal courier">Unordered Lists</p>
				<div class="flex">
					<div class="third">
						<p><strong>ul.disc</strong></p>
						<ul class="disc">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.diamond</strong></p>
						<ul class="diamond">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.fisheye</strong></p>
						<ul class="fisheye">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.check</strong></p>
						<ul class="check">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.heart</strong></p>
						<ul class="heart">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
					</div>
					<div class="third">
						<p><strong>ul.circle</strong></p>
						<ul class="circle">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.triangle</strong></p>
						<ul class="triangle">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.bullseye</strong></p>
						<ul class="bullseye">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.xmark</strong></p>
						<ul class="xmark">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.sparkle</strong></p>
						<ul class="sparkle">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
					</div>
					<div class="third">
						<p><strong>ul.square</strong></p>
						<ul class="square">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.brutal</strong></p>
						<ul class="brutal">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.lozenge</strong></p>
						<ul class="lozenge">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.arrow</strong></p>
						<ul class="arrow">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
						<p><strong>ul.burst</strong></p>
						<ul class="burst">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
					</div>
					<div class="half">
						<p><span class="bold bigger">ul.tags</span> - makes ul li items display inline</p>
						<ul class="tags">
							<li>Brutalism</li>
							<li>Concrete</li>
							<li>Architecture</li>
							<li>Structures</li>
						</ul>
						<p><span class="bigger bold">ul.tags-hash</span> - prepends a hashtag to tags</p>
						<ul class="tags-hash">
							<li>Brutalism</li>
							<li>Concrete</li>
							<li>Architecture</li>
							<li>Structures</li>
						</ul>
					</div>
					<div class="half">
						<p><span class="bigger bold">ul.tags-check</span> - prepends a checkmark to tags</p>
						<ul class="tags-check">
							<li>Brutalism</li>
							<li>Concrete</li>
							<li>Architecture</li>
							<li>Structures</li>
						</ul>
						<p><span class="bigger bold">ul.tags-xmark</span> - prepends an x-mark to tags</p>
						<ul class="tags-xmark">
							<li>Brutalism</li>
							<li>Concrete</li>
							<li>Architecture</li>
							<li>Structures</li>
						</ul>
					</div>
				</div>
				<p class="white-t flow-text charcoal courier" style="margin-top: 1em;">Ordered Lists</p>
				<div class="flex">
					<div style="width: 50%;">
						<p><strong>Default</strong></p>
						<ol>
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ol>
						<p><strong>ol.roman</strong></p>
						<ol class="roman">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ol>
					</div>
					<div style="width: 50%;">
						<p><strong>ol.alpha</strong></p>
						<ol class="alpha">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ol>
						<p><strong>ol.none</strong></p>
						<ol class="none">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ol>
					</div>
				</div>
				<p class="spacer"></p>
				
				<!-- Section Header Counter -->
				<p class="white-t flow-text charcoal courier" style="margin-top: 1em;">Section Header Counter</p>
				<div class="flex"><div class="padded half">
					<p>The section header counter allows you to create auto-incremented section headers and sub-headers. </p>
					<p class="indent">Counted heading tags need to be wrapped within a <em>count</em> class div. Sub-headings need to be wrapped within a <em>subcount</em> class div (that is also nested within a <em>count</em> element).</p>
					<code class="black lime-t lucida padding" style="margin-top: 1em;">
						&lt;div class="count"&gt;<br />
						&nbsp;&lt;h2&gt;Heading&lt;/h2&gt;<br />
						&nbsp;&lt;h2&gt;Heading&lt;/h2&gt;<br />
						&nbsp;&nbsp;&lt;div class="subcount"&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Sub-heading&lt;/h3&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Sub-heading&lt;/h3&gt;<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Sub-heading&lt;/h3&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;...<br />
						&nbsp;&nbsp;&lt;/div&gt;<br />
						&nbsp;&lt;h2&gt;Heading&lt;/h2&gt;<br />...<br />
						&lt;/div&gt;
					</code>
				</div><div class="half">
					<p class="padded info"><span class="bold bigger">Classes</span><br />
						<strong>.count h(1-5)</strong> - auto-increments H tags (1-5)<br /><strong>.subcount h(2-6)</strong> - auto-increments H tags (2-6)<br />
						<strong>.count-reset</strong> - resets count to 0<br /><strong>.subcount-reset</strong> - resets sub-count to 0<br />
					</p>
					<div class="count">
						<h4>Regions</h4>
						<div class="subcount indent">
							<h5>North America</h5>
							<h5>Europe</h5>
							<h5>Asia</h5>
						</div>
						<h4>States</h4>
						<div class="subcount indent">
							<h5>Counties</h5>
							<h5>Cities</h5>
							<h5>Attractions</h5>
						</div>
						<h4>Planets</h4>
						<div class="subcount indent">
							<h5>Uranus</h5>
							<h5>Saturn</h5>
							<h5>Jupiter</h5>
						</div>
					</div>
				</div></div>