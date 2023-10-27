				<h3 class="fluid-text monolisk" id="thumbnails">Thumbnails</h3>
				<div class="flex"><div class="padded half">
					<p>Thumbnails allow you to display a list of images at a reduced size. Useful for galleries. Wrap <em>img</em> tags within a container with any of these classes:</p>
					<h4 class="flow-text"><strong>.micro-thumb</strong></h4>
					<div class="micro-thumb">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/rupp-drive.jpg" />
						<img src="app/files/images/edgespace.jpg" />
					</div>
					<h4 class="flow-text"><strong>.tiny-thumb</strong></h4>
					<div class="tiny-thumb">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/rupp-drive.jpg" />
						<img src="app/files/images/edgespace.jpg" />
					</div>
					<h4 class="flow-text"><strong>.small-thumb</strong></h4>
					<div class="small-thumb crop">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/rupp-drive.jpg" />
						<img src="app/files/images/edgespace.jpg" />
					</div>
					<h4 class="flow-text"><strong>.medium-thumb</strong></h4>
					<div class="medium-thumb crop">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/rupp-drive.jpg" />
						<img src="app/files/images/edgespace.jpg" />
					</div>
					<h4 class="flow-text"><strong>.large-thumb</strong></h4>
					<div class="large-thumb crop">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/rupp-drive.jpg" />
					</div>
					<h4 class="flow-text"><strong>.xlarge-thumb</strong></h4>
					<div class="xlarge-thumb">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
						<img src="app/files/images/edgespace.jpg" />
					</div>
					<h4 class="flow-text"><strong>.jumbo-thumb</strong></h4>
					<div class="jumbo-thumb">
						<img src="app/files/images/brutal-building.jpg" />
						<img src="app/files/images/brutpink.jpg" />
					</div>
				</div><div class="padded half">
					<p class="info padded"><span class="flow-text bold">TIP:</span> These classes can also be applied directly to the <em><b>img</b></em> or <em><b>picture</b></em> tags.</p>
					<h4 class="flow-text">Markup</h4>
					<code class="black lime-t padding smaller">
						&lt;div class="<em>size</em>-thumb"&gt;<br />
						&nbsp;&nbsp;&nbsp;&lt;img src="URL" /&gt;&nbsp;<br />
						&nbsp;&nbsp;&nbsp;&lt;img src="URL" /&gt;&nbsp;...<br />&lt;/div&gt;
					</code>
					<div class="disabled padded">
						<h4 class="flow-text">Cropped Thumbnails</h4>
						<p>Make all thumbnails into a square (regardless of their original dimensions) by applying the <span class="bigger bold">.crop</span> class in conjunction with any of the thumbnail classes!</p>
					</div>
					<div class="warning padded" style="margin-top: 1.5em;">
						<h4 class="flow-text">Circle Thumbnails</h4>
						<p>Make all thumbnails into a circle! Apply the <span class="bold bigger">.circle</span> class in conjunction with <em>.crop</em> and any thumbnail size class:<br />
							<strong>.size-thumb.crop.circle</strong></p>
						<div class="tiny-thumb crop circle">
							<img src="app/files/images/brutal-building.jpg" />
							<img src="app/files/images/brutpink.jpg" />
							<img src="app/files/images/rupp-drive.jpg" />
						</div>
					</div>
				</div></div>