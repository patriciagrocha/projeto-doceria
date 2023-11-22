<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce Appetit - Admin</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/min.css">
</head>
<body>
    <main class="container p-5">
        <h2>Cadastrar Produto</h2>
    <form action="inserirdb.php" method="post">
<table> 
    <tr> 
        <td>Nome do Produto: </td>
        <td><input name="produto" type="text"/></td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td><textarea cols="23"  name="descricao" id="texto"></textarea></td>
    </tr>
    <tr> 
        <td>Preço: </td>
        <td><input name="preco" type="text"/></td>
    </tr>
   
    <tr>
        <td></td>
        <td><button  class="btn btn-success" name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>

    </main>
</body>
</html>
