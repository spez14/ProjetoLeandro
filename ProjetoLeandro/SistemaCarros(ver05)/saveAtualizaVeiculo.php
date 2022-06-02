<?php

    include "database.php";

    if(isset($_POST['update']))
    {
        $id_veiculo = $_POST['id_veiculo'];
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $renavam = $_POST['renavam'];
        $ano = $_POST['ano'];
        $quilometragem = $_POST['quilometragem'];
        $preco = $_POST['preco']; 

        $sqlUpdate = "UPDATE ads_vitor_motors_carros SET modelo='$modelo', placa='$placa', renavam='$renavam', ano='$ano', quilometragem='$quilometragem', preco='$preco' WHERE id_veiculo='$id_veiculo'";

        $resultado = $conexao->query($sqlUpdate); 
    }
    header('Location: painelUsuario.php');
?>