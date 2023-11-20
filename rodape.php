<footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><b>Localização</b></span>
                <p>Rua Hercílio Alves de Souza, Bancários, João Pessoa - Paraíba <br> 58051-290</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>E-mail: doceappetit1@gmail.com</p>
                <p>WhatsApp: +55 83 99682-8116</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>Links</b></span>
                <p><a class="rodape-links" href="?pg=catalogos">Catálogos</a></p>
                <p><a class="rodape-links" href="?pg=conteudo">Empresa</a></p>
                <p><a class="rodape-links" href="?pg=fazermeupedido">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Para mais informações, entrar em contato pelo número do WhatsApp
                <p><a href="?pg=catalogos">Informações sobre pedidos</a></p>  
                </p>
            </div>
        </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Doce Appetit</p>
</footer>

<style>

body{
    margin: 0;
    padding: 0;
}
  /*estilos do rodapé*/
.rodape{ 
    background-color: rgb(95, 25, 25);
    color: white;
    height: auto;
    width: 100%;
    font-size: 16px;
    font-family: arial, sans-serif;
}
/*estilos dos links do rodapé*/
.rodape a{
    text-decoration: none;
    color: white;
    border-radius: 0; /* Remova as bordas arredondadas nos links do rodapé */
    padding: 0; /* Remova o preenchimento nos links do rodapé */
    display: inline-block; /* Certificar-se de que os links ocupem apenas o espaço necessário */
    font-family: arial, sans-serif;
}
.rodape a:hover {
    text-decoration: underline; /* Adiciona sublinhado ao passar o mouse sobre o link */
    background-color: transparent; /* Mantenha o fundo transparente ao passar o mouse */
}

/*estilo para parágrafos dentro do rodapé*/
.rodape p{
    margin-bottom: 5px;
}

/*estilos para cada divisão do rodapé*/
.rodape-div{
    display: flex; /* Exibição em linha dos elementos das colunas */
    flex-wrap: wrap;
    width: 100%;
    margin: auto; /* Centralizar a div */
    align-items: stretch; /* Esticar os itens para preencher a altura */
    padding: 40px 10px 10px 0px; /* Preenchimento: topo, direita, inferior, esquerda, respectivamente */
}

/*estilos para as colunas do rodapé*/
.rodape-div-1, .rodape-div-2, .rodape-div-3, .rodape-div-4{
    display: flex;
    width: calc(100% / 4 - 20px); /*lasrgura de cada coluna com espaçamento entre elas*/
    padding: 10px;
}

/*estilo para os títulos do rodapé*/
.rodape span{
    font-size: 20px;
    color: white;
}

/*estilos para a parte de "Copyright" no rodapé (parte inferior)*/
.rodape-direitos{
    width: calc(100% - 20px); /*largura total com espaçamento*/
    background-color: #4b0f0f;
    padding: 10px;
    margin: 0px;
    text-align: center;
}
</style>