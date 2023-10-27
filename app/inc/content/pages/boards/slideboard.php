<div class="flex bitstream"><div class="padded half">
	<p style="margin-top: 1em;"><span class="flow-text">Markup</span><br />Use the following PHP code to render a slider:</p>
	<code class="smaller padded">
		&lt;?php<br />
		&nbsp;&nbsp;$autoplay = false; <span class="azure-t">// enable autoplay</span><br />
		&nbsp;&nbsp;$loop = true; <span class="azure-t">// loop back to beginning or end</span><br />
		&nbsp;&nbsp;$vertical = false; <span class="azure-t">// enable vertical transition</span><br />
		&nbsp;&nbsp;$sb_height = 'third'; <span class="azure-t">// height of slider (<em>third, half, full</em>)</span><br />
		&nbsp;&nbsp;$sb_skin = 'dark'; <span class="azure-t">// skin (<em>light</em> or <em>dark</em>)</span><br />
		&nbsp;&nbsp;$get_sb_data = 'app/data/xml/slideboard.xml';<br />
		&nbsp;&nbsp;include 'core/molds/boards/slideboard/view.php';<br />
		&nbsp;&nbsp;echo $slideboard;<br />
		?&gt;
	</code>
	<p style="margin-top: 1em;"><span class="flow-text">PHP Template</span><br />The PHP template for rendering SlideBoard is found at:<br /><span class="red white-t">core/molds/boards/slideboard/view.php</span>.<br />The CSS style is found at:<br /><span class="red white-t">core/molds/boards/slideboard/view.css</span>.<br /><br />
					Because <em>SlideBoard</em> is a jQuery plugin, you'll also need:<br /><span class="red white-t">core/jab/jquery.3.js<br />core/jab/plugins/presenter.js</span></p>
</div><div class="padded half">
	<p style="margin-top: 1em;"><span class="flow-text">Variables &amp; Rendering</span><br />When rendering a product list, use the following variables:<br /><br />
		<strong>$autoplay</strong><br /><small>Enable auto-advance to next slide (<em>true</em> or <em>false</em>)</small><br />
		<strong>$loop</strong><br /><small>Loop back to beginning or end (<em>true</em> or <em>false</em>)</small><br />
		<strong>$vertical</strong><br /><small>Enable vertical transition (<em>true</em> or <em>false</em>)</small><br />
		<strong>$sb_height</strong><br /><small>Use <em>'third'</em>, <em>'half'</em>, or <em>'full'</em></small><br />
		<strong>$sb_skin</strong><br /><small>Style of previous / next buttons (<em>light</em> or <em>dark</em>)</small><br /><br />
		To render the list, be sure to include the PHP view template, and echo the variable <em>$slideboard</em>.
	</p>
	<p style="margin-top: 1em;"><span class="flow-text">Data File</span><br />SlideBoard uses XML data. Use the following XML markup in your XML data file:</p>
	<code class="smaller padded">
		&lt;slides&gt;<br />
		&nbsp;&nbsp;&lt;slide id="" active="true/false" classes=""&gt;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;title classes=""&gt;Slide Title&lt;/title&gt;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;text classes=""&gt;Slide description text...&lt;/text&gt;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure classes="" src="<em>path-to-image</em>"&gt;Alt-text&lt;/figure&gt;<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;linkto url="" target="_blank" &gt;Button Text&lt;/linkto&gt;<br />
		&nbsp;&nbsp;&lt;/slide&gt;<br />
		&lt;/slides&gt;
	</code>
</div></div>