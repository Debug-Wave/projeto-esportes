<?php
include('listar.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../img/favicon/site.webmanifest">
        <title>JEESP - Futsal</title>
    </head>
    <body>
        <header>
            <nav class="nav-bar">
                <div class="logo">
                    <img src="../img/logo-icon-branco.png" alt="Logo" id="logo-icon">
                </div> <!-- Fim div logo -->
                <div class="nav-list">
                    <ul>
                        <li class="nav-item"><a href="../../index.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="../../calendario.php" class="nav-link">Calendário</a></li>
                        <li class="nav-item"><a href="../../torneios.html" class="nav-link">Torneios</a></li>
                        <li class="nav-item"><a href="../../ranking.php" class="nav-link">Premiações</a></li>
                    </ul>
                </div> <!-- Fim div nav-list -->
                <div class="nav-button">
                    <button><a href="admin.php">Administração</a></button>
                </div> <!-- Fim div nav-button -->
                <div class="mobile-menu-icon">
                    <button onclick="menuShow()"><img class="icon" src="../img/menu_white_36dp.svg" alt="três barrinhas"></button>
                </div> <!-- Fim div mobile-menu-icon -->
            </nav> <!-- Fim nav-bar -->

            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="../../index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../../calendario.php" class="nav-link">Calendário</a></li>
                    <li class="nav-item"><a href="../../torneios.html" class="nav-link">Torneios</a></li>
                    <li class="nav-item"><a href="../../ranking.php" class="nav-link">Premiações</a></li>
                </ul>
                <div class="nav-button">
                    <button><a href="admin.php">Administração</a></button>
                </div> <!-- Fim div nav-button -->
            </div> <!-- Fim div mobile-menu -->
        </header> <!-- Fim header -->

        <main class="sport-main">
            <div class="sport-content">
                <?php
                    listarJeespFut();
                ?>
            </div>
        </main> <!-- Fim main -->

        <footer>    
            <a href="#"><img src="../img/icons/logo-icon.png" alt="logo"></a>
            <a href="#"><img src="../img/icons/github.png" alt="logo"></a>
            <a href="#"><img src="../img/icons/instagram.png" alt="logo"></a>
        </footer>
        <script src="../js/scriptphp.js"></script>
    </body> <!-- Fim body -->
</html>