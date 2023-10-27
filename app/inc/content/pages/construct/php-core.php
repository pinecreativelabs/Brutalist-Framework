<h3 class="fluid-text monolisk" id="php"><strong>PHP Core</strong></h3>
<p class="bitstream">PHP elements are written in plain, basic PHP. <span class="bold red">Using PHP is purely optional.</span></p>
<div class="flex bitstream"><div class="padded half">
	<div class="charcoal white-t" style="padding: 6px;">
		<h4 class="flow-text" style="margin: 0;">PHP Architecture</h4>
		<p>Build with basic PHP functionality</p>
	</div>
	<p style="margin-top: 1rem;">How does the PHP core all fit together? The diagram below illustrates the overall structure.</p>
	<p class="padded"><img src="app/files/images/phpcore.jpg" class="responsive box-s-t" alt="PHP Core" /></p>
	<p style="margin-top: 1rem;">The <em>KAT</em> and <em>BEKAH</em> scripts deal primarily with defining global variables. <em>KAT</em> defines variable arrays, and <em>BEKAH</em> defines static variables. These "sister" scripts are used in the CORE script to define other variables.<br /><br />
	<em>BRAD</em> uses data defined in CSV, JSON, SQL, or XML files to construct variables that are used to render front-end elements (such as form selects). <em>BRAD</em> is optional, and doesn't need to be included in the CORE.</p>
	<p style="margin-top: 1rem;">The CORE script requires three scripts: <em>KAT, BEKAH</em>, and <em>BRAD</em>. From these, the CORE script consolidates data, arrays, and variables which can be used throughout your application.<br />
	<span class="red white-t">The only script you'll need to include is <em><strong>core.php</strong></em>.</span></p>
	<p style="margin-top: 1rem;" class="padded info"><strong>CORE PRINT TEST</strong><br />Included in the <em>/core</em> directory is a PHP script that can be used to test print all CORE variables. It is located at:<br /><strong><a href="/core/coreprint.php" target="_blank" class="link">/core/coreprint.php</a></strong></p> 
</div><div class="padded half">
	<div class="charcoal white-t" style="padding: 6px;">
		<h4 class="flow-text" style="margin: 0;">CORE</h4>
		<p class="bold">Construct Object Rendering Engine</p>
	</div>
	<p class="red white-t heavy">core/core.php</p>
	<p style="margin-top: 1rem;">Use the following CORE variables to construct your application pages:</p>
	<p class="padded disabled">
		<strong>$faviconlist</strong><br /><small>renders favicon meta data (place in page header)</small><br /><br />
		<strong>$themestyle</strong><br /><small>renders inline CSS themes (place in page header)</small><br /><br />
		<strong>$themelist</strong><br /><small>renders unordered list of themes</small><br /><br />
		<strong>$global_meta_header</strong><br /><small>renders necessary meta tags (place in page header)<br />
		<span class="red-t">NOTE: includes <em>$faviconlist</em></span></small><br /><br />
		<strong>$global_header</strong><br /><small>renders CSS link tags (place in page header)<br /><span class="red-t">NOTE: includes <em>$themestyle</em></span></small><br /><br />
		<strong>$global_footer</strong><br /><small>renders javascript tags (place before closing body tag)<br />
		<span class="red-t"><strong>NOTE:</strong> jQuery plugins are NOT included. They have to be added after <em>$global_footer</em>.</span></small><br /><br />
		<strong>$page_list</strong><br /><small>renders list of active pages</small><br /><br />
		<strong>$page_list_all</strong><br /><small>renders list of all pages</small><br /><br />
		<strong>$block_list</strong><br /><small>renders list of active blocks</small><br /><br />
		<strong>$block_list_all</strong><br /><small>renders list of all blocks</small><br /><br />
		<strong>$block_type_list</strong><br /><small>renders list of block types</small><br /><br />
		<strong>$layout_list</strong><br /><small>renders list of layouts</small><br /><br />
		<strong>$group_type_list</strong><br /><small>renders list of group types</small><br /><br />
		<strong>$group_list</strong><br /><small>renders list of groups</small><br /><br />
		<strong>$content_type_list</strong><br /><small>renders list of content types</small><br /><br />
		<strong>$cat_list</strong><br /><small>renders list of categories</small>
	</p>
	<p style="margin-top: 1rem;">Let's deconstruct the core scripts in the following sections.</p>
</div></div>