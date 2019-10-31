<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) {
    $nome = clear($_POST['nome']);
    $email = clear($_POST['email']);
    $telefone = clear($_POST['telefone']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE Clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../index.php?');
    } else {
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../index.php?');
    }
}

?>