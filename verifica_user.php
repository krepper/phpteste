<?php
	session_start();

	include "config.php";

	$cadastro_user = $_POST['cadastro_user'];
	$cadastro_senha = $_POST['cadastro_senha'];

	if((!$cadastro_user) || (!$cadastro_senha)){
		echo "Todos os campos devem serem preenchidos! <br/><br/>";

		include "login.html";
	} else {

		#$sql = mysqli_query($conectar, "SELECT * FROM cadastro WHERE cadastro_user='{$cadastro_user}' AND cadastro_senha='{$cadastro_senha}' AND ativado='1'");

		#$login_check = mysqli_fetch_array($sql, MYSQLI_NUM);
		#$login_check = mysqli_num_rows($sql);

		$sql = mysqli_query($conectar, "SELECT * FROM cadastro WHERE cadastro_user='{cadastro_user}' AND cadastro_senha='{cadastro_senha}'") or die ("NÃO ENCONTRADO!");
		$dados =  mysqli_fetch_row($sql); 

		echo $dados[1];
		echo $dados[4];

		if($sql){

			$_SESSION['cadastro_user'] = $cadastro_user;
			$_SESSION['cadastro_senha'] = $cadastro_senha;

			echo "passou aqui";

			#	header("Location: area_restrita.php");
		
		} else {
			echo "<strong>ACESSO NAO PERMITIDO!!</strong><br/></br>";

			include "login.html";
		}

	}
?>