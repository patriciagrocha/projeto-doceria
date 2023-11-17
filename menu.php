<div>
  <head>
    <style>
      .menu {
        /* Tudo do menu, configuração geral */
        height: 50px; /* Altura do topo */
        width: 100%;
        list-style-type: none; /* Remover contador de números da lista */
        margin-top: 0; /* Espaço entre limite de cima e o topo */
        padding: 10; /* Altura do topo */
        overflow: hidden;
        background-color: #601616;
        display: flex; /* Adiciona display flex para centralizar os itens */
        justify-content: center; /* Centraliza os itens horizontalmente */
        align-items: center; /* Centraliza os itens verticalmente */
      }

      li {
        /* Itens da lista (opções do menu) */
        text-align: center;
      }

      li a {
        /* Links dentro dos itens da lista */
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        margin: center;
      }

      li a:hover {
        background-color: #111;
      }
      
      .inicio {
        background-color: #420606;
        
      }

      /* Conteúdos dos links do menu */
      #sobre {
        background-color: #420606;
      }

      #catalogo {
        background-color: #420606;
      }

      #avaliacoes {
        background-color: #420606;
       
      }
      /* Fim dos conteúdos dos links do menu */
    </style>
  </head>
  <div id="menu">
    <ul class="menu">
      <li><a class="inicio" href="index.php">Inicio</a></li>
      <li id="catalogo"><a href="?pg=catalogos">Catálogo</a></li>
      <li id="sobre"><a href="?pg=sobre">Sobre mim</a></li>
      <li id="avaliacoes"><a href="?pg=avaliacoes">Fale conosco</a></li>
    </ul>
  </div>
</div>