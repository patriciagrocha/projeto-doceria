<!DOCTYPE html>
<html>
<head>
    <title>Meus Catálogos</title>
    <style>
        /* Estilos para o título */
        body {
            background-color: #F8F8F8;/*off-white*/
            background-image: url("imgs/image\ 3.png");
        }
        .catalog-main h1 {
            font-size: 48px; 
            color: rgb(96, 25, 25); 
            font-family: "Roboto";
            margin-top: 70px;
            margin-bottom: -30px; /* Define a margem inferior */
            text-align: center; /* Centraliza o texto */
            text-shadow: 2px 2px 3px #F5E1E1; /* Adiciona uma sombra suave */
        }
        .p { /* texto fora dos containers*/
            font-family: "Roboto";
            font-size: 24px;
            color: #111;
            text-align: center;
            max-width: 950px;
            margin: 30px auto; /* Margem superior e inferior de 30px, e margens laterais automáticas para centralizar */
           /* background-color: rgb(96, 25, 25);*/
            /*border: 2px solid white; /* Adiciona uma borda de cor vinho */
            padding: 10px; /* Adiciona um preenchimento interno para a borda */
           /* box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Adiciona uma sombra suave */
        }

        /* Estilos para o container */
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 50px;
            max-width: 1200px;
            background-color: #FCF7F7;
        }

        .container img {
            border-radius: 50%;
            max-width: 100%; /* Ajusta a largura máxima da imagem para 100% */
            height: auto; /* Permite que a altura seja ajustada proporcionalmente à largura */
            max-height: 250px; /* Define a altura máxima da imagem */
            margin-right: -150px;
        }

        /*estilo para o texto dos containers*/
        .container .text {
            max-width: 400px;
            margin-left: -150px;
            padding: 20px;
            font-size:20px;
        }

        /* Estilos para os links dentro dos containers */
        .container a {
            text-decoration: none; 
            color: rgb(96, 25, 25);
            font-family: "Roboto";
            border-radius: 50px;
            list-style-type: none; /* Remove os marcadores dos links */
            padding: 8px 16px;
            font-size: 20px;
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
        <h1></h1>
    
        <div class="p">
            <p></p>
        </div>
    </div>

    <!-- Primeiro container-->
    <div class="container">
        <img src="imgs\boloc.jpg">
        <div class="text">
            <h2 class="especialidade">Bolos Personalizados</h2>
            <p>É ele quem vai fechar com chave de ouro o evento que você planejou com todo carinho. Ele vai transmitir à seus convidados a sua personalidade através do sabor e da decoração que refletem o seu gosto. Pensando nisso, a Doce Appetit preparou um catálogo com mais de 20 combinações diferentes para você escolher</p>
            <ul>
                <li><a href="catalogo1.php">Catálogo de Bolos Personalizados</a></li>
            </ul>
        </div>
    </div>

    <!-- Segundo container -->
    <div class="container">
        <img src="imgs/brigadeiros1.jpg">
        <div class="text">
            <h2 class="especialidade">Doces Gourmet</h2>
            <p>Os famosos "docinhos de festa" fazem toda a diferença nos nossos momentos especiais. Por trabalhamos com um avariedade dos melhores Doces Gourmet para lhe oferecer uma experiencia memorável, desde o brigadeiro tradicional até doces personalizados com o seu gosto! </p>
            <ul>
                <li><a href="catalogo2.php">Catálogo de Doces Gourmet</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
