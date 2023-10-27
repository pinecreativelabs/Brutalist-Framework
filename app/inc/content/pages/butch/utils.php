				<h3 class="fluid-text monolisk" id="utils">Utility Classes</h3>
				<p>These classes are used for brutalizing your content. Apply them to any element.<br /><br /></p>
				<!-- Spacing & Offsets -->
				<div class="flex"><div class="half">
					<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Spacing Classes</strong></span></p>
					<p><strong>.padded</strong> <small>[applies <em>--padding</em> variable]</small><br />
						<strong>.no-padding</strong> <small>[no padding on element]</small><br />
						<strong>.no-margins</strong> <small>[no margin around element]</small><br />
						<strong>.confined</strong> <small>[absolutely NO padding or margins]</small><br />
						<strong>.comfortable</strong> <small>[enlarges <em>--padding</em> variable by 50%]</small><br />
						<strong>.uncomfortable</strong> <small>[reduces <em>--padding</em> variable by 25%]</small><br />
						<strong>.solitary</strong> <small>[applies <em>--margins</em> variable]</small><br />
						<strong>.sociable</strong> <small>[applies <em>--pullmargin</em> variable]</small><br />
						<strong>.paranoid</strong> <small>[applies <em>--pushmargin</em> variable to left and right of element]</small><br />
						<strong>.isolated</strong> <small>[applies <em>--pushmargin</em> variable to top and bottom of element]</small><br />
						<strong>.spacer</strong> <small>[applies <em>--spacer</em> height variable to element]</small><br />
						<strong>.spacer-tall</strong> <small>[triples <em>--spacer</em> height variable]</small><br />
					</p>
				</div><div class="half">
					<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Offsets</strong></span></p>
					<p><strong>.pull-right</strong> <small>[applies <em>--pullmargin</em> margin-right variable]</small><br />
						<strong>.pull-left</strong> <small>[applies <em>--pullmargin</em> margin-left variable]</small><br />
						<strong>.pull-up</strong> <small>[applies <em>--pullmargin</em> margin-top variable]</small><br />
						<strong>.pull-down</strong> <small>[applies <em>--pullmargin</em> margin-bottom variable]</small><br /><br />
						<strong>.push-right</strong> <small>[applies <em>--pushmargin</em> margin-right variable]</small><br />
						<strong>.push-left</strong> <small>[applies <em>--pushmargin</em> margin-left variable]</small><br />
						<strong>.push-up</strong> <small>[applies <em>--pushmargin</em> margin-top variable]</small><br />
						<strong>.push-down</strong> <small>[applies <em>--pushmargin</em> margin-bottom variable]</small><br />
					</p>
				</div></div>
				<p class="spacer"></p>
				<!-- Scale Classes -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Scale Classes</strong></span></p>
				<p><strong>.scale</strong> <small>[applies <em>--scalex</em> variable to element]</small><br />
					<strong>.scale-3d</strong> <small>[applies <em>--scalex, --scaley</em>, and <em>--scalez</em> variables to 3D transformation of element]</small><br />
					<strong>.scale-x</strong> <small>[applies <em>--scalex</em> variable to scaleX transformation of element]</small><br />
					<strong>.scale-y</strong> <small>[applies <em>--scaley</em> variable to scaleY transformation of element]</small><br />
					<strong>.scale-z</strong> <small>[applies <em>--scalez</em> variable to scaleZ transformation of element]</small><br />
				</p>
				<p class="spacer"></p>
				<!-- Skew Classes -->
				<p class="white-t courier flow-text" style="margin-top: 1em;"><span class="charcoal allcaps"><strong>Skew Classes</strong></span></p>
				<p><strong>.skew</strong> <small>[skews element along X and Y axis using <em>--skewx</em> and <em>--skewy</em> variables]</small><br />
					<strong>.skew-r</strong> <small>[same as .skew, but multiplied by -1 (reversed)]</small><br />
					<strong>.skew-x</strong> <small>[skews element along X axis using <em>-skewx</em> variable]</small><br />
					<strong>.skew-x-r</strong> <small>[same as .skew-x, but multiplied by -1 (reversed)]</small><br />
					<strong>.skew-y</strong> <small>[skews element along Y axis using <em>-skewy</em> variable]</small><br />
					<strong>.skew-y-r</strong> <small>[same as .skew-y, but multiplied by -1 (reversed)]</small><br />
				</p>
				<p class="spacer"></p>
				<!-- Perspective Classes -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Perspective Classes</strong></span></p>
				<p><strong>.po</strong> <small>[applies <em>--origin</em> variable (perspective origin)]</small><br />
					<strong>.po-c</strong> <small>[centered perspective origin]</small><br />
					<strong>.po-l</strong> <small>[left perspective origin]</small><br />
					<strong>.po-r</strong> <small>[right perspective origin]</small><br />
					<strong>.perspective</strong> <small>[applies <em>--perspective</em> variable]</small><br />
				</p>
				<p class="spacer"></p>
				<!-- Rotation Classes -->
				<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Rotation Classes</strong></span></p>
				<p><strong>.rr</strong> <small>[rotate right using <em>--rotatex</em> variable]</small><br />
					<strong>.rl</strong> <small>[rotate left using <em>--rotatex</em> variable (multiplied by -1)]</small><br />
					<strong>.rr-x</strong> <small>[rotate right on X axis using <em>--rotatex</em> variable]</small><br />
					<strong>.rl-x</strong> <small>[rotate left on X axis using <em>--rotatex</em> variable (multiplied by -1)]</small><br />
					<strong>.rr-y</strong> <small>[rotate right on Y axis using <em>--rotatey</em> variable]</small><br />
					<strong>.rl-y</strong> <small>[rotate left on Y axis using <em>--rotatey</em> variable (multiplied by -1)]</small><br />
					<strong>.rr-z</strong> <small>[rotate right on Z axis using <em>--rotatez</em> variable]</small><br />
					<strong>.rl-z</strong> <small>[rotate right on Z axis using <em>--rotatez</em> variable (multiplied by -1)]</small><br />
				</p>
				<p class="spacer"></p>
				<!-- Flip 'n Hover -->
				<div class="flex"><div class="half">
					<p class="white-t courier flow-text"><span class="charcoal allcaps"><strong>Transformation Classes</strong></span></p>
					<p><strong>.flip</strong> <small>[flips element horizontally]</small><br />
						<strong>.flip-h</strong> <small>[flip horizontally upon hover]</small><br />
						<strong>.flip-up</strong> <small>[flips element vertically]</small><br />
						<strong>.flip-up-h</strong> <small>[flip vertically upon hover]</small><br /><br />
					</p>
				</div><div class="padded half">
					<p class="info padded"><span class="flow-text bold">Transform on Hover</span><br />To apply a transformation class upon hover, simply append a <strong><em>-h</em></strong> to a rotation, skew, or scale class. Examples:<br /><strong>.scale-h<br />.skew-y-r-h<br />.rl-y-h</strong></p>
				</div></div>