<h1>Exclusão de clientes</h1>
<br><br>
<?php if(isset($_GET['id'])){ 
	while($linha = mysqli_fetch_array($consulta_clientes)){
		if($linha['ID_Cliente'] == $_GET['id']){ ?>
		<form method="post" action="processa_exclusao_cliente.php" id="formExclusao">
			<h4>Confirmar Exclusão do Usuário?</h4>
			<br><br>
			<p><b>ID:</b> <?php echo $linha['ID_Cliente'] ?> <b>Nome:</b> <?php echo $linha['Nome_Cliente'] ?></p>
			<input class="form-control" type="hidden" name="ID_Cliente" value="<?php echo $linha['ID_Cliente'] ?>">
			<br><br>
			<input class="btn btn-danger my-2 my-sm-0" type="submit" value="Deletar"> <a href="?pagina=home" class="btn btn-warning my-2 my-sm-0">Cancelar</a>
		</form>
		<?php }
	}
} ?>