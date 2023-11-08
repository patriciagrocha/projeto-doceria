<?php
    //CONEXÃO PADRÃO - Servidor, Usuário e Senha
    $conn = mysqli_connect("localhost", "root", "unipe");

    //Selecionar o banco de dados
    $bd = mysqli_select_db($conn, "projeto1");

    /*retirar depois de testae a aplicação 
        if($conn){
            echo "Conexão com servidor realizada com sucesso.";
        }else{
            echo "Conexão com servidor deu ERRO.";
        }
    */


?>