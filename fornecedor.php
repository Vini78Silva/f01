<?php
//Recebendo os dados do formulario

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];


//trazendo o script da conexão que está no arquivo conexao.php 
include 'conexao.php';

$insert_fornecedor = "INSERT INTO fornecedor
         VALUES (NULL, '$nome', '$contato', '$email', '$telefone', '$endereco')";

$resultado = $conexao->query($insert_fornecedor);

if ($resultado) {
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>