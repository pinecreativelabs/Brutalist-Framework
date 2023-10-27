				<h3 class="fluid-text monolisk" id="layout">Layout</h3>
				<!-- Flexbox -->
				<p class="flow-text charcoal white-t courier">Flexbox</p>
				<p>Flexbox is a one-dimensional approach to arranging items in rows or columns, allowing items to fill available space in order to prevent overflow. To create a Flexbox area, simply wrap div elements within an element with the class:<br><span class="flow-text"><strong>.flex</strong></span></p>
				<div class="flex">
					<div class="half padded">
						<div class="disabled padded">
							<p><span class="flow-text"><strong>Flex Classes</strong></span><br />Apply these additional Flexbox classes for additional control:<br />
							<strong>.column</strong> - <small>arrange items into vertical columns</small><br />
							<strong>.start</strong> - <small>place item(s) at beginning of container</small><br />
							<strong>.middle</strong> - <small>place item(s) in middle of container</small><br />
							<strong>.end</strong> - <small>place item(s) at end of container</small><br />
							<strong>.reverse</strong> - <small>arrange items in reverse order (last to first)</small><br />
							<strong>.evenly</strong> - <small>items will have equal spacing around them</small><br />
							<strong>.around</strong> - <small>items will have space before, between, and after them</small><br />
							<strong>.between</strong> - <small>items will have space between them</small><br />
							<strong>.stretch</strong> - <small>items are stretched to fit the container</small><br />
							<strong>.baseline</strong> - <small>items are positioned at the baseline of the container</small><br />
							</p>
							<p style="margin-top: 1em;"><strong>.wrap-600</strong> - <small>[600px max-width container]</small><br />
								<strong>.wrap-960</strong> - <small>[960px max-width container]</small><br />
								<strong>.wrap-1200</strong> - <small>[1200px max-width container]</small><br /><strong>.wrap-1600</strong> - <small>[1600px max-width container]</small>
							</p>
						</div>
					</div>
					<div class="half padded">
						<p class="padded disabled"><span class="flow-text">Width Classes</span><br />Items wrapped within <strong>.flex</strong> containers should have a width specified. Percent widths are recommended. Apply these classes to flex child elements:<br />
						<strong>.half</strong> <small>[50% width]</small><br /><strong>.third</strong> <small>[33% width]</small><br /><strong>.fourth</strong> <small>[25% width]</small><br />
						<strong>.fifth</strong> <small>[20% width]</small><br /><strong>.sidebar</strong> <small>[25% width]</small><br /> <strong>.main</strong> <small>[75% width]</small>
						</p>
						<p style="margin-top: 1em;" class="padded blueprint"><span class="flow-text monolisk"><i class="bi bi-grid"></i>Blueprint Grid</span><br />
						If a more robust layout grid is needed, take a look at our multi-method layout CSS grid project.<br />
						<a href="https://www.blueprintgrid.com" target="_blank" class="bold yellow-t invert-h">BlueprintGrid.com</span></a></p>
					</div>
				</div>
				<p class="spacer"></p>
				
				<!-- Content Columns -->
				<p class="flow-text charcoal white-t courier">Content Columns</p>
				<p>Apply these classes to paragraphs or divs to create a multi-column layout. Ideal for long text areas and lists.<br /><br /></p>
				<p class="flow-text white-t"><strong>.col2</strong> - 2 column layout</p>
				<p class="arial col2">Lorem ipsum no facer prompta vim, movet ubique qui ei. Per no regione aliquid, ea mei nulla scribentur liberavisse. Vim cu tale ludus possit, discere suavitate nam ad. No verterem reprimique vix, phaedrum hendrerit an quo. Qui feugait apeirian ut, ne virtute numquam mandamus mea. Eos et enim dicant deterruisset. At nec ceteros mentitum, ex solum putent offendit per. Odio putent discere cu vim. Oportere disputationi ea mea. Per civibus constituam et, an feugait omittam mel, no suas quas doming qui. Sit aeterno numquam no.</p>
				<p>&nbsp;</p>
				<p class="flow-text white-t"><strong>.col3</strong> - 3 column layout</p>
				<p class="arial col3">Lorem ipsum no facer prompta vim, movet ubique qui ei. Per no regione aliquid, ea mei nulla scribentur liberavisse. Vim cu tale ludus possit, discere suavitate nam ad. No verterem reprimique vix, phaedrum hendrerit an quo. Qui feugait apeirian ut, ne virtute numquam mandamus mea. Eos et enim dicant deterruisset. At nec ceteros mentitum, ex solum putent offendit per. Odio putent discere cu vim. Oportere disputationi ea mea. Per civibus constituam et, an feugait omittam mel, no suas quas doming qui. Sit aeterno numquam no.</p>
				<p>&nbsp;</p>
				<p class="flow-text white-t"><strong>.col4</strong> - 4 column layout</p>
				<p class="arial col4">Lorem ipsum no facer prompta vim, movet ubique qui ei. Per no regione aliquid, ea mei nulla scribentur liberavisse. Vim cu tale ludus possit, discere suavitate nam ad. No verterem reprimique vix, phaedrum hendrerit an quo. Qui feugait apeirian ut, ne virtute numquam mandamus mea. Eos et enim dicant deterruisset. At nec ceteros mentitum, ex solum putent offendit per. Odio putent discere cu vim. Oportere disputationi ea mea. Per civibus constituam et, an feugait omittam mel, no suas quas doming qui. Sit aeterno numquam no.</p>
				<div class="flex">
					<div class="half padded">
						<div class="disabled padded">
							<p><span class="flow-text"><strong>More Column Classes</strong></span><br />
							<strong>.col5</strong> - 5 columns<br /><strong>.col6</strong> - 6 columns<br /><strong>.col7</strong> - 7 columns<br /><strong>.col8</strong> - 8 columns<br /><strong>.col9</strong> - 9 columns</p>
						</div>
					</div>
					<div class="half padded">
						<div class="info padded">
							<p><span class="flow-text"><strong>Column Gaps</strong></span><br />Add 10, 20, 30, 40, 50, or 60px gaps between columns.</p>
							<p class="bold col2">.gap10<br />.gap20<br />.gap30<br />.gap40<br />.gap50<br />.gap60</p>
						</div>
						<div class="ready padded">
							<p><strong>EXAMPLE:</strong> White justified arial text within a 3-column layout with 30px gaps between columns, with double spacing and an indent.</p>
							<p class="black-t"><strong>&lt;p class="white-t justify arial triple-col gap30 dbl-spaced indent"&gt;...&lt;/p&gt;</strong></p>
						</div>
					</div>
				</div>