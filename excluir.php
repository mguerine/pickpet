<?php
	session_start();
	include_once("conexao.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result_pet = "DELETE FROM pet WHERE id='$id'";
	$resultado_pet2 = mysqli_query($conn, $result_pet);
	
	
	if (mysqli_affected_rows($conn)){
		$_SESSION['msg']= "<p style = 'color:blue'>Pet apagado com sucesso!</p>";
		header("Location: pagina_pessoal.php");
	} else {
		$_SESSION['msg']= "<p style = 'color:blue'>Erro ao excluir o Pet!</p>";
		header("Location: pagina_pessoal.php");
	}
?>