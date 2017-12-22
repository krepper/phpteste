<?php
	include "config.php";

	$user_nome = trim($_POST['user_nome']);
	$user_sob = trim($_POST['user_sob']);
	$user_login = trim($_POST['user_login']);
	$user_senha = trim($_POST['user_senha']);
	$cadastro_valido = FALSE;

	/* CHECAGEM DE CAMPO VAZIO OU ERRO */

	if ((!$user_nome) || (!$user_sob) || (!$user_login) || (!$user_senha)){
		echo "ERRO: ";
		if(!$user_nome){
			echo "Nome obrigatório.<br/>";
		}
		if(!$user_sob){
			echo "Sobrenome obrigatório.<br/>";
		}
		if(!$user_login){
			echo "Nome de usuário obrigatório. <br/>";
		}
		if(!$user_senha){
			echo "Senha obrigatória.<br/>";
		}

	} else {

		$sql_user_check = mysqli_query($conectar, "SELECT * FROM cadastro WHERE user_login='{user_login}'");

		$dado = mysqli_fetch_array($sql_user_check, MYSQLI_ASSOC);
		echo $dado['user_login'];

		if($dado['user_login'] == $user_login){
			echo "<center><strong>ERRO</strong>: ESTE USUARIO JÁ EXISTE!!<br/></center>";
			echo "<meta http-equiv=\"refresh\" content=\"5; url=cadastro.php\">";
		} else {
			$cadastro_valido = TRUE;
		}

		include "cadastro.php";
	
	} 


	if($cadastro_valido == TRUE) {

		$sql = mysqli_query($conectar, "INSERT INTO cadastro (user_nome, user_sob, user_login, user_senha) VALUES ('$user_nome', '$user_sob', '$user_login', '$user_senha')") or die (mysqli_error($conectar));

		if (!$sql){
			echo "ERRO AO CRIAR USUARIO";
		}

		$cadastro_id = mysqli_insert_id($conectar);

	}

?>