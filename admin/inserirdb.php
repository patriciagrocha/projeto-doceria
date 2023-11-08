<?php

include_once("../config.inc.php");

    $titulo = $_REQUEST['nome'];
    $conteudo = $_REQUEST ['conteudo'];

    $sql = "INSERT INTO paginas (titulo, texto)
    VALUES ('$titulo', '$conteudo')";

    $inserir = mysqli_query ($conn, $sql);

    if($inserir){
        echo "Página cadastrada com sucesso";
    }else{
        echo "Erro ao cadastrar página";
    }
?>