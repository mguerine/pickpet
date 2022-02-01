<?php
	session_start();
	include_once ("conexao.php");
	
	
	$responsavel = filter_input(INPUT_POST, 'responsavel', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
	$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$tel1 = filter_input(INPUT_POST, 'tel1', FILTER_SANITIZE_STRING);
	$tel2 = filter_input(INPUT_POST, 'tel2', FILTER_SANITIZE_STRING);
	$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$nomepet = filter_input(INPUT_POST, 'nomepet', FILTER_SANITIZE_STRING);
	$pet = filter_input(INPUT_POST, 'pet', FILTER_SANITIZE_STRING);
	$raca = filter_input(INPUT_POST, 'raca', FILTER_SANITIZE_STRING);
	$sexopet = filter_input(INPUT_POST, 'sexopet', FILTER_SANITIZE_STRING);
	$idadepet = filter_input(INPUT_POST, 'idadepet', FILTER_SANITIZE_STRING);
	$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
	

	
	
	if(isset($_POST["insert"]))  {  
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
		$id_usuario = $_SESSION['usuarioId'];
		$query = "INSERT INTO pet(responsavel, cpf, rg, idade, sexo, email, tel1, tel2, endereco, numero, complemento, bairro, cidade, estado, cep, nomepet, pet, raca, sexopet, idadepet, descricao, imagem, id_usuario_fk) VALUES ('$responsavel', '$cpf', '$rg', '$idade', '$sexo', '$email', '$tel1', '$tel2', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$nomepet', '$pet', '$raca', '$sexopet', '$idadepet', '$descricao', '$file',  '$id_usuario')";  
		$resultado_pet = mysqli_query($conn, $query);
		if($resultado_pet)  
		{  
			echo ("Imagem Inserida com sucesso!");  
		}  
	}  
	
	
	
	
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style='color:blue;'> Pet Cadastrado com Sucesso! </p>";
		header("Location: cadastrarpet.php");
	} else{
		$_SESSION['msg'] = "<p style='color:red;'> Algum erro ocorreu </p>";
		header("Location: cadastrarpet.php");
	}
?>
