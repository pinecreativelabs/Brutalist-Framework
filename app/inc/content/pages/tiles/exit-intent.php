<h4 class="flow-text charcoal padded"><i class="bi bi-expand"></i> Exit Intent</h4>
<div class="flex"><div class="padded half bitstream">
	<p>Users may choose to leave your page without taking any action (such as clicking on something, viewing a video, or filling out a form). You may wish to make a last-ditch effort to get your visitors to interact with your page and become a potential lead or even a conversion. Visitors may try to "exit" the page by closing the tab or browser.</p>
	<p style="margin-top: 1rem; margin-bottom: 1.5rem;"><em>Exit Intent</em> displays a popup with content when the user moves their mouse out of the window. This can be your last-chance effort to get them to take some sort of action.</p>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/exit-intent.js</em></span></p>
	<p class="flow-text" style="margin-top: 1.5rem;">DEMO</p>
	<p>An Exit Intent popup should appear on this page when you move your cursor above the <em>TOP</em> of your browser window. </p>
</div><div class="padded half">
	<p class="flow-text bitstream">Markup</p>
	<code class="padded lucida smaller">
		&lt;div id="unique-id" class="ei-popup" style="display: none;"&gt;<br />
		&nbsp;&nbsp;&lt;div class="ei-close" onclick="$.stick_close()"&gt;X&lt;/div&gt;<br />
		&nbsp;&nbsp;&lt;div class="ei-content"&gt;<br />...content...<br />&nbsp;&nbsp;&lt;/div&gt;<br />
		&lt;/div&gt;
	</code>
	<p class="flow-text bitstream">Initialize</p>
	<code class="smaller padded lucida">
		&lt;script&gt;<br />
		&nbsp;$(document).ready(function(){<br />
		&nbsp;&nbsp;$.stickToMe({<br />
		&nbsp;&nbsp;&nbsp;layer: '#unique-id'<br />
		&nbsp;});<br />});<br />
		&lt;/script&gt;
	</code>
</div></div>
				
<!-- EXIT INTENT popup -->
<div id="dontgo" class="ei-popup" style="display: none; max-width: 500px;">
	<div class="ei-close" onclick="$.stick_close()">X</div>
	<div class="ei-content center infinitile padded communist">
	<h4 class="bold red-t charcoal-t-s fluid-text">Don't Go!</h4>
	<p class="flow-text bitstream"><span class="blink">Blinker Fluid</span> <strong>Sale</strong> ends today!</p>
	<p><a href="#" class="btn btn-large pool-party box-shadow bold hue-h">CTA Button</a><br /><br />I'm just an <em>Exit Intent</em> demo.</p>
	</div>
</div>