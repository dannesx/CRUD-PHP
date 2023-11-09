<?php

require "connDB.php";
$id = $_GET["id"];

$sql = "SELECT * FROM clientes WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$result = $stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);