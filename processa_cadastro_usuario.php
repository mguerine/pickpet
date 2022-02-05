<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        include_once ("conexao.php");
        
     
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
			$senha = md5($senha);
 


			$sql = $conn->query("SELECT * FROM usuarios WHERE email='$email'");
			if(mysqli_num_rows($sql) > 0){
				$_SESSION['msg'] = "<p style='color:blue;'> Este email já foi cadastrado antes! </p>";
				header("Location: cadastrar_usuario.php");
				exit();
			} else {
				 if(!$conn->query("INSERT INTO usuarios (nome , email, senha) VALUES ('$nome','$email','$senha')")) die ('Os dados não foram inseridos');
				 echo "Dados inseridos com sucesso";
			}
           
            
            if(mysqli_insert_id($conn)){
                $_SESSION['msg'] = "<p style='color:blue;'> Cadastrado com Sucesso! </p>";
                header("Location: cadastrar_usuario.php");
            } else{
                $_SESSION['msg'] = "<p style='color:blue;'> erro! </p>";
                header("Location: cadastrar_usuario.php");
            }
        ?>
    </body>
</html>
