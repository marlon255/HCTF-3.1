<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/estilo.css">
</head>
<?php
	require_once('../../../php/conexao.php');
	require_once('php/select.php');
?>
<body>
	<div id="questionweb1">
		<form>
			<fieldset>
				<legend>SEGUNDA PERGUNTA - CUSTOM</legend>
					<label><?=$rows['pergunta'];?></label>
					<input id="respostaweb1" name="respostaweb1" class="text">
					<input type="submit" id="submitweb1" name="submitweb1" value="Responder" class="submit">
			</fieldset>
		</form>
	</div>
</body>
</html>