<?php 

# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página

if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cadastrar': include 'views/cadastrar.php'; break;
	case 'pesquisar': include 'views/pesquisar.php'; break;
	case 'editar': include 'views/editar.php'; break;
	case 'excluir': include 'views/excluir.php'; break;
	case 'busca': include 'views/resultado_busca.php'; break;
	default: include'views/home.php';
}


# Rodapé
include 'footer.php';








