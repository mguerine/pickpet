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
	


    $query = "SELECT nomepet FROM pet WHERE id ='$id'"; 
    $resultado_pet = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($resultado_pet);    

    $assunto = "Quero adotar o ".  $row['nomepet'] ;
    //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    $mensagem = "<strong>Nome:  </strong>".$nome_de_quem_vai_adotar;
    $mensagem .= "<br>  <strong>CPF: </strong>" . $cpf;
	$mensagem .= "<br>  <strong>RG: </strong>" . $rg;
	$mensagem .= "<br>  <strong>Idade: </strong>" . $idade;
	$mensagem .= "<br>  <strong>Sexo: </strong>" . $sexo;
	$mensagem .= "<br>  <strong>E-mail: </strong>" . $email;
	$mensagem .= "<br>  <strong>Número de telefone: </strong>" . $tel1;
	$mensagem .= "<br>  <strong>Outro número de telefone: </strong>" . $tel2;
	$mensagem .= "<br>  <strong>Profissão: </strong>" . $profissao;
	$mensagem .= "<br>  <strong>Endereço: </strong>" . $endereco;
	$mensagem .= "<br>  <strong>Número: </strong>" . $numero;
	$mensagem .= "<br>  <strong>Complemento: </strong>" . $complemento;
	$mensagem .= "<br>  <strong>Bairro: </strong>" . $bairro;
	$mensagem .= "<br>  <strong>Cidade: </strong>" . $cidade;
	$mensagem .= "<br>  <strong>Estado: </strong>" . $estado;
	$mensagem .= "<br>  <strong>CEP: </strong>" . $cep;
	$mensagem .= "<br>  <strong>Porque quero adotar um Pet? </strong>" . $porque;
	$mensagem .= "<br>  <strong>Tem ou já Teve um Pet? </strong>" . $jateve;
	$mensagem .= "<br>  <strong>Caso afirmativo, cite quais Pets tem ou já teve + quantidade: </strong>" . $qnt;
	$mensagem .= "<br>  <strong>Alguém de sua casa é alérgico a Gato ou Cachorro? </strong>" . $alergia;
	$mensagem .= "<br>  <strong>O que fará caso não possa mais cuidar do Pet? </strong>" . $cuidar;
	
	
	

    //agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  dominio.com.br<pickpet2022@gmail.com>\n";
    //Vai ser //mostrado que  o email partiu deste email e seguido do nome
    $headers .= "X-Sender:  <pickpet2022@gmail.com>\n";
    //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <pickpet2022@gmail.com>\n";
    //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";

    mail($email, $assunto, $mensagem, $headers);  //função que faz o envio do email.

    // IMPORTANTE: o envio de email não funciona no localhost!!  

    header('location: agradecimento.php'); 

?>
