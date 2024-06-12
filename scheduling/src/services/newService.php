<?php
ini_set("display_errors", false);
include("../../../config.php");
include("../menu/index.php");

?>



<head>
    <title>Cadastro de Serviço</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dcdcdc;
            /* Cor de fundo cinza */
            color: black;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #800080;
            border-color: #800080;
            color: #fff;
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
                <input type="time" class="form-control" id="tempoServico" name="tempo" placeholder="Digite o tempo necessário" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar Serviço</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>