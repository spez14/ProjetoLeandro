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
?>

