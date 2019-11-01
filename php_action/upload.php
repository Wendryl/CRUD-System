<?php
// Conexão
include_once 'db_connect.php';
// Header
include_once '../includes/header.php';

$msg = false;

if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //Captura a extensão do arquivo
    $novo_nome = md5(time()) . $extensao; // Define o nome do arquivo
    $diretorio = '../upload/'; //O diretório de destino do arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome); //Efetua o upload

    $sql = "INSERT INTO arquivo (codigo, arquivo, data) VALUES (null, '$novo_nome', NOW())";

    if (mysqli_query($connect, $sql)) {
        $msg = "Arquivo enviado com sucesso!";
    } else {
        $msg = "Falha ao enviar arquivo.";
    }
}
?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Upload de Arquivos</h3>
        <?php if (isset($msg) && $msg != false)
            echo "<p> $msg </p>";
        ?>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Arquivo: <input type="file" required name="arquivo">
            <input type="submit" value="Salvar">
        </form>

    </div>