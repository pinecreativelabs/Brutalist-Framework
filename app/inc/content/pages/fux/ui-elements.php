<h3 class="fluid-text monolisk" id="ui">UI Elements</h3>
<p class="bitstream">Forms may need to be enhanced with various UI elements, which require javascript plugins.</p>
<p class="spacer"></p>
<h4 class="charcoal white-t flow-text bitstream">Duplicate Fieldset Input</h4>
<div class="flex bitstream"><div class="padded half">
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/fux/form-functions.js</em></span><br />
	<small><span class="echo">$form_functions_js</span></small></p>
	<p>Copy all input fields (including select options) from one fieldset to another when a checkbox is checked.<br /><br /></p>
	<p class="padded warning"><strong>NOTE:</strong> This feature uses unique IDs, so it can only be used once per page.</p>
	<p class="padded info"><span class="flow-text bold">Setup:</span><br />
		<strong>fieldset id="copyFrom"<br />fieldset id="pasteTo"</strong><br /><br />Checkbox input with<br /><strong>id="field-copy"</strong></p>
	<p class="padded success"><span class="bigger bold">TIP:</span><br />Use this method to copy inputs to hidden fields!</p>
</div><div class="padded half">
	<form class="white grey-t brutal-border-dark box-s-k padded" name="demoform" action="" method="post">
		<!-- All inputs in this fieldset will get copied -->
		<fieldset id="copyFrom"><legend>Billing Address</legend>
			<label for="billFName">First Name</label>
			<input id="billFName" name="BillingFirstName" type="text" required="required" />
			<label for="billStreet">Street Address</label>
			<input id="billStreet" name="BillingStreet" type="text" required="required" />
			<label for="billCity">City</label>
			<input id="billCity" name="BillingCity" type="text" required="required" />
			<div class="flex"><div class="half">
				<label for="billState">State</label>
				<select id="billState" name="BillingState" required="required">
					<option value="IN">IN</option>
					<option value="OH">OH</option>
					<option value="MI">MI</option>
				</select>
			</div><div class="half">
				<label for="billZip">Zip</label>
				<input id="billZip" name="BillingZip" type="number" required="required" />
			</div></div>
		</fieldset>
		<fieldset id="pasteTo"><legend>Shipping Address</legend>
			<div class="form-group">
				<input id="field-copy" name="SameAddress" type="checkbox" />
				<label for="field-copy">same as billing</label>
			</div>
			<label for="delivFName">First Name</label>
			<input id="delivFName" name="DeliveryFirstName" type="text" required="required" />
			<label for="delivStreet">Street Address</label>
			<input id="delivStreet" name="DeliveryStreet" type="text" required="required" />
			<label for="delivCity">City</label>
			<input id="delivCity" name="DeliveryCity" type="text" required="required" />
			<div class="flex"><div class="half">
				<label for="shiptoState">State</label>
				<select id="shiptoState" name="ShiptoState" required="required">
					<option value="IN">IN</option>
					<option value="OH">OH</option>
					<option value="MI">MI</option>
				</select>
			</div><div class="half">
				<label for="shipZip">Zip</label>
				<input id="shipZip" name="ShipZip" type="number" required="required" />
			</div></div>
		</fieldset>
		<input type="submit" value="Submit" class="squared full-btn">
	</form>
</div></div>
<p class="spacer"></p>

<!-- Date Picker -->
<h4 class="charcoal white-t flow-text bitstream">Date / Time Picker</h4>
<div class="flex bitstream"><div class="padded half">
	<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/fux/datetime-picker.js</em></span><br />
	<small><span class="echo">$datetime_picker_js</span></small></p>
	<p>A date / time picker can be added simply by applying a class to a text input field!</p>
	<div class="info padded"><p><span class="bigger bold">Classes</span><br />Add a text input and apply any of these classes:<br />
		<strong>.datepick</strong> - m/d/y<br />
		<strong>.datetime</strong> - m/d/y h:m am/pm<br />
		<strong>.datepick-euro</strong> - d-m-y<br />
		<strong>.datetime-euro</strong> - d-m-y h:m am/pm<br />
		<strong>.datepick-full</strong> - Day, Month XX, YYYY<br />
		<strong>.datetime-full</strong> - Day, Month XX, YYYY h:m am/pm</p>
	<hr />
	<p><span class="bigger bold">Inline Picker</span><br />To display the picker inline (beneath the text input), simply apply the following data-attribute to the text input tag: <br /><strong>data-inline="true"</strong></p>
	</div>
</div><div class="padded half">
	<form class="white grey-t brutal-border-dark box-s-k padded" name="demoform" action="" method="post">	
		<div class="form-group">
			<label class="heavy">Date Only</label>
			<input type="text" class="datepick" placeholder="Pick a Date" />
		</div>
		<div class="form-group">
			<label class="heavy">Date / Time</label>
			<input type="text" class="datetime" placeholder="Pick a Date &amp; Time" />
		</div>
		<div class="form-group">
			<label class="heavy">Inline Date / Time</label>
			<input type="text" class="datetime" placeholder="Select Date / Time" data-inline="true"/>
		</div>
		<div class="form-group">
			<label class="heavy">Select Day</label>
			<input type="text" class="datepick-full" placeholder="Pick a Day" />
		</div>
		<div class="form-group">
			<label class="heavy">Select Day &amp; Time</label>
			<input type="text" class="datetime-full" placeholder="Pick a Day / Time" />
		</div>
	</form>
</div></div>
<p class="spacer"></p>

