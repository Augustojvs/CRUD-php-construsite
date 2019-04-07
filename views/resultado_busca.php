<?php
include 'db.php';

$nome_cliente = $_POST['Nome_Cliente'];

$query = "SELECT * FROM clientes WHERE Nome_Cliente LIKE '%" . $nome_cliente . "%'";

if (isset($_POST['Nome_Cliente'])) {
    $consulta_clientes = mysqli_query($conexao, $query);
} 
?>

<h1>Resultado da Busca: Você buscou por: <b><?php echo $nome_cliente ;?></b></h1>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Data de nascimento</th>
        <th>Opções</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($consulta_clientes)) {
        echo '<tr><td>' . $linha['ID_Cliente'] . '</td>';
        echo '<td>' . $linha['Nome_Cliente'] . '</td>';
        echo '<td>' . $linha['Email_Cliente'] . '</td>';
        echo '<td>' . $linha['Telefone_Cliente'] . '</td>';
        echo '<td>' . $linha['Data_Nasc_Cliente'] . '</td>';
        echo '<td><a class="btn btn-warning" href="?pagina=editar&editar=' . $linha['ID_Cliente'] . '">Editar</a> <a class="btn btn-danger" href="?pagina=excluir&id=' . $linha['ID_Cliente'] .'">Excluir</a></td></tr>';
    }
    ?>

</table>


