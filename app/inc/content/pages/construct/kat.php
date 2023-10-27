<div class="charcoal bitstream white-t" style="padding: 6px;">
	<h4 class="flow-text" style="margin: 0;">KAT</h4>
	<p class="bold">Key Array Templater</p>
</div>
<p class="bitstream red white-t heavy">core/kat.php</p>
<p class="bitstream" style="margin-top: 1rem;">KAT is the key to the future of the happiness of your PHP application, full of care, pure intent, and arrays of data. KAT script is used to define arrays that can be used throughout your application. This is an ideal location to store sitewide global variables that require an array format. These arrays are used within the CORE script to generate template components.</p>
<p class="bitstream" style="margin-top: 1rem;">Most KAT arrays are comprised of multidimensional arrays. The KAT script defines all arrays you wish to use globally throughout your application.</p>

<div class="flex bitstream"><div class="padded half">
	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Pages Array</h5>
		<p>This array is a list of all application pages that is used to create a list of linked application pages. Use the following syntax:</p>
		<code>
			$pages = array(<br />
			'Page Name'=>array('pf'=>'page_name.php','active'=>true),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'pf'</em> is the page file name (string), and <em>'active'</em> is a boolean true/false value for showing or hiding  in the rendered page list.<br /><br />Render a page list: <strong>$page_list</strong></p>
	</div>

	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Themes Array</h5>
		<p>The Themes array is used to define color schemes. This will be used generate inlne CSS themes within the header. Use the following syntax:</p>
		<code>
			$themes = array(<br />
			'Theme Name'=>array('active'=>true, 'p'=>'', 's'=>'', 't'=>'', 'a'=>'', 'x'=>'', 'o'=>''),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'active'</em> is a boolean true/false value to determine if a theme will be used. The following are string values used to define colors:<br /><strong>'p'</strong> (primary)<br /><strong>'s'</strong> (secondary)<br /><strong>'t'</strong> (tertiary)<br />
		<strong>'a'</strong> (accent)<br /><strong>'x'</strong> (auxiliary)<br /><strong>'o'</strong> (other)</p>
	</div>

	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Favicons Array</h5>
		<p>This array is used to generate favicon meta tags in the header. Use the following syntax:</p>
		<code>
			$ficons = array(<br />
			array('f',16,'ico',true), <span class="azure-t">// favicon</span><br />
			array('s',32,'png',true), <span class="azure-t">// shortcut</span><br />
			array('a',180,'png',true), <span class="azure-t">// Apple touch</span><br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where the array values are as follows: <em>icon initial (string), size (number), format (string: 'ico' or 'png'), enabled (boolean true/false))</em>. Additional arrays can be added, but support for them will need to be manually added in the "Construct Favicon List" section of <em>core.php</em>.</p>
	</div>
	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Layouts Array</h5>
		<p>This array is used to define layouts based on width, height, columns, and rows. Use the following syntax:</p>
		<code>
			$layouts = array(<br />
			'Name'=>array('w'=>'','h'=>'','c'=>1,'r'=>1,'active'=>true),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'w'</em> and <em>'h'</em> are width and height strings, and <em>'c'</em> and <em>'r'</em> are numbers of columns and rows.<br /><br />
		Render a layout list: <strong>$layout_list</strong></p>
	</div>
</div><div class="padded half">
	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Blocks Arrays</h5>
		<p>There are two block arrays: <em>blocktypes</em> and <em>blocks</em>. The <em>blocktypes</em> array is an indexed array that defines the types of available content blocks. The <em>blocks</em> array is a multidimensional array that defines content blocks. Use the following syntax:</p>
		<code>
			$blocktypes = array('content','nav',);<br />
			$blocks = array(<br />
			'Block Name'=>array('type'=>'content', 'active'=>true),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'type'</em> is a string value that matches any of the <em>blocktypes</em> array values, and <em>'active'</em> is a boolean value that determines if it will be inlcuded in the block list.<br /><br />Render a block type list: <strong>$block_type_list</strong><br />
		Render a list of active blocks: <strong>$block_list</strong><br />Render a list of all blocks: <strong>$block_list_all</strong></p>
	</div>

	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>Content Arrays</h5>
		<p>There are two types of content arrays: <em>contenttypes</em> and <em>categories</em>. The <em>contenttypes</em> array is an indexed array that defines the types of content of your application. The <em>categories</em> array is a multidimensional array that defines content categories, and what content type they ar associated with. Use the following syntax:</p>
		<code>
			$contenttypes = array('blog','ecommerce',);<br />
			$categories = array(<br />
			'Cat Name'=>array('type'=>'', 'active'=>true),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'type'</em> is a string value that matches any of the <em>contenttypes</em> array values, and <em>'active'</em> is a boolean value that determines if it will included in the category list. These arrays are ideal for working with sorting and filtering content by type and / or category.<br /><br />
		Render a content type list: <strong>$content_type_list</strong><br />Render a category list: <strong>$cat_list</strong></p>
	</div>

	<div class="padded disabled box-s-k" style="margin-top: 2rem;">
		<h5>User Group Arrays</h5>
		<p>There are two types of user group arrays: <em>grouptypes</em> and <em>groups</em>. The <em>grouptypes</em> array is an indexed array that defines the types of </p>
		<code>
			$grouptypes = array('admin','editors','guests');<br />
			$groups = array(<br />
			'Group name'=>array('type'=>'', 'active'=>true),<br />
			);
		</code>
		<p style="margin-top: 0.5rem;">Where <em>'type'</em> is a string value that matches any of the <em>grouptypes</em> array values, and <em>'active'</em> is a boolean value that determines if it will included in the group list. These arrays are ideal for working with pages or content that may have different levels of access permissions.<br /><br />
		Render a group type list: <strong>$group_type_list</strong><br />Render a group list: <strong>$group_list</strong></p>
	</div>
</div></div>