<html>
<head>
<?php
	session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)):
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: ../index.php');
	endif;
	$logado = $_SESSION['login'];
	if(isset($_POST['exitsession'])):
		session_destroy();
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location: index.php');
	endif;
?>
<title>HCTF 3.1</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="../js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $("#web").click(function(){
        $("#opcion_web").toggle(500);
    });
    });
    $(document).ready(function(){
    $("#revision").click(function(){
        $("#opcion_revision").toggle(500);
    });
    });
    $(document).ready(function(){
    $("#cryptography").click(function(){
        $("#opcion_cryptography").toggle(500);
    });
    });
    $(document).ready(function(){
    $("#custom").click(function(){
        $("#opcion_custom").toggle(500);
    });
    });
	$(document).ready(function(){
    $("#picture").click(function(){
        $("#exit").toggle(200);
    });
    });
</script>
<script type="text/javascript">

</script>
</head>
<?php
	require_once('../../php/conexao.php');
	require_once('../../php/usuario.php');
?>
<body>
	<div id="opcoes">
		<div id="logo">
		</div>
		<div id="nome">
			<h2>Heaven Capture The Flag</h2>
			<h2>HCTF</h2>
		</div>
		<div id="infor_user">
			<div id="user_dados">
				<h2>Usuário: <?php echo $usuario_exibir['nome']; ?></h2>
				<h2>Pontos: <?php echo $usuario_exibir['pontos']; ?></h2>
			</div>
			<div id="picture">
			</div>
			<div id="exit">
				<form method="post">
					<input type="submit" name="altimg" value="Alterar Imagem" >
					<input type="submit" name="ranking" value="Ranking">
					<input type="submit" name="exitsession" value="Sair" >
				</form>
			</div>
		</div>
	</div>
	<div id="body">
		<div id="lateral">
			<div id="web">
				<h2>WEB</h2>
			</div>
				<div id="opcion_web">
					<a href="../web/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="../web/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="../web/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="revision">
				<h2>REVISION</h2>
			</div>
				<div id="opcion_revision">
					<a href="../revision/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="../revision/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="../revision/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="cryptography">
				<h2>CRYPTO</h2>
			</div>
				<div id="opcion_cryptography">
					<a href="../crypto/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="../crypto/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="../crypto/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="custom">
				<h2>CUSTOM</h2>
			</div>
				<div id="opcion_custom">
					<a href="../custom/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="../custom/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="../custom/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
		</div>
		<div name="iframe" id="iframe">
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
		</div>
	</div>
</body>