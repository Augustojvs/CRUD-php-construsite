<h1>Edição de clientes</h1>
<br><br>
<?php if(isset($_GET['editar'])){ 
	while($linha = mysqli_fetch_array($consulta_clientes)){
		if($linha['ID_Cliente'] == $_GET['editar']){ ?>
			<form method="post" action="processa_edicao_cliente.php">
				<input class="form-control" type="hidden" name="ID_Cliente" value="<?php echo $linha['ID_Cliente']; ?>">
				<label class="badge badge-secondary">Nome:</label><br>
				<input class="form-control" type="text" name="Nome_Cliente" placeholder="Insira o seu nome" value="<?php echo $linha['Nome_Cliente']; ?>">
				<br><br>
				<label class="badge badge-secondary">Email:</label><br>
				<input class="form-control" type="email" name="Email_Cliente" placeholder="Insira o seu email" value="<?php echo $linha['Email_Cliente']; ?>">
				<br><br>
				<label class="badge badge-secondary">Telefone:</label><br>
				<input class="form-control" type="tel" name="Telefone_Cliente" placeholder="Insira o seu telefone" value="<?php echo $linha['Telefone_Cliente']; ?>">
				<br><br>
				<label class="badge badge-secondary">Senha:</label><br>
				<input class="form-control" type="password" name="Senha_Cliente" placeholder="Insira o sua senha" value="<?php echo $linha['Senha_Cliente']; ?>">
				<br><br>
				<label class="badge badge-secondary">Data de nascimento:</label><br>
				<input class="form-control" type="date" name="Data_Nasc_Cliente" placeholder="Insira o sua data de nascimento" value="<?php echo $linha['Data_Nasc_Cliente']; ?>">
				<br><br>
				<input class="btn btn-success my-2 my-sm-0" type="submit" value="Salvar"> <a href="?pagina=home" class="btn btn-warning my-2 my-sm-0">Cancelar</a>
				<br><br>
			</form>
			
		<?php }
	} 
} ?>
