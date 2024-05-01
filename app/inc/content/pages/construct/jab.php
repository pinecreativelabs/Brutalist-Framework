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
<p class="spacer"></p>
<h4 class="charcoal vanilla-t bitstream">Loading JAB Files</h4>
<div class="flex bitstream"><div class="padded half">
	<p>Various CORE components require javascript to function properly, so loading a JAB javascript file may be required. You may see a box that looks like this:</p>
	<p class="requiresbox" style="margin: 1rem 0 1rem 0;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/folder/file.js</em><br /><small><span class="echo">$filename_js</span></small></p>
	<p>The <em>Required</em> box shows what file(s) are needed for that particular component.</p>
</div><div class="padded half">
	<p><strong>Load Javascript via PHP Variables.</strong><br />The purple tag within the <em>Required</em> box are PHP variables that can be used to echo a <em>script</em> tag that loads the appropriate javascript file. For example, echoing the variable <strong><em>$jquery3</em></strong> will output:<br />
	<span class="terminal">&lt;script src="bos/core/jab/jquery.3.js"&gt;&lt;/script&gt;</span></p>
</div></div>
<p class="spacer"></p>