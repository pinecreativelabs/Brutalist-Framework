<h3 class="fluid-text monolisk" id="jab" style="margin-bottom: 0;"><strong>JAB</strong></h3>
<p class="bitstream flow-text"><strong>Javascript Application Base</strong></p>
<p class="bitstream">BF uses both vanilla javascript <em>and</em> jQuery plugins for various components. BFX, BUIX, and some MOLDS compontents use JAB.</p>
<div class="flex bitstream"><div class="padded half">
	<h4 class="charcoal vanilla-t">Vanilla Javascript</h4>
	<p style="margin-bottom: 1em;">Vanilla (plain) javascript means no dependencies on jQuery or other third party libraries. Two core JAB scripts are purely vanilla javascript:</p>
	<p class="flow-text bold">core/jab/bfx.js<br />core/jab/buix.js</p>
	<p style="margin: 1em 0 1em 0;">Various <strong>MOLDS</strong> components use vanilla javascript, which are also located in the <span class="bold red">core/jab</span> directory.</p>
</div><div class="padded half">
	<h4 class="charcoal vanilla-t">jQuery Plugins</h4>
	<p>Various BFX, BUIX, and some MOLDS elements use jQuery plugins. To use them, you'll need to load jQuery in the footer, before whatever plugins you plan to use. BF includes 3 versions of jquery:</p>
	<p class="flow-text bold" style="margin: 1em 0 1em 0;">core/jab/jquery.1.js<br />core/jab/jquery.2.js<br />core/jab/jquery.3.js</p>
	<p style="margin: 1em 0 1em 0;">It's recommended to use jQuery 3. The plugins are found in the <span class="red bold">core/jab/plugins/</span> directory.</p>
	<p>Load a jQuery plugin like so:<br /><span class="terminal">&lt;script src="core/jab/plugins/<em>plugin-name</em>.js"&gt;&lt;/script&gt;</span></p>
</div></div>