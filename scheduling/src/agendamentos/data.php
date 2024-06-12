<?php

/*
    title: data.php
    Description: No data.php é onde vai ser feito os processos de execução projeto
    Author:  Victor Thomaz
    date: 30/05/2024
    */

include '../../../config.php';

//Declarando Objeto
$agendamento = new stdClass();

//Criando atributos do objeto
$agendamento->id_servico = $_POST['servico'];
$agendamento->data_agendamento = $_POST['data'];
$agendamento->hora_agendamento = $_POST['hora'];
$agendamento->cliente = $_SESSION['id_usuario'];


$sql =  "INSERT INTO tb_agendamento(id_usuario,id_status, data_agendamento, hora_agendamento) VALUES ('" . $agendamento->cliente . "','1','" . $agendamento->data_agendamento . "','" . $agendamento->hora_agendamento . "')";

if (mysqli_query($_SESSION['con'], $sql)) {


    $select = "SELECT id_agendamento FROM tb_agendamento where id_usuario = " . $agendamento->cliente;

    $result = $conn->query($select) or die("Falha na execução do código SQL: " . $conn->error);

    if ($result->num_rows > 0) {

        $usuario = $result->fetch_assoc();

        $agendamento->id_agendamento = $usuario['id_agendamento'];

        $selectServico = "SELECT valor_servico FROM tb_servico where id_servico = " . $agendamento->id_servico;

        $resultServico = $conn->query($selectServico) or die("Falha na execução do código SQL: " . $conn->error);

        $servico = $resultServico->fetch_assoc();

        $agendamento->valor = $servico['valor_servico'];

        $insertAgendamentoServico =  "INSERT INTO tb_agendamento_servico(id_agendamento, id_servico, valor_total) VALUES (" . $agendamento->id_agendamento . ", " . $agendamento->id_servico . ",'" . $agendamento->valor . "')";

        if (mysqli_query($_SESSION['con'], $insertAgendamentoServico)) {
?>
            <script type="text/javascript">
                alert("Agendamento cadastrado com sucesso!");
                window.location.href = "newAgendamento.php";
            </script>
    <?php
        }else{
            echo "Erro: " . $insertAgendamentoServico . "<br>" . mysqli_error($conn);
        }
    }

} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

?>