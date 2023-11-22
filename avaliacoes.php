<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deixe aqui a sua Avaliação</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #FCF7F7;
            color: rgb(96, 25, 30);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url("imgs/image\ 3.png");
        }

        #form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="form-container">
        <h1>Deixe aqui a sua Avaliação:</h1>
        <form action="inserirbdform.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="contato">Número de Contato:</label>
            <input type="tel" id="contato" name="contato" required>

            <label>Você indicaria nossos serviços para um amigo?</label>
            
            <label for="detalhes">Por favor, conte-nos o que achou do nosso atendimento e no que podemos melhorar:</label>
            <textarea id="detalhes" name="detalhes" required></textarea>

            <input type="submit" value="Enviar Avaliação">
        </form>
    </div>
</body>
</html>
