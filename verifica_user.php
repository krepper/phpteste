<?php
	session_start();

	include "config.php";

	$cadastro_user = $_POST['cadastro_user'];
	$cadastro_senha = $_POST['cadastro_senha'];

	if((!$cadastro_user) || (!$cadastro_senha)){
		echo "Todos os campos devem serem preenchidos! <br/>";

		include "login.html"
	} else {

		$cadastro_senha = md5($cadastro_senha);

		$sql = mysqli_query("SELECT * FROM cadastro where cadastro_user='{$cadastro_user}'
							AND cadastro_senha='{$cadastro_senha}'
							AND ativado='1'");

		$login_check = mysqli_num_rows($sql);

		if($login_check>0){
			while ($row = mysqli_fetch_array($sql)){
				foreach ($row AS $key => $val) {
					$$key = stripcslashes($val);
				}

				$_SESSION['cadastro_id'] = $cadastro_id;
				$_SESSION['cadastro_user'] = $cadastro_user;
				$_SESSION['cadastro_senha'] = $cadastro_senha;
				$_SESSION['nivel_user'] = $nivel_user;

				header("Location: area_restrita.php");
			}
		} else {
			echo "ACESSO NAO PERMITIDO";

			include "login.html";
		}

	}
?>