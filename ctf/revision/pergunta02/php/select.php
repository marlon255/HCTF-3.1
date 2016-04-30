<?php
	$sql = "SELECT * FROM perguntas WHERE modulo = 'REV2'";
	$result = $PDO->prepare( $sql );
	$result->execute();
	$rows = $result->fetch(PDO::FETCH_ASSOC);
	
?>