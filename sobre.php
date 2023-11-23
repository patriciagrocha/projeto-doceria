<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url("imgs/sobre/image3.png");
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
        }

        #toposobre {
            width: 100%;
            padding-top: 40px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding-top: 50px;
            align-items: center;
            max-width: 1400px; /* Aumente conforme necessário */
            margin: 0 auto; /* Centraliza o conteúdo */
        }

        .item {
            width: 600px;
            margin-bottom: 20px;
        }

        #grazi1,
        #grazi2 {
            width: 400px;
            display: block;
            margin-bottom: 10px;
            margin-bottom: 30px;
        }

        .text {
            max-width: 100%; /* Ajusta para ocupar 100% da largura do .item */
            font-size: 26px;
            margin-top: 30px;
            font-family: 'Roboto';
        }
    </style>
</head>
<body>
    <img id="toposobre" src="imgs/sobre/conheca1.png">
    <div class="clearfix">
        <div class="container">
            <div class="item">
                <img id="grazi1" src="imgs/sobre/fotograzi1.png">
                <p class="text">Comecei fazendo bolos para aniversários de amigos e eventos locais. Com o tempo, minha clientela cresceu à medida que as pessoas provavam meus bolos incríveis e compartilhavam a notícia. O que começou na páscoa com produtos Sazonais, hoje vioru uma empresa que oferece uma variedade de produtos que tornam seus momentos ainda mais doces</p>
            </div>
            <div class="item">
                <p class="text">Meu nome é Graziela, e sempre tive uma paixão secreta pela confeitaria. Adorava fazer bolos deliciosos para minha família e amigos em ocasiões especiais. Meus bolos eram famosos entre meus amigos e familiares, e eles sempre me diziam que eu deveria abrir minha própria confeitaria.</p>
                <img id="grazi2" src="imgs/sobre/fotograzi2.png">
            </div>
        </div>
    </div>
</body>
</html>
