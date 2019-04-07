<?php

include 'db.php';

$id_cliente = $_POST['ID_Cliente'];
$nome_cliente = $_POST['Nome_Cliente'];
$email_cliente = $_POST['Email_Cliente'];
$telefone_cliente = $_POST['Telefone_Cliente'];
$senha_cliente = $_POST['Senha_Cliente'];
$data_nasc_cliente = $_POST['Data_Nasc_Cliente'];

$query = "UPDATE clientes SET Nome_Cliente = '$nome_cliente', Email_Cliente = '$email_cliente', Telefone_Cliente = '$telefone_cliente', Senha_Cliente = '$senha_cliente', Data_Nasc_Cliente = '$data_nasc_cliente' WHERE ID_Cliente = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=home');