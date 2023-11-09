<?php

require "connDB.php";

$id = $_GET["id"];

$sql = "DELETE FROM clientes WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: ../index.php");
