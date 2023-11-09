<?php
require "actions/getByID.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <a href="index.php">Voltar</a>
    <hr>
    <form action="./actions/update.php?id=<?= $id ?>" method="POST" class="col-4">

        <label class="form-label" for="nome">Nome</label>
        <input class="form-control mb-2" type="text" name="nome" id="nome" required value="<?= $row['nome'] ?>">

        <label class="form-label" for="sobrenome">Sobrenome</label>
        <input class="form-control mb-2" type="text" name="sobrenome" id="sobrenome" required value="<?= $row['sobrenome'] ?>">

        <label class="form-label" for="email">Email</label>
        <input class="form-control mb-2" type="email" name="email" id="email" required value="<?= $row['email'] ?>">

        <label class="form-label" for="telefone">Telefone</label>
        <input class="form-control mb-4" type="tel" name="telefone" id="telefone" required value="<?= $row['telefone'] ?>">

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
</body>

</html>