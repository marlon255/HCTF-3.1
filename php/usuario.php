<?php
	$sql_user_session = "SELECT * FROM users WHERE usuario = '". $logado ."'";
	$usuario_dados = $PDO->prepare($sql_user_session);
	$usuario_dados->execute();
	$usuario_exibir = $usuario_dados->fetch(PDO::FETCH_ASSOC);
?>