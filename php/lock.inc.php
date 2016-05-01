<?php 
checapagina( basename(__FILE__) ); // Chama a função mas não requere a página, pois você já está nela

Function checapagina($pagina_original){
	$pagina_erro='erro.php'; // Nome da página para onde será direcionada a página que for bloqueiada
	$redirecionar=$pagina_erro.'?p='.$pagina_original; // Redireciona e manda uma variável 'p' com o nome da página que estava sendo acessada
	$pagina_browser=end(explode("/", $_SERVER['SCRIPT_NAME'])); // Captura a página que está sendo acessada no browser
		if($pagina_original==$pagina_browser){
			exit(header("Location: $redirecionar")); // Para a execução e redireciona
		}
}
?>