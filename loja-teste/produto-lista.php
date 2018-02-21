<?php include("cabecalho.php")

include("conecta.php")

include("banco-produto.php");





$produtos = listaProdutos($conexao);
foreach ($produtos as $produto) {
	?>

	<tr>
	<td>$produto['nome']</td><td>$produto['preco']</td>

	</tr>
	<?php
}

?>

<?php include("rodape.php") ?>