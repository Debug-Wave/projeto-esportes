<?php
include_once('protect.php');
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
        <title>Administração</title>
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
                    <button><a href="#">Administração</a></button>
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
                    <button><a href="#">Administração</a></button>
                </div> <!-- Fim div nav-button -->
            </div> <!-- Fim div mobile-menu -->
        </header> <!-- Fim header -->

        <main id="admin-main">
            <div id="admin-content">
                <h1>Administração</h1>

                <h2>Cadastrar time</h2>
                <form action="cadtime.php" method="post">
                    <input type="text" name="nometime" id="nometime" placeholder="Nome do Time">
                    <input type="submit" value="Cadastrar" class="inputenviar">
                </form>

                <h2>Cadastrar participante</h2>
                <form action="cadpart.php" method="post">
                    <input type="text" name="nomepart" id="nomepart" placeholder="Nome do Participante">
                    <input type="text" name="sala" id="sala" placeholder="Sala do participante">
                    <select name="torneio" id="torneio">
                        <option selected value="nulo">Torneio</option>
                        <option value="interclasse">Interclasse</option>
                        <option value="jeesp">JEESP</option>
                        <option value="e-sports">E-sports</option>
                    </select>
                    <select name="time" id="time">
                        <option selected value="nulo">Time</option>
                        <?php
                            listarTimeForm();
                        ?>
                    </select>
                    <select name="modaljesp" id="modaljesp">
                        <option selected value="nulo">Modalidade (caso seja JEESP)</option>
                        <option value="futsal">Futsal</option>
                        <option value="atletismo">Atletismo</option>
                        <option value="volei">Vôlei</option>
                        <option value="xadrez">Xadrez</option>
                        <option value="dama">Dama</option>
                        <option value="pingpong">Tênis de Mesa</option>
                    </select>
                    <select name="foco" id="foco">
                        <option selected value="nulo">Caso não seja JEESP, é...</option>
                        <option value="futsal">Futsal</option>
                        <option value="volei">Vôlei</option>
                        <option value="lol">League of Legends</option>
                        <option value="valorant">Valorant</option>
                        <option value="fifa">FIFA</option>
                        <option value="csgo">CSGO</option>
                    </select>
                    <input type="submit" value="Cadastrar" class="inputenviar">
                </form>

                <h2>Cadastrar Partida</h2>
                <form action="cadpartida.php" method="post">
                    <select name="torneio" id="torneio">
                        <option selected value="nulo">Torneio</option>
                        <option value="interclasse">Interclasse</option>
                        <option value="jeesp">JEESP</option>
                        <option value="e-sports">E-sports</option>
                    </select>
                    <select name="modaljesp" id="modaljesp">
                        <option selected value="nulo">Modalidade (caso seja JEESP)</option>
                        <option value="futsal">Futsal</option>
                        <option value="atletismo">Atletismo</option>
                        <option value="volei">Vôlei</option>
                        <option value="xadrez">Xadrez</option>
                        <option value="dama">Dama</option>
                        <option value="pingpong">Tênis de Mesa</option>
                    </select>
                    <select name="foco" id="foco">
                        <option selected value="nulo">Caso não seja JEESP, é...</option>
                        <option value="futsal">Futsal</option>
                        <option value="volei">Vôlei</option>
                        <option value="lol">League of Legends</option>
                        <option value="valorant">Valorant</option>
                        <option value="fifa">FIFA</option>
                        <option value="csgo">CSGO</option>
                    </select>
                    <select name="time1" id="time1">
                        <option selected value="nulo">Time 1</option>
                        <?php
                            listarTimeForm();
                        ?>
                    </select>
                    <input type="text" name="time2" id="time2" placeholder="Time 2">
                    <input type="date" name="data" id="data">
                    <input type="time" name="hora" id="hora">
                    <input type="text" name="local" id="local" placeholder="Local">
                    <input type="submit" value="Cadastrar" class="inputenviar">
                </form>

                <h2>Registrar premiação</h2>
                <form action="cadprem.php" method="post">
                    <input type="text" name="nomepart" id="nomepart" placeholder="Nome do Participante">
                    <input type="text" name="premio" id="premio" placeholder="Título do Prêmio">
                    <select name="modalidade" id="modalidade">
                        <option selected value="nulo">Modalidade</option>
                        <option value="futsal">Futsal</option>
                        <option value="atletismo">Atletismo</option>
                        <option value="volei">Vôlei</option>
                        <option value="xadrez">Xadrez</option>
                        <option value="dama">Dama</option>
                        <option value="pingpong">Tênis de Mesa</option>
                        <option value="lol">League of Legends</option>
                        <option value="valorant">Valorant</option>
                        <option value="fifa">FIFA</option>
                        <option value="csgo">CSGO</option>
                    </select>
                    <input type="submit" value="Registrar" class="inputenviar">
                </form>
                <h2><a href="logout.php">Logout</a></h2>
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