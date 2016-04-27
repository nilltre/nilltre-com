<form action="/contact" method="POST">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" />
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" />
	</div>
	<div class="form-group">
		<label for="subject">Ämne</label>
		<input type="text" name="subject" id="subject" />
	</div>
	<!-- <div class="form-group text-right">
		<label for="office">Avdelning</label>
		<select name="office" id="office" class="btn">
			<option value="s">Syd</option>
			<option value="v">Väst</option>
			<option value="o">Öst</option>
		</select>
	</div> -->
	<div class="form-group">
		<label for="message">Meddelande</label>
		<textarea name="message" id="message"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Skicka Meddelande">			
		<input type="reset" class="btn btn-warning" value="Återställ Formulär">
	</div>
</form>