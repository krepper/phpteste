<?php
	
	function sessin_checker(){
		if(!isset($_SESSION['cadastro_id'])){
			header("Location: login.html");
			exit();
		}
	}

?>