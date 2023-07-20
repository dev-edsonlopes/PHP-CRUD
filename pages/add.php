<?php
include_once '../includes/header.php';
?>


<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h3 class="font-weight-light">Novo Cliente</h3>
        <form action="../php_action/create.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" id="sobrenome">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" class="form-control" name="idade" id="idade">
            </div><br />
            <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
            <a href="../index.php" type="submit" name="btn-listar" class="btn btn-success">Listar Clientes</a>
        </form>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>