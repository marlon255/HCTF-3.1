<?php
	$sql = "SELECT * FROM perguntas WHERE modulo = 'CUSTOM2'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	header("Content-Type: text/html; charset=utf-8");	
?>