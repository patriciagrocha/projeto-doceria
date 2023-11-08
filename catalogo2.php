<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>

    <style>
        /*COMEÇO DO CABEÇALHO E MENU: Para o cabeçalho e menu permaneça durante abertura dos catálogos*/
        /* Estilo para formatar a imagem do TOPO */
        .cabeçalho {
            display: block; /* Garante que cada imagem esteja em sua própria linha */
            width: 1521px;
            border-bottom: 0.5px solid white; /*linha que separa cabeçalho e menu*/
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
    <a href="index.php">Home</a>
    <a href="?pg=catalogos">Catálogos</a>
    <a href="?pg=fazermeupedido">Fazer meu pedido</a>
    <a href="?pg=avaliacoes"> Avaliações</a>
    </div>

    <style>
     /* Estilizar o MENU */
        body {
            font-family: "Roboto";  /*nomes dos links*/
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .menu {
            background-color: rgb(95, 25, 25); /*container*/
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
            text-decoration: underline; /*coloca sublinhado quando clicado*/
        }

        .menu a:last-child {
            border-right: none; /* Remove a linha do último link */
        }
        /*FIM DO CABEÇALHO/MENU*/
    </style>


    <style>
        /* Estilo para formatar as imagens */
        img {
            display: block; /* Garante que cada imagem esteja em sua própria linha */
            max-width: 100%; /* Faz com que as imagens ocupem toda a largura disponível */
            height: auto; /* Mantém a proporção original da imagem */
            margin: 0 auto; /* Centraliza horizontalmente cada imagem */
        }
    </style>
</head>
<body>
    <?php
    $dir = "imagens5"; // Diretório das imagens
    $files = scandir($dir); // Obtém a lista de arquivos na pasta

    // Exibe as imagens
    foreach ($files as $file) {
        echo '<img src="' . $dir . '/' . $file . '" alt="Imagem">';
    }
    ?>
</body>
</html>