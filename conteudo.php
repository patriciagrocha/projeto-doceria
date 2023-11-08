<!DOCTYPE html>
<html>
<head>
    <title>Exibir Imagem em PHP</title>
    <style>
        /* Estilos para o corpo da página */
        body {
            font-family: Arial,sans-serif;
            color: white;
            margin: 0;
            padding: 0;
            background-color: rgb(96, 25, 25);
        }

        .h1 {
            font-size: 20px;
            font-family: "Roboto";
            text-align: center;
            border-top: 2px solid white;
        }

        /* Estilos para a imagem */
        .img {
            float: left; /* Alinha a imagem à esquerda */
            height: 350px;
            width: 300px;
            margin-right: 20px; /* Adiciona espaço à direita da imagem */
        }

        .imgs {
            height: 100px;
            width: 120px;
            margin-right:15px;
        }

        .centralizaimgs{
            text-align: center;
            margin-left: 0px;
        }

        /* Estilos para o texto */
        .texto {
            font-family: Arial, sans-serif;
            font-size: 21px;
            font-weight: 500;
            text-align: left; /* Alinha o texto à esquerda */
            margin-left: 280px; /* Adiciona espaço à esquerda da imagem */
        }

    </style>
</head>
<body>
    <div class="h1">
        <h1> Quem é a Doce Appetit?</h1>
    </div>
    <img src="imgs/cakerapha.jpg" class="img">
        <div class="texto"><p>
            A Doce Appetit surgiu com a intenção de estar presente nos melhores momentos de sua vida. Deixando cada segundo especial ainda mais doce e memorável para você e as pessoas que ama! Desde março de 2023, através das vendas de Ovos de Páscoa Artesanais a Doce Appetit vem adoçando as casas dos moradores de João Pessoa.<br><br>
            <div class="centralizaimgs">
                <img src= "imgs/ovokids2.jpg" class="imgs"> <img src="imgs/ovomaracuja.jpg" class="imgs"> <img src="imgs/ovooreo.jpg" class="imgs"> <img src="imgs/capa2.jpg" class="imgs"> <img src="imgs/ninho.jpg" class="imgs">
            </div>
            <br> E temos uma NOVIDADE!!!!! A partir desse mês(Setembro) a Doce Appetit estará oferecendo serviços de encomenda de Bolos Personalizados cobertos com a melhor cobertura do mundo e Doces Gourmet feitos com a maior qualidade que você pode imaginar exclusivamente para nossos clientes. <br> Dê uma olhada nos nossos novos catálogos e se esbalde!
        </p>
    </div>
</body>
</html>