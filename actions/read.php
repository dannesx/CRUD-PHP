<?php

require "connDB.php";

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
$rows = $result->fetchAll(PDO::FETCH_ASSOC);