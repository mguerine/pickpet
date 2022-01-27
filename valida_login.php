<?php
	session_start();	

	include_once("conexao.php");	
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); 
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
		
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			if($_SESSION['usuarioEmail'] == $resultado['email'] && $_SESSION['usuarioSenha'] == $resultado['senha']){
				if (!isset($_GET["url"]) ){
					header('location: index.php');
				}else{
					if ( $_GET["url"] !=  $_SERVER['HTTP_REFERER']){
						header('location: ' . $_GET["url"]);
					}else{
						header('location: index.php');
					}
				}
			}

		}else{	
			$_SESSION['loginErro'] = "<center style='color:red;'>Usuário ou senha inválido!</center>";
			header('location: login.php');
		}
	}else{
		$_SESSION['loginErro'] = "<center style='color:red;'>Usuário ou senha inválido!</center>";
		header('location: login.php');
	}
?>