	<h3 class="fluid-text monolisk" id="nav">Navigation</h3>
	<!-- Simple Menu -->
	<h4 class="charcoal flow-text bitstream">Simple Menu</h4>
	<div class="flex bitstream"><div class="half padded">
		<p>A pure CSS menu that displays an optional description upon hover over each item.</p>
		<h4>Markup</h4>
		<code class="black lime-t lucida padded smaller">
			&lt;ul class="simple-nav"&gt;<br />
			&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#"&gt;List Item<br />
			&nbsp;&nbsp;&nbsp;&lt;span class="desc"&gt;Description text&lt;/span&gt;&lt;/a&gt;<br />
			&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />
			&lt;/ul&gt;
		</code>
	</div><div class="padded half">
		<h4>Default View</h4>
		<ul class="simple-nav lucida">
			<li><a href="#">Link 1 <span class="des">Description text for item 1.</span></a></li>
			<li><a href="#">Link 2 <span class="des">Description text for item 2.</span></a></li>
			<li><a href="#">Link 3 <span class="des">Description text for item 3.</span></a>
			<ul>
				<li><a href="#">Sub-Page 1</a>
					<ul>
						<li><a href="#">Sub-Sub-Page 1</a></li>
						<li><a href="#">Sub-Sub-Page 2</a></li>
					</ul>
				</li>
				<li><a href="#">Sub-Page 2</a></li>
				<li><a href="#">Sub-Page 3</a></li>
			</ul>
			</li>
			<li><a href="#">Link 4 <span class="des">Description text for item 4.</span></a></li>
			<li><a href="#">Link 5 <span class="des">Description text for item 5.</span></a></li>
		</ul>
	</div></div>
	<p class="spacer"></p>
	
	<!-- Mega Menu -->
	<h4 class="charcoal flow-text bitstream"><i class="bi bi-cols"></i> Mega Menu</h4>
	<div class="flex"><div class="padded half bitstream">
		<p>Megamenu is a responsive dropdown navigation menu template, ideal for larger websites with many pages. Unordered lists are used to create dropdowns. Lists with grandchildren will display a multi-column dropdown on screens larger than 943px.<br /><br /></p>
		<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js<br /><small><span class="echo">$jquery3</span></small><br />
		bos/core/jab/plugins/megamenu.js</em><br /><small><span class="echo">$megamenu_js</span></small></p>
		<p class="flow-text" style="margin-top: 1.5rem;">DEMO</p>
		<p>In the example below, the <em>Categories</em> dropdown should display a multi-column layout on larger screens, and a toggle single-column menu on smaller screens.</p>
		<p class="spacer"></p>
	</div><div class="padded half">
		<p class="flow-text bitstream">Markup</p>
		<code class="smaller padded lucida">
			&lt;div class="menu-container"&gt;&lt;div class="menu"&gt;<br />&nbsp;&lt;ul&gt;<br />
			&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Single Page&lt;/a&gt;&lt;/li&gt;<br />
			&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Parent Page&lt;/a&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Child Page&lt;/a&gt;&lt;/li&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />
			&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Categories&lt;/a&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Category&lt;/a&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href=""&gt;Sub-Category&lt;/a&gt;&lt;/li&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />&nbsp;&nbsp;&lt;/li&gt;<br />&nbsp;&lt;/ul&gt;<br />
			&lt;/div&gt;&lt;/div&gt;
		</code>
		<p class="spacer"></p>
	</div><div class="padded full bitstream liminal" style="min-height: 360px;">
		<!-- MEGAMENU DEMO -->
		<div class="menu-container glued"><div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#"><i class="bi bi-fisheye"></i> CORE</a>
					<ul>
						<li><a href="flavors.php"><i class="bi bi-cone"></i> Flavors</a></li>
						<li><a href="butch.php"><i class="bi bi-communist"></i> BUTCH</a></li>
						<li><a href="buix.php"><i class="bi bi-navigate"></i> BUIX</a></li>
						<li><a href="bfx.php"><i class="bi bi-sparkle"></i> BFX</a></li>
						<li><a href="rebar.php"><i class="bi bi-converge-left"></i> ReBAR</a></li>
					</ul>
				</li>
				<li><a href="#">Categories</a>
					<ul>
						<li><a href="#">Architecture</a>
							<ul>
								<li><a href="#">Art Deco</a></li>
								<li><a href="#">Brutalist</a></li>
								<li><a href="#">Classical</a></li>
								<li><a href="#">Gothic</a></li>
							</ul>
						</li>
						<li><a href="#">Coding</a>
							<ul>
								<li><a href="#">CSS</a></li>
								<li><a href="#">Javascript</a></li>
								<li><a href="#">PHP</a></li>
								<li><a href="#">SQL</a></li>
							</ul>
						</li>
						<li><a href="#">Financial</a>
							<ul>
								<li><a href="#">Cryptocurrencies</a></li>
								<li><a href="#">Investments</a></li>
								<li><a href="#">Loans</a></li>
							</ul>
						</li>
						<li><a href="#">Media</a>
							<ul>
								<li><a href="#">Music</a></li>
								<li><a href="#">Movies</a></li>
								<li><a href="#">TV Shows</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div></div><!-- END MEGAMENU -->
	</div></div>
	<p class="spacer"></p>
	
	<!-- Tree List -->
	<h4 class="charcoal flow-text bitstream">Tree List</h4>
	<div class="flex bitstream"><div class="padded half">
		<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/buix/tree-list.js</em><br /><small><span class="echo">$treelist_js</span></small></p>
		<p>Create a nested tree list menu for unordered lists. Child items can be toggled. Each parent item will need to be wrapped in a span with class of <strong><em>parent</em></strong>. Unlimited child levels are supported.</p>
		<h4>Markup</h4>
		<code class="black lime-t lucida padded smaller">
			&lt;ul class="tree-list"&gt;<br />
			&nbsp;&nbsp;&lt;li&gt;&lt;span class="parent"&gt;Parent Item&lt;/span&gt;<br />
			&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;child item&lt;/li&gt;<br />
			&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />
			&nbsp;&nbsp;&lt;/li&gt;<br />&lt;/ul&gt;
		</code>
	</div><div class="padded half">
		<h4>Tree List Demo</h4>
		<ul class="tree-list smoke-b b-b-t" style="max-width: 80%; padding: 10px;">
			<li><span class="parent">Category 1</span>
				<ul class="nested">
					<li>Child 1</li>
					<li>Child 2</li>
					<li><span class="parent">Child 3</span>
						<ul class="nested">
							<li>Grandchild 1</li>
							<li>Grandchild 2</li>
							<li><span class="parent">Grandchild 3</span>
								<ul class="nested">
									<li>Descendant 1</li>
									<li>Descendant 2</li>
									<li>Descendant 3</li>
								</ul>
							</li>
						</ul>
					</li>  
				</ul>
			</li>
			<li><span class="parent">Category 2</span>
				<ul class="nested">
					<li>Sub-Category 1</li><li>Sub-Category 2</li>
				</ul>
			</li>
			<li>Category 3 <em>(no children)</em></li>
		</ul>
	</div></div>
	<p class="spacer"></p>

	<!-- Pagination -->
	<h4 class="flow-text white-t charcoal bitstream">Pagination</h4>
	<div class="flex bitstream">
		<div class="padded half">
			<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/jquery.3.js</em><br /><small><span class="echo">$jquery3</span></small><br />
				<em>bos/core/jab/plugins/pagination.js</em><br /><small><span class="echo">$pagination_js</span></small></p>
			<p>Create a list of items within a pagination interface. Show 5, 10, 15, 20, or 25 items per page. Wrap the pagination interface within container with class <strong>.paginate-<em>X</em></strong>, where <em>X</em> is either 5, 10, 15, 20, or 25.</p>
			<h4 class="flow-text">Markup</h4>
			<code class="black lime-t lucida padded smaller">
				&lt;div class="paginate-<em>X</em>"&gt;<br />
				&nbsp;&nbsp;&lt;div class="items"&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;item 1&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;item 2&lt;/div&gt;...<br />
				&nbsp;&nbsp;&lt;/div&gt;<br />
				&nbsp;&nbsp;&lt;div class="pager"&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="firstPage"&gt;first&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="previousPage"&gt;prev&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="pageNumbers"&gt;&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="nextPage"&gt;next&lt;/div&gt;<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="lastPage"&gt;last&lt;/div&gt;<br />
				&nbsp;&nbsp;&lt;/div&gt;<br />&lt;/div&gt;
			</code>
		</div>
		<div class="padded half">
			<h4 class="flow-text">Default View</h4>
			<div class="paginate-5 padded white charcoal-t">
				<div class="items">
					<div>Item 1</div>
					<div>Item 2</div>
					<div>Item 3</div>
					<div>Item 4</div>
					<div>Item 5</div>
					<div>Item 6</div>
					<div>Item 7</div>
					<div>Item 8</div>
					<div>Item 9</div>
					<div>Item 10</div>
					<div>Item 11</div>
					<div>Item 13</div>
					<div>Item 14</div>
					<div>Item 15</div>
				</div>
				<div class="pager">
					<div class="firstPage">&laquo;</div>
					<div class="previousPage">&lsaquo;</div>
					<div class="pageNumbers"></div>
					<div class="nextPage">&rsaquo;</div>
					<div class="lastPage">&raquo;</div>
				</div>
			</div>
		</div>
	</div>