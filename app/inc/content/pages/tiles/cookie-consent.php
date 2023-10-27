<h4 class="flow-text charcoal padded"><i class="bi bi-cookie"></i> Cookie Consent</h4>
<div class="flex"><div class="padded half bitstream">
	<p>Due to <a href="https://gdpr-info.eu/" target="_blank" class="lemonlink bold">GDPR</a> compliance requirements, cookie consent bars are a necessity on many websites. Cookies are used to track user activity on a page. If cookies are "accepted" by a user, they are consenting to sharing data that may be collected by you or a third party. If a user does <em>NOT</em> click the "Accept" button in the Cookie Consent bar, cookies will <em>NOT</em> be enabled, preventing any session data from being collected.</p>
	<p class="requiresbox" style="margin-top: 1.5rem; margin-bottom: 1.5rem;"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/plugins/cookie-consent.js</em></span></p>
	<p class="flow-text">DEMO</p>
	<p>A cookie consent bar should appear at the bottom of <em>only</em> this page. As long as the the "Accept" button is <em>NOT</em> selected, the bar should remain visible, even if you leave and come back to it. If the cookies are accepted, the bar will disappear and remain hidden during each session.</p>
</div><div class="padded half bitstream">
	<p class="flow-text">Markup</p>
	<p>Place the following before the closing body tag:</p>
	<code class="padded lucida smaller">
		&lt;div class="cookie-consent"&gt;<br />
		&nbsp;&nbsp;&lt;p&gt;...Cookie message...&lt;/p&gt;<br />
		&nbsp;&nbsp;&lt;span class="cookie-btn"&gt;ACCEPT&lt;/span&gt;<br />
		&lt;/div&gt;
	</code>
	<p class="spacer"></p>
	<p class="flow-text">Initialize</p>
	<p>Before the closing body tag, but after the required <em>cookie-consent</em> script is loaded:</p>
	<code class="padded lucida smaller">
		&lt;script&gt;<br />
		&nbsp;&nbsp;$(document).ready(function(){<br />
		&nbsp;&nbsp;&nbsp;&nbsp;$(".cookie-consent").grtCookie({<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;textcolor: "#333",<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: "#FFCD69",<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttonbackground: "#c40b14",<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buttontextcolor: "#fff",<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;duration: 365,<br />
		&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;});<br />
		&lt;/script&gt;
	</code>
	<p class="padded warning"><strong>NOTE:</strong> The duration is how long - in days - before the cookie expires.</p>
</div></div>

<!-- Cookie Consent Bar -->
<div class="cookie-consent">
	<p>We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you accept and understand our <a href="#">Privacy Policy</a>, and our <a href="#">Terms of Service</a>.</p>
	<span class="cookie-btn">ACCEPT</span>
</div>