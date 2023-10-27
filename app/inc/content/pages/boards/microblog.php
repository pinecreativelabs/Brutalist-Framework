	<div class="flex bitstream"><div class="padded half">
		<p><span class="flow-text">Markup</span><br />Use the following PHP code to render a Microblog:</p>
		<code class="smaller padded">
			&lt;?php<br />
			&nbsp;&nbsp;$cover_height = 260; <span class="azure-t">// integer number (in pixels)</span><br />
			&nbsp;&nbsp;$view_post_text = 'View Post'; <span class="azure-t">// text string</span><br />
			&nbsp;&nbsp;$modal_post_view = true; <span class="azure-t">// true or false</span><br />
			&nbsp;&nbsp;$get_lg_data = 'app/data/xml/microblog.xml';<br />
			&nbsp;&nbsp;include 'core/molds/boards/blogboard/view.php';<br />
			&nbsp;&nbsp;echo $microblog;<br />
			?&gt;
		</code>
		<p class="padded info"><strong>$cover_height</strong>: Height (in px) of cover image<br />
			<strong>$view_post_text</strong>: Button text for opening full article modal<br />
			<strong>$modal_post_view</strong>: Enable / disable article modal box</p>
		<p style="margin-top: 1em;"><span class="flow-text">Customize</span><br /><strong>PHP template:</strong><br />
			<span class="red white-t">core/molds/boards/blogboard/view.php</span><br />
			<strong>CSS:</strong><br /><span class="red white-t">core/molds/boards/blogboard/view.css</span>
		</p>
	</div><div class="padded half">
		<p><span class="flow-text">Data Files</span><br />Microblog uses XML data. Use the following XML markup in your XML data file:</p>
		<code class="smaller padded">
			&lt;?xml version="1.0"?&gt;<br />
			&lt;blog&gt;<br />
			&nbsp;&nbsp;&lt;post id="" author="" postdate="" category="" active=""&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Post Title&lt;/title&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;content&gt;...content...&lt;/content&gt;<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;cover src="" /&gt;<br />
			&nbsp;&nbsp;&lt;/post&gt;<br />
			&lt;/blog&gt;
		</code>
		<p class="padded info"><strong>id</strong>: Post ID (optional)<br /><strong>author</strong>: Name of article author<br />
			<strong>postdate</strong>: Date article posted<br /><strong>category</strong>: Article category<br />
			<strong>active</strong>: Determine whether article is visible (<em>true</em> or <em>false</em>)<br />
			<strong>title</strong>: Article title<br /><strong>content</strong>: Article body<br />
			<strong>cover src</strong>: Path to cover image</p>
		<p class="padded warning"><span class="flow-text"><strong>Article Content</strong></span><br />When using line breaks, paragraphs, or other HTML entities, we must write out each entity in full. As an example, for a line break, we would write: <br /><strong>&amp;lt;br /&amp;gt;</strong></p>
	</div></div>
	<p class="spacer"></p>