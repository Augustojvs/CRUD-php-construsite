<?php

include 'db.php';

$nome_cliente = $_POST['Nome_Cliente'];
$email_cliente = $_POST['Email_Cliente'];
$telefone_cliente = $_POST['Telefone_Cliente'];
$senha_cliente = $_POST['Senha_Cliente'];
$data_nasc_cliente = $_POST['Data_Nasc_Cliente'];

$query = "INSERT INTO clientes(Nome_Cliente, Email_Cliente, Telefone_Cliente, Senha_Cliente, Data_Nasc_Cliente)
			VALUES('$nome_cliente', '$email_cliente', '$telefone_cliente', '$senha_cliente', '$data_nasc_cliente')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');