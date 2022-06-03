<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        # Acessa o sistema
        include_once('database.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha:' . $password);

        $sql = "SELECT * FROM ads_vitor_motors_users WHERE email = '$email' AND password = '$password'";

        $result = $conexao -> query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            // print_r('Não existe');
            header('Location: tela_de_login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            // print_r('Existe');
            header('Location: painelUsuario.php');
        }
    }
    else
    {
        # Sem acesso ao sistema
        header('Location:tela_de_login.php');
    }

    /*
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

    */
?>

