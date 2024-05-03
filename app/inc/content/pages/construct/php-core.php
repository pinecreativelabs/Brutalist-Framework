<h3 class="fluid-text monolisk" id="php"><strong>PHP Core</strong></h3>
<div class="flex bitstream"><div class="padded half">
	<p>PHP elements are written in plain, basic PHP.<br /><span class="bold red">Using PHP is purely optional.</span><br /><br /></p>
	<p class="center flow-text heavy padded info b-b-k rounded">minimum requirement:<br /><span class="huge">PHP 7.0</span></p>
	<p style="margin-top: 1rem;">If using PHP, you'll only need to load the following file at the beginning of any page:</p>
	<p class="flow-text"><span class="mauve white-t"><strong>bos/build/construct.php</strong></span></p>
	<p style="margin-top: 1rem;">This script includes all other necessary PHP functions, constructors, and helpers that will be needed to help you build and construct a dynamic page.</p>
</div><div class="padded half">
	<div class="padded warning">
		<h4 class="flow-text"><strong>Running BF in a Subdirectory</strong></h4>
		<p>If you plan to run the PHP version of BF in a subdirectory (ex: <em>brutalistframework.com/sub-directory</em>), you will need to specify the directory in the following file:<br />
		<span class="red white-t"><strong><em>/bos/build/sysconfig.php</em></strong></span></p>
		<p style="margin-top: 1rem;">The line with <em>BASE_DIR</em> should have an empty value. Enter the name of the folder that <em>BF</em> will run in, like so:<br />
		<span class="terminal">define('BASE_DIR', '<strong>sub-directory</strong>');</span></p>
	</div>
</div></div>
<div class="flex bitstream"><div class="padded half">
	<h4 class="flow-text charcoal padded">PHP Architecture</h4>
	<p style="margin-top: 1rem;">How does the PHP build constructor all fit together? The diagram below illustrates the overall structure.</p>
	<p class="padded"><img src="app/files/images/build-construct-diagram.jpg" class="responsive box-s-t" alt="PHP Build Constructor" /></p>
	<p style="margin-top: 1rem;">The PHP core build constructor includes <em>helpers</em> and <em>constructors</em>, which contains needed scripts from their respective directories.</p>
	<p class="indent" style="margin-top: 1rem;">The constructor consolidates both helpers and constructors into a single source file that is to be loaded on an application page.</p> 
</div><div class="padded half">
	<h4 class="flow-text charcoal padded">Helpers vs. Constructors</h4>
	<p style="margin-top: 1rem;"><em>Helpers</em> are scripts that contain PHP functions and static variables that get information about either client- or server-side environments and other variables. <em>Constructors</em> assemble renderable elements or variables that can be used to render elements or echo content. Helpers are background functions, while Constructors are more visual.</p>
	<p style="margin-top: 1rem;"><strong>Helpers get information about:</strong></p>
	<ul class="square">
		<li>Server environment</li>
		<li>Dates &amp; formatting</li>
	</ul>
	<p style="margin-top: 1rem;"><strong>Constructors build:</strong></p>
	<ul class="square">
		<li>CSS link tags &amp; javascript script tags</li>
		<li>Prepopulated form selectors</li>
	</ul>
</div></div>
<p class="spacer"></p>

<h4 class="flow-text charcoal padded bitstream">Helper Variables</h4>
<p class="bitstream">Below are helper variables that can be used for getting client or server information.</p>
<div class="flex bitstream"><div class="padded half">
	<div class="padded disabled">
		<h5>Server Environment Info</h5>
		<p><strong>$phpversion</strong> <small>server PHP version</small><br />
			<strong>$http</strong> <small>HTTPS status</small><br />
			<strong>$server_ip</strong> <small>server IP address</small><br />
			<strong>$get_cur_user</strong> <small>current owner username</small><br />
			<strong>$get_my_uid</strong> <small>current owner user ID</small><br />
			<strong>$protocol</strong> <small>server protocol</small><br />
			<strong>$session_dur</strong> <small>session duration</small><br />
			<strong>$environemnt</strong> <small>print server info</small>
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
			<strong>$user_curs</strong> <small>[get user currency symbol]</small><br />
			<strong>$user_environment</strong> <small>[print user (client) info]</small><br />
			<strong>$browser_lang</strong> <small>[browser language (<?php echo $browser_lang;?>)]</small><br />
		</p>
		<hr />
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
			<strong>$furl</strong> <small>[full URL ($https + $url)]</small><br />
			<strong>$bdir</strong> <small>[base directory URL ($burl + '/')]</small><br />
		</p>
	</div>
