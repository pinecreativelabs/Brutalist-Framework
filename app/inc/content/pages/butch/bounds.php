				<h3 class="fluid-text monolisk" id="bounds">Boundaries</h3>
				<p>Boundaries need to be respected. This includes brutal borders and rigid rules.<br /><br /></p>
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Basic Borders</strong></span></p>
				<p>Apply basic borders using these classes. To change the border color, see <em>Flavors</em>.<br /><br /></p>
				<div class="flex">
					<div class="padded">
						<p class="b-s-t black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-s-t</strong><br /><small>Solid thin border</small></p>
						<p class="b-s-k black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-s-k</strong><br /><small>Solid thick border</small></p>
						<p class="b-s-f black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-s-f</strong><br /><small>Solid fat border</small></p>
					</div>
					<div class="padded">
						<p class="b-d-t black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-d-t</strong><br /><small>Dotted thin border</small></p>
						<p class="b-d-k black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-d-k</strong><br /><small>Dotted thick border</small></p>
						<p class="b-d-f black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-d-f</strong><br /><small>Dotted fat border</small></p>
					</div>
					<div class="padded">
						<p class="b-a-t black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-a-t</strong><br /><small>Dashed thin border</small></p>
						<p class="b-a-k black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-a-k</strong><br /><small>Dashed thick border</small></p>
						<p class="b-a-f black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-a-f</strong><br /><small>Dashed fat border</small></p>
					</div>
					<div class="padded">
						<p class="b-b-t black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-b-t</strong><br /><small>Double thin border</small></p>
						<p class="b-b-k black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-b-k</strong><br /><small>Double thick border</small></p>
						<p class="b-b-f black-b" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-b-f</strong><br /><small>Double fat border</small></p>
					</div>
				</div>
				<p class="spacer"></p>
				<!-- Outlines -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Outlines</strong></span></p>
				<p style="margin-bottom: 1em;">Add an outline border around any element. You can apply both borders and outlines to the same element. Similar to the border classes above, use <strong><em>o</em></strong> in place of the first <strong><em>b</em></strong>. Example: <b><em>.o-s-t</em></b> produces a solid thin outline.</p>
				<div class="flex">
					<div class="padded half">
						<p class="padded info"><span class="flow-text bold">Offset Outlines</span><br />
						Offset outlines around an element by 2, 5, 10, 15, or 20px:<br /><strong>.os-2<br />.os-5<br />.os-10<br />.os-15<br />.os-20</strong>
						</p>
					</div>
					<div class="padded half">
						<p class="bubblepop b-d-f o-d-f" style="margin-bottom: 1.5em; padding: 0.5em;"><b>.bubblepop .b-d-f .o-d-f</b><br /><small>fat dotted border and outline</small></p>
						<p class="b-s-k o-a-t red-b blue-o os-5" style="margin-bottom: 1.5em; padding: 0.5em;"><strong>.b-s-k .o-a-t .os-5</strong><br />
						<small>Solid thick red border with thin dashed blue outline, offset by 5px</small>
						</p>
						<p class="strawberry-banana o-d-k chocolate-o os-2" style="margin-bottom: 1.75em; padding: 0.5em;"><strong>.o-d-k .os-5</strong><br /><small>Strawberry-banana box with chocolate outline, offset by 2px</small></p>
						<p class="b-a-k purple-b red-o o-s-t os-5 rounded" style="margin-bottom: 1.5em; padding: 0.5em;"><strong>.b-a-k .o-s-t .os-5 .rounded</strong></p>
						<p class="b-a-t black-b o-a-t black-o os-2" style="margin-bottom: 1em; padding: 0.5em;"><strong>.b-a-t .o-a-t .os-2</strong></p>
					</div>
				</div>
				<p class="padding"></p>
				<!-- Horizontal Rules -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Horizontal Rules</strong></span></p>
				<div class="flex">
					<div class="padded third">
						<p>These apply the <em>--accent</em> color variable:</p>
						<p class="flow-text"><strong>hr.sawtooth</strong></p>
						<hr class="sawtooth" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.gradient</strong></p>
						<hr class="gradient" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.dashed</strong></p>
						<hr class="dashed" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.slash</strong></p>
						<hr class="slash" />
					</div>
					<div class="padded third">
						<p>These are hard-coded:</p>
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.central</strong></p>
						<hr class="central" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.charlie</strong></p>
						<hr class="charlie" />
					</div>
					<div class="padded third">
						<p>These allow for Flavor classes to be applied:</p>
						<p class="flow-text">hr.fat</p>
						<hr class="fat bubblegum" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.thick</strong></p>
						<hr class="thick tomato" />
						<p class="flow-text" style="margin-top: 14px;"><strong>hr.thin</strong></p>
						<hr class="thin clean" />
					</div>
				</div>
				<p class="spacer"></p>
				<!-- Gradient Borders -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Gradient Borders</strong></span></p>
				<div class="flex emptiness flow-text">
					<div class="padded third">
						<div class="love-b padded"><p>.love-b</p></div>
					</div>
					<div class="padded third">
						<div class="lush-b padded"><p>.lush-b</p></div>
					</div>
					<div class="padded third">
						<div class="virgin-b padded"><p>.virgin-b</p></div>
					</div>
					<div class="padded third">
						<div class="frost-b padded"><p>.frost-b</p></div>
					</div>
					<div class="padded third">
						<div class="sunset-b padded"><p>.sunset-b</p></div>
					</div>
					<div class="padded third">
						<div class="dusk-b padded"><p>.dusk-b</p></div>
					</div>
					<div class="padded third">
						<div class="shades-b padded"><p>.shades-b</p></div>
					</div>
					<div class="padded third">
						<div class="river-b padded"><p>.river-b</p></div>
					</div>
					<div class="padded third">
						<div class="hottie-b padded"><p>.hottie-b</p></div>
					</div>
				</div>
				<p class="spacer"></p>
				<!-- Border -->
				<div class="flex">
					<div class="padded half">
						<div class="slant-dark white"><p class="flow-text blue-t">.slant-dark</p></div>
					</div>
					<div class="padded half">
						<div class="slant-light white"><p class="flow-text blue-t">.slant-light</p></div>
					</div>
					<div class="padded half">
						<div class="bevel white"><p class="flow-text blue-t">.bevel</p></div>
					</div>
					<div class="padded half">
						<div class="emboss white"><p class="flow-text blue-t">.emboss</p></div>
					</div>
					<div class="padded half">
						<div class="jagged white padding">
							<p class="blue-t flow-text">.jagged</p>
							<p class="grey-t">Creates a grey triangular border above and below an element.</p>
						</div>
					</div>
					<div class="padded half">
						<div class="jagged-alt white padding">
							<p class="blue-t flow-text">.jagged-alt</p>
							<p class="grey-t">Jagged alternative</p>
						</div>
					</div>
				</div>
				<p class="spacer"></p>
				<!-- SHAPES -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Shapes</strong></span></p>
				<div class="flex">
					<div class="padded half clean">
						<div class="circle padded b-s-t mauve-b" style="margin-bottom: 1.5em; min-height: 200px;">
							<p class="center"><span class="flow-text bold purple-t">.circle</span><br />
							<small><span class="grey-t">Applies 50% radius to any element. To create a perfect circle, specify an equal width and height. When applying float classes <strong>.left</strong> or <strong>.right</strong>, content will wrap around the circle.</span></small></p>
						</div>
						<div class="sketchbox silver grey-b b-a-t" style="margin-bottom: 1.5em;">
							<p class="flow-text blue-t center comic-sans">&nbsp;<br />.sketchbox<br />&nbsp;</p>
						</div>
						<div class="rounded gray-b b-s-k">
							<p class="flow-text blue-t center">&nbsp;<br />.rounded<br />&nbsp;</p>
						</div>
					</div>
					<div class="padded half">
						<p class="padded info"><span class="flow-text bold">Additional Shapes</span><br />There are more shapes available via MOLDS. These additional molded shapes allow for content to wrap around them.<br /><a href="tiles.html"><strong>Learn More &raquo;</a></p>
					</div>
				</div>
				<p class="spacer"></p>
				<!-- Box Shadows -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Box Shadows</strong></span></p>
				<p>Apply these classes to add a box shadow. By default, box shadow colors use the <em>--secondary</em> color variable.</p>
				<div class="flex charcoal-t" style="margin-bottom: 1.5em;">
					<div class="padded fourth">
						<div class="smoke box-shadow padded"><p><strong>.box-s</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-k padded"><p><strong>.box-s-k</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-f padded"><p><strong>.box-s-f</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-d padded"><p><strong>.box-s-d</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-t padded"><p><strong>.box-s-t</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-q padded"><p><strong>.box-s-q</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-p padded"><p><strong>.box-s-p</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-s padded"><p><strong>.box-s-s</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-l padded"><p><strong>.box-s-l</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-r padded"><p><strong>.box-s-r</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-a padded"><p><strong>.box-s-a</strong></p></div>
					</div>
					<div class="padded fourth">
						<div class="smoke box-s-b padded"><p><strong>.box-s-b</strong></p></div>
					</div>
				</div>