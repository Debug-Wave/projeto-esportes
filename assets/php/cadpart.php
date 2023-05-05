<?php
include('conexao.php');
if($_POST){
    $nomepart = $_POST['nomepart'];
    $sala = $_POST['sala'];
    $torneio = $_POST['torneio'];
    $time = $_POST['time'];
    $modaljesp = $_POST['modaljesp'];
    $foco = $_POST['foco'];
    
    $sql = "INSERT INTO tb_participante (id, nome, sala, torneio, time, modaljesp, foco) VALUES(DEFAULT,'$nomepart', '$sala', '$torneio', '$time', '$modaljesp', '$foco')";
    $sql_query = $mysqli->prepare($sql);
    $sql_query->execute() or die("Falha na execução do código SQL: " . $mysqli->error);
    header('Location: admin.php');
}