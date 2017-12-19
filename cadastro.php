<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>CADASTRO SISTEMA</title>
	</head>

	<body>

		<form name="cadastro" method="post" action="cadastrar.php">

		Nome:
		<input name="nome" type="text" id="nome" value="<?php echo $nome; ?>"/>

		</hr>

		Sobrenome:
		<input name="sobrenome" type="text" id="sobrenome" value="<?php echo $sobrenome; ?>"/>

		</hr>

		Usuario: 
		<input name="cadastro_user" type="text" id="cadastro_user" value="<?php echo $cadastro_user; ?>"/>

		</hr>

		Senha:
		<input name="cadastro_senha" type="text" id="cadastro_senha" value="<?php echo $cadastro_senha; ?>"/>

		<input type="submit" name="submit" value="Enviar"/>

		</hr>

		</form>

	</body>
	
</html>


