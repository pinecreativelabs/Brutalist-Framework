<h3 class="fluid-text monolisk" id="blends">Blenders</h3>
<div class="flex bitstream"><div class="padded half">
	<p>Blenders allow text or any other element to blend with its background.<br /><br /></p>
	<p class="padded warning">NOTE: Apply only one class per element. Combining multple classes together isn't possible (except <em>unblend</em>).</p>
	<p class="padded disabled"><span class="bigger bold">Classes</span><br />
		<strong>.lighten-blend<br />.darken-blend<br />.hue-blend<br />.sat-blend</strong> (saturation)<br /><strong>.lum-blend</strong> (luminosity)<br />
		<strong>.color-blend<br />.dodge-blend<br />.burn-blend<br />.diff-blend</strong> (difference)<br /><strong>.exc-blend</strong> (exclusion)<br />
		<strong>.soft-blend</strong> (soft light)<br /><strong>.hard-blend</strong> (hard light)<br /><strong>.overlay-blend</strong> (inverted hard light)<br />
		<strong>.multi-blend</strong> (darkens element)<br /><strong>.screen-blend</strong> (lightens element)<br /><strong>.unblend</strong> (removes blend from current element)
	</p>
</div><div class="padded half">
	<p>In the example below, we use a blue box with white text and apply different blender classes to each.</p>
	<div class="white-t" style="background: url('app/files/images/edgespace.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<p class="inline-block padded"><strong>.color-blend</strong><br /><span class="blue color-blend fluid-text">Color Blend</span></p>
		<p>&nbsp;</p>
		<p class="inline-block padded"><strong>.diff-blend</strong><br /><span class="blue diff-blend fluid-text">Difference Blend</span></p>
		<p>&nbsp;</p>
		<p class="inline-block padded"><strong>.dodge-blend</strong><br /><span class="fluid-text dodge-blend blue">Dodge Blend</span></p>
		<p>&nbsp;</p>
		<p class="inline-block padded"><strong>.multi-blend</strong><br /><span class="blue multi-blend fluid-text">Multi-Blend</span></p>
		<p>&nbsp;</p>
		<p class="inline-block padded"><strong>.exc-blend</strong><br /><span class="blue fluid-text exc-blend">Exclusion Blend</span></p>
		<p>&nbsp;</p>
		<p class="inline-block padded"><strong>.screen-blend</strong><br /><span class="screen-blend blue fluid-text">Screen (Standard) Blend</span></p>
	</div>
</div></div>