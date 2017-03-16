<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit Cliënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="last_name">Last Name:</label>
			<input type="text" id="last_name" name="last_name" value="<?=$client['last_name']?>">
		</div>
		<div>
			<label for="adress">Adress:</label>
			<textarea id="adress" name="adress"><?=$client['adress']?></textarea>
		</div>
		<div>
			<label for="street">Street:</label>
			<textarea id="street" name="street"><?=$client['street']?></textarea>
		</div>
		<div>
			<label for="zip">Zip:</label>
			<textarea id="zip" name="zip"><?=$client['zip']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>