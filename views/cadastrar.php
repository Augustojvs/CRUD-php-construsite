<h1>Cadastro de clientes</h1>
<script>
	$("#valida").validate({
	    rules: {
	        Email_Cliente: {
	            required: true
	        },
	        Senha_Cliente: {
	            required: true
	        }
	    }
	});
</script>
<br><br>
<form method="post" action="processa_cadastro_cliente.php" id="valida">
	<label class="badge badge-secondary">Nome:</label><br>
	<input class="form-control" type="text" name="Nome_Cliente" placeholder="Insira o seu nome" required >
	<br><br>
	<label class="badge badge-secondary">Email:</label><br>
	<input class="form-control" type="email" name="Email_Cliente" placeholder="Insira o seu email" required >
	<br><br>
	<label class="badge badge-secondary">Telefone:</label><br>
	<input class="form-control" type="tel" name="Telefone_Cliente" placeholder="Insira o seu telefone" required >
	<br><br>
	<label class="badge badge-secondary">Senha:</label><br>
	<input class="form-control" type="password" name="Senha_Cliente" placeholder="Insira o sua senha" required >
	<br><br>
	<label class="badge badge-secondary">Data de nascimento:</label><br>
	<input class="form-control" type="date" name="Data_Nasc_Cliente" placeholder="Insira o sua data de nascimento" required >
	<br><br>
	<input class="btn btn-success my-2 my-sm-0" type="submit" value="Cadastrar">
</form>

