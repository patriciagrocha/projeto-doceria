<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Doce Appetit - Admin</title>
</head>
<body>
    <main>
    <?php if (isset($_SESSION['ativa'])){ ?>
        <section class="container-admin-banner">
            <img src="img/LOGO.png" class="logo-admin" alt="logo-doceappetit">
            <h1>Painel Administrativo do site</h1>
            <h2>Lista de Produtos</h2>
        </section>
        <nav>
            <div>
                <a href ="painel.php">Painel</a> 
            </div>
        </nav>
        <section class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Descricão</th>
                        <th>Valor</th>
                        <th colspan="2">Ação</th>
                    </tr>
                </thead>
                <tbody>
                <td>Ninho</td>
        <td>Recheio</td>
        <td>Ninho com 3 camadas</td>
        <td>R$ 0.00</td>
        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td> 
      </tr>
      <tr>
        <td>Brigadeiro</td>
        <td>Recheio</td>
        <td>Camadas ao leite e amargo </td>
        <td>R$ 0.00</td>
        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>
      </tr>
      <tr>
        <td>Dois amores</td>
        <td>Recheio</td>
        <td>Brigadeiro branco e ao leite</td>
        <td>R$ 0.00</td>
        <td><a class="botao-editar" href="editar-produto.html">Editar</a></td>
        <td>
          <form>
            <input type="button" class="botao-excluir" value="Excluir">
          </form>
        </td>
      </tr>
                </tbody>
            </table>
            <a class="botao-cadastrar" href="cadastrar-produto.html">Cadastrar produto</a>
            <form action="baixar-relatorio.php" method="post">
                <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
            </form>
        </section>
    <?php   } else {
        header ("location:login.php");
    } ?>
    </main>
</body>
</html>
