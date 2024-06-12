<?php
ini_set("display_errors", false);
include("../../../config.php");
include("../menu/index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dcdcdc; /* Cor de fundo cinza */
            color: black;
            height: 100%;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Agendamentos</div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Selecionar</th>
                    <th>Serviço</th>
                    <th>Nome do Cliente</th>
                    <th>Valor Total</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="dataGrid">
                <?php

                $select = "SELECT a.id_agendamento,
                s.nome_servico,
                us.nome_usuario,
                ag.valor_total,
                a.data_agendamento,
                a.hora_agendamento,
                sts.descricao_status
                FROM tb_agendamento a 
                join tb_agendamento_servico ag on (a.id_agendamento = ag.id_agendamento)
                join tb_servico s on (s.id_servico = ag.id_servico)
                join tb_usuario us on (us.id_usuario = a.id_usuario)
                join tb_status sts on (sts.id_status = a.id_status)";

                $result = mysqli_query($_SESSION['con'], $select);

                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<td><input type="radio" name="selectedRow" value="'.$row['id_agendamento'].'">'.$row['titulo'].'</td>';
                    echo '<td>'.$row['nome_servico'].'</td>';
                    echo '<td>'.$row['nome_usuario'].'</td>';
                    echo '<td>'.$row['valor_total'].'</td>';
                    echo '<td>'.$row['data_agendamento'].'</td>';
                    echo '<td>'.$row['hora_agendamento'].'</td>';
                    echo '<td>'.$row['descricao_status'].'</td>';
                    echo '</tr>';

                }
                ?>
            </tbody>
        </table>
        <button class="btn btn-primary" onclick="newAgendamento()">Novo</button>
        <button class="btn btn-primary" onclick="getSelectedData()">Excluir</button>
    </div>
    <script>
        function getSelectedData() {
            const radios = document.getElementsByName('selectedRow');
            let selectedValue;
            for (const radio of radios) {
                if (radio.checked) {
                    selectedValue = radio.value;
                    break;
                }
            }
            if (selectedValue) {
                const row = document.querySelector(`#dataGrid tr:nth-child(${selectedValue})`);
                const title = row.cells[1].textContent;
                const value = row.cells[2].textContent;
                const time = row.cells[3].textContent;
                alert(`Título: ${title}\nValor: ${value}\nTempo: ${time}`);
            } else {
                alert('Nenhuma linha selecionada.');
            }
        }
        function newAgendamento(){

            window.location.href = 'newAgendamento.php';

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
