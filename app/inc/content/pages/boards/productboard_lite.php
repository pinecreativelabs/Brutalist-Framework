				<div class="flex bitstream"><div class="padded half">
					<p style="margin-top: 1em;"><span class="flow-text">Markup</span><br />Use the following PHP code to render a CSV-based product list:</p>
					<code class="smaller padded">
						&lt;?php<br />
						&nbsp;&nbsp;$cur = '$'; <span class="azure-t">// currency symbol</span><br />
						&nbsp;&nbsp;$sale_text = 'On Sale'; <span class="azure-t">// text if item is on sale</span><br />
						&nbsp;&nbsp;$link_text = 'Buy Now'; <span class="azure-t">// link button text</span><br />
						&nbsp;&nbsp;$get_pblite_data = 'app/data/csv/products.csv';<br />
						&nbsp;&nbsp;include 'core/molds/boards/productboard/view.php';<br />
						&nbsp;&nbsp;echo $productboard_lite;<br />
						?&gt;
					</code>
					<p style="margin-top: 1em;"><span class="flow-text">PHP Template</span><br />The PHP template for rendering ProductBoard Lite is found at:<br /><span class="red white-t">core/molds/boards/productboard/view.php</span>.<br />The CSS style is found at:<br /><span class="red white-t">core/molds/boards/productboard/view.css</span>.</p>
				</div><div class="padded half">
					<p style="margin-top: 1em;"><span class="flow-text">Data File</span><br />ProductBoard Lite uses the following data file: <span class="red white-t">app/data/csv/products.csv</span>. Do not remove the first line! Each row should contain the following values: <span class="terminal"><em><strong>pid, active, title, price, sale, description, img_src, link_url</strong></em></span>. Note that the <em>active</em> and <em>sale</em> fields can be "true" or "false".</p>
					
					<p style="margin-top: 1em;"><span class="flow-text">Variables &amp; Rendering</span><br />When rendering a product list, use the following variables:<br /><br />
					<strong>$cur</strong>: Specify currency symbol.<br /><br />
					<strong>$sale_text</strong>: Text to display if <em>sale</em> field is enabled ("true").<br /><br />
					<strong>$link_text</strong>: Link text if <em>link_url</em> field is specified.<br /><br />
					To render the list, be sure to include the PHP view template, and echo the variable <em>$productboard_lite</em>.</p>
				</div></div>