<?php
	session_start();

	if($_SESSION['ativa'] != TRUE){
		echo "NÃO ESTÁ LOGADO<br/><br/>";

		echo "<a href=\"login.html\">Voltar a página de <strong>LOGIN</strong>!</a>";
	} else {
		echo "Bem vindo <strong>". $_SESSION['user_nome']. " ".$_SESSION['user_sob']. "</strong>!<br/><br/><br/>";

		if($_SESSION['user_nivel'] == 0){
			echo "NIVEL 0<br/>";
		}

		if($_SESSION['user_nivel'] >= 1){

			function ativar_login_botao(){
				header("Location: ativar_login/ativar_login.php");
			}

			echo "<input type=\"button\" value=\"ATIVAR/DESATIVAR USUARIO\" onclick=\"<? php ativar_login_botao(); ?>\">";


			echo "<br/>";
		}

		echo "<a href=\"logout.php\">Sair</a>";
	}

?>