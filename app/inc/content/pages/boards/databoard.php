	<div class="flex"><div class="padded half">
		<p><span class="flow-text">Markup</span><br />Use the following PHP code to render a CSV data table:</p>
		<code class="smaller padded">
			&lt;?php<br />
			&nbsp;&nbsp;$get_csv_data = 'app/data/csv/books.csv';<br />
			&nbsp;&nbsp;include 'core/molds/boards/databoard/view.php';<br />
			&nbsp;&nbsp;echo $csv_table;<br />
			?&gt;
		</code>
		<p style="margin-top: 1em;"><span class="flow-text">Customize</span><br />
		<strong>PHP Template:</strong><br /><span class="red white-t">core/molds/boards/databoard/view.php</span><br />
		<strong>CSS</strong><br /><span class="red white-t">core/molds/boards/databoard/view.css</span></p>
	</div><div class="padded half">
		<p><span class="flow-text">Data Files</span><br />CSV data files should be stored in the following directory: <span class="red white-t">app/data/csv/</span>. The first row of each file should be the names of the columns, separated by commas (ex: <em><strong>id, item_name, description, price</strong></em>).</p>
		<p class="padded info" style="margin-top: 1em;"><strong>TIP:</strong> Use double quotes in CSV files to keep fields intact (ex: <em>"99,100","Lorem, ipsums",true,"0.1"</em>). It's advised to use double quotes in CSV files to delimit field values that have spaces and / or punctuation, such as commas or periods.</p>
	</div></div>