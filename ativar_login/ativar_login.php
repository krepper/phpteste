<?php		
	session_start();

	include "../config.php";

	if($_SESSION['ativa'] != TRUE){
		echo "<h1>NÃO ESTÁ LOGADO</h1><br/><br/>";

		echo "<a href=\"../login.html\">Voltar a página de <strong>LOGIN</strong>!</a>";

	} else {

		if($_SESSION['user_nivel'] == 2){

			$user_login = trim($_POST['user_login']);
			$user_validar = trim($_POST['validar']);

			$sql = mysqli_query($conectar, "SELECT * FROM cadastro WHERE user_login='{$user_login}'");

			$validar_check = mysqli_num_rows($sql);

			if($validar_check > 0){

				$dado = mysqli_fetch_array($sql, MYSQLI_ASSOC);

				$user_id = $dado['user_id'];

				$sql = mysqli_query($conectar, "UPDATE cadastro SET user_ativo = '$user_validar' WHERE cadastro.user_id = '$user_id';") or die (mysqli_error($conectar));


				if($user_validar == 1){
					echo "<center><h1> USUARIO VALIDADO COM SUCESSO!</h1></center>";
				} else {
					echo "<center><h1> USUARIO NAO VALIDADO!</h1></center>";
				}

				echo "<br/><br/><center><a href=\"../area_restrita.php\">VOLTAR</a></center>";

			} else {
				echo "<center><h1>USUARIO NAO ENCONTRADO!</h1></center>";
			}
		}
	}

?>