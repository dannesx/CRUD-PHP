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
    <form action="./actions/create.php" method="POST" class="col-4">
        <label class="form-label" for="nome">Nome</label>
        <input class="form-control mb-2" type="text" name="nome" id="nome" required>

        <label class="form-label" for="sobrenome">Sobrenome</label>
        <input class="form-control mb-2" type="text" name="sobrenome" id="sobrenome" required>

        <label class="form-label" for="email">Email</label>
        <input class="form-control mb-2" type="email" name="email" id="email" required>

        <label class="form-label" for="telefone">Telefone</label>
        <input class="form-control mb-4" type="tel" name="telefone" id="telefone" required>

        <button type="reset" class="btn btn-outline-primary">Limpar campos</button>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</body>

</html>