<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Cliënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="last_name">Last Name:</label>
			<input type="text" id="last_name" name="last_name">
		</div>
		<div>
			<label for="adress">Adress:</label>
			<textarea id="adress" name="adress"></textarea>
		</div>
		<div>
			<label for="street">Street:</label>
			<textarea id="street" name="street"></textarea>
		</div>
		<div>
			<label for="zip">Zip:</label>
			<textarea id="zip" name="zip"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>