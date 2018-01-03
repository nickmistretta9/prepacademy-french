<form action="">
	<div class="group">
		<input type="text" class="form-control" placeholder="Nom">
		<span></span>
	</div>
	<div class="group">
		<input type="email" class="form-control" placeholder="Email">
		<span></span>
	</div>
	<div class="group">
		<input type="text" class="form-control" placeholder="Téléphone">
		<span></span>
	</div>
	<?php if(!is_page(20)) { ?> 
	<div class="group">
		<input type="text" class="form-control" placeholder="Code Postal">
		<span></span>
	</div>
	<? } ?>
	<div class="group">
		<select name="" id="" class="form-control">
			<option selected disabled>Je suis un:</option>
			<option value="">Nouveau Client</option>
			<option value="">Client Existant</option>
		</select>
		<span></span>
	</div>
	<div class="group">
		<textarea name="" rows="2" class="form-control" placeholder="Commentaires"></textarea>
		<span></span>
	</div>
	<button class="btn-info">Contactez Les Tuteurs de Prep Academy</button>
</form>