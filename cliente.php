<?php
//Recebendo os dados do formulario

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


//trazendo o script da conexão que está no arquivo conexao.php 
include 'conexao.php';

$insert_cliente = "INSERT INTO cliente
         VALUES (NULL, '$nome', '$sobrenome', '$email', '$telefone', '$endereco')";

$resultado = $conexao->query($insert_cliente);

if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>