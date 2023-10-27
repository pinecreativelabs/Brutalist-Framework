<div class="flex bitstream"><div class="padded half">
	<p style="margin-top: 1em;"><span class="flow-text">Markup</span><br />Use the following PHP code to render a simple blog post list:</p>
	<code class="smaller padded">
		&lt;?php<br />
		&nbsp;&nbsp;$new_window = false;<br />
		&nbsp;&nbsp;$get_bpl_data = 'app/data/csv/blogpostlist.csv';<br />
		&nbsp;&nbsp;include 'core/molds/boards/blogboard/view.php';<br />
		&nbsp;&nbsp;echo $blogpostlist;<br />
		?&gt;
	</code>
	<p class="padded info"><strong>$new_window</strong>: specify <em>true</em> for <em>false</em> if link targets are to open in a new window</p>
	<p style="margin-top: 1em;"><span class="flow-text">Customize</span><br /><strong>PHP Template:</strong><br />
	<span class="red white-t">core/molds/boards/blogboard/view.php</span><br /><strong>CSS:</strong><br />
	<span class="red white-t">core/molds/boards/blogboard/view.css</span></p>
</div><div class="padded half">
	<p><span class="flow-text">Data Files</span><br />CSV data is used to render blog post lists. CSV data files should be stored in the following directory: <span class="red white-t">app/data/csv/</span>. The first row of each file should be the names of the columns, separated by commas, as follows:<br /><br />
	<strong>active</strong> (true or false)<strong>, title, summary, dip</strong> (date of initial posting)<strong>, url </strong>(link)<strong>, thumbnail</strong> (image SRC)</p>
	<p class="padded info" style="margin-top: 1em;"><strong>TIP:</strong> Use double quotes in CSV files to keep fields intact (ex: <em>"99,100","Lorem, ipsums",true,"0.1"</em>). It's advised to use double quotes in CSV files to delimit field values that contain spaces and / or punctuation, such as commas or periods.</p>
</div></div>
<p class="spacer"></p>