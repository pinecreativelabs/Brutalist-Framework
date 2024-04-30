<h3 class="fluid-text monolisk" id="brad" style="margin-bottom: 0;"><strong>BRAD</strong></h3>
<p class="bitstream flow-text"><strong>Build Renderable Application Data</strong> (BETA)</p>
<p class="bitstream red white-t heavy">core/brad.php</p>
<p class="bitstream" style="margin-top: 1rem;">BRAD is rad and he's here to provide you with data for your application interface. This core data is static (read-only), and it can / will be used to:</p>
<ul class="check bitstream">
	<li>Pass pre-defined values via an end-user form submission</li>
	<li>Define SQL database connections (3.1+)</li>
	<li>Configure pre-defined data queries (3.1+)</li>
</ul>
<p class="bitstream" style="margin-top: 1rem;">Currently in BETA, there will be four types of data: <em>CSV, XML, JSON,</em> and <em>SQL</em>. At this time, only CSV data is used. All BRAD data is found in the <span class="black white-t"><strong><em>/core/data</em></strong></span> directory. </p>
<div class="flex"><div class="padded half bitstream">
	<h4 class="flow-text charcoal">Form Selects</h4>
	<p>There are several form select (dropdown) inputs available that all use CSV data to prepopulate them. The CSV data files are located in the <strong><em>/core/data/csv/</em></strong> directory. Within your form, simply echo any of the below PHP variables to render it.</p>
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
		<p>Depending on your current location, all country and timezone selectors should be pre-selected to correspond to your current location. The same applies to state / province selectors if you're in the US or Canada.</p><hr />
		<p><?php echo $get_tz.'<br />'.$tz.'<br />'; ?></p>
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