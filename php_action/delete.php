<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM Clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cliente excluído com sucesso";
        header('Location: ../index.php?');
    } else {
        $_SESSION['mensagem'] = "Erro ao excluir cliente";
        header('Location: ../index.php?');
    }
}

?>