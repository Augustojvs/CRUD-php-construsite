<?php if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert">
		Usuário ou senha invalidos.
	</div>
<?php } ?>

<h1 style="text-align: center">Bem-vindos ao meu CRUD</h1>
<br><br>

<?php if(isset($_SESSION['login'])){ ?>
	<table class="table table-hover table-striped" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Data de nascimento</th>
			<th>Opções</th>
		</tr>
	</thead>

		<tbody>
			<?php
				while($linha = mysqli_fetch_array($consulta_cliente_editar)){
					echo '<tr><td>'.$linha['ID_Cliente'].'</td>';
					echo '<td>'.$linha['Nome_Cliente'].'</td>';
					echo '<td>'.$linha['Email_Cliente'].'</td>';
					echo '<td>'.$linha['Telefone_Cliente'].'</td>';
					echo '<td>'.$linha['Data_Nasc_Cliente'].'</td>';
			?>
					<td><a class="btn btn-warning" href="?pagina=editar&editar=<?php echo $linha['ID_Cliente']; ?>">Editar</a> <a class="btn btn-danger" href="?pagina=excluir&id=<?php echo $linha['ID_Cliente']; ?>">Excluir</a></td>
			<?php
				}
			?>
		</tbody>

	</table>
	<?php } else {
	 ?>
		<form method="post" action="login.php" id="formLogin">
			<label class="badge badge-secondary">Usuário</label>
			<input type="email" name="usuario" placeholder="Email do usuário" class="form-control">
			<br>
			<label class="badge badge-secondary">Senha</label>
			<input type=password name="senha" placeholder="Digite a senha" class="form-control">
			<br>
			<input type="submit" value="Entrar" class="btn btn-outline-success my-2 my-sm-0">
		</form>
<?php } ?>
