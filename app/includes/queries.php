<?php

$nameQuery = $conn->query("SELECT nombre1 FROM clientes WHERE idCliente = 1;");
$name = $nameQuery->fetch_array();

$lastNameQuery = $conn->query("SELECT apellido1 FROM clientes WHERE idCliente = 1;");
$lastName = $lastNameQuery->fetch_array();

// query consultado cursos

$resultadoCursos = $conn->query("SELECT * FROM cursos;");

// query consultado clientes

$resultadoClientes = $conn->query("SELECT idCliente, nombre1, mail, celular FROM clientes;");

// query consultado compras

$resultadoCompras = $conn->query("SELECT compras.idCompra,clientes.nombre1,clientes.apellido1,cursos.descripcionDelCurso FROM compras JOIN clientes on compras.idCliente = clientes.idCliente JOIN cursos on compras.idCurso = cursos.idCurso;");