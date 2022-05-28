<?php

    include "database.php";

    $sql = "SELECT * "

?>

<!-- 
    $modelo = $_POST["modelo"];
    $cor = $_POST["cor"]
    $tipo = $_POST["tipo"];
    $placa = $_POST["placa"];
    $quilometragem = $_POST["quilometragem"]
    $renavam = $_POST["renavam"]
-->

<table border="2">
    <thead> <!-- Cabeçalho da tabela -->
        <tr>
            <th>Modelo: </th> <!-- Índice da tabela -->
            <th>Placa: </th> <!-- Índice da tabela -->
            <th>Renavam: </th> <!-- Índice da tabela -->
            <th>Ano: </th> <!-- Índice da tabela -->
            <th>Quilometragem: </th> <!-- Índice da tabela -->
            <th>Preco: </th> <!-- Representa uma linha na tabela -->
            
        </tr>
    </thead>
    <tbody> <!-- Corpo da tabela -->
        <tr> <!-- Representa uma linha na tabela -->
            <td>João Pedro da Silva</td>
            <td>jp@gmail.com.br</td>
            <td>(11)4733-7535</td>
        </tr>
    </tbody>
</table>

