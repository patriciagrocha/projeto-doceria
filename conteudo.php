<div>

<head>
  <style>
    /*cor de fundo de toda a pagina*/
    body {
      background-color: #F8F8F8;/*off-white*/
      background-image: url("imgs/image\ 3.png");

    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #601616;
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
      color: white;
      background-color: #601616; /* Mesma cor de fundo para o texto */
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
    <img id="bolotopo1" src="imgs/bolorapha4.jpg" alt="Imagem de boas-vindas">
    <div class="texto-ao-lado">
      <h1>Bem-vindo à<br> Doce Appetit</h1>
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
      <img src="imgs/bolog.jpg" title="Bolo">
      <p style = "font-size: 26px; margin-bottom: 100px; font-weight: 600;"> Bolos Personalizados</p>
    </span>

    <!-- Produto 2 -->
    <span class="prod">
      <img src="imgs/brigadeiros1.jpg" title="brigadeiros">
      <p style="font-size: 26px; font-weight: 600;"> Doces Gourmet</p>
    </span>

    <!-- Produto 3 -->
    <span class="prod">
      <img src="imgs/ovos.jpg" title="ovos">
      <p style="font-size: 26px; font-weight: 600;"> Produtos<br> Sazonais...</p>
    </span>
  </div>
</body>
</div>