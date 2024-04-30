<h3 class="fluid-text monolisk" id="validators">Validators</h3>

<!-- CREDIT CARD INPUT -->
<h4 class="charcoal white-t flow-text bitstream">Credit Card Input Validator</h4>
<p class="requiresbox"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/fux/credit-card-validator.js</em></span><br />
<small><span class="echo">$card_validator_js</span></small></p>
<p class="bitstream">The credit card input validates the type of card number the user inputs. AMEX, Discover, MasterCard, and Visa is supported. The expiration date input is automatically formatted.<br /><br /></p>
<div class="flex">
	<div class="padded half">
		<p class="padded info bitstream">
			<span class="bigger bold">Card Examples</span><br /><strong>AMEX</strong><br />3400 0000 0000 009<br />
			<strong>Discover</strong><br />6011 0000 0000 0004<br />
			<strong>MasterCard</strong><br />5500 0000 0000 0004<br />
			<strong>Visa</strong><br />4111 1111 1111 1111
		</p>
	</div><div class="padded half">
		<div class="lush padded">
			<!-- CREDIT CARD FORM -->
			<form class="brick-wrap">
				<div class="brick b100">
					<h5 class="flow-text">Card Number:</h5>
					<div class="card-input">
						<div class="card-type"></div>
						<input placeholder="0000 0000 0000 0000" onkeyup="$cc.validate(event)" />
						<div class="card-valid">&#10004;</div>
					</div>
				</div><div class="brick b50 card-exp">
					<label>Expiration Date</label><br />
					<input onkeyup="$cc.expiry.call(this,event)" maxlength="7" placeholder="mm/yyyy" />
				</div>
				<div class="brick b50 card-cvv">
					<label>CVV</label><br />
					<input placeholder="XXX"/>
				</div>
			</form><!-- END CARD INPUT FORM -->
		</div>
	</div>
</div>
<p class="spacer"></p>

<!-- PRISTINE VALIDATOR -->
<h4 class="charcoal white-t flow-text bitstream">General Form Input Validation</h4>
<div class="flex">
	<div class="padded half">
		<p class="bitstream"><a href="https://pristine.js.org/" target="_blank" class="lemonlink"><strong><em>PristineJS</em></strong></a>, a micro-library for validating various types of form inputs, is available as part of the CORE JAB library.</p>
		<p class="requiresbox" style="margin-top: 1rem;"><span class="flow-text">REQUIRES:</span><br /><em>bos/core/jab/fux/pristine.js</em></span><br /><small><span class="echo">$pristine_js</span></small></p>
		<p class="bitstream">It automatically validates <em>required, min, max, minlength,</em> and <em>maxlength</em> attributes, and the value of type attributes like email, number and more. For full documentation, see <a href="https://pristine.js.org/" target="_blank" class="lemonlink">pristine.js.org</a>.</p>
		
		<div class="padded disabled bitstream" style="margin-top: 1rem;">
			<h4 class="flow-text">Patterns</h4>
			<p>Below are patterns that can be used with the <em>pattern</em> or <em>data-pristine-pattern</em> attributes for password or other types of input.</p>
			<p><small>Number rounded to 2 demimal points<br /><span class="terminal">"/^\d+\.\d{2}$/g"</span></small></p>
			<p><small>Min 8 characters, at least one letter and one number:<br /><span class="terminal">"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"</span></small></p>
			<p><small>Min 8 characters, at least one letter, one number and one special character:<br /><span class="terminal">"^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"</span></small></p>
			<p><small>Min 8 characters, at least one uppercase letter, one lowercase letter and one number:<br /><span class="terminal">"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"</span></small></p>
			<p><small>Min 8 characters, at least one uppercase letter, one lowercase letter, one number and one special character:<br />
			<span class="terminal">"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"</span></small></p>
			<p><small>Min 8 and max 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character:<br />
			<span class="terminal">"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$"</span></small></p>
		</div>
	</div><div class="padded half">
		<h4 class="flow-text bitstream"><strong>DEMO</strong></h4>
		<form id="form1" class="validate padded b-d-t smoke-b" novalidate method="post">
			<input type="hidden"/>
			<div class="form-group">
				<label>Text Input <small>(required)</small></label>
				<input type="text" required class="form-control" />
			</div>
			<div class="form-group">
				<label>Text Input <small>(optional, min 5 chars)</small></label>
				<input type="text" minlength="5" class="form-control" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" />
			</div>
			<div class="form-group">
				<label>Number <small>(required, min 100)</small></label>
				<input type="number" min="100" required class="form-control" />
			</div>
			<div class="form-group">
				<label>Decimal Number <small>(required)</small></label>
				<input type="number" pattern="/^\d+\.\d{2}$/g" required data-pristine-pattern-message="The value must have 2 decimal points" class="form-control" />
			</div>
			<div class="form-group">
				<label>Select <small>(required)</small></label><br />
				<select required class="form-control">
				  <option value="">-----</option>
				  <option value="mx">Mexico</option>
				  <option value="us">USA</option>
				  <option value="ca">Canada</option>
				</select>
			</div>
			<div class="form-group inline-label">
				<label>Choose at least 1 <small>(required, min = 1, max = 2)</small></label><br />
				<input id="ch1" type="checkbox" min="1" max="2" name="future" required data-pristine-min-message="Select at least 1" data-pristine-max-message="Select no more than 2"/>
				<label for="ch1">Blocks</label><br/>
				<input id="ch2" type="checkbox" min="1" max="2" name="future" required data-pristine-min-message="Select at least 1" data-pristine-max-message="Select no more than 2"/>
				<label for="ch2">Bricks</label><br/>
				<input id="ch3" type="checkbox" min="1" max="2" name="future" required data-pristine-min-message="Select at least 1" data-pristine-max-message="Select no more than 2"/>
				<label for="ch3">Tiles</label>
			</div>
			<div class="form-group b-s-t smoke-b padded">
				<label>Password</label><br />
				<input type="password" id="pwd"  required data-pristine-required-message="Please choose a password" data-pristine-pattern= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/" data-pristine-pattern-message="Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number" class="form-control" />
				<br />
				<label>Confirm Password</label><br />
				<input type="password" data-pristine-equals="#pwd" data-pristine-equals-message="Passwords don't match" class="form-control" />
			</div>
			<div class="form-group">
				<input type="submit" value="Submit" class="btn info rounded sepia-h"/>
			</div>
		</form>
   
</div></div>