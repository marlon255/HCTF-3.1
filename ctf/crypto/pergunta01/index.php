<html>
<head>
	<?php
		session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)):
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: ../index.php');
	endif;
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
	if(isset($_POST['submitcrypto1'])){
		$respostacrypto1 = $_POST['respostacrypto1'];
		$respostacrypto1db = $rows['resposta'];
		switch ($respostacrypto1) {
			case $respostacrypto1 === NULL:
				echo "<script>alert('Digite uma resposta.')</script>";
			break;
			case $respostacrypto1 === $respostacrypto1db:
			/* ADICIONANDO O PONTO DA QUESTAO AO USUARIO */
				$ponto_user = $usuario_exibir['pontos'];
				$pontocrypto1db = $rows['valor'];
				$ponto_new = $ponto_user+$pontocrypto1db;
				$sql_ponto = "UPDATE users SET pontos='".$ponto_new."' WHERE id_user = '".$usuario_exibir['id_user']."'";
				$result_ponto = $PDO->prepare($sql_ponto);
				$result_ponto->execute();
			/* ADICIONANDO A QUESTAO NA TABELA QUANDO TIVER CORRETO */
				$id_user = $usuario_exibir['id_user'];
				$id_pergunta = $rows['id'];
				$resposta = $_POST['respostacrypto1'];
				$sql_question = "INSERT INTO respostas (id_user, id_pergunta, respondeu) VALUES ('$id_user','$id_pergunta','$resposta')";
				$question = $PDO->prepare($sql_question);
				$question->execute();
				echo "<script>alert('Sua resposta está correta. Parabêns, vá para a próxima pergunta!')</script>";
				echo "<script>location.href='../../home.php'</script>";
				break;
			case $respostacrypto1 !== $respostacrypto1db:
				echo "<script>alert('Sua resposta não está correta, tente novamente!');</script>";
				break;
		}
	}
?>
<body>
	<div id="questionweb1">
		<form method="POST">
			<fieldset>
				<legend>PRIMEIRA PERGUNTA - CRYPTOGRAPHY</legend>
					<label><?=$rows['pergunta'];?></label>
					<div>
					<input id="respostacrypto1" name="respostacrypto1" class="text">
					<input type="submit" id="submitcrypto1" name="submitcrypto1" value="Responder" class="submit">
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