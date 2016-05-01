<?php
	require_once('conexao.php');
	if(isset($_POST['submitcad'])){
			$nome = $_POST['nomecad'];
			$email = $_POST['emailcad'];
			$user = $_POST['usercad'];
			$password = $_POST['passcad'];
			$againpassword = $_POST['pass2cad'];
		// Verificando se as SENHAS são iguais
		if($password !== $againpassword){
			echo "<script>alert('Senhas não são iguais!')</script>";
		// Verifica se há algum campo limpo
		}elseif(empty($nome) || empty($email) || empty($user) || empty($password) || empty($againpassword)){
			echo "<script>alert('Ops, faltou digitar um campo!')</script>";
		}else{
			$sql = "INSERT INTO users (`nome`, `email`, `usuario`, `senha`, `pontos`) VALUES (:nome, :email, :user, :password, :ponto)";
			$cadastro = $PDO->prepare($sql);
			$cadastro->bindValue(":nome", $nome);
			$cadastro->bindValue(":email", $email);
			$cadastro->bindValue(":user", $user);
			$cadastro->bindValue(":password", $password);
			$cadastro->bindValue(":ponto", "0");
		// Verifica se já há o usuario
			$validar = $PDO->prepare("SELECT * FROM users WHERE usuario = ?");
			$validar->execute(array($user));
			header('location: ../index.php');
		if($validar->rowCount() == 0):
		// Executa o cadastro	
			$cadastro->execute();
		else:
			echo "<script>alert('Ops, este usuario não está disponivel.')</script>";
		endif;
		}
	}

?>