<?php 
        //Inclusão de página com o conteúdo do cabeçalho
        require_once "header.php"; 
   
?>

<style>  

        div {
            background-color: #bcb4ac;
            padding: 20px;
            margin: 200px auto;
        }
        h1  {text-align: center;
            /*color:#219bff;*/
            color: #000000;
            font-size: 50px;} 
        form {text-align: center;}
        label {display: table-cell;
                font-size: 20px;}
        input {font-size: 20px;}
        footer {text-align: center;
                font-size: 20px}
        body {
                background-color: #e6dbd1
        }
        legend {
                text-align: center;
        }
</style>

        <h1>Sistema de Gerenciamento de veículos</h1>
        <!-- Início do Formulário de cadastro de alunos -->
        <fieldset>
                <legend>Formulário de Cadastro de veículos</legend><br><br>
                <form action="cadastroveiculo.php" method="post">

                        <label for="modelo"></label>
                        <input type="text" name="modelo" id="modelo" placeholder="Modelo"><br><br>

                        <label for="placa"></label>
                        <input type="text" name="placa" id="placa" placeholder="Placa"><br><br>

                        <label for="renavam"></label>
                        <input type="text" name="renavam" id="renavam" placeholder="Renavam"><br><br>

                        <label for="ano"></label>
                        <input type="text" name="ano" id="ano" placeholder="Ano"><br><br>

                        <label for="kilometragem"></label>
                        <input type="text" name="kilometragem"id="kilometragem" placeholder="Quilometragem"><br><br>

                        <label for="preco"></label>
                        <input type="text" name="preco" id="preco" placeholder="Preço"><br><br>
  
                        <input type="submit" value="CADASTRAR VEÍCULO">
                </form>
        </fieldset>
        <!-- Fim do Formulário de cadastro de alunos -->
        



<?php include "footer.php" ?>