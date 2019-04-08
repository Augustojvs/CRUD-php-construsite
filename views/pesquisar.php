<h1>Pesquisar clientes</h1>
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
<form method="post" action="?pagina=busca" id="valida">
    <label class="badge badge-secondary">Insira o nome do cliente:</label>
    <br><br>
    <input class="form-control" type="text" name="Nome_Cliente" placeholder="Insira o nome do cliente" required>
    <br><br>
    <input class="btn btn-success my-2 my-sm-0" type="submit" value="Procurar">
    <br><br>
</form>


