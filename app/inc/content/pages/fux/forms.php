<h3 class="fluid-text monolisk" id="basic">Basic Forms</h3>
<div class="flex">
	<div class="padded bitstream half">
		<p>Basic forms are supported. It is possible to apply classes from other components, such as Flavors and BUTCH classes.<br /><br /></p>
		<p class="info padded"><span class="heavy">Layouts</span><br />You could use <a href="https://www.blueprintgrid.com" target="_blank" class="yellow invert-h">Blueprint Grid</a> to create a custom layout for your form. This can be done within the <em>form</em> tag, and it is possible to nest layouts.<br /><br />
		<span class="heavy">.form-group</span><br />Use this class to add vertical spacing above and below a group of form elements.</p>
		<p class="padded warning"><span class="heavy">.highlight</span><br />An input or entire form can be "highlighted" when the user focuses on (interacts with) an input. Simply apply the <em><b>.highlight</b></em> class to the area that is to be highlighted.</p>
	</div>
	<div class="padded half">
	
		<form class="white grey-t brutal-border-dark box-s-k padded" name="demoform" action="" method="post">
			<div class="form-group">
				<label class="heavy">Text Label</label><br />
				<input type="text" name="name" placeholder="Text Input" />
			</div>
			<div class="form-group">
				<label class="heavy">Email Input</label><br />
				<input type="email" name="name" placeholder="email@address.net" />
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
				<label class="heavy">Select Dropdown</label><br />
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
				<label class="heavy">Text Area</label><br />
				<textarea name="comments" placeholder="Text area comments"></textarea>
			</div>
			<div class="form-group highlight">
				<label class="heavy">HIGHLIGHTED Text Area</label><br />
				<textarea name="highlighted" placeholder="I am a highlighted message."></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit" class="squared full-btn">
			</div>
		</form>
	</div>
</div>