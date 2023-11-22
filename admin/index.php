<?php 
include "config.inc.php";
include_once("../topo.php");
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce Appetit - Admin</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/min.css">
</head>
<body>
    <main>
    <?php if (isset($_SESSION['ativa'])) { ?>
        <div class="text-center mt-5">
            <h1>Painel Administrativo </h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center mt-5">
            <div>
                <a class="navbar-brand" href="index.php">Painel</a>
                <a class="navbar-brand" href="users.php"> Usuários</a>
                <a class="navbar-brand" href="logout.php">Sair</a>
            </div>
        </nav>

        <div class="container p-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>PRODUTOS CADASTRADOS</h3>
                    <a class="btn btn-success" href="inserir.php">Cadastrar</a>
                </div>
            </div>

            <?php
            $sql = "SELECT * FROM produtos ORDER BY id";
            $consulta = mysqli_query($conexao, $sql);

            if (!$consulta) {
                die('Erro na consulta: ' . mysqli_error($conexao));
            }

            if (mysqli_num_rows($consulta) > 0) {
            ?>
                <table class="table table-hover mt-4">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 25px;">ID</th>
                            <th scope="col" style="width: 205px;">NOME DO PRODUTO</th>
                            <th scope="col" style="width: 205px;">DESCRIÇÃO</th>
                            <th scope="col" style="width: 205px;">PREÇO</th>
                            <th scope="col" style="width: 105px;"></th>
                            <th scope="col" style="width: 105px;"></th>
                        </tr>
                    </thead>
                    <?php
                    while ($dados = mysqli_fetch_array($consulta)) { ?>
                        <tr>
                            <td><?= $dados['id']; ?></td>
                            <td><?= $dados['produto']; ?></td>
                            <td><?= $dados['descricao']; ?></td>
                            <td>R$ <?= $dados['preco']; ?></td>
                            <td><a class="btn btn-primary" href="alterar.php?id=<?= $dados['id']; ?>">Editar</a></td>
                            <td>
                                <a class="btn btn-danger" href="deletar.php?&id=<?= $dados['id']; ?>" class="ask">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php
            } else {
                echo '<p>Nenhum produto cadastrado.</p>';
            }
            ?>
        </div>
    <?php } else {
        header("location:login.php");
    } ?>

</body>

</html>
