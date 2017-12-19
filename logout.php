<?php

	session_start();

	session_destroy();

	if(!session_is_registered('nome')){
		echo "<strong> Bye!</strong> <br/> <br/>";

		include "login.html";
	}
?>