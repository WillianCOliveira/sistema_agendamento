<?php

/*
    title: data.php
    Description: No data.php é onde vai ser feito os processos de execução projeto
    Author:  Victor Thomaz
    date: 30/05/2024
    */

include '../../../config.php';

$titulo = $_POST['titulo'];

//Função remove caracteres especiais 
$titulo = formatString($titulo);

$preco = $_POST['preco'];
$tempo = $_POST['tempo'];

$select = "SELECT COUNT(*) FROM tb_servico where nome_servico = '" . $titulo . "'";
//echo '<pre>';
//echo $select;exit;

$result = mysqli_query($_SESSION['con'], $select);

$count = $result->fetch_assoc();

echo 'Count: ';
$count = $count['COUNT(*)'];

if ($count > 0) {
?>
    <script type="text/javascript">
        alert("Serviço já existe no sistema");
        window.location.href = "newService.php";
    </script>
    <?php
} else {

    $sql =  "INSERT INTO tb_servico (nome_servico, valor_servico, tempo_servico) VALUES ('" . $titulo . "','" . $preco . "','" . $tempo . "')";

    if (mysqli_query($_SESSION['con'], $sql)) {
    ?>
        <script type="text/javascript">
            alert("Cadastro efetuado com sucesso!");
            window.location.href = "newService.php";
        </script>
<?php
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>