</div><div class="padded half">
	<p class="padded disabled"><span class="flow-text heavy">Date Formatting</span><br />
		<strong>$day</strong> <small>[day name (<?php echo $day;?>)]</small><br />
		<strong>$daya</strong> <small>[day, 3 letters(<?php echo $daya;?>)]</small><br />
		<strong>$month</strong> <small>[month name (<?php echo $month;?>)]</small><br />
		<strong>$mon</strong> <small>[month, 3 letters (<?php echo $mon;?>)]</small><br />
		<strong>$mo</strong> <small>[month, 2-digit (<?php echo $mo;?>)]</small><br />
		<strong>$mot</strong> <small>[number of days in month (<?php echo $mot;?>)]</small><br />
		<strong>$year</strong> <small>[year, 4-digit (<?php echo $year;?>)]</small><br />
		<strong>$yr</strong> <small>[year, 2-digit (<?php echo $yr;?>)]</small><br />
		<strong>$dom</strong> <small>[day of month (<?php echo $dom;?>)]</small><br />
		<strong>$dow</strong> <small>[day of week (<?php echo $dow;?>)]</small><br />
		<strong>$doy</strong> <small>[day of year (<?php echo $doy;?>)]</small><br />
		<strong>$week</strong> <small>[week number of year (<?php echo $week;?>)]</small><br />
		<strong>$nday</strong> <small>[nth day (<?php echo $nday;?>)]</small><br /><br />
		<strong>$hms</strong> <small>[hours minutes seconds (<?php echo $hms;?>)]</small><br />
		<strong>$datetime</strong> <small>[MySQL datetime format (<?php echo $datetime;?>)]</small><br /><br />
		<strong>$get_tz</strong> <small>[get timezone (<?php echo $get_tz;?>)]</small><br />
		<strong>$tz</strong> <small>[timezone (<?php echo $tz;?>)]</small><br /><br />
		<strong>$dmy</strong> <small>[DD.MM.YY (<?php echo $dmy;?>)]</small><br />
		<strong>$ymd</strong> <small>[YY.MM.DD (<?php echo $ymd;?>)]</small><br />
		<strong>$mdy</strong> <small>[MM.DD.YY (<?php echo $mdy;?>)]</small><br />
		<strong>$mdyt</strong> <small>[<?php echo $mdyt;?>]</small><br />
		<strong>$mdytz</strong> <small>[<?php echo $mdytz;?>]</small><br /><br />
		<strong>$tomorrow</strong> <small>[tomorrow day (<?php echo $tomorrow;?>)]</small><br />
		<strong>$yesterday</strong> <small>[yesterday day (<?php echo $yesterday;?>)]</small><br />
		<strong>$lastmonth</strong> <small>[last month (<?php echo $lastmonth;?>)]</small><br />
		<strong>$nextmonth</strong> <small>[next month (<?php echo $nextmonth;?>)]</small><br />
		<strong>$nextyear</strong> <small>[next year (<?php echo $nextyear;?>)]</small><br />
		<strong>$lastyear</strong> <small>[last year (<?php echo $lastyear;?>)]</small><br />
		<strong>$nextweek</strong> <small>[next week (<?php echo $nextweek;?>)]</small><br />
		<strong>$lastweek</strong> <small>[last week (<?php echo $lastweek;?>)]</small><br /><br />
		<strong>$leapyear</strong> <small>[leapyear: <?php echo $leapyear;?>]</small><br /><br />
		<strong>$lastmod</strong> <small>[file last modified: <?php echo $lastmod;?>]</small><br />
	</p>
</div></div>
<p class="spacer"></p>

<h4 class="flow-text charcoal padded bitstream">Basic Constructors</h4>
<div class="flex bitstream"><div class="padded half">
	<p class="padded disabled"><span class="flow-text heavy">Heading Tags</span><br />
		<strong>$faviconlist</strong><br /><small>renders favicon meta data (place in page header)</small><br /><br />
		<strong>$global_meta_header</strong><br /><small>renders necessary meta tags (place in page header)</small>
	</p>
</div><div class="padded half">
	<div class="padded disabled">
		<h5>CSS Link Tags</h5>
		<p>The only variable needed for loading CSS is:<br /><br /><strong>$core_css</strong> <small>[loads <em>bos/core/css/construct.css</em>]</small><br /><br />
		This CSS file imports all needed CSS files. Alternatively, all CSS files can be loaded separately by using the variable:<br /><br />
		<strong>$deconstruct_css</strong><br /><br />
		</p>
	</div>
</div></div>
<p class="spacer"></p>

