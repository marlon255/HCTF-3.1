<?php
	$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB3'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	header("Content-Type: text/html; charset=ISO-8859-1");
	
?>