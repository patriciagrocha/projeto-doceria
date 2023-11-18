<?php session_start(); 
require_once "function.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel usuarios</title>
</head>
<body>
    <?php if (isset($_SESSION['ativa'])){ ?>
    <h1>Painel Administrativo do site</h1>
    <h3> Bem vindo, <?php echo $_SESSION['nome']; ?> </h3>
    <h2>Gerenciador de Usuários</h2>
    <nav>
        <div>
            <a href ="painel.php">Painel</a>
            <a href ="users.php">Gerenciar Usuários</a>
            <a href = "logout.php">Sair</a>
        </div>
    </nav>
        <?php
        $tabela = "usuarios";
         $usuarios = buscar ($connect, $tabela)?>
    <div class ="container">
        <table border ="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de Cadastro</th>
                 </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario ['id']; ?></td>
                        <td><?php echo $usuario ['nome']; ?></td>
                        <td><?php echo $usuario ['email']; ?></td>
                        <td><?php echo $usuario ['data_cadastro']; ?></td>
                    </tr>

                  <?php  endforeach; ?>
            </tbody>
        </table>

    </div>

    <?php   } else {
        header ("location:login.php");
    }

     ?>
</body>
</html>