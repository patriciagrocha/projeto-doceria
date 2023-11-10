<?php

$host = "localhost";
$db_user ="root";
$db_pass = "";
$db_name = "projetodoceria";

//Conexão com o banco de dados
$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);

//O comando só sera ativado se for enviado o formulário através do post acessar e as variaveis não estejam vazias//
function login($connect){
    if (isset($_POST['acessar'])AND !empty($_POST['email'])AND !
    empty($_POST['senha'])){

        //validação do email (Quando o e-mail for preenchido, ele só formatará se o email(FORMATO) for valido.)//
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        $senha = sha1($_POST['senha']);
        //Procurar select buscando todos os dados da tabela usuario.//
        $query = "SELECT * FROM usuarios WHERE email ='$email' AND senha ='$senha'";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);

        if (!empty($return ['email'])){
            echo "Bem vindo" . $return ['nome'];
            session_start();
            $_SESSION['nome'] = $return ['nome'];
            $_SESSION['id'] = $return ['id'];
            $_SESSION['ativa'] = TRUE;
            header ("location: painel.php");
        }else{
            echo "Usuário ou senha não encontado";
        }
    }
} 
function logout (){
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
}
 //Busca no banco apenas um resultado com base no id dele//
function buscaUnica($connect, $tabela, $id){
    $query = "SELECT * FROM $tabela WHERE id =".(int) $id;
    $execute = mysqli_query ($connect, $query);
    $result = mysqli_fetch_assoc($execute);
    return $result;
}
//Busca no banco todos os resultado com base no WHERE//
function buscar($connect, $tabela, $where = 1, $order = ""){
    if (!empty($order)){
        $order = "ORDER BY $order";
    }
    $query = "SELECT * FROM $tabela WHERE $where $order";
    $execute = mysqli_query ($connect, $query);
    $results = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $results;
}
