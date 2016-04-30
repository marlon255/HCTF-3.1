<html>
<head>
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

</script>
</head>
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
				<h2>Usuário:</h2>
				<h2>Pontos:</h2>
			</div>
			<div id="picture">
			</div>
			<div id="exit">
				<h2>Alterar Imagem</h2>
				<h2>Sair</h2>
			</div>
		</div>
	</div>
	<div id="body">
		<div id="lateral">
			<div id="web">
				<h2>WEB</h2>
			</div>
				<div id="opcion_web">
					<a href="web/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="web/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="web/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="revision">
				<h2>REVISION</h2>
			</div>
				<div id="opcion_revision">
					<a href="revision/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="revision/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="revision/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="cryptography">
				<h2>CRYPTO</h2>
			</div>
				<div id="opcion_cryptography">
					<a href="crypto/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="crypto/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="crypto/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="custom">
				<h2>CUSTOM</h2>
			</div>
				<div id="opcion_custom">
					<a href="custom/pergunta01/index.php" target="iframe"><div>1</div></a>
					<a href="custom/pergunta02/index.php" target="iframe"><div>2</div></a>
					<a href="custom/pergunta03/index.php" target="iframe"><div>3</div></a>
				</div>
		</div>
		<iframe name="iframe" id="iframe" src="home.php">
		</div>
	</div>
</body>