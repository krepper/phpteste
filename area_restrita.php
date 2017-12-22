<?php
	session_start();

	$user_login = "unknow";

	if($_SESSION['ativa'] != TRUE){
		echo "<h1>NÃO ESTÁ LOGADO</h1><br/><br/>";

		echo "<a href=\"login.html\">Voltar a página de <strong>LOGIN</strong>!</a>";
	} else {
		echo "<center><h1>Bem vindo <strong>". $_SESSION['user_nome']. " ".$_SESSION['user_sob']."!</strong></h1></center><br/>";

		include "area_restrita/cabecalho.html";

		if($_SESSION['user_nivel'] == 0){
			echo "NIVEL 0<br/>";
		}

		if($_SESSION['user_nivel'] >= 1){

			include "ativar_login/ativar_login.html";

			echo "<br/>";
		}

		echo "<a href=\"logout.php\">Sair</a>";
	}

?>