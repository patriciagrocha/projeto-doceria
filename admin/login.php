<?php require_once "function.php";
if(isset($_POST['acessar'])){
    login($connect);}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Doce Appetit - Login</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="./img/logo.png"class="logo-admin" alt="logo-doceappetit">
    <div class="login-doce">
        <h1>Login Doce Appetit</h1>
    </div>
  </section>
  <section class="container-form">
  <form action="" method = "post">
  <fieldset>
    <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="Digite o seu e-mail" required>

    <label for="password">Senha</label>
    <input type="password" name="senha" placeholder="Digite a sua senha" required>

    <input type="submit" name ="acessar" class="botao-cadastrar" value="Acessar"/>
    </fieldset>
  </form>

  </section>
</main>
</body>
</html>