<html>
<head>
<title>HCTF 3.1</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<?php
	require_once('php/login.php');
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
				<legend>Login</legend>
				<input type="text" name="userlog" id="userlog" placeholder="Login" class="text" >
				<input type="password" name="passlog" id="passlog" placeholder="Password" class="text" >
				<!-- BOTAO PARA LOGAR -->
				<input type="submit" name="submitlog" id="submitlog" value="Login" class="submit" >
			</fieldset>
		</form>
	</div>
	<div id="cadastro" onClick="location.href='php/cadastro.php';">Register</div>
</body>
</html>