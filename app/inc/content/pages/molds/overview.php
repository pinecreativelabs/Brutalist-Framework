				<h3 class="fluid-text monolisk" id="molds101">MOLDS Overview</h3>
				<p class="bitstream">The primary purpose of MOLDS is to provide a source for making objects that have pre-defined layouts and designs. There are three types of MOLDS:</p>
				
				<div class="flex bitstream">
					<div class="third padded">
						<div class="sweden padded box-s">
							<h4 class="fluid-text"><i class="bi bi-quadrant bi-3x"></i><br />Tiles</h4>
							<p>Tiles are uncommonly used templates for specific types of elements. Tiles use:<br /></p>
							<ul class="check">
								<li>CSS classes</li>
								<li>jQuery plugins</li>
								<li>Classes applied to HTML elements</li>
							</ul>
							<p class="center flow-text heavy"><a href="tiles.php" class="btn hue-h rounded box-s socialize rice-t btn-medium">Mold Tiles &raquo;</a></p>
						</div>
					</div><div class="third padded">
						<div class="padded midnight box-s">
							<h4 class="fluid-text"><i class="bi bi-half-panes bi-3x"></i><br />Boards</h4>
							<p>Boards are grouped elements that serve a specific purpose. Boards use:</p>
							<ul class="check">
								<li>Simple PHP</li>
								<li>XML or CSV data</li>
								<li>HTML, CSS, &amp; javascript</li>
							</ul>
							<p class="center flow-text heavy"><a href="boards.php" class="btn rounded box-s socialize rice-t hue-h btn-medium">Mold Boards &raquo;</a></p>
						</div>
					</div><div class="third padded">
						<div class="padded campfire box-s">
							<h4 class="fluid-text"><i class="bi bi-box bi-3x"></i><br />Panels</h4>
							<p>Panels are PHP page templates that serve a specific purpose. Panels use:</p>
							<ul class="check">
								<li>XML or CSV data</li>
								<li>PHP functions &amp; classes</li>
								<li>CSS, javascript, &amp; HTML page templates</li>
							</ul>
							<p class="center flow-text heavy"><a href="panels.php" class="btn rounded box-s hue-h rice-t socialize btn-medium">Mold Panels &raquo;</a></p>
						</div>
						<p class="padded warning center"><strong>COMING IN 3.1</strong></p>
					</div>
				</div>
				<p class="spacer"></p>
				<div class="flex bitstream"><div class="padded half">
					<h4 class="flow-text charcoal">Compare &amp; Contrast</h4>
					<p><strong>Tile MOLDS</strong> are the simplest of the three types. Ideal for static HTML content, they require minimal markup, and only use CSS and javascript.<br /><br /></p>
					<p><strong>Board MOLDS</strong> are more involved, as they require basic PHP and use either XML or CSV data to render content.<br /><br /></p>
					<p><strong>Panel MOLDS</strong> are more complex than Boards, as they make use of more complex PHP scripts to perform more complex functions.<br /><br /></p>
					<p>MOLDS resources (CSS &amp; javascript) are automatically included in the CORE for Boards and Panels, if enabled (see the <em>Configure</em> section).</p>
				</div><div class="padded half">
					<h4 class="flow-text charcoal">How MOLDS Work</h4>
					<p>MOLDS are sets of additional resources that are available to be used within your application. Because they are optional, they can be deactivated (see "Configure" section for more details).
					<br /><br />
					The <em>core.php</em> script includes the <em>core/molds/config.php</em> script, and it adds all necessary CSS files to the page header. Any required javascript resources have to be manually added to the end of your application page.<br /><br />
					More details on how to integrate each of the MOLDS are provided in each MOLDS section.
					</p>
				</div></div>