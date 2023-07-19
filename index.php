<?php
require_once './db/index.php';
include_once './includes/header.php';
?>


<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <?php include_once './php_action/mensagem.php'; ?>
        <h3 class="font-weight-light">Clientes</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><a href="./pages/edit.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a></td>
                        <td><button type="button" data-bs-toggle="modal" data-bs-target="#modal<?php echo $dados['id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="modal<?php echo $dados['id']; ?>" tabindex="-1" aria-labelledby="modalTitle<?php echo $dados['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle<?php echo $dados['id']; ?>">Confirmação</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza de que deseja excluir este cliente?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="./php_action/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn btn-danger">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="./pages/add.php" class="btn btn-primary">Adicionar Cliente</a>
    </div>
</div>

<?php
include_once './includes/footer.php';
?>
