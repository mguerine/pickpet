<?php
	session_start();
	include_once ("conexao.php");
    if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		header('location: index.php');
	}
	
	
	$nome_de_quem_vai_adotar = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
	$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$tel1 = filter_input(INPUT_POST, 'tel1', FILTER_SANITIZE_STRING);
	$tel2 = filter_input(INPUT_POST, 'tel2', FILTER_SANITIZE_STRING);
    $profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_STRING);
	$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$porque = filter_input(INPUT_POST, 'porque', FILTER_SANITIZE_STRING);
	$jateve = filter_input(INPUT_POST, 'jateve', FILTER_SANITIZE_STRING);
	$qnt = filter_input(INPUT_POST, 'qnt', FILTER_SANITIZE_STRING);
	$alergia = filter_input(INPUT_POST, 'alergia', FILTER_SANITIZE_STRING);
	$cuidar = filter_input(INPUT_POST, 'cuidar', FILTER_SANITIZE_STRING);
	
    // ADICIONAR SQL AQUI PARA INDICAR QUE O PET FOI ADOTADO ??

    $query = "SELECT nomepet FROM pet WHERE id ='$id'"; 
    $resultado_pet = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($resultado_pet);    

    $assunto = "Quero adotar o ".  $row['nomepet'] ;
    //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    $mensagem = "<strong>Nome:  </strong>".$nome_de_quem_vai_adotar;
    $mensagem .= "<br>  <strong>Mensagem: </strong>" . $cpf;

    // ADICIONAR AS OUTRAS INFORMAÇÕES NO EMAIL

    //agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
    //Vai ser //mostrado que  o email partiu deste email e seguido do nome
    $headers .= "X-Sender:  <sistema@dominio.com.br>\n";
    //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <sistema@dominio.com.br>\n";
    //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";

    mail($email, $assunto, $mensagem, $headers);  //função que faz o envio do email.

    // IMPORTANTE: o envio de email não funciona no localhost!!  

    header('location: index.php'); // pra ca mesmo?

?>
