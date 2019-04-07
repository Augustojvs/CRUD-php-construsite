<!DOCTYPE html>
<html>
	<head>
		<title>CRUD Cronstrusite</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	<header>
		<div class="container">
			<a href="?pagina=home"><img src="img/logo.png" title="Home" alt="logo" class="img-logo"></a>
			<div id="menu">
				<a href="?pagina=home">Inicio</a>
				<?php if(isset($_SESSION['login'])){ ?>
					<a href="?pagina=cadastrar">Cadastrar</a>
					<a href="?pagina=pesquisar">Pesquisar</a>
					<a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">
		