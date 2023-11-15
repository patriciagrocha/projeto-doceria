<div>

<head>
  <style>
    body{
      /*imagem da textura do fundo*/
      background-image: url("image 3.png")
    }
    .produto{
      /*estilo das 3 imagens do final da página*/
    display: flex;
    border-top: none;
    padding-top: 0;
}

.prod{
   flex: 1;
   margin: -5px;
   text-align: center;
}

.prod img{
   max-width: 50%;
   margin: center;
}
#BotaoCatalogo{
/*botão escrito "acesse nosso catálogo"*/
  color: #480707;
  background: #DECAB9;
  margin-left: 44%;
  margin-bottom: 5px;
  text-align: center;
  border: none;
}
#bolotopo1{
  width: 100%;
  margin-top: -15px;
  margin-bottom: 200px;
  
}

.especialidade{
  color: black;
  text-align: center;
  margin-left: 41%;
  margin-top: 5px;
}
  </style>
</head>
<body>
  <img id="bolotopo1" src="imgs/hq720 1.png"><br>
  <h3 class="especialidade">Conheça nossas especialidades</h3>
  
 <div class="produto">
    <span class="prod">
        <img src="imgs/IMG-20231108-WA0016.jpg" title="Ovo de páscoa">
        <p>
        </p>
    </span>
    <span class="prod">
        <img src="imgs/IMG-20231108-WA0017.jpg" title="Bolo">
        <p>
        </p>
    </span>
    <span class="prod">
        <img src="imgs/IMG-20231108-WA0018.jpg" title="Brigadeiros">
        <p>
        </p>
    </span><br>
 </div>
  <div>
    <input id="BotaoCatalogo" type="button" value="Acesse nosso Catálogo">
  </div>
</body>

</div>