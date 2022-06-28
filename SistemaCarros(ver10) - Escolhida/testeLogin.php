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

?>

