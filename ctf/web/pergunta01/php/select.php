<?php
	$sql = "SELECT * FROM perguntas WHERE modulo = 'WEB1'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	
?>