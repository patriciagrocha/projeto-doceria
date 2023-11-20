<div>
<head>
  <style>
/* Estilos do menu */
.menu {
  height: 100px;
  list-style-type: none;
  margin-top: 0;
  overflow: hidden;
  background-color: #601616;
}

.menu li {
  float: right;
  margin-top: 25px;
  text-align: center;
}

.menu li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-right: 50px;
}

.menu li a:hover:not(.active) {
  background-color: #111;
  border-radius: 50px;
}

.menu .active {
  background-color: #601616;
}

.menu .logo {
  width: 300px;
  height: 100px;
  overflow: hidden;
  margin-top: 0;
  margin-left: 0;
}

/* Conteúdos específicos dos links do menu */
#inicio {
  background-color: #420606;
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
}

#sobre {
  background-color: #420606;
}

#catalogo {
  background-color: #420606;
}

#avaliacoes {
  background-color: #420606;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
}

  /*fim dos conteudos dos links do menu*/
  </style>
</head>
<div id="menu">
    <ul class="menu">
    <img class="logo" src="imgs/desing.png">
     <li id="avaliacoes"><a href="?pg=avaliacoes">Fale conosco</a></li>
     <li id="catalogo" ><a href="?pg=catalogos">Catálogo</a></li>
     <li id="sobre"><a href="?pg=fazermeupedido">Sobre mim</a></li>
     <li id="inicio"><a class:"active" href="index.php">Inicio</a></li>


    </ul>
</div>
</div>