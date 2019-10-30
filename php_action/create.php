<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO Clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../index.php?');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php?');
    }
}

?>