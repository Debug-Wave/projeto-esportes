<?php
include('conexao.php');
if($_POST){
    $torneio = $_POST['torneio'];
    $modaljesp = $_POST['modaljesp'];
    $foco = $_POST['foco'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $local = $_POST['local'];
    
    $sql = "INSERT INTO tb_partida (id, tipo, modalidade, foco, time1, time2, data, hora, local) VALUES(DEFAULT,'$torneio', '$modaljesp', '$foco', '$time1', '$time2', '$data', '$hora', '$local')";
    $sql_query = $mysqli->prepare($sql);
    $sql_query->execute() or die("Falha na execução do código SQL: " . $mysqli->error);
    header('Location: admin.php');
}