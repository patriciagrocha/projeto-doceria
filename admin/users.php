<?php session_start(); 
require_once "function.php";
include_once("../topo.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel usuarios</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/min.css">
</head>
<body>
    <?php if (isset($_SESSION['ativa'])){ ?>
       <div class="text-center">
         <h1>Painel Administrativo do site</h1>
         <h2>Gerenciador de Usuários</h2>
       </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <a class="navbar-brand" href="index.php">Painel</a>
                <a class="navbar-brand" href="users.php">Gerenciar Usuários</a>
                <a class="navbar-brand" href="logout.php">Sair</a>
            </div>
        </nav>
        <?php
        $tabela = "usuarios";
         $usuarios = buscar ($connect, $tabela)
        ?>
        <?php
        if (isset($_GET['id'])){ ?>
            <h2> Tem certeza que seja deletar o usuário <?php echo $_GET ['nome'];?></h2>
        <form action= "" method = "post">
        <input type ="hidden" name = "id" value = "<?php echo $_GET['id'] ?>">
        <input type = "submit" name ="deletar" value = "Deletar" class="btn btn-danger">   
    </form>
    <?php } ?>
<?php 
    if (isset($_POST['deletar'])){
        if ($_SESSION['id'] !=$_POST['id']){
            deletar($connect, "usuarios", $_POST ['id']); 
        }else {
            Echo "Você não pode deletar seu próprio usuário
                  Atualize a página!";
            header("Location: users.php"); 
            exit();
        }
    }
    inserirUsuarios($connect);
?>

<form action "" method = "post" class="mt-5">
<div class="card">
<div class="card-header d-flex justify-content-space between align-items-center">
        <legend class = "mx-5"> Inserir Usuários </legend> 
        <input type = "text" name = "nome" placeholder = "Nome Completo" required class = "mx-2">
        <input type = "email" name = "email" placeholder = "E-mail"required class = "mx-2">
        <input type = "text" name = "cpf" placeholder = "CPF" required class = "mx-2">
        <input type = "password" name = "senha" placeholder = "Senha" required class = "mx-2">
        <input type = "password" name = "repetesenha" placeholder = "Confirme sua senha" required class = "mx-2">
        <input type = "submit" name = "cadastrar" value = "Cadastrar" class="btn btn-success mx-2">
</div>
</div>
<div class ="container">
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col" style="width: 25px;">ID</th>
                    <th scope="col" style="width: 150px;">Nome</th>
                    <th scope="col" style="width: 15px;">E-mail</th>
                    <th scope="col" style="width: 15px;">CPF</th>
                    <th scope="col" style="width: 5px;">Data de Cadastro</th>
                    <th scope="col" style="width: 105px;"></th>
                    <th scope="col" style="width: 105px;"></th>
                 </tr>
            </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario): 
            ?>
            <tr>
                <td><?php echo $usuario ['id']; ?></td>
                <td><?php echo $usuario ['nome']; ?></td>
                <td><?php echo $usuario ['email']; ?></td>
                <td><?php echo $usuario ['cpf']; ?></td>
                <td><?php echo $usuario ['data_cadastro']; ?>
            </td>
            <td>
                <a class="btn btn-primary" href= "users.php?id=<?php echo $usuario ['id'];?>&nome=<?php echo $usuario ['nome']; ?>">Excluir</a>
            </tr>

          <?php  endforeach; ?>
    </tbody>
</table>

</div>

<?php  
//Encerramento do Bloco de Autenticação:Se a variável de sessão $_SESSION['ativa'] 
//não estiver definida (usuário não autenticado), redireciona o usuário para a página de login
} else {
header ("location:login.php");
}

?>
</body>
</html>