<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Envio</title>
    <style>
        /* Estilos para a mensagem de confirmação */
        body {
            font-family: "arial, sans-serif";
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>
<style>
        /* Estilo para formatar as imagens */
        .cabeçalho {
            display: block; /* Garante que cada imagem esteja em sua própria linha */
            width: 1521px;
            border-bottom: 0.5px solid white;
        }
    </style>
</head>
<body>
    <div class="cabeçalho">
<img src="logo5.png" alt="Logo Doce Appetit">
    </div>
</body>

</body>
</html>
<div class="menu">
    <a href="index.php">Início</a>
    <a href="?pg=catalogos">Catálogos</a>
    <a href="?pg=fazermeupedido">Fazer meu pedido</a>
    <a href="?pg=avaliacoes"> Avaliações</a>
</div>

<style>
    /* Estilizar o MENU */
     body {
        font-family: "Roboto";  
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .menu {
        background-color: rgb(95, 25, 25);
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    .menu a {
        color: white;
        font-family: "Roboto";
        text-decoration: none; /* tira o sublinhado dos links*/
        margin: 20px;
        font-size: 20px;
        text-transform: uppercase;
        padding-right: 30px; /*espaço à direita da linha */
        border-right: 1px solid white; /* Adicione uma borda direita para a linha vertical */
    }

    .menu a:hover {
        text-decoration: underline;
    }

    .menu a:last-child {
    border-right: none; /* Remove a borda do último link */
    }

</style>

    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Processar o formulário aqui
            // Você pode acessar os dados do formulário usando $_POST

            // Exemplo de processamento:
            $nome = $_POST["nome"];
            $contato = $_POST["contato"];
            $bolo = $_POST["indicacao"];
            $sabores = isset($_POST["sabores"]) ? $_POST["sabores"] : "";
            $saboresdoces = isset($_POST["saboresdoces"]) ? $_POST["sabores_doces"] : "";
            echo "<h1> Sua avaliação foi enviada com sucesso! </h1>";
            echo "<p>Obrigado, $nome! A Doce Appetit irá analisar sua avliação, aproveite seu momento doce.</p>";
        } else {
            // Se o formulário não foi enviado corretamente, exibir uma mensagem de erro 
            echo "<h1>Erro ao Enviar o Pedido</h1>";
            echo "<p>Por favor, volte e preencha o formulário corretamente.</p>";
        }
        ?>
    </div>
</body>
</html>