				<h3 class="fluid-text monolisk" id="formputs">Forms</h3>
				<p>Basic forms are supported. It is possible to apply classes from other components, such as Flavors and BUTCH classes.<br /><br /></p>
				<div class="flex">
					<div class="padded half">
						<p class="info padded"><span class="heavy">Layouts</span><br />You could use <a href="https://www.blueprintgrid.com" target="_blank" class="yellow invert-h">Blueprint Grid</a> to create a custom layout for your form. This can be done within the <em>form</em> tag, and it is possible to nest layouts.<br /><br />
						<span class="heavy">.form-group</span><br />Use this class to add vertical spacing above and below a group of form elements.</p>
						<p class="padded warning"><span class="heavy">.highlight</span><br />An input or entire form can be "highlighted" when the user focuses on (interacts with) an input. Simply apply the <em><b>.highlight</b></em> class to the area that is to be highlighted.</p>
					</div>
					<div class="padded half">
				
						<form class="white grey-t brutal-border-dark box-s-k padded" name="demoform" action="" method="post">
							<div class="form-group">
								<label class="heavy">Text Label</label>
								<input type="text" name="name" placeholder="Text Input" />
							</div>
							<div class="form-group">
								<label class="heavy">Email Input</label>
								<input type="email" name="name" placeholder="email@address.net" class="" />
							</div>
							<div class="form-group">
								<label class="heavy">Checkbox</label><br />
								<input type="checkbox" name="check1" value="True"><label class="radio">True</label><br>
								<input type="checkbox" name="check2" value="False"><label class="radio">False</label>
							</div>
							<div class="form-group">
								<label class="heavy">Radio</label><br />
								<input type="radio" name="radio-group" value="responsive"><label class="radio">Responsive</label><br />
								<input type="radio" name="radio-group" value="nonresponsive"><label class="radio">Non-Responsive</label>
							</div>
							<div class="form-group">
								<label class="heavy">Select Dropdown</label>
								<select name="optionlist">
									<option value="mobile">Mobile</option>
									<option value="tablet">Tablet</option>
									<option value="desktop">Desktop</option>
								</select>
							</div>
							<div class="form-group">
								<label class="heavy">Number</label>
								<input type="number" name="quantity" min="1" max="50">
							</div>
							<div class="form-group">
								<label class="heavy">Text Area</label>
								<textarea name="comments" placeholder="Text area comments"></textarea>
							</div>
							<div class="form-group highlight">
								<label class="heavy">HIGHLIGHTED Text Area</label>
								<textarea name="highlighted" placeholder="I am a highlighted message."></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="squared full-btn">
							</div>
						</form>
					</div>
				</div>
				<p class="spacer"></p>
				<h4 class="charcoal white-t flow-text">Duplicate Fieldset Input</h4>
				<div class="flex"><div class="padded half">
					<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/buix.js</em></span></p>
					<p>Copy all input fields (including select options) from one fieldset to another when a checkbox is checked.<br /><br /></p>
					<p class="padded warning"><strong>NOTE:</strong> This feature uses unique IDs, so it can only be used once per page.</p>
					<p class="padded info"><span class="flow-text bold">Setup:</span><br />
					<strong>fieldset id="copyFrom"<br />fieldset id="pasteTo"</strong><br /><br />Checkbox input with<br /><strong>id="field-copy"</strong></p>
					<p class="padded success"><span class="bigger bold">TIP:</span><br />Use this method to copy inputs to hidden fields!</p>
				</div><div class="padded half">
					<form class="white grey-t brutal-border-dark box-s-k padded" name="demoform" action="" method="post">
						<!-- All inputs in this fieldset will get copied -->
						<fieldset id="copyFrom">
							<legend>Billing Address</legend>
							<label for="billFName">First Name</label>
							<input id="billFName" name="BillingFirstName" type="text" required="required" />
							<label for="billStreet">Street Address</label>
							<input id="billStreet" name="BillingStreet" type="text" required="required" />
							<label for="billCity">City</label>
							<input id="billCity" name="BillingCity" type="text" required="required" />
							<label for="billState">State</label>
							<select id="billState" name="BillingState" required="required">
								<option value="IN">IN</option>
								<option value="OH">OH</option>
								<option value="MI">MI</option>
							</select>
							<label for="billZip">Zip</label>
							<input id="billZip" name="BillingZip" type="number" required="required" />
						</fieldset>
						<fieldset id="pasteTo">
							<legend>Shipping Address</legend>
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
							<label for="shiptoState">State</label>
							<select id="shiptoState" name="ShiptoState" required="required">
								<option value="IN">IN</option>
								<option value="OH">OH</option>
								<option value="MI">MI</option>
							</select>
							<label for="shipZip">Zip</label>
							<input id="shipZip" name="ShipZip" type="number" required="required" />
						</fieldset>
						<input type="submit" value="Submit" class="squared full-btn">
					</form>
				</div></div>
				<p class="spacer"></p>
				<!-- Date Picker -->
				<h4 class="charcoal white-t flow-text">Date / Time Picker</h4>
				<div class="flex"><div class="padded half">
					<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>core/jab/buix.js</em></span></p>
					<p>A date / time picker can be added simply by applying a class to a text input field!</p>
					<div class="info padded"><p><span class="bigger bold">Classes</span><br />Add a text input and apply any of these classes:<br />
						<strong>.datepick</strong> - m/d/y<br />
						<strong>.datetime</strong> - m/d/y h:m am/pm<br />
						<strong>.datepick-euro</strong> - d-m-y<br />
						<strong>.datetime-euro</strong> - d-m-y h:m am/pm<br />
						<strong>.datepick-full</strong> - Day, Month XX, YYYY<br />
						<strong>.datetime-full</strong> - Day, Month XX, YYYY h:m am/pm</p><hr />
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
				<div class="clear-block jagged"><p class="checkerboard padding"></p></div>
				
				<!-- BUTTONS -->
				<h3 class="fluid-text monolisk" id="buttons">Buttons</h3>
				<div class="flex"><div class="padded half">
					<p style="margin-bottom: 1.1em;">To create a button, simply use the <strong>button</strong> tag, or apply <strong>.btn</strong> class to a link. Buttons are displayed as an inline block, by default.</p>
				</div><div class="half padded">
					<div class="info padded bold center">
						<button>Default Button</button>&nbsp;&nbsp;<button class="jumbo-btn">.jumbo-btn</button><br /><br />
						<button class="large-btn">.large-btn</button>&nbsp;&nbsp;<button class="md-btn">.medium-btn</button>&nbsp;&nbsp;
						<button class="small-btn">.small-btn</button>&nbsp;&nbsp;<button class="tiny-btn">.tiny-btn</button><br /><br />
						<p>To make a button take up the full width of a container, apply this class:</p>
						<button class="btn full-btn">.full-btn</button>
					</div>
				</div></div>