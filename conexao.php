<?php
	// LOCALHOST
	//$servidor = "localhost";
	//$usuario = "root";
	//$senha = "";
	//$dbname = "pickpet";
	// SERVIDOR
	$servidor = "remotemysql.com:3306";
	$usuario = "j8sv4b7tFE";
	$senha = "ZcYTX4peBH";
	$dbname = "j8sv4b7tFE";
	
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>