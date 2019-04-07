<?php

include 'db.php';

$id_cliente = $_POST['ID_Cliente'];

$query = "DELETE FROM clientes WHERE ID_Cliente = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');