<html>
<head>
<title>HCTF 3.1</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $("#web").click(function(){
        $("#opcion_web").toggle();
    });
    });
    $(document).ready(function(){
    $("#revision").click(function(){
        $("#opcion_revision").toggle();
    });
    });
    $(document).ready(function(){
    $("#cryptography").click(function(){
        $("#opcion_cryptography").toggle();
    });
    });
    $(document).ready(function(){
    $("#custom").click(function(){
        $("#opcion_custom").toggle();
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
		</div>
	</div>
	<div id="body">
		<div id="lateral">
			<div id="web">
				<h2>WEB</h2>
			</div>
				<div id="opcion_web">
					<a href="index.php" target="iframe"><div>1</div></a>
					<a href="index.php" target="iframe"><div>2</div></a>
					<a href="index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="revision">
				<h2>REVISION</h2>
			</div>
				<div id="opcion_revision">
					<a href="index.php" target="iframe"><div>1</div></a>
					<a href="index.php" target="iframe"><div>2</div></a>
					<a href="index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="cryptography">
				<h2>CRYPTO</h2>
			</div>
				<div id="opcion_cryptography">
					<a href="index.php" target="iframe"><div>1</div></a>
					<a href="index.php" target="iframe"><div>2</div></a>
					<a href="index.php" target="iframe"><div>3</div></a>
				</div>
			<div id="custom">
				<h2>CUSTOM</h2>
			</div>
				<div id="opcion_custom">
					<a href="index.php" target="iframe"><div>1</div></a>
					<a href="index.php" target="iframe"><div>2</div></a>
					<a href="index.php" target="iframe"><div>3</div></a>
				</div>
		</div>
		<iframe name="iframe" id="iframe">
		</div>
	</div>
</body>
</html>