<?php
	require_once('../../php/conexao.php');
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<table style="text-align: center;">
		<tr>
			<td class="name">
				Nome do Usuario
			</td>
			<td class="point">
				Pontos
			</td>
		</tr>
	</table>
<?php
	$sql_point="SELECT * FROM users ORDER BY pontos DESC";
	$dados_point=$PDO->prepare($sql_point);
	$dados_point->execute();
	$dados_point->setFetchMode(PDO::FETCH_ASSOC);
	while($exibir_point = $dados_point->fetch()){
?>
	<table>
	<tr>
		<td class="name"><?=$exibir_point['nome'];?></td>
		<td class="point"><?=$exibir_point['pontos'];?></td>
	</tr>
	</table>
<?php
	}
?>
<a href="../index.php" style="text-decoration: none; color:#FFF; margin: 50%;">Voltar</a>