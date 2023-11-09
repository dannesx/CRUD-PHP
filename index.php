<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
	<h1>Clientes</h1>
	<table class="table table-hover">
		<tr class="table-primary sticky-top">
			<th>ID</th>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th colspan="2">Ação</th>
		</tr>

		<?php
		require "actions/read.php";

		foreach ($rows as $row) {
			$id = $row['id'];

			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['nome'] . "</td>";
			echo "<td>" . $row['sobrenome'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['telefone'] . "</td>";
			echo "<td> <a href='update.php?id=$id'>Update</a> </td>";
			echo "<td> <a href='actions/delete.php?id=$id'>Delete</a> </td>";
			echo "</tr>";
		}

		?>
	</table>

	<a href="add.php" class="btn btn-primary">Adicionar</a>
</body>

</html>