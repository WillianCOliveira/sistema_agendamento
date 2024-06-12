<?php
/* 
        Title: index.php
        Description: Programa faz validação se usuario está logado ou não, caso não esteja logado, chamar tela login, se estiver logado chamar home page.
        Author: Victor Thomaz 
        Date: 25/05/2024
    */

session_start();

if (!isset($_SESSION['Pusuario'])) {
?>

    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html" ; charset="iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Agendamento</title>
    </head>
    <frameset rows="100%" border="0" noresize="noresize">
        <frame src="scheduling/src/login/index.php" name="principal" noresize="noresize" frameborder="no" scrolling="yes">
    </frameset>

    <body>

    </body>

    </html>

<?php
} else {
?>
    <html>

    <head>
        <title>Sistema de agendamento</title>
        <style>
            body {
                margin-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
            }


            #div-frame-menu {
                max-width: 240px;
                transition: all 0.3s;
            }

            #div-frame-menu.active {
                max-width: 33px;
                transition: all 0.3s;
            }

            #div-frame-content {
                transition: all 0.3s;
            }
        </style>
    </head>

    <body>
        <div class="d-flex w-100 h-100 align-items-stretch">
        <div id="div-frame-content" class="w-100 h-100">
                <iframe src="scheduling/src/home/index.php" id="frame-content" name="frame-content" height="100%" width="100%" frameborder="no" scrolling="no" allowfullscreen="yes"></iframe>
            </div>
        </div>
    </body>


    </html>

<?php
}


?>