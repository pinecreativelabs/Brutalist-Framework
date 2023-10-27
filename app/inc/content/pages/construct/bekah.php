<div class="charcoal white-t bitstream" style="padding: 6px;">
	<h4 class="flow-text" style="margin: 0;">BEKAH</h4>
	<p class="bold">Base Environment Key Application Helper</p>
</div>
<p class="bitstream red white-t heavy">core/bekah.php</p>
<p class="bitstream" style="margin-top: 1em;">BEKAH is here to help. She loves you, and will provide a captivating and supportive environment for your application. BEKAH script is used to define static sitewide variables that can be used throughout your application. Modify these as necessary. Below is a reference of all included variables:</p>

<div class="flex bitstream"><div class="padded half">
	<div class="padded disabled box-s-k" style="margin-top: 1rem;">
		<h5><strong>Base Kit Variables</strong></h5>
		<p>These variables are used to configure CORE </p><hr />
		<p><strong>$sitename</strong> <small>[string: name of application]</small><br />
			<strong>$appname</strong> <small>[string: alternate to <em>$sitename</em>]</small><br />
			<strong>$basdir</strong> <small>[string: if running application in a sub-directory (folder), specify the folder location (ex: 'sub-dir')]</small>
		</p><hr />
		<h5>Deconstruct Mode</h5>
		<p><strong>$deconstruct</strong> <small>[boolean: true/false]<br />
			<strong>Disable <em>deconstruct</em> to load all core CSS components via <em>/core/css/construct.css</em>.</strong></small>
		</p>
		<hr />
		<h5>Core Components</h5>
		<p><small><strong>Enable or disable CORE components.</strong></small><br />
			<strong>$butch</strong> <small>[boolean: true/false]</small><br />
			<strong>$buix</strong> <small>[boolean: true/false]</small><br />
			<strong>$bfx</strong> <small>[boolean: true/false]</small><br />
			<strong>$bicons</strong> <small>[boolean: true/false]</small><br />
			<strong>$flavors</strong> <small>[boolean: true/false]</small><br />
			<strong>$rebar</strong> <small>[boolean: true/false]</small>
		</p><hr />
		<h5>Additional CSS Resources</h5>
		<p><small><strong>Load additional CSS resources via <em>/core/css/construct.css</em>.</strong></small><br />
			<strong>$animate</strong> <small>[load animate.css (boolean: true/false)]</small><br />
			<strong>$filetypes</strong> <small>[load filetype icons library (boolean: true/false)]</small><br />
			<strong>$fontpacks</strong> <small>[load custom font packs (boolean: true/false)]</small>
		</p><hr />
		<h5>Themes</h5>
		<p><strong>$default_theme</strong> <small>[string: name of theme to be used by default]</small><br />
			<strong>$css_themes</strong> <small>[boolean: true/false]<br />
			<strong>Enable to insert custom themes (as specified via the <em>Themes</em> array in KAT) to the header</strong></small>
		</p><hr />
		<h5>Header Elements</h5>
		<p><strong>$tracking</strong> <small>[enable tracking codes (boolean: true/false)]</small><br />
			<strong>$favicons</strong> <small>[add favicon meta data to header (boolean: true/false)]</small><br />
			<strong>$tc</strong> <small>[enable Twitter card meta data (boolean: true/false)]</small><br />
			<strong>$og</strong> <small>[enable Open Graph meta data (boolean: true/false)]</small>
		</p><hr />
		<h5>Footer Elements</h5>
		<p><strong>$jquery</strong> <small>[enable jQuery (boolean: true/false)]</small><br />
			<strong>$jqv</strong> <small>[jquery version (number: 1,2, or 3)]</small><br />
		</p><hr />
		<h5>Date &amp; Time</h5>
		<p><strong>$df</strong> <small>[string: date format]</small><br />
			<strong>$tf</strong> <small>[string: time format]</small><br />
			<strong>$today</strong> <small>[outputs current date]</small><br />
			<strong>$time</strong> <small>[outputs current time]</small>
		</p><hr />
		<h5>Random Numbers &amp; Strings</h5>
		<p><strong>$rmin</strong> <small>[random number min]</small><br />
		<strong>$rmax</strong> <small>[random number max]</small><br />
		<strong>$rsl</strong> <small>[number: random string length]</small><br />
		<strong>$rand</strong> <small>[outputs random string within range]</small><br />
		<strong>$randomString</strong> <small>[outputs random string]</small>
		</p>
	</div>
