<?php
include('conexao.php');
if($_POST){
    $nomepart = $_POST['nomepart'];
    $premio = $_POST['premio'];
    $modalidade = $_POST['modalidade'];
    $sql = "INSERT INTO tb_rank (id, nome, premiacao, modalidade, foto) VALUES(DEFAULT,'$nomepart', '$premio', '$modalidade', NULL)";
    $sql_query = $mysqli->prepare($sql);
    $sql_query->execute() or die("Falha na execução do código SQL: " . $mysqli->error);
    header('Location: admin.php');
}