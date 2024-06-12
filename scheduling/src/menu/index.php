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

<body>
  <!-- As a heading -->
  <nav class="navbar bg-body-tertiary shadow ">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Menu</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#menu">
        <img src="../../images/menu.png" alt="buttonpng" border="0" style="width: 50px; height: 50px;">
      </button>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal" id="menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Menu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="../home/index.php">Quadro de agendamentos</a></li>
            <li class="list-group-item"><a href="../agendamentos/index.php">Agendamentos</a></li>
            <li class="list-group-item"><a href="../services/index.php">Serviços</a></li>
            <li class="list-group-item"><a href="../login/logout.php">Sair</a></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
