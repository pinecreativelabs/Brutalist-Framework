				<h3 class="fluid-text monolisk" id="tables">Tables &amp; Media</h3>
				<p>Tables can be made responsive simply by applying the class <span class="heavy"><em>.responsive</em></span> directly to the <em>table</em> tag. On devices under 600px wide, each table row is displayed as a record. Re-size your browser window to see it in action.</p>
				
				<table class="responsive charcoal-t">
					<caption>Table.responsive</caption>
					<thead class="courier bold">
						<tr class="aqua">
							<th scope="col">Client</th>
							<th scope="col">Due Date</th>
							<th scope="col">Amount</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody class="courier">
						<tr class="lush">
							<td data-label="Account">Ma Pa Shop</td>
							<td data-label="Due Date">08/20/2017</td>
							<td data-label="Amount">$1,165</td>
							<td data-label="Period">Paid</td>
						</tr>
						<tr class="lush">
							<td scope="row" data-label="Account">Creative Studio</td>
							<td data-label="Due Date">02/01/2015</td>
							<td data-label="Amount">$2,167</td>
							<td data-label="Period">Collections</td>
						</tr>
						<tr class="lush">
							<td scope="row" data-label="Account">Food Bistro</td>
							<td data-label="Due Date">04/30/2020</td>
							<td data-label="Amount">$978</td>
							<td data-label="Period">Good Standing</td>
						</tr>
						<tr class="lush">
							<td scope="row" data-label="Acount">Repair Shop</td>
							<td data-label="Due Date">02/15/2019</td>
							<td data-label="Amount">$15,500</td>
							<td data-label="Period">Unpaid</td>
						</tr>
					</tbody>
				</table>
				<p class="spacer"></p>
				
				<!-- Media -->
				<div class="flex">
					<div class="padded half">
						<h4 class="charcoal white-t courier flow-text">Responsive Images</h4>
						<p>To make an image fluid width so that it fits within any area, simply apply the class: <em><strong>.responsive</strong></em>.<br /><br /></p>
						<div class="adaptor center" style="min-height: 200px; display: block;">
							<img src="app/files/images/rupp-drive.jpg" class="responsive" alt="Rupp Drive" />
						</div>
					</div>
					<div class="padded half">
						<h4 class="charcoal white-t courier flow-text">Responsive Video</h4>
						<p>Use the <em>video</em> tag, and the video will be fluid-width. If embedding a YouTube, Vimeo, or any other third-party video that uses an iframe, simply wrap the <em>iframe</em> embed code within a div with class <strong><em>.video</em></strong>.<br /><br /></p>
						<div class="video box-shadow">
							<iframe src="https://www.youtube.com/embed/8XWX5EIxBz8?showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>