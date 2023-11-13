<?php
include "config.inc.php";
?>


<html>

<head>
    <title>Doce Appetit</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/min.css">
</head>


<body>
    <div class="container p-5">

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM produtos WHERE id = '$id'";
        $consulta = mysqli_query($conexao, $sql);
        ?>

        <div class="card">

            <?php

            while ($dados = mysqli_fetch_array($consulta)) {

            ?>

                <form action="alterardb.php" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">
                    <table class="m-4 " >
                        <tr>
                            <td>Nome do Produto: </td>
                            <td><input name="produto" type="text" value="<?= $dados['produto']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Descrição: </td>
                            <td><textarea cols="23"  name="descricao"><?= $dados['descricao']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Preço: </td>
                            <td><input name="preco" type="text" value="<?= $dados['preco']; ?>" /></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button class="btn btn-success" name="Enviar">Atualizar</button></td>
                        </tr>
                    </table>
                </form>

            <?php } ?>
        </div>
</body>

</html>