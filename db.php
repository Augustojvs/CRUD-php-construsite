<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$baseDeDados = "construsite";
$conexao = mysqli_connect($servidor, $usuario, $senha, $baseDeDados);

$query = "SELECT * FROM clientes";
$consulta_clientes = mysqli_query($conexao, $query);
$consulta_cliente_editar = mysqli_query($conexao, $query);
