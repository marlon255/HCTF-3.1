<?php
//VERIFICANDO SE FOI APERTADO O BOTAO DE LOGAR
if(isset($_POST['submitlog'])):
//INICIANDO A SESSÃO
session_start();
//BUSCA AS VARIAVEIS DIGITADAS
$login = $_POST['userlog'];
$senha = $_POST['passlog'];
//BUSCA A CONEXÃO COM O BANCO DE DADOS
include('conexao.php');
//CONSULTA NO BANCO DE DADOS PELO USUARIO E SENHA DIGITADOS
$sql = "SELECT * FROM users WHERE usuario = '".$login."' AND senha = '". $senha . "'";
//VERIFICA SE O USUARIO EXISTE E RETORNA A QUANTIDADE
$resultado = $PDO->prepare($sql);
$resultado->execute();
//RETORNA A QUANTIDADE DE CONTAS
$contaresultado = $resultado->rowCount();
//VERIFICA E PEGA O USUARIO E SENHA PARA USARMOS NA PROXIMA PAGINA E PULA A PAGINA PARA O LOCAL PRINCIPAL
if($contaresultado > 0):
	$_SESSION['login'] = $_POST['userlog'];
	$_SESSION['senha'] = $_POST['passlog'];
	header('location: ctf/index.php');
else:
	echo "<script>alert('Logion or Password Incorrect')</script>";
endif;

endif;
?>