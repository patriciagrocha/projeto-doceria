<!DOCTYPE html>
<html>
<head>
    <title>Meus Catálogos</title>
    <style>
        /* Estilos para o título */
        .catalog-main h1 {
            font-size: 40px; 
            color: rgb(96, 25, 25); 
            font-family: "Roboto";
            margin-bottom: 20px; /* Define a margem inferior */
            text-align: center; /* Centraliza o texto */
        }
        .p {
            margin-left: 40px;
            margin-right: 40px;
            font-size: 23px; /* Define o tamanho da fonte para 23 pixels */
            padding-bottom: 10px; /* Define o preenchimento inferior como 10 pixels */
        }

        /* Estilos para o container */
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            margin-bottom: 100px;
            max-width: 1200px;
        }

        .container img {
            border-radius: 50%;
            max-width: 100%; /* Ajusta a largura máxima da imagem para 100% */
            height: auto; /* Permite que a altura seja ajustada proporcionalmente à largura */
            max-height: 200px; /* Define a altura máxima da imagem */
            margin-right: -150px;
        }

        .container .text {
            max-width: 400px;
            margin-left: -150px;
        }

        /* Estilos para os links dentro dos containers */
        .container a {
            text-decoration: none; 
            color: rgb(96, 25, 25);
            font-family: "Roboto";
            border-radius: 50px;
            list-style-type: none; /* Remove os marcadores dos links */
            padding: 8px 16px;
        }

        .container a:hover {
            background-color: #F5E1E1;
        }
        .container ul {
            list-style-type: none; /* Remove os marcadores de lista */
            padding: 0; /* Remove o preenchimento padrão da lista */
            text-align: center;
        }

    </style>
</head>
<body>
<div class="catalog-main h1">
        <h1>Nossos Catálogos</h1>
    
        <div class="p">
            <p> A Doce Appetit disponibiliza dois catálogos com muitas delícias para você aproveitar!<br> Conheça agora nossos serviços de Bolos Personalizados e Doces Gourmet que são feitos de forma 100% ARTESANAL exclusivamente para você. <br>Clique nos links abaixo para conhecer nossos produtos.</p>
        </div>
    </div>

    <!-- Primeiro container com foto e texto (Seção superior) -->
    <div class="container">
        <img src="imgs\IMG-20231108-WA0017.jpg">
        <div class="text">
            <h1 class="especialidade">Bolos Personalizados</h1>
            <p>O Bolo é ponto alto de toda festa, é ele quem vai fechar com chave de ouro o evento que você planejou com todo carinho. Ele também vai transmitir à seus convidados a sua personalidade, através do sabor e da decoração que refletem o seu gosto. Pensando nisso, a Doce Appetit preparou um catálogo com mais de 20 combinações diferentes para você escolher</p>
            <ul>
                <li><a href="catalogo1.php">Catálogo de Bolos Personalizados</a></li>
            </ul>
        </div>
    </div>

    <!-- Segundo container com foto e texto (Seção inferior) -->
    <div class="container">
        <img src="imgs/IMG-20231108-WA0018.jpg">
        <div class="text">
            <h1 class="especialidade">Doces Gourmet</h1>
            <p>Os famosos "docinhos de festa" fazem toda a diferença nos nossos momentos especiais. Nós trabalhamos com um avariedade dos mehlores Doces Gourmet para lhe oferecer a meklhor experiencia, desde brigadeiro tradicional até doces personalzados </p>
            <ul>
                <li><a href="catalogo2.php">Catálogo de Doces Gourmet</a></li>
            </ul>
        </div>
    </div>

    <!-- Conteúdo existente -->
</body>
</html>
