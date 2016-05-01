<html>
<head>
	<?php
		session_start();
		$logado = $_SESSION['login']
	?>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">
</head>
<?php
	require_once('../../../php/conexao.php');
	require_once('../../../php/usuario.php');
	require_once('php/select.php');
	header('Content-Type: text/html; charset=utf-8');
	$resposta_sql = "SELECT * FROM respostas WHERE id_user = '".$usuario_exibir['id_user']."' && respondeu = '".$rows['resposta']."'";
	$respostadb = $PDO->prepare($resposta_sql);
	$respostadb->execute();
	$respondeudb = $respostadb->rowCount();

/* VERIFICANDO SE JA FOI RESPONDIDA */
switch ($respondeudb) {
	case $respondeudb === "0":
	/* CASO JA TENHA SIDO RESPONDIDA, VERIFICA SE APERTOU O BOTAO DE RESPONDER */
	if(isset($_POST['submitrevision1'])){
		$respostarevision1 = $_POST['respostarevision1'];
		$respostarevision1db = $rows['resposta'];
		switch ($respostarevision1) {
			case $respostarevision1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostarevision1 === $respostarevision1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontorevision1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontorevision1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostarevision1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostarevision1 !== $respostarevision1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
?>
<body>
	<div id="questionweb1">
		<form method="POST">
			<fieldset>
				<legend>PRIMEIRA PERGUNTA - REVISION</legend>
				<div>
					<label><?=$rows['pergunta'];?></label>
					<input id="respostarevision1" name="respostarevision1" class="text">
					<input type="submit" id="submitrevision1" name="submitrevision1" value="Responder" class="submit">
				</div>
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