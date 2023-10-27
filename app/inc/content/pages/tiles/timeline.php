				<h4 class="flow-text charcoal padded"><i class="bi bi-wait"></i> Timeline</h4>
				<div class="flex"><div class="padded full">
					<style>
						.timeline-date {font-weight: 600; background: #000; color: #fff; border: 1px solid #ff0000; padding: 4px; border-radius: 4px;}
					</style>
					<div class="timeline-san bitstream">
						<div data-tldate="Overview" class="padded charcoal smoke-t">
							<p style="margin-bottom: 1.5rem;">Timeline tiles are for displaying content in a timeline format (or as a process).</p>
							<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/timeline.js</em></span></p>
						</div>
						<div data-tldate="Markup" class="padded charcoal smoke-t">
							<h5 class="flow-text monolisk"><strong>Markup</strong></h5>
							<p>Use the following markup to display a timeline:</p>
							<code class="smaller padded lucida">
								&lt;div class="timeline"&gt;<br />
								&nbsp;&nbsp;&lt;div data-tldate="<em>Date Label</em>" class=""&gt;<br />
								&nbsp;&nbsp;&nbsp;...content...<br />
								&nbsp;&nbsp;&lt;/div&gt;<br />
								&lt;/div&gt;
							</code>
							<p class="padded warning"><strong>NOTE:</strong> The <em>data-tldate</em> attribute can be any text and numeric string. <br /><br />
							Additional classes can be applied to each Timeline item, for added / custom styling.</p>
						</div>
						<div data-tldate="Options" class="padded charcoal smoke-t">
							<h5 class="flow-text monolisk"><strong>Options</strong></h5>
							<p class="padded info">These classes can be applied to the Timeline wrapper:<br /><br />
							<strong>.timeline</strong> <small>[default view]</small><br />
							<strong>.timeline-r</strong> <small>[items start on the right]</small><br />
							<strong>.timeline-na</strong> <small>[default view, no alternation]</small><br />
							<strong>.timeline-san</strong> <small>[default view, items slide into view upon scroll down]</small><br />
							<strong>.timeline-r-san</strong> <small>[items start on right, with slide animation]</small></p>
						</div>
						<div data-tldate="Customize" class="padded charcoal smoke-t">
							<h5 class="flow-text monolisk"><strong>Customize</strong></h5>
							<p class="padded info">To further customize the appearance, refer to these CSS classes:<br /><br />
							<strong>.timeline-block</strong> <small>[wrapper for Timeline items]</small><br />
							<strong>.timeline-date</strong> <small>[span class for Timeline items]</small></p>
						</div>
					</div>
				</div></div>