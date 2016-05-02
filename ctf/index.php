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
<script src="js/jquery.min.js"></script>
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
function carregar(pagina){
        $("#iframe").load(pagina);
    }
</script>
</head>
<?php
	require_once('../php/conexao.php');
	require_once('../php/usuario.php');
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
					<input type="button" name="ranking" onclick="carregar('ranking/index.php')" value="Ranking">
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
					<a onclick="carregar('web/pergunta01/index.php')" ><div>1</div></a>
					<a onclick="carregar('web/pergunta02/index.php')" ><div>2</div></a>
					<a onclick="carregar('web/pergunta03/index.php')" ><div>3</div></a>
				</div>
			<div id="revision">
				<h2>REVISION</h2>
			</div>
				<div id="opcion_revision">
					<a onclick="carregar('revision/pergunta01/index.php')" ><div>1</div></a>
					<a onclick="carregar('revision/pergunta02/index.php')" ><div>2</div></a>
					<a onclick="carregar('revision/pergunta03/index.php')" ><div>3</div></a>
				</div>
			<div id="cryptography">
				<h2>CRYPTO</h2>
			</div>
				<div id="opcion_cryptography">
					<a onclick="carregar('crypto/pergunta01/index.php')" ><div>1</div></a>
					<a onclick="carregar('crypto/pergunta02/index.php')" ><div>2</div></a>
					<a onclick="carregar('crypto/pergunta03/index.php')" ><div>3</div></a>
				</div>
			<div id="custom">
				<h2>CUSTOM</h2>
			</div>
				<div id="opcion_custom">
					<a onclick="carregar('custom/pergunta01/index.php')" ><div>1</div></a>
					<a onclick="carregar('custom/pergunta02/index.php')" ><div>2</div></a>
					<a onclick="carregar('custom/pergunta03/index.php')" ><div>3</div></a>
				</div>
		</div>
		<div name="iframe" id="iframe">
		<?php include_once('home.php'); ?>
		</div>
	</div>
</body>