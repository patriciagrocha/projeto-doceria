<?php include "topo.php";?>
<?php include "menu.php";?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $detalhes = $_POST['detalhes'];

    if ($nome == "" || $contato == "" || $detalhes == "") {
        echo "<h3>Avaliação não enviada, preencha todos os campos!</h3><br>";
    } else {
        include "config.inc.php";

        $sql = "INSERT INTO formulario (nome, contato, detalhes) VALUES ('$nome', '$contato', '$detalhes')";

        $insert = mysqli_query($conexao, $sql);

        if (!$insert) {
            echo "Ocorreu um erro ao enviar. <a href='avaliacoes.php'>Tente Novamente</a>";
        } else {
            echo "<div class='success-message'>";
            echo "<h1>Sua avaliação foi enviada com sucesso!</h1>";
            echo "<p>Obrigado, $nome! A Doce Appetit irá analisar sua avaliação, aproveite seu momento doce.</p>";
            echo "</div>";
        }
    }
}
?>
<?php include "rodape.php";?>

<style>
.success-message{
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #F5E1E1;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}


</style>