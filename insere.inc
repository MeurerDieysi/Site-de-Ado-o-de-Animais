<?php

include 'conecta_mysql.inc';
include 'contato.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$menssagem = $_POST['menssagem'];

$sql = "INSERT INTO contato VALUES";
$sql .= "('$nome','$email','$menssagem')";

if ($conexao->query($sql) === TRUE){
    echo "Usuário incluido com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

