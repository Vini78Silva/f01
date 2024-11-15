<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

    echo "Nome: $nome<br>";
    echo "Sobrenome: $sobrenome<br>";
    echo "Email: $email<br>";
    echo "Telefone: $telefone<br>";
    echo "Endereço: $endereco<br>";
}
?>
