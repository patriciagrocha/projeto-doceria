<!DOCTYPE html>
<html>
<head>
    <title style= "color:rgb(96, 25, 25);">Deixe aqui a sua Avaliação:</title>
    <style>
        /* Estilos para o formulário */
        .body {
            font-family: "Roboto";
            text-align: center;
            color: rgb(96, 25, 30);
        }

        .label {
            font-weight: bold;
            font-family: "Roboto";
            font-size:20px;
        }

        .select, input[type="text"], input[type="tel"], textarea {
            width: 1500px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 1px;
        }

        .select {
            height: 40px;
        }

        .textarea {
            resize: vertical;
            height: 70px;
        }

        .input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="label">
        <div class="body"><h1>Deixe aqui a sua Avaliação:</h1></div>
        <form action="sucesso.php" method="post">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="contato">Número de Contato:</label>
            <input type="tel" id="contato" name="contato" required>

            <label for="indicacao">Você indicaria nossos serviçoes para um amigo?</label><br>
            <input type="radio" id="sim" name="indicacao" value="sim" required>
            <label for="bolo">Sim, com certeza!</label>
            <input type="radio" id="nao" name="indicacao" value="nao" required>
            <label for="doces">Acho que não, ainda dá pra melhorar.</label><br><br>


            <label for="detalhes">Por favor, nos conte o que achou do nosso atendimento e no que podemos melhorar:</label>
            <textarea id="detalhes" name="detalhes"></textarea>

            <input type="submit" value="Enviar Pedido" style= "background-color:rgb(96, 25, 25); color:white; margin-left:10px">
        </form>
    </div>
</body>
</html>