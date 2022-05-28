<?php

    require_once "database.php";

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM ads_vitor_motors_users WHERE name = '$name' AND password = '$password'";

    if($password == '123') 
    {
        if(isset($submit))
    {
        $found = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($found) <= 0)
        {
            echo "Usuário e/ou senha incorretos.";
        } else
        {
            setcookie("name", $name);
            header("Location: painelUsuario.php");
        }
    }
    } else
    {
        echo "Usuário e/ou senha incorretos.";
        exit();
    }

     /*else {
        echo "Usuário e/ou senha incorretos.";
        exit();
    }
    */
?>

<?php require_once "header.php"; ?>

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
</style>

<h1>Bem vindo Usuário</h1>

<h3>Cadastro de veículos</h3>
        <a href="formcadastroveiculo.php">Cadastrar veículos</a>

<?php include "footer.php" ?>