<?php

        if(!empty($_GET['id_veiculo']))
        {
            include_once ('database.php');

            $id_veiculo = $_GET['id_veiculo'];

            $sqlSelect = "SELECT * FROM ads_vitor_motors_carros WHERE id_veiculo='$id_veiculo'";

            $resultado = $conexao->query($sqlSelect);

            if($resultado->num_rows > 0)
            {
                $sqlDelete = "DELETE FROM ads_vitor_motors_carros WHERE id_veiculo='$id_veiculo'";
                $resultadoDelete = $conexao->query($sqlDelete);
            }
        }
        header('Location: painelUsuario.php');
        
?>