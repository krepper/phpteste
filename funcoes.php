<?php
	
	function session_checker(){
		if(!isset($_SESSION['user_id'])){
			header("Location: login.html");
			exit();
		}
	}

?>