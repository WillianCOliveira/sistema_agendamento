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
    <title>Cadastro de Agendamento</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dcdcdc; /* Cor de fundo cinza */
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
        <div class="title">Cadastro de Agendamento</div>
        <form action="data.php" method="post">
            <div class="form-group">
                <label for="servico">Serviço</label>
                <select class="form-control" id="servico" name="servico">
                    <option value=""></option>
                <?php
                    $select = "SELECT id_servico, nome_servico FROM tb_servico" ;
                    $result = mysqli_query($_SESSION['con'], $select);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['id_servico'].'" >'.$row['nome_servico'].'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Agendar</button>
        </form>
    </div>

    <script>

        // Obtém a data atual
        const today = new Date();
        
        // Formata a data atual como YYYY-MM-DD
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0'); // Mês começa do 0
        const dd = String(today.getDate()).padStart(2, '0');
        const formattedToday = `${yyyy}-${mm}-${dd}`;

        // Define a data mínima como a data atual
        document.getElementById('data').setAttribute('min', formattedToday);

        // Define a data máxima como um ano a partir da data atual
        const nextYear = new Date(today);
        nextYear.setFullYear(today.getFullYear() + 1);
        const yyyyNext = nextYear.getFullYear();
        const mmNext = String(nextYear.getMonth() + 1).padStart(2, '0');
        const ddNext = String(nextYear.getDate()).padStart(2, '0');
        const formattedNextYear = `${yyyyNext}-${mmNext}-${ddNext}`;

        document.getElementById('data').setAttribute('max', formattedNextYear);

    </script>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
