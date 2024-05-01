<h3 class="fluid-text monolisk" id="jab" style="margin-bottom: 0;"><strong>JAB</strong></h3>
<p class="bitstream flow-text"><strong>Javascript Application Base</strong></p>
<p class="bitstream">BF uses both vanilla javascript <em>and</em> jQuery plugins for various components. BFX, BUIX, FUX and Grids use JAB.</p>
<div class="flex bitstream"><div class="padded half">
	<h4 class="charcoal vanilla-t">Vanilla Javascript</h4>
	<p style="margin-bottom: 1em;">Vanilla (plain) javascript means no dependencies on jQuery or other third party libraries. The following included files are vanilla javascript:</p>
	<p class="padded disabled box-s">
		<strong>bos/core/jab/bfx/</strong> <small>(all files)</small><br />
		<strong>bos/core/jab/buix/</strong> <small>(all files)</small><br />
		<strong>bos/core/jab/fux/</strong> <small>(all files)</small><br />
		<strong>bos/core/jab/bento-grid.js<br />bos/core/jab/chaos-grid.js<br />bos/core/jab/pagelock.js</strong>
	</p>
	<p class="info padded"><strong>TIP:</strong> Load vanilla javascript <em>before</em> any jQuery files. This will reduce the risk of any potential conflicts.</p>
</div><div class="padded half">
	<h4 class="charcoal vanilla-t">jQuery Plugins</h4>
	<p>Various components use jQuery plugins. To use them, you'll need to load jQuery in the footer, before whatever plugins you plan to use. BF includes 3 versions of jquery:</p>
	<p class="flow-text bold" style="margin: 1em 0 1em 0;">bos/core/jab/jquery.1.js<br />bos/core/jab/jquery.2.js<br />bos/core/jab/jquery.3.js</p>
	<p style="margin: 1em 0 1em 0;">It's recommended to use jQuery 3. The plugins are found in the <span class="red bold">bos/core/jab/plugins/</span> directory.</p>
	<p>Load a jQuery plugin like so:<br /><span class="terminal">&lt;script src="bos/core/jab/plugins/<em>plugin-name</em>.js"&gt;&lt;/script&gt;</span></p>
</div></div>