<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "projetodoceria");

      //verificar conexão
  // if($conexao){
  //   echo "Conexão com servidor estabelecida com sucesso.";
  // }else{
  //   echo "Erro ao estabelecer conexão.";
  // }
        
?>