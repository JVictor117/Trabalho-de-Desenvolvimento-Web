<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco_de_dados = 'teste';

$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];

$nome = $conexao->real_escape_string($nome);
$email = $conexao->real_escape_string($email);

$sql = "INSERT INTO registro (nome, email) VALUES ('$nome', '$email')";

if ($conexao->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conexao->error;
}


$conexao->close();
?>