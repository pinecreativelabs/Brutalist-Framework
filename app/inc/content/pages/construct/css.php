		<h3 class="fluid-text monolisk" id="css"><strong>CSS Components</strong></h3>
		<p class="bitstream">Core CSS components make up the bulk of BF. The included CSS files are uncompressed (unminified), and are located in the <span class="bold red">core/css</span> folder.</p>
		<div class="flex"><div class="padded half">
			<h4 class="charcoal white-t flow-text bitstream">Construct CSS</h4>
			<p class="bitstream" style="margin-bottom: 1em;">All CSS files can be loaded independently, or you could use <span class="bold red">core/css/construct.css</span> to import all CSS files and load them via this one file all at once.</p>
			<p><img src="app/files/images/csscore.jpg" alt="Core CSS" class="responsive" /></p>
			<div class="padded disabled">
				<style>
				.classylist{line-height: 90%;}
				.classylist li{padding-bottom: 10px;}
				</style>
				<h5 class="flow-text bold">/core/css</h5>
				<ul class="none classylist files">
					<li><i class="folder-plain"></i> <strong>/fonts</strong><br /><small>(contains self-hosted custom fonts)</small></li>
					<li><i class="folder-plain"></i> <strong>/icons</strong><br /><small>(contains SVG icon files)</small></li>
					<li><i class="folder-plain"></i> <strong>/images</strong><br /><small>(contains images for various UI/UX elements)</small></li>
					<li><strong><i class="css"></i> animate.css</strong><br /><small>(animation library (source: <a href="https://animate.style/" target="_blank">animate.style</a>))</small></li>
					<li><strong><i class="css"></i> bfx.css</strong><br /><small>(animation &amp; other effects)</small></li>
					<li><strong><i class="css"></i> bicons.css</strong><br /><small>(native UTF-8 symbols class library)</small></li>
					<li><strong><i class="css"></i> buix.css</strong><br /><small>(user interface styles)</small></li>
					<li><strong><i class="css"></i> butch.css</strong><br /><small>(basic typography &amp; element styles)</small></li>
					<li><strong><i class="css"></i> construct.css</strong><br /><small>(imports other core CSS files)</small></li>
					<li><strong><i class="css"></i> default.css</strong><br /><small>(style resets)</small></li>
					<li><strong><i class="css"></i> filetypes.css</strong><br /><small>(filetype icon library)</small></li>
					<li><strong><i class="css"></i> flavors.css</strong><br /><small>(library of color classes)</small></li>
					<li><strong><i class="css"></i> rebar.css</strong><br /><small>(responsive behavior library)</small></li>
					<li><strong><i class="css"></i> variables.css</strong><br /><small>(configuration of style variables)</small></li>
				</ul>
			</div>
			<p class="padded warning bitstream"><strong>CAVEAT:</strong><br />One drawback to using @import within <em>construct.css</em> is that the page load time can be affected. Although the increase in load time is negligible, it could potentially affect your SEO rankings. To improve this, consider minifying all CSS files for a live site / application.</p>
		</div><div class="padded half">
			<h4 class="charcoal white-t flow-text bitstream">Variables</h4>
			<p class="bitstream" style="margin-bottom: 1em;">CSS variables are used to configure some of the core components. This allows for some flexibility in customizing global core classes. To modify the values, edit the <span class="bold red">core/css/variables.css</span> file.</p>
			<p class="col2 padded disabled bitstream">
				<span class="charcoal white-t">Font Sizes</span><br /><strong>--fontsize<br />--heading1<br />--heading2<br />--heading3<br />
				--heading4<br />--heading5<br />--heading6</strong><br />
				<span class="charcoal white-t">Color Scheme</span><br /><strong>--primary<br />--secondary<br />--tertiary<br />--accent<br />--auxiliary<br />--other</strong><br />
				<span class="charcoal white-t">Misc. Colors</span><br /><strong>--color1<br />--color2<br />--color3<br />--color4<br />--color5<br />--color6</strong><br />
				<span class="charcoal white-t">Text Shadow Behavior</span><br /><strong>--tsb</strong><br />
				<span class="charcoal white-t">Character &amp; Word Spacing</span><br /><strong>--charspace<br />--wordspace</strong><br />
				<span class="charcoal white-t">Padding &amp; Spacing</span><br /><strong>--padding<br />--margins<br />--pushpad<br />--pullpad<br />--pushmargin<br />
				--pullmargin<br />--spacer</strong><br />
				<span class="charcoal white-t">Border &amp; Outline</span><br /><strong>--thin<br />--thick</strong><br />
				<span class="charcoal white-t">bIcon Sizes</span><br /><strong>--bi2x<br />--bi3x<br />--bi4x<br />--bi5x<br />--bi6x</strong><br />
				<span class="charcoal white-t">Z-Index (stacking)</span><br /><strong>--base<br />--low<br />--mid<br />--high</strong><br />
				<span class="charcoal white-t">Transformations</span><br /><strong>--origin<br />--perspective<br />--scalex<br />--scaley<br />--scalez<br />
				--rotatex<br />--rotatey<br />--rotatez<br />--skewx<br />--skewy</strong><br />
				<span class="charcoal white-t">Animation Speeds</span><br /><strong>--slowest<br />--slower<br />--slow<br />--speed<br />--fast<br />--faster<br />--fastest</strong>
			</p>
		</div></div>
		<p class="spacer"></p>
		<h4 class="charcoal white-t flow-text bitstream">Custom Fonts</h4>
		<div class="flex"><div class="padded half bitstream">
			<p>Sometimes, <a href="https://fonts.google.com/" target="_blank" class="lemonlink">Google Fonts</a> may not have a specific font, so you may need to create and host your own custom font. Custom font packages are in the <span class="red white-t">core/css/fonts</span> directory. Within this directory is a <span class="red white-t">construct-fonts.css</span> file, which imports all <em>font.css</em> files from their respective directories. The <em>construct-fonts</em> file is imported into the core <em>construct.css</em> file.</p>
			<p style="margin-top: 1em;">Explore the <em>core/css/fonts</em> directory to see how it's all set up. There are six custom font styles included as examples.</p>
			<p style="margin-top: 1em;">To create a custom font package, you'll need to first convert them into a webfont. The Font Squirrel <a href="https://www.fontsquirrel.com/tools/webfont-generator" target="_blank" class="lemonlink">Webfont Generator</a> is an ideal tool for this.</p>
		</div><div class="padded half">
			<h5 class="flow-text bitstream"><strong>Included Fonts:</strong></h5>
			<p class="padded disabled fluid-text" style="line-height: 160%;"><strong>
				<span class="bitstream">.bitstream</span><br /><span class="communist">.communist</span><br />
				<span class="depixel">.depixel</span><br /><span class="monolisk">.monolisk</span><br />
				<span class="vcr-mono">.vcr-mono</span><br /><span class="writer-duospace">.writer-duospace</span></strong>
			</p>
		</div></div>