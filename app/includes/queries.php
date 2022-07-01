<?php

$nameQuery = $conn->query("SELECT nombre1 FROM clientes WHERE idCliente = 1;");
$name = $nameQuery->fetch_array();

$lastNameQuery = $conn->query("SELECT apellido1 FROM clientes WHERE idCliente = 1;");
$lastName = $lastNameQuery->fetch_array();

// Query consultado cursos

$resultado = $conn->query("SELECT * FROM cursos;");