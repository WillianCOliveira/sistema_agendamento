<?php
ini_set("display_errors",false);
include("../../../config.php");
include("../menu/index.php");

//print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body >
    <div class="container">
        <div class="title">Quadro de agendamentos</div>
        <div class="divider"></div>
        <div class="d-flex justify-content-around">
            <div class="card bg-light p-4">
                <div>Realizados</div>
                <h1>10</h1>
            </div>
            <div class="card bg-light p-4">
                <div>Aguardando</div>
                <h1>7</h1>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
