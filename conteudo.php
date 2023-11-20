<div>

<head>
  <style>
    /*cor de fundo de toda a pagina*/
    body {
      background-color: #F8F8F8;/*off-white*/
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #F5E1E1;
      padding: 20px; /* espaçamento interno */
      margin-top: 50px; /* Margem superior */
      margin-bottom: 10px; /* Margem inferior */
      max-height: 500px; /* Defina uma altura máxima para o contêiner */
      overflow: hidden; /* Oculta qualquer conteúdo que ultrapasse a altura máxima */
    }


    .produto {
      /* Estilo das 3 imagens do final da página */
      display: flex;
      border-top: none;
      padding-top: 0;
      margin-top: 50px;
    }

    .prod {
      flex: 1;
      margin: -5px;
      text-align: center;
    }

    .prod img {
      max-width: 50%;
      margin: center;
      border-radius: 50%;
      margin-top: 50px;
    }

    #BotaoCatalogo {
      /* Botão escrito "acesse nosso catálogo" */
      color: #480707;
      background: #DECAB9;
      margin-left: 44%;
      margin-bottom: 5px;
      text-align: center;
      border: none;
    }

    #bolotopo1 {
      width: 400px;
      height: 400px;
      margin-top: 100px;
      margin-bottom: 100px;
      margin-right: 200px;
      }

    .texto-ao-lado {
      /* Estilo para o texto ao lado da "bolotopo" */
      font-size: 22px;
      font-family: "Roboto"; 
      max-width: 500px;
      text-align: center;
      background-color: #F5E1E1; /* Mesma cor de fundo para o texto */
      padding: 10px; /* Ajuste o espaçamento interno para diminuir a distância entre o conteúdo e os limites do container */
      margin-top: 10px; /* Margem superior */
      margin-bottom: 10px; /* Margem inferior */
    }

    .titulo-produtos {
      text-align: center;
      margin-top: 40px;
      margin-bottom: 50px;
      font-size: 35px; /* Ajuste o tamanho da fonte conforme necessário */
    }

  </style>
</head>
<body>
  <div class="container">
    <!-- Imagem "bolotopo1" e texto ao lado -->
    <img id="bolotopo1" src="imgs/hq720 1.png" alt="Imagem de boas-vindas">
    <div class="texto-ao-lado">
      <h1 class="especialidade">Bem-vindo à<br> Doce Appetit</h1>
      <p>
        Seja bem-vindo à Doce Appetit! <br>Aqui, oferecemos uma variedade deliciosas de criações feitas de forma personalizadas para você.
      </p>
    </div>
  </div>

  <!-- Seção de produtos -->
  <h2 class="titulo-produtos">NOSSOS PRODUTOS</h2>
    
  <!-- Produto 1 -->
  <div class="produto">
    <span class="prod">
      <img src="imgs/IMG-20231108-WA0016.jpg" title="Ovo de páscoa">
      <p style = "font-size: 24px;"> Bolos Personalizados</p>
    </span>

    <!-- Produto 2 -->
    <span class="prod">
      <img src="imgs/IMG-20231108-WA0017.jpg" title="Bolo">
      <p style="font-size: 24px"> Doces Gourmet</p>
    </span>

    <!-- Produto 3 -->
    <span class="prod">
      <img src="imgs/IMG-20231108-WA0018.jpg" title="Brigadeiros">
      <p style="font-size: 24px"> Produtos Sazonais</p>
    </span>
  </div>
</body>
</div>