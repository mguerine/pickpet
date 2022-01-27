<?php
	session_start();
	
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNiveisAcessoId'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);
	
	$_SESSION['logindeslogado'] = "<center style='color:blue;'>Deslogado com sucesso!</center>";
	//redirecionar o usuario para a página de login
	header("Location: login.php");
?>