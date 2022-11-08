<?php
   include("conexão.php");
   
    $nome = $_POST['nome'];
    $endereço = $_POST['endereço'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    $sql= "INSERT INTO users (id_user, user_name, user_endereco, user_e-mail, user_cep, user_phone, user_sexo, user_password) 
               VALUES ('$nome', '$endereço', '$email', '$cep', '$telefone', '$senha', '$sexo')";
               If(mysqli_query($conexao, $sql)){
                  echo "usuario cadastrado com sucesso!";
               }
               else{
                  echo "Falha ao Cadastrar usuario!".mysqli_connect_error($conexao);
               }

               mysqli_close($conexao);
?>