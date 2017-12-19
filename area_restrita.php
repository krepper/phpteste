<?php
	session_start();
	include "funcoes.php";
	session_checker();

	echo "Bem vindo <strong>". $_SESSION['nome']. " ".$_SESSION['sobrenome']. "</strong>!";

	if($_SESSION['nivel_user'] == 0){
		echo "NIVEL 0<br/>";
	}

	if($_SESSION['nivel_user'] == 1){
		echo "NIVEL MAX<br/><br/>";
	}

	echo "<a href=\"logout.php\">Sair</a>";
?>