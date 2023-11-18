<?php

$host = "localhost";
$db_user ="root";
$db_pass = "";
$db_name = "projetodoceria";

//Conexão com o banco de dados
$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);

//O comando só sera disparado se for enviado o formulário através do post acessar e as variaveis não estejam vazias//
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
            header ("location: index.php");
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
function inserirUsuarios($connect){
    if ((isset($_POST['cadastrar']) AND !empty($_POST['email'])AND !empty
    ($_POST['senha']))){
        $erros = array(); //validação
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($connect, $_POST['nome']); //Função retira caracteres especiais de strings)
        $senha = sha1 ($_POST['senha']);
        $cpf = $_POST['cpf'];

        // Verifica se o CPF contém apenas números e possui 11 dígitos
        if (!ctype_digit($cpf) || strlen($cpf) !== 11) {
            $erros[] = "CPF inválido! Digite apenas números.";
        }

        if ($_POST['senha']!= $_POST['repetesenha']){
            $erros[] = "Senhas não conferem!";   
        }
        $queryEmail = "SELECT email FROM usuarios WHERE email = '$email'";
        $buscaEmail = mysqli_query($connect, $queryEmail);
        $verifica = mysqli_num_rows ($buscaEmail); //traz o número de linhas que a variavel encontrou//
        if (!empty($verifica)){
            $erros []= "E-mail já cadastrado!";}


        $queryCpf = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";
        $buscaCpf = mysqli_query($connect, $queryCpf);
        $verificaCpf = mysqli_num_rows ($buscaCpf);

        if (!empty($verificaCpf)){
            $erros []= "CPF já cadastrado!";
        }
        
        if (empty($nome) || empty($cpf) || empty($email) || empty($_POST['senha']) || empty($_POST['repetesenha'])) {
            $erros[] = "Todos os campos são obrigatórios.";
        }

        if (empty($erros)){
            //Inserir o usuário no BD
            $query = "INSERT INTO usuarios (nome, email, cpf, senha, data_cadastro) VALUES ('$nome', '$email', '$cpf', '$senha', CURRENT_TIMESTAMP)";
            $executar = mysqli_query($connect, $query);

            if ($executar){
                echo "Usuário Inserido com Sucesso!";
            } else { 
                echo "Erro ao inserir Usuário: " . mysqli_error($connect);
            }
        } else {
            foreach($erros as $erro){
                echo "<p>$erro</p>";
            }
        }
    }
}

//Deletar algum dado 
function deletar ($connect, $tabela, $id){
    if (!empty($id)) {
    $query = "DELETE FROM $tabela WHERE id =".(int)$id;
    $execute = mysqli_query($connect, $query);
    if ($execute){
        echo "Dado deletado com sucesso!";
}else{
        echo "Erro ao deletar!";
     }  
   }
}