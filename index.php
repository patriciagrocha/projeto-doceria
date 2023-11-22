<?php
    include_once ("topo.php");
    include_once ("menu.php");

    if (empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo.php";
        include_once ("$var");
    }else{
        $pg = $_GET ['pg'];
        $var = "$pg.php";
        include_once ($var);


    }

    include_once ("rodape.php");

    ?>
