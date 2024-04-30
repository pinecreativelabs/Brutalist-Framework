<h3 class="fluid-text monolisk" id="nesting">Nesting</h3>
<p class="bitstream">We can combine several methods by nesting elements, with one exception:</p>
<p class="padded warning bitstream" style="margin: 1.5rem 0 1.5rem 0;"><strong>REMEMBER:</strong> It is <em>NOT</em> possible to nest CSS Grid items within Flexbox (B3Grid) elements! <em>However</em>... it <strong>is</strong> possible to nest Flexbox elements within CSS Grid items.</p>
<p class="bitstream">In the example below, we create a two-column Flexbox layout within two 2x1 Bento boxes (Flexbox nested within a dynamic CSS Grid layout). We also include a full-width block with a nested two-column text content area with double gap spacing (using Print Grid).<br /><br /></p>

<div class="bentogrid smoke-t lucida">
	<div class="charcoal b-s-t white-b padded" data-bento="2x1">
		<h4 class="flow-text">Bento Box 1</h4>
		<div class="block-wrap">
			<div class="block bw50 xs-100 sm-100 md-100 b-s-t fossil-b">
				<h5>Block Left</h5>
			</div>
			<div class="block bw50 xs-100 sm-100 md-100 b-s-t fossil-b">
				<h5>Block Right</h5>
			</div>
			<div class="block bw100 fossil-b b-s-t">
				<h5>Full Block</h5>
				<div class="cc2 cg-2x smaller">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="charcoal b-s-t white-b padded" data-bento="2x1">
		<h4 class="flow-text">Bento Box 2</h4>
		<div class="block-wrap">
			<div class="block bw50 xs-100 sm-100 md-100 b-s-t fossil-b">
				<h5>Block Left</h5>
			</div>
			<div class="block bw50 xs-100 sm-100 md-100 b-s-t fossil-b">
				<h5>Block Right</h5>
			</div>
			<div class="block bw100 fossil-b b-s-t">
				<h5>Full Block</h5>
				<div class="cc2 cg-2x smaller">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</div>
</div>