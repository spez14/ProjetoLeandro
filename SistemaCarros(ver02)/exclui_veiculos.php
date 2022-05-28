<?php
    include_once "database.php";

    //resgatando informações enviadas pelo forms
    $id = $_GET["id"];

    //Construir a instrução SQL
    $sql = "DELETE FROM ads_vitor_motors_carros WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
            header("Location: lista_veiculos.php");
    } else {
            echo "falha na exclusão";
    }


?>