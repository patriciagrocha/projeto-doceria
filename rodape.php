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
                <p><a href="?pg=catalogos">Catálogos</a></p>
                <p><a href="?pg=conteudo">Empresa</a></p>
                <p><a href="?pg=fazermeupedido">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Para mais informações, entrar em contato pelo número do WhatsApp
                <p><a href="?pg=catalogos">Informações de pedido (final da página)</a></p>  
                </p>
            </div>
        </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Doce Appetit</p>
</footer>

<style>
  /*estilos do rodapé*/
.rodape{ 
    background-color: rgb(95, 25, 25);
    color: white;
    height: auto;
    width: 100%;
    font-size: 14px;
    font-family: helvetica;
}
/*estilos dos links do rodapé*/
.rodape a{
    text-decoration: underline;
    color: white;
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
    padding: 40px 10px 10px 10px; /* Preenchimento: topo, direita, inferior, esquerda, respectivamente */
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