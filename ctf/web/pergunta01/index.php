<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">
</head>
<?php
	require_once('../../../php/conexao.php');
	require_once('php/select.php');
	$resposta_sql = "SELECT * FROM respostas WHERE id_user = '49' && respondeu = '".$rows['resposta']."'";
	$respostadb = $PDO->prepare($resposta_sql);
	$respostadb->execute();
	$respondeudb = $respostadb->rowCount();

/* VERIFICANDO SE JA FOI RESPONDIDA */
switch ($respondeudb) {
	case $respondeudb === "0":
	/* CASO JA TENHA SIDO RESPONDIDA, VERIFICA SE APERTOU O BOTAO DE RESPONDER */
	if(isset($_POST['submitweb1'])){
		$respostaweb1 = $_POST['respostaweb1'];
		$respostaweb1db = $rows['resposta'];
		switch ($respostaweb1) {
			case $respostaweb1 === $respostaweb1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = '395';
				$pontoweb1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontoweb1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '49'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = "49";
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostaweb1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostaweb1 !== $respostaweb1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
?>
<body>
	<div id="questionweb1">
		<form method="POST">
			<fieldset>
				<legend>PRIMEIRA PERGUNTA - WEB</legend>
					<label><?=$rows['pergunta'];?></label>
					<input id="respostaweb1" name="respostaweb1" class="text">
					<input type="submit" id="submitweb1" name="submitweb1" value="Responder" class="submit">
			</fieldset>
		</form>
	</div>
</body>
<?php
		break;
		case $respondeudb = "1":
		echo "<script>alert('Você ja respondeu está pergunta!')</script>";
		echo "<script>location.href='../../home.php'</script>";
		break;
}
?>
</html>