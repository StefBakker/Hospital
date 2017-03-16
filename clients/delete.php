<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
<div class="header">
	<h1>Delete Cliënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<span><?=$client['name']?></span>
		</div>
		<div>
			<label for="last_name">Last Name:</label>
			<span><?=$client['last_name']?></span>
		</div>
		<div>
			<label for="adress">Adress:</label>
			<span><?=$client['adress']?></span>
		</div>
		<div>
			<label for="street">Street:</label>
			<span><?=$client['street']?></span>
		</div>
		<div>
			<label for="zip">Zip:</label>
			<span><?=$client['zip']?></span>
		</div>
		<div>
			<label for="patient">Patient:</label>
			<span><?=$client['patient']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>
</div>