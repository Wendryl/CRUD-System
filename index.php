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

                if (mysqli_num_rows($resultado) > 0) :

                    while ($dados = mysqli_fetch_array($resultado)) :
                        ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating  teal lighten-1"><i class="material-icons">edit</i></a></td>

                            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red accent-2 modal-trigger"><i class="material-icons">delete</i>/a></td>
                            <!-- Exibe mensagem de alerta, para confirmar se deseja mesmo excluir cliente -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Atenção!</h4>
                                    <p>Tem certeza que deseja excluir este cliente?<br>A operação não pode ser revertida!</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="php_action/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Confirmar</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>

                        </tr>
                    <?php endwhile;
                    else : ?>

                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                <?php
                endif;
                ?>
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