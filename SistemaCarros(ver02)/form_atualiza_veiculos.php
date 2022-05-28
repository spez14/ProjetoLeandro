<?php 
        
        include_once "header.php"; 
        include_once "database.php";


        $id = $_GET["id"];

        $sql = "SELECT * FROM scv_veiculos WHERE id = $id";


        $resultado = mysqli_query
        ($conexao, $sql);

        $dados = mysqli_fetch_array($resultado);
   
?>

        <h1>Sistema de Gerenciamento de veículos</h1>
        <!-- Início do Formulário de cadastro de alunos -->
        <fieldset>
                <legend>Formulário de Cadastro de veículos</legend><br><br>
                <form action="cadastroveiculo.php" method="post">

                        <input type="hidden" name="esconde" value="<?php echo $dados['id'];?>">

                        <label for="modelo">Modelo: </label>
                        <input type="text" name="modelo" id="modelo" value="<?php echo $dados['modelo'];?>"><br><br>

                        <label for="placa">Placa: </label>
                        <input type="text" name="placa" id="placa" value="<?php echo $dados['placa'];?>"><br><br>

                        <label for="renavam">Renavam: </label>
                        <input type="text" name="renavam" id="renavam" value="<?php echo $dados['renavam'];?>"><br><br>

                        <label for="ano">Ano: </label>
                        <input type="text" name="ano" id="ano" value="<?php echo $dados['ano'];?>"><br><br>

                        <label for="kilometragem">Quilometragem:</label>
                        <input type="text" name="kilometragem"id="kilometragem" value="<?php echo $dados['kilometragem'];?>"><br><br>

                        <label for="preco">Preco:</label>
                        <input type="text" name="preco" id="preco" value="<?php echo $dados['preco'];?>"><br><br>

                        <input type="submit" value="CADASTRAR VEÍCULO">
                </form>
        </fieldset>
        <!-- Fim do Formulário de cadastro de veículos -->
        
<?php include "footer.php" ?>