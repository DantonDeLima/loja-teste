<?php include("cabecalho.php") ?>
	<form action="adiciona-produto.php">
		<h1>Formulário de produto</h1>
		<table class="table">
			<tr>
				<td>Nome:<br></td>
				<td><input class="form-control" type="text" name="nome"></td>				
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco"><br></td> 
			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			</tr>
				
		</table>
	</form>
<?php include("rodape.php") ?>