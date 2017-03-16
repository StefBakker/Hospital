<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$last_name = $db->escape_string($_POST["last_name"]);
		$adress = $db->escape_string($_POST["adress"]);
		$street = $db->escape_string($_POST["street"]);
		$zip = $db->escape_string($_POST["zip"]);

		// Prepare query and execute
		$query = "insert into client (name, last_name, adress, street, zip) values ('$name', '$last_name', '$adress', '$street', '$zip')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>