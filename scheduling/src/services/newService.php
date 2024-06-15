<?php
ini_set("display_errors", false);
include("../../../config.php");
include("../menu/index.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviço</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://example.com/your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #800080;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #800080;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #800080;
            border-color: #800080;
            color: #fff;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #a64ca6;
            border-color: #a64ca6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Cadastro de Serviço</div>
        <form action="data.php?acao=inserir" method="POST">
            <div class="form-group">
                <label for="nomeServico">Nome do Serviço</label>
                <input type="text" class="form-control" id="nomeServico" name="titulo" placeholder="Digite o nome do serviço" required>
            </div>
            <div class="form-group">
                <label for="valorServico">Valor</label>
                <input type="number" class="form-control" id="valorServico" name="preco" placeholder="Digite o valor do serviço" data-thousands="." data-decimal="," data-prefix="R$ " required>
            </div>
            <div class="form-group">
                <label for="tempoServico">Tempo (em minutos)</label>
                <input type="time" class="form-control" id="tempoServico" name="tempo" step="600" placeholder="Digite o tempo necessário" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar Serviço</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