</div><div class="padded half">
	<div class="padded disabled box-s-k" style="margin-top: 1rem;">
		<h5><strong>Application Helpers</strong></h5>
		<p>These variables return directory path and URL strings.</p><hr />
		<h5>Directory Paths</h5>
		<p><strong>$cdir</strong> <small>[current directory name]</small><br />
			<strong>$cwdir</strong> <small>[current working directory path]</small><br />
			<strong>$droot</strong> <small>[document root]</small><br />
			<strong>$cfile</strong> <small>[current file name]</small><br />
			<strong>$pdir</strong> <small>[parent directory (up 2 levels)]</small><br />
			<strong>$gdir</strong> <small>[grandparent directory (up 3 levels)]</small><br />
			<strong>$ggdir</strong> <small>[great-grandparent directory (up 4 levels)]</small><br /><br />
		</p>
		<hr />
		<h5>URL Helpers</h5>
		<p><strong>$https</strong> <small>[get status of HTTPS (on or off?)]</small><br />
			<strong>$host</strong> <small>[returns host(domain name, ip)]</small><br />
			<strong>$burl</strong> <small>[base URL (combines $https and $host)]</small><br />
			<strong>$rurl</strong> <small>[requested resource URL]</small><br />
			<strong>$url</strong> <small>[standard URL (combines $burl and $rurl)]</small><br />
			<strong>$bdir</strong> <small>[base directory URL ($burl + '/')]</small><br /><br />
			<strong>$app_files</strong> <small>[full URL path to /app/files/ directory]</small><br />
			<strong>$app_audio</strong> <small>[full URL path to /app/files/audio/ directory]</small><br />
			<strong>$app_video</strong> <small>[full URL path to /app/files/video/ directory]</small><br />
			<strong>$app_imges</strong> <small>[full URL path to /app/files/images/ directory]</small><br />
			<strong>$app_docs</strong> <small>[full URL path to /app/files/docs/ directory]</small><br />
			<strong>$app_data</strong> <small>[full URL path to /app/data/ directory]</small><br />
			<strong>$app_csv</strong> <small>[full URL path to /app/data/csv/ directory]</small><br />
			<strong>$app_json</strong> <small>[full URL path to /app/data/json/ directory]</small><br />
			<strong>$app_sql</strong> <small>[full URL path to /app/data/sql/ directory]</small><br />
			<strong>$app_xml</strong> <small>[full URL path to /app/data/xml/ directory]</small><br /><br />
		</p>
		<hr />
		<h5>User Info Helpers</h5>
		<p><strong>$user_ip</strong> <small>[get user IP address]</small><br />
			<strong>$user_country</strong> <small>[get user country name]</small><br />
			<strong>$user_cc</strong> <small>[get user country code]</small><br />
			<strong>$user_region</strong> <small>[get user region]</small><br />
			<strong>$user_rc</strong> <small>[get user region code]</small><br />
			<strong>$user_city</strong> <small>[get user city]</small><br />
			<strong>$user_lat</strong> <small>[get user latitude]</small><br />
			<strong>$user_long</strong> <small>[get user longitude]</small><br />
			<strong>$user_tz</strong> <small>[get user timezone]</small><br />
			<strong>$user_curc</strong> <small>[get user currency code]</small><br />
			<strong>$user_curs</strong> <small>[get user currency symbol]</small><br /><br />
		</p>
		<hr />
		<h5>File Counters (<em>FC</em>)</h5>
		<p><small>Get the number of files in the <strong>/app/files/</strong> and <strong>/app/data/</strong> folders:</small><br /><br />
			<strong>$files_fc</strong> <small>/app/files/ file count</small><br />
			<strong>$audio_fc</strong> <small>/app/files/audio/ file count</small><br />
			<strong>$docs_fc</strong> <small>/app/files/docs/ file count</small><br />
			<strong>$images_fc</strong> <small>/app/files/images/ file count</small><br />
			<strong>$video_fc</strong> <small>/app/files/video/ file count</small><br />
			<strong>$files_total</strong> <small>total file count for all files directories</small><br /><br />
			<strong>$data_fc</strong> <small>/app/data/ file count</small><br />
			<strong>$csv_fc</strong> <small>/app/data/csv/ file count</small><br />
			<strong>$json_fc</strong> <small>/app/data/json/ file count</small><br />
			<strong>$sql_fc</strong> <small>/app/data/sql/ file count</small><br />
			<strong>$xml_fc</strong> <small>/app/data/xml/ file count</small><br />
			<strong>$data_total</strong> <small>total file count for all data directories</small><br />
			<strong>$total_fc</strong> <small>total file count for both files and data directories</small>
		</p>
		<hr />
		<h5>Other</h5>
		<p><strong>$browser_lang</strong> <small>gets browser language (ex: 'en')</small></p>
	</div>
</div></div>