<?php

require "connDB.php";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$sql = "INSERT INTO clientes(nome,sobrenome,email,telefone) VALUES (:nome, :sobrenome, :email, :telefone)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":telefone", $telefone);

$stmt->execute();

header("Location: ../index.php");