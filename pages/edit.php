<?php
include_once '../php_action/update.php';
include_once '../includes/header.php';
require_once '../db/index.php';

if(isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultdo = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultdo);
}
?>

<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h3 class="font-weight-light">Editar Cliente</h3>
        <form action="../php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $dados['email']; ?>">
            </div>

            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
            </div><br />
            <button type="submit" name="btn-editar" class="btn btn-primary">Atualizar</button>
            <a href="../index.php" type="submit" name="btn-listar" class="btn btn-success">Listar Clientes</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>