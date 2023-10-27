				<h3 class="fluid-text monolisk" id="tabs">Tabs</h3>	
				<div class="flex"><div class="padded half">
					
					<div class="tabs">
						<input type="radio" name="tabgroup1" id="tab1" checked="checked">
						<label for="tab1">Welcome</label>
						<div class="tab">
							<h4 class="flow-text">Pure CSS Tabs!</h4>
							<p><img src="app/files/images/comprehend.jpg" alt="Comprehend Brutalism" class="right xlarge-thumb b-b-t blue-b rounded" />
							These tabs are purely CSS-based, and use variables to control the default colors.<br /><br />Multiple groups of tabs can be placed on the same page.</p>
						</div>
						
						<input type="radio" name="tabgroup1" id="tab2">
						<label for="tab2">Custom Layout</label>
						<div class="tab">
							<h4 class="flow-text">Tab with Custom Layout</h4>
							<p>This tab has a 2-column layout using the flexbox.</p>
							<div class="flex" style="margin-top: 1em;">
								<div class="padded half navy-blue orange-t">
									<h5>Column 1</h5>
								</div>
								<div class="padded half midnight">
									<h5>Column 2</h5>
								</div>
							</div>
						</div>
							  
						<input type="radio" name="tabgroup1" id="tab3">
						<label for="tab3">Markup</label>
						<div class="tab brickbuild">
							<h4>Markup</h4>
							<code class="padded smaller">
								&lt;div class="tabs"&gt; <span class="blue-candy-text">/* outer wrapper */</span><br />
								<span class="azure-t">/* Tab 1 */</span><br />
									&nbsp;&nbsp;&nbsp;&lt;input type="radio" name="tabgroup1" id="tab1" checked="checked"&gt;<br />
									&nbsp;&nbsp;&nbsp;&lt;label for="tab1" class=""&gt;Tab One&lt;/label&gt;<br />
									&nbsp;&nbsp;&nbsp;&lt;div class="tab"&gt;<br />
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...content...<br />
									&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
								<span class="azure-t">/* Tab 2 */</span><br />
									&nbsp;&nbsp;&nbsp;&lt;input type="radio" name="tabgroup1" id="tab2" checked="checked"&gt;<br />
									&nbsp;&nbsp;&nbsp;&lt;label for="tab2" class=""&gt;Tab One&lt;/label&gt;<br />
									&nbsp;&nbsp;&nbsp;&lt;div class="tab"&gt;<br />
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...content...<br />
									&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
									&lt;/div&gt;
							</code>
						</div>
					</div>
					
				</div><div class="padded half">
					<div class="tabs">
						<input type="radio" name="tabgroup2" checked="checked" id="tab4">
						<label for="tab4">Tab Group 2</label>
						<div class="tab">
							<h4 class="flow-text">Tab Group #2</h4>
							<p>This is the 2nd set of tabs on this page. Below is a 2-column justified paragraph:</p>
							<p class="col2 gap30 indent justify times" style="margin-top: 1em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						
						<input type="radio" name="tabgroup2" id="tab5">
						<label for="tab5">Customized</label>
						<div class="tab">
							<h4 class="flow-text">Customized Tabs</h4>
							<p>When applying custom CSS to a specific group of tabs, specify styles according to their group name:</p>
							<p class="terminal"><strong><span class="azure-t">/* tabs */</span><br /><small>.tabs input[name="<em>groupname</em>"] + label {}</small><br />
							<span class="azure-t">/* selected tab */</span><br /><small>.tabs input[name="<em>groupname</em>"]:checked + label {}</small><br />
							<span class="azure-t">/* tab content */</span><br /><small>.tabs input[name="<em>groupname</em>"]:checked + label + .tab {}</small>
							</strong></p>
						</div>
					</div>
				</div></div>