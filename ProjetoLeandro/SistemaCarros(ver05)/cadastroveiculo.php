<?php
    //Incluir do arquivo de conexão com o banco de dados
    include "database.php";

    //Recuperar as informações do formulário
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $renavam = $_POST["renavam"];
    $ano = $_POST["ano"];
    $quilometragem = $_POST["quilometragem"];
    $preco = $_POST["preco"];

    //String em SQL
    $sql = "INSERT INTO ads_vitor_motors_carros (modelo, placa, renavam, ano, quilometragem, preco) 
    VALUES ('$modelo', '$placa', '$renavam', '$ano', '$quilometragem', '$preco')";

    //Realizar o cadastro no banco de dados
    if(mysqli_query($conexao,$sql))
    {
        header("Location: painelUsuario.php");
    }
    else
    {
        echo "Falha ao cadastrar veículo";
    }

?>