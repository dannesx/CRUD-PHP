<?php

require "connDB.php";

$id = $_GET['id'];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$sql = "UPDATE clientes SET nome = :nome, sobrenome = :sobrenome, email = :email, telefone = :telefone WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":telefone", $telefone);

$stmt->execute();

header("Location: ../index.php");
