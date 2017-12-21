<?php

	session_start();


	echo "<strong> Bye!</strong> <br/> <br/>";
	
	echo "<a href=\"login.html\">Voltar a página de <strong>LOGIN</strong>!</a>";

	session_destroy();

?>