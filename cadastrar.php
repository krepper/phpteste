<?php
	include "config.php";

	$nome = trim($_POST['nome']);
	$sobrenome = trim($_POST['sobrenome']);
	$cadastro_user = trim($_POST['cadastro_user']);
	$cadastro_senha = trim($_POST['cadastro_senha']);

	/* CHECAGEM DE CAMPO VAZIO OU ERRO */

	if ((!$nome) || (!$sobrenome) || (!$cadastro_user) || (!$cadastro_senha)){
		echo "ERRO: ";
		if(!$nome){
			echo "Nome obrigatório.<br/>";
		}
		if(!$sobrenome){
			echo "Sobrenome obrigatório.<br/>";
		}
		if(!$cadastro_user){
			echo "Nome de usuário obrigatório. <br/>";
		}
		if(!$cadastro_senha){
			echo "Senha obrigatória.<br/>";
		}
	} else {
		$sql_user_check = mysqli_query("SELECT COUNT(cadastro_id) FORM cadastro WHERE cadastro_user='{cadastro_user}'");

		$uReg = mysqli_fetch_array($sql_user_check);

		$user_check = $uReg[0];

		if($user_check>0){
			echo "<strong>ERRO</strong>: ESTE USUARIO JÁ EXISTE!!<br/>";
			unset($cadastro_user);
		}

		include "cadastro.php";
	/*
	} else {
		$sql = mysql_query(

		"INSERT INTO usuarios
		(nome, sobrenome, cadastro_user, cadastro_senha)

		VALUES
		('$nome', '$sobrenome', '$cadastro_user, cadastro_senha)")

		or die( mysql_error()
		);

		if (!$sql){
			echo "ERRO AO CRIAR USUARIO";
		}
	/*/
	} 

	$cadastro_id = mysqli_insert_id();

?>