<?php

include "header.php";

        if(!empty($_GET['id_veiculo']))
        {
                include "database.php";

                $id_veiculo = $_GET['id_veiculo'];

                $sqlSelect = "SELECT * FROM ads_vitor_motors_carros WHERE id_veiculo=$id_veiculo";

                $resultado = $conexao->query($sqlSelect);

                if($resultado->num_rows > 0)
                {
                        while($user_data = mysqli_fetch_assoc($resultado))
                        {
                                $modelo = $user_data["modelo"];
                                $placa = $user_data["placa"];
                                $renavam = $user_data["renavam"];
                                $ano = $user_data["ano"];
                                $quilometragem = $user_data["quilometragem"];
                                $preco = $user_data["preco"];
                        }
                }
                else
                {
                        header('Location: painelUsuario.php');
                }
        
        }
        else
        {
                header('Location: painelUsuario.php');
        }

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
                <form action="saveAtualiza.php" method="post">

                        <label for="modelo"></label>
                        <input type="text" name="modelo" id="modelo" value="<?php echo $modelo ?>" required placeholder="Modelo"><br><br>

                        <label for="placa"></label>
                        <input type="text" name="placa" id="placa" value="<?php echo $placa ?>" required placeholder="Placa"><br><br>

                        <label for="renavam"></label>
                        <input type="text" name="renavam" id="renavam" value="<?php echo $renavam ?>" required placeholder="Renavam"><br><br>

                        <label for="ano"></label>
                        <input type="text" name="ano" id="ano" value="<?php echo $ano ?>" required placeholder="Ano"><br><br>

                        <label for="quilometragem"></label>
                        <input type="text" name="quilometragem"id="quilometragem" value="<?php echo $quilometragem ?>" required placeholder="Quilometragem"><br><br>

                        <label for="preco"></label>
                        <input type="text" name="preco" id="preco" value="<?php echo $preco ?>" required placeholder="Preço"><br><br>
  
                        <input type="hidden" name="id_veiculo" value="<?php echo $id_veiculo ?>">

                        <input type="submit" name="update" id="update" value="ALTERAR CADASTRO">
                </form>
        </fieldset>


        
<?php include "footer.php" ?>