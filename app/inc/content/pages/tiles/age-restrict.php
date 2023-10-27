<h4 class="flow-text charcoal padded"><i class="bi bi-restricted"></i> Age Restrict</h4>
<div class="flex"><div class="padded half">
	<p class="bitstream" style="margin-bottom: 1.5rem;">Some users may be too young to view brutally mature content, so age verification may be necessary. <em>Age Restrict</em> displays a popup that requires the user to enter their birth date. If the user is old enough, they are permitted to view the page (or redirected to another). If they are too young, they are blocked from viewing the page, or are redirected to another page.</p>
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/age-restrict.js</em></span></p>
	<p class="flow-text bitstream center" style="margin-top: 1em;"><a href="ratedx.html" target="_blank" class="btn medium-btn invert-h b-s-t lime-b terminal">View Demo &raquo;</a></p>
</div><div class="padded half">
	<p class="flow-text bitstream">Initialize</p>
	<code class="smaller padded">
		&lt;script&gt;<br />
		&nbsp;$(document).ready(function(){<br />
		&nbsp;&nbsp;$.ageCheck({<br />
		&nbsp;&nbsp;&nbsp;&nbsp;minAge: 18,<br />
		&nbsp;&nbsp;&nbsp;&nbsp;title: 'Age Verify',<br />
		&nbsp;&nbsp;&nbsp;&nbsp;copy:'Must be 18 or older',<br />
		&nbsp;&nbsp;&nbsp;&nbsp;redirectTo:'',<br />
		&nbsp;&nbsp;&nbsp;&nbsp;redirectOnFail:'',<br />
		&nbsp;&nbsp;&nbsp;&nbsp;underAgeMsg:'Not old enough!'<br />
		&nbsp;});<br />});<br />
		&lt;/script&gt;
	</code>
	<p class="warning padded bitstream"><strong>VARIABLES</strong><br />
		<strong>minAge</strong> - numeric age value user must be<br /><strong>title</strong> - text string for popup title<br />
		<strong>copy</strong> - text string for popup message<br /><strong>redirectTo</strong> - (optional) URL to re-direct to if old enough<br />
		<strong>redirectOnFail</strong> - (optional) URL to redirect to if too young<br /><strong>underAgeMsg</strong> - Text to display if too young.
	</p>
</div></div>