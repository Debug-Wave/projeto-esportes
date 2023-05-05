<?php
include('conexao.php');
if($_POST){
    $nometime = $_POST['nometime'];
    $sql = "INSERT INTO tb_time (id, nome) VALUES(DEFAULT,'$nometime')";
    $sql_query = $mysqli->prepare($sql);
    $sql_query->execute() or die("Falha na execução do código SQL: " . $mysqli->error);
    header('Location: admin.php');
}