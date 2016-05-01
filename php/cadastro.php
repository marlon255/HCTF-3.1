<html>
<head>
<title>HCTF 3.1</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<?php
	require_once('cadastrando.php');
?>
<body>
	<div id="topo">
		<div id="logo">
		</div>
		<h2>Heaven Capture The Flag</h2>
	</div>
	<div id="login">
		<form method="post">
			<fieldset>
				<legend>Cadastrar</legend>
				<input type="text" name="nomecad" id="nomecad" placeholder="Nome Completo" class="text" required >
				<input type="email" name="emailcad" id="emailcad" placeholder="E-mail" class="text" required >
				<input type="text" name="usercad" id="usercad" placeholder="Login" class="text" required >
				<input type="password" name="passcad" id="passcad" placeholder="Password" class="text" required >
				<input type="password" name="pass2cad" id="pass2cad" placeholder="Password Again" class="text" required >
				<!-- BOTAO -->
				<input type="submit" name="submitcad" id="submitcad" value="Register" class="submit" >
			</fieldset>
		</form>
	</div>
	<div id="cadastro" onClick="location.href='../index.php';">Back</div>
</body>
</html>