<?php
	require_once "index.logic.php";
	include "../common/header.php";
	include "showpetname.php";
?>
<div class="header">
<p class="options"><a href="create.php">Create</a></p>
	<h1>Cliënts</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Last Name</th>
				<th>Adress</th>
				<th>Street</th>
				<th>Zip</th>
				<th>Patiënt</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $client):
?>
			<tr>
				<td><?=$client['name']?></td>
				<td><?=$client['last_name']?></td>
				<td><?=$client['adress']?></td>
				<td><?=$client['street']?></td>
				<td><?=$client['zip']?></td>
				<td><?=$client['patient']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>
</div>