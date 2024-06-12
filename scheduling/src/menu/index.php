<?php
ini_set("display_errors", false);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="../css/style.css">
  
  <style>
    .modal {
    width: 300px;
    position: fixed;
  }
  .modal-content {
    width: 300px;
  }
  .list-group-item:hover {
    background-color: rgba(59, 57, 57, 0.164) !important;
  }
  </style>

<body style="background-color: #b06e7f">
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link"  href="../home/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../agendamentos/index.php">Agendamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../services/index.php">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="../login/logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
