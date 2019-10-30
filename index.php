<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes cadastrados</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Clientes ";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['email'];?></td>
                        <td><?php echo $dados['telefone'];?></td>
                        <td><a href="editar.php?id=<?php echo $dados['ID'];?>" class="btn-floating  teal lighten-1"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating red accent-2"><i class="material-icons">delete</i>/a></td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn blue">Adicionar Cliente</a>
    </div>
</div>


<?php
// Footer
include_once 'includes/footer.php';
?>