<h4 class="flow-text charcoal padded bitstream">Form Selects</h4>
<div class="flex"><div class="padded half bitstream">
	<p>There are several form select (dropdown) inputs available that all use CSV data to prepopulate them. The CSV data files are located in the <strong><em>/bos/core/data/csv/</em></strong> directory. Within your form, simply echo any of the below PHP variables to render it.</p>
	<p class="padded disabled" style="margin-top: 1rem;">
		<strong>$country_select</strong><br /><small>country selector</small><br /><br />
		<strong>$country_select_cur</strong><br /><small>country selector with currency code as the option value</small><br /><br />
		<strong>$country_select_code</strong><br /><small>country selector with alpha2 code as the option value</small><br /><br />
		<strong>$country_select_uncode</strong><br /><small>country selector with UN code as the option value</small><br /><br />
		<strong>$state_select</strong><br /><small>US state selector with abbreviations as the option value</small><br /><br />
		<strong>$province_select</strong><br /><small>Canadian province / territory selector with abbreviations as the option value</small><br /><br />
		<strong>$timezone_select</strong><br /><small>timezone selector</small><br /><br />
		<strong>$timezone_select_offset</strong><br /><small>timezone selector with UTC offset as the option value</small><br /><br />
		<strong>$language_select</strong><br /><small>language selector with alpha2 code as the option value</small>
	</p>
	<p class="padded disabled" style="margin-top: 1rem;">
	Additionally, the following data tables can be rendered:<br /><br />
		<strong>$countries_table</strong><br /><small>table of countries, and their alpha 2 codes, currencies, and UN codes</small><br /><br />
		<strong>$states_table</strong><br /><small>table of states and their abbreviations</small><br /><br />
		<strong>$provinces_table</strong><br /><small>table of Canadian provinces / territories, and their alpha codes, geo codes, and regions</small><br /><br />
		<strong>$timzezone_table</strong><br /><small>table of timezones and their UTC offsets and names</small><br /><br />
		<strong>$language_table</strong><br /><small>table of languages with their alpha codes</small>
	</p>
</div><div class="padded half">
	<div class="padded info bitstream">
		<h4 class="flow-text">Form Select Demo</h4>
		<!--
		<p>Depending on your current location, all country and timezone selectors should be pre-selected to correspond to your current location. The same applies to state / province selectors if you're in the US or Canada.</p><hr />
		-->
		<form>
			<label>Country</label><br />
			<?php echo $country_select;?>
			<br /><br />
			<label>Country Currency</label><br />
			<?php echo $country_select_cur;?>
			<br /><br />
			<label>Country (alpha 2 code)</label><br />
			<?php echo $country_select_code;?>
			<br /><br />
			<label>Country (UN code)</label><br />
			<?php echo $country_select_uncode;?>
			<br /><br />
			<label>State</label><br />
			<?php echo $state_select;?>
			<br /><br />
			<label>Province / Territory</label><br />
			<?php echo $province_select;?>
			<br /><br />
			<label>Timezone (<?php echo $timezone;?>)</label>
			<?php echo $timezone_select_user;?>
			<br /><br />
			<label>Language</label>
			<?php echo $language_select;?>
			<br /><br />
			<label>User Country</label><br />
			<?php echo $country_select_user;?><br /><br />
			
		</form>
	</div>
</div></div>
<p class="spacer"></p>

<h4 class="flow-text charcoal padded bitstream">PHP Boilerplate</h4>
<div class="flex bitstream"><div class="padded half">
	<p>Constructing a PHP page is very basic. The code below is the barebones anatomy of a PHP page:</p>
	<p style="margin-top: 1rem;" class="terminal padded">
		<small><span class="lavender-t">&lt;?php require_once 'bos/build/constructor.php'; ?&gt;</span><br />
		&lt;!DOCTYPE html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br /><span class="lavender-t">&lt;?php echo $global_meta_header;?&gt;</span><br />
		&lt;title&gt;Page Title&lt;/title&gt;<br /><span class="lavender-t">&lt;?php echo $core_css; ?&gt;</span><br />&lt;/head&gt;<br />&lt;body&gt;<br />
		...body content...<br /><span class="lavender-t">&lt;?php echo $jquery3; ?&gt;</span><br />&lt;/body&gt;<br />&lt;/html&gt;
		</small>
	</p>
</div><div class="padded half">
	<h5>Boilerplate</h5>
	<p>The <em>BF</em> package includes a <em>php_boilerplate.php</em> file. Use this as a starting point for constructing something solid.<br /><br />
	<a href="php_boilerplate.php" target="_blank" class="nb-btn  pill">PHP Boilerplate &raquo;</a></p>
</div></div>
<p class="spacer"></p>