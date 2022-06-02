<?php 
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: tela_de_login.php');
    }
    $logado = $_SESSION['email'];
?>

<?php 
require_once "header.php"; 

require_once "database.php";


    
    $sql = "SELECT * FROM ads_vitor_motors_carros ORDER BY id_veiculo"; //DESC
    

    $resultado = $conexao->query($sql);

    $sql_user = "SELECT * FROM ads_vitor_motors_users ORDER BY id_user"; //DESC
    

    $resultado_user = $conexao->query($sql_user);

    //print_r($resultado);
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
        h3#veiculo {text-align: center;}
        h3#usuario {text-align: center;}
        form {text-align: center;}
        label {display: table-cell;
                font-size: 20px;}
        input {font-size: 20px;}
        footer {text-align: center;
                font-size: 20px}
        body {
                background-color: #e6dbd1
        }
        a#lixeira, a#linkcadastro, a#editaregistro {
            text-decoration: none;
        }
        div {
            border-radius:15px;
        }
        .table-bg{
            background: rgba(0,0,0,0.1);
            border-radius: 15px 15px 0 0;
        }
        a#linkcadastro {
            font-size: 20px;
            color: blue;
            font-weight: bold;
            text-decoration: underline;
        }
</style>


<?php
    //require_once "database.php";
    //$name = $_POST['name'];
    //$sql = "SELECT * FROM ads_vitor_motors_users WHERE name = '$name'";
    echo "<h1>Bem vindo <u>$logado</u></h1>";
?>

    <div class = "m-5">
        <h3 id="veiculo">Veículos</h3>
        <table class="table table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Renavam</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Quilometragem</th>
                    <th scope="col">Preço</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resultado))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id_veiculo']."</td>";
                        echo "<td>".$user_data['modelo']."</td>";
                        echo "<td>".$user_data['placa']."</td>";
                        echo "<td>".$user_data['renavam']."</td>";
                        echo "<td>".$user_data['ano']."</td>";
                        echo "<td>".$user_data['quilometragem']."</td>";
                        echo "<td>".$user_data['preco']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='form_atualiza_veiculo.php? id_veiculo=$user_data[id_veiculo]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a>

                            <a class='btn btn-sm btn-danger' href='exclui_veiculo.php? id_veiculo=$user_data[id_veiculo] title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <h3>Cadastro de veículos</h3>
        <ul>
            <li><a href="formcadastroveiculo.php" id = "linkcadastro">Cadastrar veículos</a></li>
        </ul>
 <br>       
        
<?php include "footer.php" ?>




