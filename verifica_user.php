<?php
	session_start();

	include "config.php";

	$user_login = trim($_POST['user_login']);
	$user_senha = trim($_POST['user_senha']);

	if((!$user_login) || (!$user_senha)){
		echo "Todos os campos devem serem preenchidos! <br/><br/>";

		include "login.html";
	} else {

		#sql = mysqli_query($conectar, "SELECT * FROM cadastro WHERE cadastro_user='{$cadastro_user}' AND cadastro_senha='{$cadastro_senha}' AND ativado='1'");

		#$login_check = mysqli_fetch_array($sql, MYSQLI_NUM);
		#$login_check = mysqli_num_rows($sql);

		$sql = mysqli_query($conectar, "SELECT * FROM cadastro WHERE user_login='{$user_login}' AND user_senha='{$user_senha}' AND user_ativo='1'");

		$login_check = mysqli_num_rows($sql);

		if($login_check > 0){


			$dado = mysqli_fetch_array($sql, MYSQLI_ASSOC);

			$_SESSION['user_login'] = $user_login;
			$_SESSION['user_senha'] = $user_senha;
			$_SESSION['user_nome'] = $dado['user_nome'];
			$_SESSION['user_sob'] = $dado['user_sob'];
			$_SESSION['user_nivel'] = $dado['user_nivel'];
			$_SESSION['ativa'] = TRUE;

			header("Location: area_restrita.php");
		
		} else {
			echo "<strong>ACESSO NAO PERMITIDO!!</strong><br/></br>";

			include "login.html";
		}

	}
?>